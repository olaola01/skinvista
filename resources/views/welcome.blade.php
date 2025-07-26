<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinVista Study Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #e0f7fa, #b2ebf2);
            color: #1a1a1a;
            line-height: 1.6;
        }
        .container {
            max-width: 90%;
            margin: 2rem auto;
            padding: 1.5rem;
            background: #fff;
            border-radius: 0.75rem;
            box-shadow: 0 0.25rem 1.25rem rgba(0, 0, 0, 0.15);
        }
        .header {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .header img {
            max-width: 200px;
            height: auto;
            border-radius: 50%;
        }
        h2, h3 {
            color: #1a3c5e;
        }
        h2 {
            font-size: clamp(1.5rem, 4vw, 2rem);
            margin-top: 2rem;
            border-bottom: 0.1875rem solid #0288d1;
            padding-bottom: 0.5rem;
        }
        h3 {
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            margin-top: 1.5rem;
        }
        p, li {
            font-size: clamp(1rem, 2.5vw, 1.15rem);
            margin-bottom: 0.75rem;
        }
        ul {
            list-style-type: none;
            padding-left: 1.25rem;
        }
        ul li:before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #0288d1;
            margin-right: 0.625rem;
        }
        .section {
            margin-bottom: 2.5rem;
        }
        .highlight {
            background: linear-gradient(to right, #e1f5fe, #b3e5fc);
            padding: 1.25rem;
            border-radius: 0.5rem;
            border-left: 0.375rem solid #0288d1;
            margin-bottom: 1.5rem;
        }
        .button {
            display: inline-block;
            padding: clamp(0.5rem, 2vw, 0.75rem) clamp(1rem, 3vw, 1.5rem);
            background: linear-gradient(to right, #0288d1, #0277bd);
            color: #fff;
            text-decoration: none;
            border-radius: 0.375rem;
            font-size: clamp(0.875rem, 2.5vw, 1.2rem);
            transition: transform 0.2s, box-shadow 0.2s;
            margin-right: 0.625rem;
            text-align: center;
        }
        .button:hover {
            transform: translateY(-0.125rem);
            box-shadow: 0 0.25rem 0.625rem rgba(0, 0, 0, 0.2);
        }
        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.25rem;
        }
        .feature-item {
            padding: 1.25rem;
            background: #fafafa;
            border-radius: 0.625rem;
            box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            display: flex;
            align-items: flex-start;
        }
        .feature-item:hover {
            transform: translateY(-0.3125rem);
        }
        .feature-item i {
            font-size: clamp(1.5rem, 4vw, 2rem);
            color: #0288d1;
            margin-right: 0.9375rem;
        }
        .feature-content h3 {
            margin: 0 0 0.625rem;
            font-size: clamp(1rem, 2.5vw, 1.3rem);
        }
        .feature-content p {
            margin: 0;
            font-size: clamp(0.875rem, 2vw, 1rem);
        }
        .download-steps {
            background: #fff;
            padding: 1.25rem;
            border-radius: 0.625rem;
            box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.1);
            margin-bottom: 1.25rem;
        }
        .download-steps ol {
            padding-left: 1.25rem;
        }
        .download-steps li {
            margin-bottom: 0.625rem;
        }
        .game-info {
            background: #e8f4f9;
            padding: 1.25rem;
            border-radius: 0.625rem;
            margin-top: 1.25rem;
        }
        .disclaimer {
            font-style: italic;
            color: #546e7a;
            margin-top: 1.5rem;
            padding: 0.9375rem;
            background: #eceff1;
            border-radius: 0.5rem;
        }
        .contact-info {
            text-align: center;
            margin-top: 2.5rem;
            padding-top: 1.5rem;
            border-top: 0.125rem solid #b0bec5;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            .header img {
                max-width: 150px;
            }
            .button {
                display: block;
                width: auto;
                margin-bottom: 0.625rem;
                margin-right: 0;
            }
            .feature-list {
                grid-template-columns: 1fr;
            }
            h2 {
                font-size: 1.5rem;
            }
            h3 {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                margin: 1rem auto;
                padding: 0.75rem;
            }
            .header img {
                max-width: 120px;
            }
            p, li {
                font-size: 1rem;
            }
            .highlight {
                padding: 0.75rem;
            }
            .feature-item {
                padding: 0.9375rem;
            }
            .feature-content h3 {
                font-size: 1.1rem;
            }
            .button {
                padding: clamp(0.5rem, 2vw, 0.625rem) clamp(0.75rem, 2.5vw, 1.25rem);
                font-size: clamp(0.75rem, 2vw, 1rem);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="{{ asset('public/logo.png') }}" alt="SkinVista Logo">
    </div>

    <div class="section">
        <h2>Study Overview</h2>
        <p>
            Welcome to our research study titled <strong>"Leveraging Augmented Reality and Machine Learning for Suggested Diagnosis of Common Skin Diseases in Black Africans"</strong>.
            This study is led by Olamiposi Precious Olaiya, a Master’s student at Dalhousie University, under the supervision of Prof. Rita Orji and co-investigator Dr. Gerry Chan.
        </p>
        <p>
            Our goal is to explore how augmented reality (AR) and machine learning (ML) can assist in diagnosing seven common skin conditions prevalent among Black Africans: acne, eczema, keloids, fungal infections, pseudofolliculitis barbae, ringworm, and vitiligo, using our mobile app, SkinVista. SkinVista is a skin health app designed to provide fast diagnostic suggestions for skin conditions.
        </p>
        <div class="highlight">
            <p><strong>Contact:</strong> Olamiposi Precious Olaiya, <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a></p>
            <p><strong>Co-Investigator:</strong> Dr. Gerry Chan, <a href="mailto:gerry.chan@dal.ca">gerry.chan@dal.ca</a></p>
        </div>
    </div>

    <div class="section">
        <h2>Who Can Participate?</h2>
        <p>To be eligible for this study, you must meet the following criteria:</p>
        <ul>
            <li>Be over 14 years of age (to provide independent consent).</li>
            <li>Be proficient in English (study materials and SkinVista are in English).</li>
            <li>Have access to a smartphone (Android or iOS) compatible with SkinVista.</li>
            <li>Have internet access to download the app and complete study tasks.</li>
            <li>Currently experience one or more of the following skin conditions: acne, eczema, keloids, fungal infections, pseudofolliculitis barbae, ringworm, or vitiligo.</li>
        </ul>
        <p><strong>Note:</strong> Please kindly understand that individuals without at least one of the listed skin conditions are not eligible, as the study involves analyzing affected skin areas using SkinVista.</p>
    </div>

    <div class="section">
        <h2>What Will You Do in the Study?</h2>
        <p>You will use the SkinVista app to perform the following tasks:</p>
        <ul>
            <li><strong>Capture Images:</strong> Take photos of affected skin areas for analysis (approximately 10 minutes per session).</li>
            <li><strong>Receive Suggestions:</strong> Get suggested diagnoses and recommendations from the app.</li>
            <li><strong>Save Results (Optional):</strong> Store diagnostic details for future reference.</li>
        </ul>
        <h3>Free Follow-Up Session</h3>
        <p>
            If the app identifies a skin issue, you can opt for a free consultation with a dermatologist or plastic surgeon from our team. This session provides expert advice tailored to Black skin conditions. After receiving a suggested diagnosis, look for the <strong>"Consult with Doctor"</strong> button in the app to schedule this optional session.
        </p>
        <h3>Incentives</h3>
        <p>
            All participants are entered into a draw to win one of ten $20 prizes (meaning 10 people will get the chance to win $20), regardless of whether you complete the study or withdraw early. No additional compensation or expenses are involved.
        </p>
        <p class="disclaimer">
            <strong>Disclaimer:</strong> SkinVista provides suggestive diagnoses with a confidence score, but results may not always be accurate. Always consult a qualified medical professional for an accurate diagnosis and treatment. The app is not a substitute for clinical evaluation.
        </p>
    </div>

    <div class="section">
        <h2>Study Timeline</h2>
        <ul>
            <li><strong>Pre-App Use:</strong> Complete a consent form (<a href="https://surveys.dal.ca/opinio/s?s=81242">link</a>)</li>
            <li><strong>Part 1: App Use:</strong> Use SkinVista for diagnostic and other tasks (approximately 25 minutes).</li>
            <li><strong>Part 2: Post-Study Questionnaire: (<a href="https://surveys.dal.ca/opinio/s?s=81240">link</a>)</strong> (approximately 30 minutes).</li>
            <li><strong>Part 3: Optional Interview:</strong> Participate in a brief discussion about your experience (35-40 minutes).</li>
        </ul>
        <p>Participation is voluntary, and you can withdraw at any time without penalty.</p>
        <p>
            <a href="https://surveys.dal.ca/opinio/s?s=81242" target="_blank" class="button">Complete Consent Form</a>
            <a href="https://surveys.dal.ca/opinio/s?s=81240" target="_blank" class="button">Complete SkinVista Questionnaire</a>
        </p>
    </div>

    <div class="section">
        <h2>SkinVista App Features</h2>
        <p>SkinVista is designed to be intuitive and engaging. Explore its key features below:</p>
        <div class="feature-list">
            <div class="feature-item">
                <i class="fas fa-camera"></i>
                <div class="feature-content">
                    <h3>Guided Image Capture</h3>
                    <p>Position the affected skin area within the frame, and the app guides you to capture a clear image. Our system ensures privacy by automatically validating image content.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-diagnoses"></i>
                <div class="feature-content">
                    <h3>Instant Analysis</h3>
                    <p>Receive real-time analysis of your skin condition with detailed recommendations based on the submitted image.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-history"></i>
                <div class="feature-content">
                    <h3>Health Tracking</h3>
                    <p>Keep track of your skin health by saving diagnosis results to your personal history for future reference.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-user-md"></i>
                <div class="feature-content">
                    <h3>Professional Consultation</h3>
                    <p>Connect with dermatologists for expert advice when you need it, directly through the app.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-gamepad"></i>
                <div class="feature-content">
                    <h3>Fun Game Feature</h3>
                    <p>Enjoy a built-in game to relax and engage with the app in a fun way while participating in the study.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>Privacy Policy</h2>
        <p>
            SkinVista uses your camera to capture images of affected skin areas for analysis as part of this research study. We are committed to protecting your privacy:
        </p>
        <ul>
            <li>Images are processed locally on your device where possible and only transmitted to secure servers for analysis by the research team.</li>
            <li>Personal data (e.g., photos) is anonymized and used solely for study purposes, with no sharing with third parties.</li>
            <li>Data is stored securely and will be deleted after the study concludes, in compliance with Dalhousie University’s research ethics policies.</li>
            <li>You can withdraw your data at any time by contacting the lead researcher.</li>
        </ul>
        <p>
            For more details or to review the full policy, contact Olamiposi Precious Olaiya at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a>. This policy will be updated in the app and Play Store listing once available.
        </p>
    </div>

    <div class="section">
        <h2>How to Download SkinVista</h2>
        <p>
            SkinVista is available through beta testing platforms and is not publicly released. <strong>You must receive an invitation to access the app, as login is not possible without it.</strong> To request an invitation, please provide your email address to the lead researcher, Olamiposi Precious Olaiya, at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a>. Alternatively, you can message the lead researcher on WhatsApp at <a href="https://wa.me/17828829041">+1 782-882-9041</a> with your email to receive the invitation. Once invited, follow these steps to download and install the app:
        </p>
        <div class="download-steps">
            <h3>For Android Users</h3>
            <ol>
                <li>Check your email for an invitation from the lead researcher to join the internal testing program.</li>
                <li>Click the link to access the internal testing page on <a href="https://play.google.com/apps/internaltest/4701051500321708103">Google Play</a>.</li>
                <li>Follow the prompts to become a tester and download SkinVista.</li>
                <li>Alternatively, download the app directly from the provided Google Drive link: <a href="https://drive.google.com/drive/folders/1BWOMFTfjgqYDvEUKSCeB0oJX8k1BDfzQ?usp=sharing">Google Drive Folder</a>.</li>
                <li>Use the email <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a> to log in to the app after installation.</li>
            </ol>
        </div>
    </div>

    <div class="contact-info">
        <h2>Questions?</h2>
        <p>Contact Olamiposi Precious Olaiya at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a> or via WhatsApp at <a href="https://wa.me/17828829041">+1 782-882-9041</a> for any questions about the study or to request access to the SkinVista app.</p>
    </div>
</div>
</body>
</html>
