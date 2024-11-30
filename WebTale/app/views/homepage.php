<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webtale - Homepage</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
            color: #333;
        }
        header {
            background: #4b5bff;
            color: white;
            text-align: center;
            padding: 30px 0;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .content {
            text-align: center;
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
            margin-top: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        nav {
            background: #fff;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #007BFF;
            font-size: 1.1em;
        }
        nav ul li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Webtale</h1>
    </header>

    <div class="content">
        <img src="http://localhost/WebTale/public/images/webtale.jpg" alt="Webtale Introduction">
        <p>
            Webtale is the perfect platform for discovering and sharing amazing stories. Whether you are a writer, a reader, or simply love great stories, Webtale connects you with a world full of creativity and imagination. Explore our library, share your own stories, and become a part of a growing community of passionate storytellers.
        </p>
        <p>
            Whether you're here to read, write, or just explore, Webtale offers endless possibilities for every type of storyteller. Join us today and begin your journey into a world where stories come to life!
        </p>
    </div>

    <nav>
        <ul>
            <li><a href="/stories">Stories</a></li>
            <li><a href="/library">Library</a></li>
            <li><a href="/community">Community</a></li>
            <li><a href="/privacy_policy">Privacy Policy</a></li>
            <li><a href="/WebTale/views/send.php">Contact Us</a></li>
            <li><a href="/terms_and_condition">Terms and Condition</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>
    </nav>

</body>
</html>

