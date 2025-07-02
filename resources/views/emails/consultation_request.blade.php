<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consultation Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            background-color: #fff;
            border-radius: 0 0 5px 5px;
        }
        .content h2 {
            color: #007bff;
        }
        .content p {
            margin: 10px 0;
        }
        .content strong {
            color: #333;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Consultation Request</h1>
    </div>
    <div class="content">
        <h2>Dear Dr. {{ $consultation->doctor->name }},</h2>
        <p>A new consultation request has been submitted for your review. Below are the details:</p>

        <h3>Diagnosis Details</h3>
        <p><strong>Condition:</strong> {{ $consultation->diagnosis->condition }}</p>
        <p><strong>Confidence:</strong> {{ number_format($consultation->diagnosis->confidence, 0) }}%</p>
        <p><strong>Submitted At:</strong> {{ $consultation->sent_at->format('d M Y') }}</p>

        <h3>Patient Notes</h3>
        <p>{{ $consultation->notes ?: 'No additional notes provided.' }}</p>

        @if ($consultation->image_authorized && $consultation->image_path)
            <p><strong>Attached Image:</strong> An image of the diagnosis is attached for your review.</p>
        @else
            <p><strong>Attached Image:</strong> No image was authorized for sharing.</p>
        @endif

        <p>Please review the details and respond to the patient at your earliest convenience.</p>
    </div>
    <div class="footer">
        <p>This is an automated message from SkinVista. Please do not reply directly to this email.</p>
    </div>
</div>
</body>
</html>
