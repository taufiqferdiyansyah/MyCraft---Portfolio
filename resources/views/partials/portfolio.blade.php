<style>
    /* Portfolio Section */
    #portfolio {
        height: auto;
        background-color: #1a1a1a;
        padding: 80px 0;
        color: #fff;
        position: relative;
    }

    #portfolio .container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    .section-title {
        font-size: 4rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 50px;
        color: #f39c12;
        text-transform: uppercase;
        letter-spacing: 3px;
        animation: fadeIn 1.5s ease-out, glow 2s infinite alternate;
    }

    /* Portfolio Items */
    .portfolio-item {
        display: inline-block;
        width: 100%;
        max-width: 300px;
        margin: 20px;
        background: #333;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.6);
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        opacity: 0.8;
        animation: fadeInUp 1.5s ease-out;
    }

    .portfolio-item:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.9);
        opacity: 1;
    }

    .portfolio-item img {
        width: 100%;
        height: auto;
        object-fit: contain;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .portfolio-item img:hover {
        transform: scale(1.05);
    }

    .portfolio-item .description {
        margin-top: 20px;
        color: #ecf0f1;
        font-size: 1.2rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .portfolio-item .button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #e74c3c;
        border: none;
        color: white;
        font-size: 1.1rem;
        cursor: pointer;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .portfolio-item .button:hover {
        background-color: #f39c12;
    }

    /* Optional: Customize modal appearance */
    .modal-header {
        background-color: #333;
        color: #fff;
    }

    .modal-body {
        background-color: #1a1a1a;
        color: #ecf0f1;
    }

    .modal-footer {
        background-color: #333;
    }

    .modal-footer .btn-primary {
        background-color: #e74c3c;
    }

    .modal-footer .btn-secondary {
        background-color: #f39c12;
    }

    /* Animasi FadeIn dan Glow */
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

    @keyframes glow {
        0% {
            text-shadow: 0 0 15px #f39c12, 0 0 30px #f39c12, 0 0 45px #f39c12;
        }
        100% {
            text-shadow: 0 0 15px #e74c3c, 0 0 30px #e74c3c, 0 0 45px #e74c3c;
        }
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .portfolio-item {
            max-width: 45%;
        }
    }

    @media (max-width: 768px) {
        .portfolio-item {
            max-width: 100%;
            margin: 10px 0;
        }

        .section-title {
            font-size: 3rem;
        }
    }

    @media (max-width: 576px) {
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .portfolio-item {
            max-width: 100%;
            margin: 10px 0;
        }

        .portfolio-item .description {
            font-size: 1rem;
        }

        .portfolio-item .button {
            font-size: 1rem;
            padding: 8px 16px;
        }
    }
</style>

<section id="portfolio" class="py-5">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">My Portfolio</h2>

        @foreach ($projects as $project)
        <!-- Portfolio Item -->
        <div class="portfolio-item" data-aos="fade-up" data-aos-duration="1200">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
            <div class="description">{{ $project->title }}</div>
            <button class="button" data-bs-toggle="modal" data-bs-target="#projectModal{{ $project->id }}">View Project</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="projectModal{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel{{ $project->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="projectModalLabel{{ $project->id }}">{{ $project->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid" alt="{{ $project->title }}">
                        <p class="mt-3">{{ $project->description }}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-primary" download>Download Source Code</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
