<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2eaff;
            color: #4b0082;
            margin: 0;
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

        /* Mobile Menu Button */
        .menu-btn {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 4px;
        }

        .menu-btn span {
            width: 26px;
            height: 3px;
            background: white;
        }

        /* HIDDEN NAV */
        .mobile-nav {
            display: none;
            flex-direction: column;
            background: #6a0dad;
            width: 100%;
            padding: 10px 0;
            text-align: center;
        }

        .mobile-nav a {
            padding: 10px 0;
            color: white;
            text-decoration: none;
            display: block;
        }

        .mobile-nav a:hover {
            background-color: #500b91;
        }

        /* HERO SECTION */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px 8%;
        }

        .hero-text {
            width: 45%;
        }

        .hero-text h2 {
            font-size: 42px;
            color: #4b0082;
            margin-bottom: 15px;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 25px;
        }

        button {
            padding: 12px 25px;
            background-color: #6a0dad;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #500b91;
        }

        /* MOCKUP BOX */
        .mockup {
            width: 45%;
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 3px 12px rgba(0,0,0,0.12);
        }

        .mockup .top-bar {
            height: 20px;
            width: 80%;
            background-color: #6a0dad;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .mockup .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 12px;
        }

        .box {
            height: 60px;
            background-color: #d8c6ff;
            border-radius: 6px;
            animation: float 4s ease-in-out infinite;
        }

        .wide-box {
            grid-column: span 2;
            height: 60px;
            background-color: #bda0ff;
            border-radius: 6px;
            animation: float 4s ease-in-out infinite;
        }

        .circle {
            width: 60px;
            height: 60px;
            background-color: #6a0dad;
            border-radius: 50%;
            margin: auto;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }

        footer {
    background: #6a0dad;
    color: white;
    text-align: center;
    padding: 25px;
    margin-top: 60px;
}

.social-icons {
    margin-top: 12px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.icon {
    width: 42px;
    height: 42px;
    background: #500b91;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s;
}

.icon:hover {
    background: #3d0675;
    transform: translateY(-4px);
}

.icon svg {
    width: 22px;
    height: 22px;
    fill: white;
}


        /* RESPONSIVE */
        @media (max-width: 900px) {
            .hero {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }
            .hero-text, .mockup {
                width: 90%;
            }
            nav {
                display: none;
            }
            .menu-btn {
                display: flex;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>My Laravel Website</h1>

        <nav>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>

        <div class="menu-btn" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- MOBILE NAV -->
    <div class="mobile-nav" id="mobileNav">
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </div>

    <section class="hero">
        <div class="hero-text">
            <h2>Welcome to my Website!</h2>
            <p>Discover information about us and learn how to reach out. Explore our services and start your journey!</p>

            <button onclick="window.location.href='/about'">Get Started</button>
        </div>

        <div class="mockup">
            <div class="top-bar"></div>

            <div class="grid">
                <div class="box"></div>
                <div class="wide-box"></div>
                <div class="box"></div>
                <div class="circle"></div>
                <div class="box"></div>
                <div class="wide-box"></div>
                <div class="box"></div>
                <div class="circle"></div>
            </div>
        </div>
    </section>

    <footer>
    © 2025 My Laravel Website — All Rights Reserved

    <div class="social-icons">
        <a href="#" class="icon">
            <!-- Facebook -->
            <svg viewBox="0 0 24 24">
                <path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1
                         .9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12" />
            </svg>
        </a>

        <a href="#" class="icon">
            <!-- Twitter (X) -->
            <svg viewBox="0 0 24 24">
                <path d="M4.5 3l6.3 9.1L4.7 21h2.1l4.9-6.3L16 21h5.3l-6.5-9.4L20.8 3h-2.1
                         l-4.5 5.8L10.3 3H4.5z" />
            </svg>
        </a>

        <a href="#" class="icon">
            <!-- Instagram -->
            <svg viewBox="0 0 24 24">
                <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 5.5
                         A4.5 4.5 0 1 0 16.5 12 4.5 4.5 0 0 0 12 7.5zm6.5-.8a1.2 1.2 0 1 0-1.2-1.2
                         1.2 1.2 0 0 0 1.2 1.2z" />
            </svg>
        </a>
    </div>
</footer>


<script>
    function toggleMenu() {
        const nav = document.getElementById('mobileNav');
        nav.style.display = nav.style.display === "flex" ? "none" : "flex";
    }
</script>

</body>
</html>
