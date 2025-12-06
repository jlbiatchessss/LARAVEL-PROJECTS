<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2eaff;
            margin: 0;
            color: #4b0082;
        }

        /* HEADER */
        header {
            background-color: #6a0dad;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            color: white;
            margin: 0;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
                nav a:hover {
            text-decoration: underline;
        }

        /* HERO */
        .hero {
            padding: 15px 8% 25px;
            text-align: left;
        }

        .hero h2 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* FEATURE CARDS */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            padding: 20px 8% 60px 8%;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
        }

        .icon {
            width: 65px;
            height: 65px;
            background: #d9c6ff;
            border-radius: 50%;
            margin: 0 auto 15px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            color: #6a0dad;
            font-weight: bold;
        }

        /* FOOTER */
        footer {
            margin-top: -25px;
            background-color: #6a0dad;
            padding: 20px;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>

<header>
    <h1>About Us</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
    </nav>
</header>

<section class="hero">
    <h2>Who We Are</h2>
    <p>We create beautiful and modern web experiences using Laravel.  
       Our mission is to inspire learning and simplify development through clean design and simplicity.</p>
</section>

<!-- FEATURE CARDS -->
<section class="features">
    
    <div class="card">
        <div class="icon">🌟</div>
        <h3>Our Mission</h3>
        <p>To build meaningful, user-friendly web applications that empower developers and learners.</p>
    </div>

    <div class="card">
        <div class="icon">🚀</div>
        <h3>Our Vision</h3>
        <p>To innovate and create tools that make web development easier, faster, and more enjoyable.</p>
    </div>

    <div class="card">
        <div class="icon">💡</div>
        <h3>Our Values</h3>
        <p>Creativity, simplicity, and continuous growth in building digital experiences.</p>
    </div>

</section>

<footer>
    © 2025 My Laravel Website — All Rights Reserved
</footer>

</body>
</html>
