<style>
    /* About Section */
    #about {
        height: 100%;
        background-color: #2c3e50;
        padding: 100px 0;
        color: #ecf0f1;
    }

    .section-title {
        font-size: 4rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 50px;
        color: #e74c3c;
        text-transform: uppercase;
        letter-spacing: 2px;
        animation: fadeIn 1.5s ease-out, glow 2s infinite alternate;
    }

    #about .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Profil Singkat */
    #about .content p {
        font-size: 1.3rem;
        color: #bdc3c7;
        line-height: 1.8;
        text-align: justify;
        margin-bottom: 40px;
        padding: 0 20px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
        animation: fadeInUp 2s ease-out;
    }

    /* Keahlian dan Teknologi */
    #about .skills {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }

    .skills-title {
        font-size: 2.5rem;
        color: #e74c3c;
        letter-spacing: 1.5px;
        margin-bottom: 30px;
        margin-top: 50px;
        font-weight: bold;
        text-align: left;
        position: relative;
        padding-left: 40px;
        animation: fadeInLeft 1s ease-out;
    }

    .skills-title::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 30px;
        height: 3px;
        background-color: #e74c3c;
        transform: translateY(-50%);
    }

    .feature {
        background: linear-gradient(135deg, #e74c3c, #8e44ad);
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        padding: 40px 30px;
        text-align: center;
        color: #fff;
        transition: transform 0.4s ease, box-shadow 0.4s ease, border 0.3s ease;
        animation: zoomIn 1.2s ease-out, fadeInLeft 1s ease-in-out;
        position: relative;
    }

    .feature:hover {
        transform: translateY(-15px) scale(1.05);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        filter: brightness(1.2);
    }

    .feature:hover::before {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        border: 2px solid #fff;
        border-radius: 15px;
        animation: borderAnimation 1s ease-out forwards;
    }

    .feature img {
        width: 100%;
        border-radius: 50%;
        height: auto;
        object-fit: contain;
        transition: transform 0.5s ease;
        animation: imageZoom 1.5s ease-out infinite;
    }

    .feature img:hover {
        transform: rotate(15deg) scale(1.1);
    }

    .feature .icon-wrapper {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, #8e44ad, #e74c3c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
        transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    .feature .icon-wrapper:hover {
        background: linear-gradient(135deg, #8e44ad, #e74c3c, #f39c12);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .feature .icon-wrapper::after {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid rgba(255, 255, 255, 0.3);
        animation: rotate 5s linear infinite;
    }

    .feature h5 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 15px;
        text-transform: uppercase;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
    }

    /* Timeline */
    .timeline {
        position: relative;
        padding: 20px 0;
        margin-top: 80px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        width: 3px;
        height: 100%;
        background-color: #e74c3c;
        transform: translateX(-50%);
    }

    .timeline-item {
        position: relative;
        width: 50%;
        padding: 20px;
        box-sizing: border-box;
        margin-bottom: 30px;
    }

    .timeline-item.left {
        left: 0;
    }

    .timeline-item.right {
        left: 50%;
    }

    .timeline-item .timeline-content {
        background-color: #34495e;
        color: #ecf0f1;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .timeline-item .timeline-content h4 {
        font-size: 1.8rem;
        margin-bottom: 10px;
        color: #e74c3c;
    }

    .timeline-item .timeline-content p {
        font-size: 1rem;
        line-height: 1.6;
    }

    .timeline-item .timeline-content .date {
        font-size: 1.1rem;
        font-weight: bold;
        color: #f39c12;
        margin-top: 10px;
    }

    .timeline-item.left .timeline-content {
        margin-left: 30px;
    }

    .timeline-item.right .timeline-content {
        margin-right: 30px;
    }

    /* Animasi fade-in */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animasi glow pada judul */
    @keyframes glow {
        0% {
            text-shadow: 0 0 10px #e74c3c, 0 0 20px #e74c3c, 0 0 30px #e74c3c, 0 0 40px #e74c3c;
        }
        100% {
            text-shadow: 0 0 10px #f39c12, 0 0 20px #f39c12, 0 0 30px #f39c12, 0 0 40px #f39c12;
        }
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 1200px) {
        .section-title {
            font-size: 3rem;
        }

        .skills-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 992px) {
        .section-title {
            font-size: 2.5rem;
        }

        .skills-title {
            font-size: 1.8rem;
        }

        .feature h5 {
            font-size: 1.6rem;
        }

        .timeline-item {
            width: 100%;
            padding: 10px;
        }

        .timeline-item.left,
        .timeline-item.right {
            left: 0;
            margin-bottom: 30px;
        }

        .timeline-item .timeline-content {
            padding: 15px;
        }
    }

    @media (max-width: 768px) {
        #about {
            padding: 60px 0;
        }

        .skills {
            grid-template-columns: 1fr;
        }

        .section-title {
            font-size: 2rem;
        }

        .feature {
            padding: 20px;
        }

        .feature img {
            width: 80px;
            height: 80px;
        }
    }

    @media (max-width: 576px) {
        .section-title {
            font-size: 1.8rem;
        }

        .feature {
            padding: 15px;
        }

        .feature h5 {
            font-size: 1.4rem;
        }
    }
</style>

<section id="about" class="py-5">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">About Me</h2>

        <!-- Profil Singkat -->
        <div class="content" data-aos="fade-up" data-aos-duration="1200">
            <p>Saya adalah seorang Web Developer dengan pengalaman lebih dari 5 tahun dalam membangun aplikasi web menggunakan berbagai teknologi modern. Fokus utama saya adalah memberikan solusi terbaik dan membangun aplikasi yang efektif dan efisien untuk memenuhi kebutuhan klien.</p>
        </div>

        <!-- Keahlian dan Teknologi -->
        <div class="skills">
            <div class="feature" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="icon-wrapper">
                    <img src="images/html-css.webp" alt="HTML">
                </div>
                <h5>HTML & CSS</h5>
            </div>
            <div class="feature" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                <div class="icon-wrapper">
                    <img src="images/js.webp" alt="JavaScript">
                </div>
                <h5>JavaScript</h5>
            </div>
            <div class="feature" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                <div class="icon-wrapper">
                    <img src="images/php-laravel.webp" alt="PHP">
                </div>
                <h5>PHP & Laravel</h5>
            </div>
            <div class="feature" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="800">
                <div class="icon-wrapper">
                    <img src="images/python.webp" alt="Python">
                </div>
                <h5>Python</h5>
            </div>
        </div>

        <!-- Timeline Pengalaman dan Pendidikan -->
        <h3 class="skills-title" data-aos="fade-left" data-aos-duration="1200">Experience Timeline</h3>
        <div class="timeline">
            <div class="timeline-item left">
                <div class="timeline-content" data-aos="fade-right" data-aos-duration="1200">
                    <h4>Web Developer at ABC Corp</h4>
                    <p>Developed and maintained various web applications using HTML, CSS, JavaScript, and PHP. Worked closely with clients to implement custom solutions.</p>
                    <div class="date">2020 - Present</div>
                </div>
            </div>
            <div class="timeline-item right">
                <div class="timeline-content" data-aos="fade-left" data-aos-duration="1200">
                    <h4>Freelance Web Developer</h4>
                    <p>Worked as a freelance developer for several clients, delivering high-quality websites and applications.</p>
                    <div class="date">2017 - 2020</div>
                </div>
            </div>
        </div>
    </div>
</section>
