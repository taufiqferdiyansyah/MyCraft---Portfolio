<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyCraft')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Navbar Section */
        .navbar {
            background: linear-gradient(135deg, #000, #222);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background 0.4s ease, box-shadow 0.3s ease;
        }

        .navbar-toggler-icon {
            background-color: transparent; /* White hamburger icon */
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff;
            font-size: 2rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.2rem;
            padding: 12px 20px;
            transition: color 0.4s ease, transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c12;
            border-radius: 5px;
            transform: scale(1.1);
        }

        /* For mobile view */
        .navbar-collapse {
            background: transparent; /* No background on mobile view */
        }

        .navbar-toggler.collapsed {
            border-color: transparent;
        }

        /* Footer Section */
        footer {
            background: linear-gradient(135deg, #222, #111);
            color: white;
            padding: 50px 0;
            text-align: center;
            box-shadow: 0 -10px 20px rgba(0, 0, 0, 0.6);
            position: relative;
        }

        footer a {
            color: #ffd700;
            transition: color 0.4s ease;
            text-decoration: none;
        }

        footer a:hover {
            color: #fff;
        }

        .medsos-icons {
            margin-top: 20px;
        }

        .medsos-icons i {
            margin: 0 15px;
            font-size: 2rem;
            transition: transform 0.4s ease;
        }

        .medsos-icons i:hover {
            transform: scale(1.3);
            color: #f39c12;
        }

        /* Ensuring content is responsive */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.6rem; /* Adjust font size for small devices */
            }
            .navbar-nav .nav-link {
                font-size: 1rem;
            }
            footer {
                padding: 30px 0; /* Reduce footer padding on small screens */
            }
        }

        @media (max-width: 576px) {
            .navbar-nav .nav-link {
                font-size: 0.9rem;
            }
            footer {
                padding: 20px 0; /* Further reduce footer padding on extra small screens */
            }
        }

    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#hero">MyCraft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 MyCraft. All Rights Reserved.</p>
            <div class="medsos-icons">
                <a href="https://www.instagram.com/taufiqferdyansyah/profilecard/?igsh=MXJpeTZtODY4cWtveg==" target="_blank"><i class="bi bi-instagram" target="_blank"></i></a>
                <a href="https://www.tiktok.com/@taufiqferdiyansyah?_t=8s4PtFLZVfF&_r=1" target="_blank"><i class="bi bi-tiktok"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
