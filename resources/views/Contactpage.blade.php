<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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


        /* Mobile menu */
        .menu-btn { display: none; cursor: pointer; flex-direction: column; gap: 4px; }
        .menu-btn span { width: 26px; height: 3px; background: white; }
        .mobile-nav {
            display: none;
            flex-direction: column;
            background: #6a0dad;
            width: 100%;
            padding: 10px 0;
            text-align: center;
        }
        .mobile-nav a { color: white; padding: 10px 0; text-decoration: none; }

        /* HERO */
        .hero {
            padding: 3px 6% 15px;
            text-align: left;
        }

        .hero h2 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        /* CONTACT CARD */
        form {
            background: white;
            text-align: center;
            width: 350px;
            margin: -15px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 3px 12px rgba(0,0,0,0.15);
            
        }
        input, textarea {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #6a0dad;
            border-radius: 6px;
        }
        button {
            width: 100%;
            background: #6a0dad;
            border: none;
            padding: 12px;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover { background: #500b91; }


        /* FOOTER */
        footer {
            margin-top: 25px;
            background-color: #6a0dad;
            padding: 20px;
            text-align: center;
            color: white;
        }

        @media (max-width: 900px) {
            nav { display: none; }
            .menu-btn { display: flex; }
            .hero { text-align: center; }
        }
    </style>
</head>

<body>

<header>
    <h1>Contact Us</h1>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
    </nav>
    <div class="menu-btn" onclick="toggleMenu()">
        <span></span><span></span><span></span>
    </div>
</header>

<div class="mobile-nav" id="mobileNav">
    <a href="/">Home</a>
    <a href="/about">About</a>
</div>

<section class="hero">
    <h2>We’d Love to Hear From You</h2>
    <p>Have questions or ideas? Send us a message and we’ll get back to you.</p>
</section>

<form>
    <h3>Send us a Message</h3>
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <textarea rows="4" placeholder="Your Message"></textarea>
    <button type="submit">Submit</button>
</form>


<footer>
    © 2025 My Laravel Website — All Rights Reserved
</footer>

<script>
function toggleMenu() {
    const nav = document.getElementById('mobileNav');
    nav.style.display = nav.style.display === "flex" ? "none" : "flex";
}
</script>

</body>
</html>
