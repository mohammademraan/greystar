<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Greystar</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            line-height: 1.6;
            color: #0A2245;
            background-color: #F8FAFC;
            margin: 0;
            padding: 30px 15px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 36px 30px;
            border: 1px solid rgba(10, 34, 69, 0.08);
            box-shadow: 0 4px 16px rgba(10, 34, 69, 0.04);
        }
        .logo-wrap {
            text-align: center;
            margin-bottom: 24px;
        }
        .btn-link {
            display: inline-block;
            background: #0077D4;
            color: #ffffff !important;
            padding: 12px 28px;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: 700;
            margin: 16px 0;
        }
        p {
            margin-bottom: 14px;
            font-size: 15px;
        }
        .footer-note {
            font-size: 13px;
            color: #64748B;
            border-top: 1px solid #E2E8F0;
            padding-top: 18px;
            margin-top: 24px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="logo-wrap">
            <h2 style="color: #0A2245; margin: 0; font-size: 24px; font-weight: 800; letter-spacing: -0.02em;">GREYSTAR</h2>
        </div>
        <p>Dear {{ $name }},</p>
        <p>Welcome to <strong>Greystar</strong>. Your account has been registered and verified.</p>
        <p>Access your resident &amp; partner dashboard to manage your property lots, balance, and transaction records with complete security.</p>
        <div style="text-align: center;">
            <a href="{{ url('/dashboard') }}" class="btn-link">Go to Dashboard</a>
        </div>
        <p>If you have any questions or require assistance, please feel free to connect with our Customer Concierge team via 24/7 Live Chat or email us at <a href="mailto:support@greystar.com">support@greystar.com</a>.</p>
        <div class="footer-note">
            <p style="margin: 0;">Warm regards,<br><strong>The Greystar Team</strong><br>250 Vesey Street, New York, NY</p>
        </div>
    </div>
</body>
</html>
