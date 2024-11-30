<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            color: #fff; /* White text color */
            overflow: hidden;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
            padding: 2rem;
            border-radius: 15px; /* Slightly more rounded corners */
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4); /* Darker shadow */
            width: 150%;
            max-width: 450px; /* Increased width */
            backdrop-filter: blur(10px); /* Blurred background */
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: bold;
            color: #333; /* Dark gray heading */
        }

        input {
            width: 100%;
            padding: 14px; /* Increased padding */
            margin-bottom: 1rem;
            border: 2px solid #ccc; /* Border for better definition */
            border-radius: 8px; /* More rounded input */
            font-size: 16px;
            background-color: #f9f9f9; /* Light gray input background */
            color: #333; /* Darker text in input */
            transition: border-color 0.3s ease; /* Smooth border transition */
        }

        input:focus {
            outline: none;
            border-color: #007BFF; /* Blue border on focus */
            background-color: #fff; /* White when focused */
        }

        button {
            width: 50%;
            padding: 14px; /* Increased padding */
            border: none;
            border-radius: 8px; /* More rounded button */
            background-color: #007BFF; /* Blue button */
            color: #fff; /* White text */
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: block; /* Make button a block element */
            margin: 0 auto; /* Center the button */
}


        button:hover {
            background-color: #0056b3; /* Darker blue on hover */
            transform: translateY(-2px); /* Slight lift on hover */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Shadow on hover */
        }

        button:active {
            transform: translateY(0); /* Reset lift on click */
        }

        .footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 1rem;
            text-align: center;
            font-size: 14px;
            color: #333; /* Darker footer text */
        }

        a {
            color: #007BFF; /* Blue link color */
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3; /* Darker blue on hover */
        }

        @media (max-width: 480px) {
            form {
                padding: 1.5rem;
            }

            input, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="register/submit">
        <h2>Register</h2>
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Register</button>
        <div class="footer">
            <p>Already have an account? <a href="/login">Login here</a></p><br>
            <p>Need help? <a href="/email">Click here</a></p>
        </div>
    </form>
</body>
</html>
