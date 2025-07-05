<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent transition-navbar" id="mainNav">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold text-white transition-navbar-brand" id="navbarBrand" href="{{ route('home') }}">Poliklinik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <!-- Public Links -->
                    <!-- @if(!session('user_role') && !session('dokter_id') && !session('pasien_id'))
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('dokter.loginForm') }}">Login Dokter</a></li>
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('pasien.loginForm') }}">Login Pasien</a></li>
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('pasien.registerForm') }}">Register Pasien</a></li>
                    @endif -->

                    <!-- Admin Links -->
                    @if(session('user_role') === 'admin')
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                        <!-- Add more admin-specific links here -->
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('logout.admin') }}">Logout</a></li>
                    @endif

                    <!-- Dokter Links -->
                    @if(session('dokter_id'))
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('dokter.dashboard') }}">Dokter Dashboard</a></li>
                        <!-- <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('dokter.poli') }}">Poli</a></li> -->
                        <!-- Add more dokter-specific links here -->
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('logout.dokter') }}">Logout</a></li>
                    @endif

                    <!-- Pasien Links -->
                    @if(session('pasien_id'))
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('pasien.dashboard') }}">Pasien Dashboard</a></li>
                        <!-- <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('pasien.daftar.periksa') }}">Daftar Periksa</a></li> -->
                        <!-- Add more pasien-specific links here -->
                        <li class="nav-item"><a class="nav-link transition-nav-link" href="{{ route('logout.pasien') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('mainNav');
        const brand = document.getElementById('navbarBrand');
        const navLinks = document.querySelectorAll('.transition-nav-link');
        
        if (window.scrollY > 50) {
            nav.classList.remove('bg-transparent');
            nav.classList.add('bg-white', 'shadow-sm');
            brand.classList.remove('text-white');
            brand.classList.add('text-gradient-primary');
            
            // Change nav links color to light gray
            navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-muted');
            });
        } else {
            nav.classList.add('bg-transparent');
            nav.classList.remove('bg-white', 'shadow-sm');
            brand.classList.add('text-white');
            brand.classList.remove('text-gradient-primary');
            
            // Change nav links color back to white
            navLinks.forEach(link => {
                link.classList.add('text-white');
                link.classList.remove('text-muted');
            });
        }
    });
    
    // Initialize nav links color on page load
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.transition-nav-link');
        navLinks.forEach(link => {
            link.classList.add('text-white');
        });
    });
    </script>
    
    <style>
    .transition-navbar {
        transition: background 0.4s, box-shadow 0.4s;
    }
    
    .transition-navbar-brand {
        transition: color 0.4s;
    }
    
    .transition-nav-link {
        transition: color 0.4s ease;
        font-weight: 450;
    }
    
    .transition-nav-link:hover {
        opacity: 0.8;
        transform: translateY(-1px);
        transition: all 0.3s ease;
    }
    
    .text-gradient-primary {
        background: linear-gradient(90deg, #4e73df 10%, #224abe 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    
    /* Navbar toggler styling for better visibility */
    .navbar-toggler {
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 0.25rem 0.5rem;
    }
    
    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
    }
    
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    
    /* When navbar is scrolled, change toggler color */
    .bg-white .navbar-toggler {
        border-color: rgba(0, 0, 0, 0.1);
    }
    
    .bg-white .navbar-toggler:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    
    .bg-white .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    </style>