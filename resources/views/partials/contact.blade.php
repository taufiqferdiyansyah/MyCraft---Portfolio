<style>
    /* Contact Section */
    #contact {
        padding-top: 80px;
        padding-bottom: 80px;
        background-color: #212529; /* Latar belakang gelap */
        color: #fff; /* Teks putih untuk kontras */
    }

    .section-title {
        font-size: 3rem;
        font-weight: 600;
        margin-bottom: 40px;
        color: #f8f9fa; /* Warna judul yang cerah */
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4); /* Efek bayangan untuk dramatis */
    }

    .contact-info {
        display: flex;
        justify-content: space-around;
        margin-bottom: 40px;
    }

    .contact-info div {
        text-align: center;
    }

    .contact-info i {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #ff5733; /* Warna ikon */
    }

    .contact-info p {
        font-size: 1.1rem;
        color: #d1d1d1;
    }

    #contact .form-label {
        font-size: 1.2rem;
        color: #d1d1d1;
        font-weight: 500;
        display: block;
        margin-bottom: 10px;
        text-align: left; /* Rata kiri */
        transition: all 0.3s ease;
    }

    #contact .form-label:hover {
        color: #ff5733; /* Warna hover dramatis */
        transform: translateY(-2px);
    }

    #contact .form-control {
        border-radius: 8px;
        padding: 15px;
        font-size: 1rem;
        border: 1px solid #495057;
        background-color: #343a40; /* Warna latar belakang form gelap */
        color: #f8f9fa; /* Teks putih di dalam input */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    #contact .form-control:focus {
        border-color: #ff5733; /* Warna fokus dramatis */
        box-shadow: 0 0 8px rgba(255, 87, 51, 0.5);
    }

    #contact textarea.form-control {
        resize: none;
    }

    #contact .btn-primary {
        background-color: #ff5733;
        border: none;
        padding: 14px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    #contact .btn-primary:hover {
        background-color: #c04e29; /* Warna hover lebih gelap */
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(255, 87, 51, 0.5);
    }

    #contact .form-group {
        margin-bottom: 25px;
    }

    .form-control::placeholder {
        color: #a1a1a1;
        font-style: italic;
    }

    .form-control:focus::placeholder {
        color: transparent;
    }

    .form-control {
        transition: transform 0.3s ease;
    }

    .form-control:focus {
        transform: translateY(-2px);
    }

    /* Responsif untuk perangkat kecil */
    @media (max-width: 768px) {
        #contact .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .section-title {
            font-size: 2.5rem;
        }

        #contact .btn-primary {
            width: 100%;
        }

        .contact-info {
            flex-direction: column;
            align-items: center;
        }

        .contact-info div {
            margin-bottom: 20px;
        }
    }
</style>

<section id="contact" class="py-5">
    <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <h2 class="section-title text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Contact Me</h2>

        <!-- Contact Information -->
        <div class="contact-info" data-aos="fade-up" data-aos-duration="1000">
            <div>
                <i class="bi bi-geo-alt"></i>
                <p>Jl. Line Pipa, Kota Lhokseumawe, Indonesia</p>
            </div>
            <div>
                <i class="bi bi-telephone"></i>
                <p>+62 815 8492 2336</p>
            </div>
            <div>
                <i class="bi bi-envelope"></i>
                <p>taufiqferdiansyah62@gmail.com</p>
            </div>
        </div>

        <div class="card shadow-lg" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-body">
                <form action="{{ route('portfolio.contact') }}" method="POST">
                    @csrf
                    <div class="mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email" required>
                    </div>
                    <div class="mb-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">
                        <label for="message" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan di sini" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
