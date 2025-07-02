<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Withdrawal Notification</title>
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
        .content p {
            margin: 10px 0;
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
        <h1>User Withdrawal Notification</h1>
    </div>
    <div class="content">
        <p>A user has withdrawn from the SkinVista study. Below are the details:</p>
        <p><strong>User Email:</strong> {{ $user->email }}</p>
        <p><strong>Withdrawal Date:</strong> {{ $user->withdrew_at->format('d M Y H:i:s') }}</p>
        <p>All related user data (diagnoses, consultations) has been deleted.</p>
    </div>
    <div class="footer">
        <p>This is an automated message from SkinVista. Please do not reply directly to this email.</p>
    </div>
</div>
</body>
</html>
