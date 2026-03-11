<!DOCTYPE html>
<html>
<head>
    <title>Password Reset OTP</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background-color: #ffffff; max-width: 600px; margin: 0 auto; padding: 40px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .header { text-align: center; margin-bottom: 30px; }
        .otp-box { background-color: #f8fafc; border: 2px dashed #4ade80; padding: 20px; text-align: center; font-size: 32px; font-weight: bold; letter-spacing: 5px; color: #15803d; border-radius: 8px; margin: 20px 0; }
        p { color: #4b5563; line-height: 1.6; font-size: 16px; }
        .footer { text-align: center; margin-top: 40px; font-size: 12px; color: #9ca3af; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="color: #111827; margin: 0;">Password Reset Request</h2>
        </div>
        <p>Hello,</p>
        <p>You recently requested to reset your password for your APSA Foods account. Use the following 6-digit OTP to verify your identity.</p>
        
        <div class="otp-box">
            {{ $otp }}
        </div>
        
        <p>This OTP is valid for the next 15 minutes. If you did not make this request, please safely ignore this email.</p>
        
        <p>Best regards,<br>The APSA Foods Team</p>
        <div class="footer">
            &copy; {{ date('Y') }} APSA Foods. All rights reserved.
        </div>
    </div>
</body>
</html>
