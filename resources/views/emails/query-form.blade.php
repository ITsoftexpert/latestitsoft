<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank email Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #007bff;
        }

        .header img {
            max-width: 150px;
        }

        .content {
            margin-top: 20px;
            font-size: 16px;
            color: #333;
        }

        .footer {
            margin-top: 20px;
            padding-top: 10px;
            text-align: center;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Company Logo -->
        <div class="header">
            <img src="it-2-logo-png-transparent (3).png" alt="Company Logo">
        </div>

        <!-- Email Content -->
        <div class="content">
            <p>Hello <strong>{{ $queryData['name'] }}</strong>,</p>
            <p>Thank you for contacting us! Your query has been successfully submitted. </p>           

            <p>
                Our team is reviewing your request, and we will get back to you as soon as
                possible. In the meantime, if you have any urgent concerns,
                feel free to reach out to us directly via email or phone. We
                appreciate your patience!"
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>iTSoftExpert</strong></p>

            <p>Second Floor, 7-A, Gobind Nagar Rd, Above Jain Builders, Gobind Nagar, Ambala Cantt, Haryana 133001 (India)</p>
        </div>
    </div>
</body>

</html>

