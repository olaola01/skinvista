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
            max-width: 1000px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
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
            font-size: 2em;
            margin-top: 40px;
            border-bottom: 3px solid #0288d1;
            padding-bottom: 8px;
        }
        h3 {
            font-size: 1.5em;
            margin-top: 25px;
        }
        p, li {
            font-size: 1.15em;
            margin-bottom: 12px;
        }
        ul {
            list-style-type: none;
            padding-left: 20px;
        }
        ul li:before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #0288d1;
            margin-right: 10px;
        }
        .section {
            margin-bottom: 40px;
        }
        .highlight {
            background: linear-gradient(to right, #e1f5fe, #b3e5fc);
            padding: 20px;
            border-radius: 8px;
            border-left: 6px solid #0288d1;
            margin-bottom: 25px;
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            background: linear-gradient(to right, #0288d1, #0277bd);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 1.2em;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-right: 10px;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .feature-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .feature-item {
            padding: 20px;
            background: #fafafa;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            display: flex;
            align-items: flex-start;
        }
        .feature-item:hover {
            transform: translateY(-5px);
        }
        .feature-item i {
            font-size: 2em;
            color: #0288d1;
            margin-right: 15px;
        }
        .feature-content h3 {
            margin: 0 0 10px;
            font-size: 1.3em;
        }
        .feature-content p {
            margin: 0;
            font-size: 1em;
        }
        .download-steps {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .download-steps ol {
            padding-left: 20px;
        }
        .download-steps li {
            margin-bottom: 10px;
        }
        .game-info {
            background: #e8f4f9;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .disclaimer {
            font-style: italic;
            color: #546e7a;
            margin-top: 25px;
            padding: 15px;
            background: #eceff1;
            border-radius: 8px;
        }
        .contact-info {
            text-align: center;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 2px solid #b0bec5;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <!-- Placeholder for SkinVista logo (replace with actual image path or base64 data) -->
        <img src="{{ asset('public/logo.png') }}" alt="SkinVista Logo">
    </div>

    <div class="section">
        <h2>Study Overview</h2>
        <p>
            Welcome to our research study titled <strong>"Leveraging Augmented Reality and Machine Learning for Suggested Diagnosis of Common Skin Diseases in Black Africans"</strong>.
            This study is led by Olamiposi Precious Olaiya, a Master’s student at Dalhousie University, under the supervision of Prof. Rita Orji and co-investigator Dr. Gerry Chan.
        </p>
        <p>
            Our goal is to explore how augmented reality (AR) and machine learning (ML) can assist in diagnosing seven common skin conditions prevalent among Black Africans: acne, eczema, keloids, fungal infections, pseudofolliculitis barbae, ringworm, and vitiligo. Your participation will help advance dermatological care for underrepresented skin tones using our mobile app, SkinVista.
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
            <li>Be over 18 years of age (to provide independent consent).</li>
            <li>Be proficient in English (study materials and SkinVista are in English).</li>
            <li>Have access to a smartphone (Android or iOS) compatible with SkinVista.</li>
            <li>Have internet access to download the app and complete study tasks.</li>
            <li>Currently experience one or more of the following skin conditions: acne, eczema, keloids, fungal infections, pseudofolliculitis barbae, ringworm, or vitiligo.</li>
        </ul>
        <p><strong>Exclusion:</strong> Individuals without at least one of the listed skin conditions are not eligible, as the study involves analyzing affected skin areas using SkinVista.</p>
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
            <li><strong>Pre-App Use:</strong> Complete a consent form (<a href="https://surveys.dal.ca/opinio/s?s=81155">link</a>) and SkinVista questionnaire including demographics (<a href="https://surveys.dal.ca/opinio/s?s=81168">link</a>) (approximately 30 minutes).</li>
            <li><strong>Part 1: App Use:</strong> Use SkinVista for diagnostic tasks (approximately 25 minutes per session).</li>
            <li><strong>Part 2: Post-Study Questionnaire:</strong> Complete a feedback survey (15-20 minutes).</li>
            <li><strong>Part 3: Optional Interview:</strong> Participate in a brief discussion about your experience (35-40 minutes).</li>
        </ul>
        <p>Participation is voluntary, and you can withdraw at any time without penalty.</p>
        <p>
            <a href="https://surveys.dal.ca/opinio/s?s=81155" class="button">Complete Consent Form</a>
            <a href="https://surveys.dal.ca/opinio/s?s=81168" class="button">Complete SkinVista Questionnaire</a>
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
            SkinVista is available through beta testing platforms and is not publicly released. To gain access to the app, you must first contact the lead researcher, Olamiposi Precious Olaiya, at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a> to receive an invitation. Once invited, follow these steps to download and install the app:
        </p>
        <div class="download-steps">
            <h3>For iOS Users</h3>
            <ol>
                <li>Download the <a href="https://developer.apple.com/testflight/">TestFlight app</a> from the App Store.</li>
                <li>Check your email for an invitation link from the lead researcher to join the SkinVista beta test.</li>
                <li>Click the link to open TestFlight and accept the invitation.</li>
                <li>Install SkinVista through TestFlight.</li>
            </ol>
        </div>
        <div class="download-steps">
            <h3>For Android Users</h3>
            <ol>
                <li>Check your email for an invitation from the lead researcher to join the internal testing program.</li>
                <li>Click the link to access the internal testing page on <a href="https://play.google.com/console/about/internal-testing/">Google Play</a>.</li>
                <li>Follow the prompts to become a tester and download SkinVista.</li>
            </ol>
        </div>
    </div>

    <div class="contact-info">
        <h2>Questions?</h2>
        <p>Contact Olamiposi Precious Olaiya at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a> for any questions about the study or to request access to the SkinVista app.</p>
    </div>
</div>
</body>
</html>
