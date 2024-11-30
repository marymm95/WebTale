<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a1a1a, #4d4d4d); /* Gradient background */
            color: #fff; /* White text */
            overflow: hidden;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            padding: 2.5rem;
            border-radius: 15px; /* Slightly more rounded corners */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4); /* Darker shadow */
            width: 100%;
            max-width: 550px;
            backdrop-filter: blur(10px); /* Blurred background */
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            font-weight: bold;
            color: #333; /* Dark gray heading */
        }

        input, textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 1.2rem;
            border: 2px solid #ccc; /* Border for better definition */
            border-radius: 8px; /* More rounded input */
            font-size: 16px;
            background-color: #f9f9f9; /* Light gray input background */
            color: #333; /* Darker text */
            transition: border-color 0.3s ease; /* Smooth border transition */
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #007BFF; /* Blue border on focus */
            background-color: #fff; /* White when focused */
        }

        textarea {
            height: 100px;
            resize: none; /* Prevent resizing */
        }

        button {
            width: 50%; /* Center button */
            padding: 14px;
            border: none;
            border-radius: 8px; /* More rounded button */
            background-color: #007BFF; /* Blue button */
            color: #fff; /* White text */
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.4s ease, transform 0.3s ease;
            display: block; /* Make button a block element */
            margin: 0 auto; /* Center the button */
        }

        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
            transform: translateY(-5px); /* Slight lift on hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Shadow on hover */
        }

        button:active {
            transform: translateY(0); /* Reset lift on click */
        }

        .links {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 14px;
            color: #333; /* Darker link color */
        }

        .links a {
            color: #007BFF; /* Blue link color */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            margin: 0 5px;
        }

        .links a:hover {
            text-decoration: underline;
            color: #0056b3; /* Darker blue on hover */
        }

        @media (max-width: 480px) {
            form {
                padding: 1.8rem;
            }

            input, textarea, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="email" enctype="multipart/form-data">
        <h2>Send Message to Us</h2>
        <input type="text" name="sender" placeholder="Sender" required />
        <input type="email" name="email" placeholder="WebTale@gmail.com" required />
        <input type="text" name="subject" placeholder="Subject" required />
        <textarea name="message" placeholder="Compose email" required></textarea>
        <input type="file" name="attachment" required />
        <button type="submit">Send Email</button>
        <div class="links">
            <p><a href="/register">Register Page</a> | <a href="/login">Login Page</a></p>
        </div>
    </form>
</body>
</html>
