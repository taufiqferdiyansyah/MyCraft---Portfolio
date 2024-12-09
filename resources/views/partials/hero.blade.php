<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    /* Custom Hero Section Styles */
    body, html {
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Prevent horizontal scrolling */
    }

    #hero {
        height: 100vh; /* Use full viewport height */
        display: flex;
        align-items: center;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)), 
            url('images/hero-background.jpg') no-repeat center center/cover;
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        z-index: 1;
        text-align: left;
        margin-left: 10%;
        animation: fadeInText 2s ease-out forwards;
    }

    .hero-content h1 {
        font-size: 5rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 3px;
        line-height: 1.1;
        color: #ffffff;
        text-shadow: 0px 4px 15px rgba(0, 0, 0, 0.7);
        animation: fadeInText 2s ease-out forwards, slideInLeft 1.5s ease-out;
    }

    .hero-content p {
        font-size: 1.5rem;
        font-weight: 300;
        margin-top: 20px;
        color: #e0e0e0;
        line-height: 1.8;
        animation: fadeInUp 1.5s ease-out forwards, scaleUp 1.2s ease-out;
    }

    .hero-buttons a {
        font-size: 1.3rem;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-transform: uppercase;
        margin-top: 20px;
        transition: all 0.3s ease;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
    }

    .hero-buttons .btn-primary {
        background: linear-gradient(145deg, #ff6347, #e74c3c);
        border: none;
        box-shadow: 0px 4px 25px rgba(231, 76, 60, 0.6);
    }

    .hero-buttons .btn-primary:hover {
        background: linear-gradient(145deg, #e74c3c, #ff6347);
        box-shadow: 0px 6px 35px rgba(231, 76, 60, 0.8);
        transform: translateY(-5px);
    }

    .hero-buttons .btn-outline-light {
        border: 2px solid #ffffff;
        color: #ffffff;
        background: transparent;
        box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.4);
    }

    .hero-buttons .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-5px);
        box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.8);
    }

    /* Custom Social Icons Styles */
    .social-icons {
        display: flex;
        justify-content: left;
        gap: 20px;
        margin-top: 30px;
    }

    .social-icons .social-icon {
        font-size: 2.5rem;
        color: #ffffff;
        transition: transform 0.4s, color 0.4s, filter 0.4s;
        text-decoration: none;
    }

    .social-icons .social-icon:hover {
        transform: scale(1.4);
        color: #ff6347;
        filter: brightness(1.3);
    }

    /* Animating Lanyard */
    @keyframes lanyardAnimation {
        0% {
            top: -100px;
        }
        50% {
            top: -110px;
        }
        100% {
            top: -100px;
        }
    }

    @keyframes fadeInText {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-120%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes scaleUp {
        from {
            transform: scale(0.7);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Updated Card Lanyard Styles */
    .lanyard-card {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 400px;
        height: 500px;
        margin-top: 15%;
        margin-right: 10%;
        background: linear-gradient(145deg, #ff6347, #e74c3c);
        box-shadow: 0px 4px 25px rgba(231, 76, 60, 0.6);
        border-radius: 20px;
        padding: 30px;
        animation: lanyardAnimation 2s ease-in-out infinite, pulseEffect 2s infinite;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .lanyard-card:hover {
        transform: scale(1.1);
        box-shadow: 0px 8px 40px rgba(231, 76, 60, 0.8);
    }

    .lanyard-card img {
        border-radius: 20px;
        width: 100%;
        height: auto; 
        max-width: 220px; 
        border: 6px solid #fff;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);
        animation: fadeInUp 1s ease-out;
        transition: transform 0.3s ease;
    }

    .lanyard-card img:hover {
        transform: scale(1.1);
    }

    .lanyard-card .card-body {
        position: absolute;
        bottom: -30px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        padding: 20px 25px;
        border-radius: 20px;
        text-align: center;
        width: 100%;
    }

    .lanyard-card .card-body h5 {
        font-size: 1.7rem;
        font-weight: 700;
    }

    .lanyard-card .card-body p {
        font-size: 1.2rem;
        font-weight: 300;
    }

    /* Pulse Animation for Card */
    @keyframes pulseEffect {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.08);
        }
        100% {
            transform: scale(1);
        }
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        #hero {
            height: 100%;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            text-align: center;
        }

        .hero-content p {
            font-size: 1.1rem;
            text-align: center;
        }

        .hero-content {
            text-align: center;
            margin-left: 0;
            margin-right: 0;
        }

        .hero-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .hero-buttons .btn-primary {
            margin-left: 20px;
        }

        .lanyard-card {
            max-width: 350px;
            height: 400px;
            width: 300px;
            margin-right: 0;
            margin-top: 30%;
        }

        .lanyard-card img {
            max-width: 180px;
        }

        .social-icons {
            justify-content: center;
            gap: 15px;
        }
    }
</style>

<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column-reverse flex-md-row align-items-center justify-content-between">
        <!-- Hero Content -->
        <div class="hero-content col-md-6" data-aos="fade-right" data-aos-duration="1500">
            <h1 data-aos="zoom-in" data-aos-duration="1500">Taufiq Ferdiyansyah</h1>
            <p id="typingText" class="fst-italic" data-aos="fade-in" data-aos-duration="1200"></p>
            <p>
                Saya adalah seorang Web Developer yang berpengalaman dalam menciptakan solusi kreatif untuk kebutuhan web modern...
            </p>
            
            <!-- Social Media Icons -->
            <div class="social-icons mb-4">
                <a href="https://www.instagram.com/taufiqferdyansyah/profilecard/?igsh=MXJpeTZtODY4cWtveg==" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@taufiqferdiyansyah?_t=8s4PtFLZVfF&_r=1" class="social-icon" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>

            <!-- Hero Buttons -->
            <div class="hero-buttons mt-4">
                <a href="#contact" class="btn btn-primary me-3">Hubungi Saya</a>
                <a href="#portfolio" class="btn btn-outline-light">Lihat Portofolio</a>
            </div>
        </div>

        <!-- Lanyard Card for Image -->
        <div class="lanyard-card col-md-4" data-aos="fade-left" data-aos-duration="1500">
            <img src="images/pp.jpg" alt="Taufiq Ferdiyansyah">
            <div class="card-body">
                <h5 class="card-title">Taufiq Ferdiyansyah</h5>
                <p class="card-text">Web Developer</p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    AOS.init();

    var typedText = "Web Developer | Designer | Freelancer";
    var typingElement = document.getElementById("typingText");
    var i = 0;

    function type() {
        if (i < typedText.length) {
            typingElement.innerHTML += typedText.charAt(i);
            i++;
            setTimeout(type, 100);
        }
    }

    window.onload = type;
</script>
