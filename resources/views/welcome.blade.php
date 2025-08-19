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
        <h2>Join Our SkinVista Study!</h2>
        <p>
            We invite you to participate in an exciting research study titled <strong>"Leveraging Augmented Reality and Machine Learning for Suggested Diagnosis of Common Skin Diseases in Black Africans"</strong>, led by Olamiposi Precious Olaiya, a Master’s student at Dalhousie University, under the supervision of Prof. Rita Orji and co-investigator Dr. Gerry Chan.
        </p>
        <p>
            Our study explores how augmented reality (AR) and machine learning (ML) can enhance skin health through our innovative mobile app, SkinVista. Whether you have a skin condition or not, your participation can help advance skin health technology for Black Africans!
        </p>
        <div class="highlight">
            <p><strong>Contact:</strong> Olamiposi Precious Olaiya, <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a></p>
            <p><strong>Co-Investigator:</strong> Dr. Gerry Chan, <a href="mailto:gerry.chan@dal.ca">gerry.chan@dal.ca</a></p>
        </div>
    </div>

    <div class="section">
        <h2>Who Can Participate?</h2>
        <p>We welcome a diverse range of participants to join our study! To be eligible, you must:</p>
        <ul>
            <li>Be over 14 years of age (to provide independent consent).</li>
            <li>Be proficient in English (study materials and SkinVista are in English).</li>
            <li>Have access to a smartphone (Android or iOS) compatible with SkinVista.</li>
            <li>Have internet access to download the app and complete study tasks.</li>
            <li><strong>Optional:</strong> Have one or more of the following skin conditions: acne, eczema, keloids, fungal infections, pseudofolliculitis barbae, ringworm, or vitiligo (for diagnostic tasks).</li>
        </ul>
        <p><strong>Good News!</strong> Even if you don’t have a skin condition, you can still participate by testing the app’s usability, exploring its features, and providing valuable feedback to improve SkinVista!</p>
    </div>

    <div class="section">
        <h2>How to Download SkinVista</h2>
        <p>
            SkinVista is available through beta testing platforms and requires an invitation to access. To get started, contact the lead researcher, Olamiposi Precious Olaiya, at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a> or via WhatsApp at <a href="https://wa.me/17828829041">+1 782-882-9041</a> with your email to receive an invitation. Follow these steps to download and install the app:
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

    <div class="section">
        <h2>What Will You Do in the Study?</h2>
        <p>Depending on your eligibility, you will engage in the following tasks using the SkinVista app:</p>
        <ul>
            <li><strong>For Participants with Skin Conditions:</strong>
                <ul>
                    <li>Capture images of affected skin areas for analysis (approximately 10 minutes per session).</li>
                    <li>Receive suggested diagnoses and recommendations from the app.</li>
                    <li>Save results for future reference (optional).</li>
                </ul>
            </li>
            <li><strong>For All Participants:</strong>
                <ul>
                    <li>Test the app’s usability and features, such as the interface and game feature.</li>
                    <li>Provide feedback through a post-study questionnaire.</li>
                </ul>
            </li>
        </ul>
        <h3>Free Consultation Opportunity</h3>
        <p>
            If you have a skin condition and the app identifies an issue, you can opt for a free consultation with a dermatologist or plastic surgeon from our team, offering expert advice tailored to Black skin. Look for the <strong>"Consult with Doctor"</strong> button in the app to schedule this optional session.
        </p>
        <h3>Incentives</h3>
        <p>
            <strong>The first 20 participants will receive an additional $10 (N10,000)</strong>
        </p>
        <p class="disclaimer">
            <strong>Disclaimer:</strong> SkinVista provides suggestive diagnoses with a confidence score, but results may not always be accurate. Always consult a qualified medical professional for an accurate diagnosis and treatment. The app is not a substitute for clinical evaluation.
        </p>
    </div>

    <div class="section">
        <h2>Study Timeline</h2>
        <ul>
            <li><strong>Pre-App Use:</strong> Complete a consent form (<a href="https://surveys.dal.ca/opinio/s?s=81242">link</a>).</li>
            <li><strong>Part 1: App Use:</strong> Use SkinVista for diagnostic tasks (if applicable) or usability testing (approximately 20-25 minutes).</li>
            <li><strong>Part 2: Post-Study Questionnaire:</strong> Provide feedback (<a href="https://surveys.dal.ca/opinio/s?s=81240">link</a>, approximately 15-20 minutes).</li>
            <li><strong>Part 3: Optional Interview:</strong> Share your experience in a brief discussion (30-35 minutes).</li>
        </ul>
        <p>Participation is voluntary, and you can withdraw at any time without penalty.</p>
        <p>
            <a href="https://surveys.dal.ca/opinio/s?s=81242" target="_blank" class="button">Complete Consent Form</a>
            <a href="https://surveys.dal.ca/opinio/s?s=81240" target="_blank" class="button">Complete SkinVista Questionnaire</a>
        </p>
    </div>

    <div class="section">
        <h2>SkinVista App Features</h2>
        <p>SkinVista is user-friendly and engaging. Explore its key features below:</p>
        <div class="feature-list">
            <div class="feature-item">
                <i class="fas fa-camera"></i>
                <div class="feature-content">
                    <h3>Guided Image Capture</h3>
                    <p>Position your skin within the frame for clear image capture, with privacy ensured through automatic content validation.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-diagnoses"></i>
                <div class="feature-content">
                    <h3>Instant Analysis</h3>
                    <p>Get real-time analysis and recommendations for skin conditions based on your images.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-history"></i>
                <div class="feature-content">
                    <h3>Health Tracking</h3>
                    <p>Save diagnosis results to track your skin health over time.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-user-md"></i>
                <div class="feature-content">
                    <h3>Professional Consultation</h3>
                    <p>Connect with dermatologists for expert advice directly through the app.</p>
                </div>
            </div>
            <div class="feature-item">
                <i class="fas fa-gamepad"></i>
                <div class="feature-content">
                    <h3>Fun Game Feature</h3>
                    <p>Enjoy a built-in game to make your experience with SkinVista engaging and fun!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>Privacy Policy</h2>
        <p>
            SkinVista uses your camera for image capture (for those with skin conditions) and ensures your privacy:
        </p>
        <ul>
            <li>Images are processed locally where possible and transmitted securely for analysis.</li>
            <li>Personal data is anonymized and used only for research, with no third-party sharing.</li>
            <li>Data is stored securely and deleted after the study, per Dalhousie University’s ethics policies.</li>
            <li>Withdraw your data at any time by contacting the lead researcher.</li>
        </ul>
        <p>
            For details, contact Olamiposi Precious Olaiya at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a>.
        </p>
    </div>

    <div class="contact-info">
        <h2>Questions?</h2>
        <p>Contact Olamiposi Precious Olaiya at <a href="mailto:ol264778@dal.ca">ol264778@dal.ca</a> or via WhatsApp at <a href="https://wa.me/17828829041">+1 782-882-9041</a> for questions or to request SkinVista access.</p>
    </div>
</div>
</body>
</html>
