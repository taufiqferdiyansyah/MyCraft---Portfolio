<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - MyCraft</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link untuk menambahkan ikon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Menambahkan Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: #212121;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Sidebar Styles */
        .sidebar {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)); /* Gradasi gelap untuk latar belakang */
            height: 100vh;
            padding-top: 20px;
            position: fixed; /* Set posisi menjadi fixed */
            top: 0;
            left: 0;
            width: 250px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            z-index: 1050; /* Menempatkan sidebar di atas konten utama */
        }

        .sidebar h4 {
            color: #fff;
            text-align: center;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .nav-link {
            color: #ddd;
            padding: 10px 20px;
            font-size: 16px;
            transition: background 0.3s;
        }

        .nav-link:hover {
            background: #333;
            color: #fff;
        }

        .active {
            background: #007bff;
            color: #fff;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 250px; /* Pastikan margin kiri sesuai dengan lebar sidebar */
            padding: 20px;
            margin-top: 60px; /* Menyesuaikan agar tidak tertutup navbar */
            transition: margin-left 0.3s ease;
        }

        .main-content {
            background: #2c2f38;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            min-height: calc(100vh - 60px); /* Menjamin tinggi konten cukup besar */
        }

        .card {
            background: #3c3f48;
            border: none;
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .list-group-item {
            background: #333;
            color: #ddd;
            border: none;
            border-radius: 5px;
        }

        .list-group-item:hover {
            background: #444;
            color: #fff;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #333;
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 0;
            left: 250px; /* Navbar berada di sebelah kanan sidebar */
            right: 0;
            z-index: 1000; /* Pastikan navbar berada di atas konten lain */
        }

        .navbar .navbar-brand,
        .navbar .navbar-text {
            color: #fff;
        }

        .navbar .navbar-text {
            font-size: 18px;
        }

        .navbar .profile-icon {
            color: #fff;
        }

        .navbar .profile-icon:hover {
            color: #007bff;
        }

        /* Responsiveness for small screens */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-250px); /* Hide sidebar by default */
                margin-top: 15%;
                background: linear-gradient(180deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
            }

            .sidebar.active {
                transform: translateX(0); /* Show sidebar when active */
            }

            .main-content {
                margin-left: 0; /* Full width for main content */
                padding-left: 15px;
                padding-right: 15px;
            }

            .navbar {
                left: 0; /* Navbar full width */
            }

            .navbar-toggler {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>MyCraft Admin</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ url('admin/dashboard') }}">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/portfolio') ? 'active' : '' }}" href="{{ url('admin/portfolio') }}">
                        <i class="fa fa-briefcase"></i> Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}" href="{{ url('admin/contact') }}">
                        <i class="fa fa-envelope"></i> Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/settings') ? 'active' : '' }}" href="{{ url('admin/settings') }}">
                        <i class="fa fa-cogs"></i> Settings
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-grow-1">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <span class="navbar-text">
                        @yield('page-title', 'Dashboard Admin') <!-- Default to 'Dashboard' if no title is set -->
                    </span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="#" class="profile-icon">
                        <i class="fa fa-user-circle" style="font-size: 24px;"></i>
                    </a>
                </div>
            </nav>

            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensinya -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.js"></script>

    <!-- Script untuk Toggle Sidebar -->
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>

</html>
