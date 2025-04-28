<!DOCTYPE HTML>
<html>
<head>
    <title>Mobeli - Platform Pembelian Mobil</title>
    <meta charset="utf-8" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="logo"></div>
        <a href="#menu"><span>Menu</span></a>
    </header>

    <!-- Navigation Menu -->
    <nav id="menu">
        <ul class="links">
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
            <li><a href="http://127.0.0.1:8001/cars">Daftar Mobil</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <section id="banner" class="bg-img" data-bg="banner.jpg">
        <div class="inner">
            <header>
                <h1>Welcome to Mobeli</h1>
                <p>Platform Pembelian Mobil Terpercaya</p>
            </header>
        </div>
        <a href="#one" class="more">Learn More</a>
    </section>

    <!-- Section One -->
    <section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <article class="box">
                <header>
                    <h2>Apa itu Mobeli?</h2>
                </header>
                <div class="content">
                    <p>
                        <strong>Mobeli</strong> merupakan platform e-commerce inovatif yang dirancang khusus untuk memenuhi kebutuhan pembelian mobil. Dengan pengalaman belanja yang praktis, cepat, dan transparan, Mobeli memungkinkan pengguna menjelajahi berbagai pilihan mobil dari berbagai merek dan tipe, membandingkan spesifikasi, serta melakukan pembelian langsung dari aplikasi. 
                        Kami menggabungkan kenyamanan e-commerce dengan kepercayaan transaksi otomotif, membuat pembelian mobil kini lebih mudah, aman, dan terpercaya.
                    </p>
                </div>
                <footer>
                    <a href="http://127.0.0.1:8001/cars" class="button alt">Lihat Daftar Mobil</a>
                </footer>
            </article>
        </div>
        <a href="#footer" class="more">Learn More</a>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">

            <p style="text-align: center; font-style: italic; font-size: 1.5rem; font-weight: bold; margin-bottom: 50px;">
                Design crafted by Kelompok Mobeli
            </p>

            <div style="display: flex; flex-direction: column; align-items: center; gap: 8px; margin-bottom: 20px;">
                <p><strong>Pradipta Muhtadin</strong> (1202220327)</p>
                <p><strong>Kevin Hisham Dewanto</strong> (1202223314)</p>
                <p><strong>Muhammad Haidir Ali Al Farisiy</strong> (1202223165)</p>
                <p><strong>Muhamad Rega Pramudya</strong> (1202223378)</p>
            </div>

            <ul class="icons" style="margin-top: 10px;">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>

        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        Site made with: <a href="https://templated.co/">Templated</a> | Distributed by <a href="https://themewagon.com/">ThemeWagon</a>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
