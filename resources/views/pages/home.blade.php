@extends('layouts.app')

@section('title', 'Poliklinik - Home')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="min-vh-100 d-flex align-items-center position-relative overflow-hidden p-0 m-0" 
             style="background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4);"></div>
        
        <!-- Animated Background Elements -->
        <div class="position-absolute floating-shape-1"></div>
        <div class="position-absolute floating-shape-2"></div>
        <div class="position-absolute floating-shape-3"></div>
        
        <div class="container-fluid position-relative z-3 p-0 m-0" style="max-width:100vw;">
            <div class="row justify-content-center g-0">
                <div class="col-12">
                    <div class="text-center text-white hero-content">
                        <div class="mb-4">
                            <div class="hero-icon mx-auto mb-4">
                                <img src="{{ asset('assets/mainlogo.png') }}" alt="Logo Utama" style="height: 80px;">
                            </div>
                        </div>
                        <h1 class="display-3 fw-bold mb-4 hero-title">
                            Sistem Temu Janji<br>Pasien - Dokter
                        </h1>
                        <p class="lead mb-5 fs-4 hero-subtitle">
                            Mudah, Cepat, dan Terpercaya untuk Pelayanan Kesehatan
                        </p>
                        <a href="#login" class="btn btn-hero btn-lg px-5 py-3 rounded-pill shadow-lg">
                            <i class="bi bi-arrow-right-circle me-2"></i>Mulai Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Section -->
    <section id="login" class="py-6 login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="text-center mb-5">
                        <h2 class="display-5 fw-bold text-dark mb-3">Pilih Akses Anda</h2>
                        <p class="lead text-muted">Daftar sebagai pasien atau masuk sebagai dokter untuk memulai</p>
                    </div>
                    
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-5 col-md-6">
                            <div class="card border-0 shadow-lg h-100 card-hover">
                                <div class="card-body text-center p-5">
                                    <div class="card-icon mb-4">
                                        <div class="icon-wrapper bg-primary">
                                            <i class="bi bi-person-plus-fill"></i>
                                        </div>
                                    </div>
                                    <h4 class="card-title fw-bold mb-3">Registrasi Pasien</h4>
                                    <p class="card-text text-muted mb-4">
                                        Daftarkan diri Anda sebagai pasien baru untuk mendapatkan pelayanan kesehatan terbaik
                                    </p>
                                    <a href="{{ route('pasien.registerForm') }}" class="btn btn-primary btn-lg rounded-pill px-4 btn-action">
                                        <i class="bi bi-person-plus me-2"></i>Register Pasien
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-5 col-md-6">
                            <div class="card border-0 shadow-lg h-100 card-hover">
                                <div class="card-body text-center p-5">
                                    <div class="card-icon mb-4">
                                        <div class="icon-wrapper bg-success">
                                            <i class="bi bi-person-check-fill"></i>
                                        </div>
                                    </div>
                                    <h4 class="card-title fw-bold mb-3">Login Dokter</h4>
                                    <p class="card-text text-muted mb-4">
                                        Masuk ke sistem untuk mulai melayani dan mengelola data pasien Anda dengan baik
                                    </p>
                                    <a href="{{ route('dokter.loginForm') }}" class="btn btn-primary btn-lg rounded-pill px-4 btn-action">
                                        <i class="bi bi-box-arrow-in-right me-2"></i>Login Dokter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-6 about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="text-center mb-5">
                        <h2 class="display-5 fw-bold text-dark mb-3">Tentang Sistem Kami</h2>
                        <p class="lead text-muted">
                            Solusi digital terdepan untuk pelayanan kesehatan yang efisien dan terpercaya
                        </p>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-card text-center p-4 h-100">
                                <div class="feature-icon mb-4">
                                    <div class="icon-wrapper bg-primary">
                                        <i class="bi bi-gear-fill"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-3">Fitur Lengkap</h5>
                                <p class="text-muted">
                                    Berbagai fitur canggih untuk memudahkan manajemen pasien dan dokter secara komprehensif
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-card text-center p-4 h-100">
                                <div class="feature-icon mb-4">
                                    <div class="icon-wrapper bg-success">
                                        <i class="bi bi-speedometer2"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-3">Performa Cepat</h5>
                                <p class="text-muted">
                                    Akses instan dan proses yang efisien untuk pengalaman pengguna yang optimal
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-card text-center p-4 h-100">
                                <div class="feature-icon mb-4">
                                    <div class="icon-wrapper bg-warning">
                                        <i class="bi bi-shield-lock-fill"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-3">Keamanan Tinggi</h5>
                                <p class="text-muted">
                                    Perlindungan data maksimal dengan enkripsi dan sistem keamanan berlapis
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="feature-card text-center p-4 h-100">
                                <div class="feature-icon mb-4">
                                    <div class="icon-wrapper bg-info">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-3">Support 24/7</h5>
                                <p class="text-muted">
                                    Dukungan pelanggan profesional yang siap membantu kapan saja Anda membutuhkan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="pt-5 pb-10 testimonials-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="text-center mb-5">
                        <h2 class="display-5 fw-bold text-black mb-3">Testimoni Pengguna</h2>
                        <p class="lead text-black testimonial-subtitle">
                            Apa kata mereka tentang sistem kami
                        </p>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card rounded-4">
                                            <div class="card-body text-center p-5">
                                                <div class="testimonial-avatar mb-4">
                                                    <div class="avatar-placeholder">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold mb-3">John Wick</h5>
                                                <p class="text-muted fst-italic fs-5 mb-4">
                                                    "Sistem pendaftaran ini sangat memudahkan saya sebagai pasien. Prosesnya cepat, mudah, dan sangat user-friendly."
                                                </p>
                                                <div class="rating text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="card rounded-4">
                                            <div class="card-body text-center p-5">
                                                <div class="testimonial-avatar mb-4">
                                                    <div class="avatar-placeholder">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold mb-3">dr. Bruce Wayne</h5>
                                                <p class="text-muted fst-italic fs-5 mb-4">
                                                    "Sebagai dokter, sistem ini sangat membantu dalam mengelola pasien dengan lebih efisien dan terorganisir."
                                                </p>
                                                <div class="rating text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <div class="card rounded-4">
                                            <div class="card-body text-center p-5">
                                                <div class="testimonial-avatar mb-4">
                                                    <div class="avatar-placeholder">
                                                        <i class="bi bi-person-circle"></i>
                                                    </div>
                                                </div>
                                                <h5 class="fw-bold mb-3">Peter Parker</h5>
                                                <p class="text-muted fst-italic fs-5 mb-4">
                                                    "Interface yang intuitive dan fitur yang lengkap membuat pengalaman menggunakan aplikasi ini menjadi menyenangkan!"
                                                </p>
                                                <div class="rating text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                                    <div class="carousel-nav-btn">
                                        <i class="bi bi-chevron-left"></i>
                                    </div>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                                    <div class="carousel-nav-btn">
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- Call to Action Section -->
    <!-- <section id="cta" class="py-6 cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="text-center">
                        <h2 class="display-5 fw-bold mb-4 text-white">Siap Memulai?</h2>
                        <p class="lead mb-5 text-white cta-subtitle">
                            Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan sistem kami
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                            <a href="#login" class="btn btn-primary btn-lg rounded-pill px-5 btn-cta">
                                <i class="bi bi-person-plus me-2"></i>Daftar Sebagai Pasien
                            </a>
                            <a href="{{ route('dokter.loginForm') }}" class="btn btn-outline-light btn-lg rounded-pill px-5 btn-cta">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Login Dokter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Enhanced Custom CSS -->
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        
        .py-6 {
            padding: 5rem 0;
        }
        
        /* Container Improvements */
        .container {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        
        @media (max-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
        
        /* Hero Section */
        #hero {
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-icon {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .hero-title {
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .hero-subtitle {
            opacity: 0.95;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        }
        
        .btn-hero {
            background: linear-gradient(45deg, #fff, #f8f9fa);
            border: none;
            color: #667eea;
            font-weight: 600;
            transform: translateY(0);
            transition: all 0.4s ease;
        }
        
        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            color: #764ba2;
        }
        
        /* Floating Shapes */
        .floating-shape-1, .floating-shape-2, .floating-shape-3 {
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-shape-1 {
            top: 10%;
            left: 10%;
            width: 120px;
            height: 120px;
            animation-delay: 0s;
        }
        
        .floating-shape-2 {
            top: 60%;
            right: 15%;
            width: 80px;
            height: 80px;
            animation-delay: 2s;
        }
        
        .floating-shape-3 {
            bottom: 20%;
            left: 20%;
            width: 60px;
            height: 60px;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Login Section */
        .login-section {
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border-radius: 20px;
            overflow: hidden;
        }
        
        .card-hover:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(102, 126, 234, 0.2) !important;
        }
        
        .card-icon {
            position: relative;
        }
        
        .icon-wrapper {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .icon-wrapper i {
            font-size: 2rem;
            color: white;
        }
        
        .icon-wrapper.bg-primary {
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
        }
        
        .icon-wrapper.bg-success {
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
        }
        
        /* .card-hover:hover .icon-wrapper {
            transform: scale(1.1) rotateY(360deg);
        } */
        
        .btn-action {
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* About Section */
        .about-section {
            background: #ffffff;
        }
        
        .feature-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            background: #ffffff;
            border: 1px solid #f0f0f0;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.05);
        }
        
        .icon-wrapper.bg-warning {
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
        }
        
        .icon-wrapper.bg-info {
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
        }
        
        /* Testimonials Section */
        .testimonials-section {
            background:#ffffff;;
            position: relative;
        }
        
        .testimonial-subtitle {
            opacity: 0.9;
        }
        
        .testimonial-card {
            border-radius: 20px;
            background: #ffffff; /* Tambahkan background putih eksplisit */
            border: 1px solid #e0e0e0; /* Sedikit lebih gelap agar terlihat di background putih */
        }
        
        .testimonial-avatar {
            position: relative;
        }
        
        .avatar-placeholder {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            border: 4px solid #ffffff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .avatar-placeholder i {
            font-size: 3rem;
            color: white;
        }
        
        .rating {
            font-size: 1.2rem;
        }
        
        .carousel-nav-btn {
            background: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .carousel-nav-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        .carousel-nav-btn i {
            color: #667eea;
            font-size: 1.2rem;
        }
        
        .carousel-control-prev, .carousel-control-next {
            width: auto;
            opacity: 1;
        }
        
        .carousel-control-prev {
            left: -70px;
        }
        
        .carousel-control-next {
            right: -70px;
        }
        
        /* CTA Section */
        /* .cta-section {
            background: linear-gradient(135deg, #2c3e50, #34495e);
        }
        
        .cta-subtitle {
            opacity: 0.9;
        }
        
        .btn-cta {
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        } */
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .display-3 {
                font-size: 2.5rem;
            }
            
            .display-5 {
                font-size: 2rem;
            }
            
            .py-6 {
                padding: 3rem 0;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem !important;
            }
            
            .hero-subtitle {
                font-size: 1.1rem !important;
            }
            
            .carousel-control-prev {
                left: -40px;
            }
            
            .carousel-control-next {
                right: -40px;
            }
            
            .floating-shape-1, .floating-shape-2, .floating-shape-3 {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
            
            .carousel-control-prev, .carousel-control-next {
                display: none;
            }
        }
    </style>
@endsection