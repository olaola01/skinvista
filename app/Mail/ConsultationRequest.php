<?php

namespace App\Mail;

use App\Models\Consultation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ConsultationRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Consultation $consultation)
    {
        $this->consultation->load(['doctor', 'diagnosis']);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Consultation Request',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.consultation_request',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        if ($this->consultation->image_authorized && $this->consultation->image_path) {
            $attachments[] = Attachment::fromPath(Storage::disk('public')->path($this->consultation->image_path))
                ->as('diagnosis_image.jpg');
        }
        return $attachments;
    }
}
