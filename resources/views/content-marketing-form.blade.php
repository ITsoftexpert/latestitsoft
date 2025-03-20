<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Marketing CTA Form</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle, #1a1a2e, #16213e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            min-height: 100vh;
            margin: 0;
            overflow-y: auto;
            padding: 20px;
        }
        option{
            background-color: grey;
            margin-bottom: 2px;
        }

        .content-cta-container {
            width: 100%;
            max-width: 550px;
            padding: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0, 255, 255, 0.3);
            backdrop-filter: blur(20px);
            /* text-align: center; */
            position: relative;
            color: white;
            border: 2px solid rgba(0, 255, 255, 0.5);
        }

        .content-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .content-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .content-cta-input,
        .content-cta-select {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            outline: none;
            border-bottom: 2px solid #00ffff;
            transition: 0.3s;
        }

        .content-cta-button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(45deg, #00ffff, #ffcc00);
            color: white;
            font-size: 18px;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .content-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="content-cta-container">
        <div class="content-cta-heading">✍ Turn Words Into Wins!</div>
        <div class="content-cta-subtext">Content Marketing That Delivers</div>
        <p>Get Your Free Content Marketing Blueprint</p>
        <form id="content-cta-form" method="post" action="{{url('/query')}}">
            @csrf
            <div class="input-group">
                <input type="text" class="content-cta-input" name="name" id="content-name" placeholder=" " required>
                <label for="content-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="content-cta-input" name="email" id="content-email" placeholder=" " required>
                <label for="content-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="content-cta-input" id="content-phone" name="phone_number" placeholder=" " required>
                <label for="content-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="content-marketing" required>                
            </div>
            <div class="input-group">
                <input type="url" class="content-cta-input" name="web_url" id="content-website" placeholder=" ">
                <label for="content-website">Your Website (Optional)</label>
            </div>
            <div class="input-group">
                <textarea class="content-cta-input" id="content-message" name="goals" placeholder=" "></textarea>
                <label for="content-message">Your Content Goals (Optional)</label>
            </div>
            <div class="input-group">
                <select class="content-cta-select" id="content-type" name="category">
                    <option value="blog_writing">Blog Writing</option>
                    <option value="social_media_content">Social Media Content</option>
                    <option value="video_script_writing">Video Script Writing</option>
                    <option value="email_marketing_content">Email Marketing Content</option>
                    <option value="other_category">Other</option>
                </select>
            </div>
            <button type="submit" class="content-cta-button">📢 Get Your Free Blueprint</button>
        </form>
    </div>
</body>

</html>