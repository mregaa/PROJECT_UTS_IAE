<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head><title>Road Trip by TEMPLATED</title><meta charset="utf-8"><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="{{asset('css/main.css')}}"> </head><body>

		<!-- Header -->
         
			<header id="header"><div class="logo"></div>
				<a href="#menu"><span>Menu</span></a>
			</header><!-- Nav --><nav id="menu"><ul class="links">
            @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard </a></li>
                    @else
                        <li><a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
					<li><a href="http://127.0.0.1:8001/car">Daftar Mobil</a></li>
				</ul></nav>
                <section id="banner" class="bg-img" data-bg="banner.jpg"><div class="inner">
					<header><h1>This is Mobeli</h1>
					</header></div>
				<a href="#one" class="more">Learn More</a>
			</section><!-- One --><section id="one" class="wrapper post bg-img" data-bg="banner2.jpg"><div class="inner">
					<article class="box"><header><h2>MOBELI</h2>
						</header><div class="content">
							<p>Mobeli adalah platform e-commerce inovatif yang secara khusus dirancang untuk memenuhi kebutuhan pembelian mobil. Dengan pengalaman belanja yang praktis, cepat, dan transparan, Mobeli memungkinkan pengguna untuk menjelajahi berbagai pilihan mobil dari berbagai merek dan tipe, membandingkan spesifikasi, serta melakukan pembelian langsung melalui aplikasi.
                            Kami menggabungkan kenyamanan e-commerce dengan kepercayaan dalam transaksi otomotif, sehingga pembelian mobil kini bisa dilakukan dengan lebih mudah, aman, dan terpercaya.</p>
						</div>
						<footer><a href="http://127.0.0.1:8001/car" class="button alt">Lihat Daftar Mobil</a>
						</footer></article></div>
				<a href="#two" class="more">Learn More</a>
			</section><!-- Footer --><footer id="footer"><div class="inner">

            <h2>By Kelompok Mobeli</h2>

					<p>Pradipta Muhtadin 1202220327</p>
                    <p>Kevin Hisham Dewanto 1202223314</p> 
                    <p>Muhammad Haidir Ali Al Farisiy 1202223165</p>   
                    <p>Muhamad Rega Pramudya 1202223378</p> 

					<ul class="icons"><li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul></div>
			</footer><div class="copyright">
			Site made with: <a href="https://templated.co/">Templated</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>
		</div>
		<!-- Scripts -->
			<script src="{{asset('js/jquery.min')}}.js"></script><script src="{{asset('js/jquery.scrolly')}}.min.js"></script><script src="{{asset('js/jquery.scrollex')}}.min.js"></script><script src="{{asset('js/skel.min')}}.js"></script><script src="{{asset('js/util.js')}}"></script><script src="{{asset('js/main.js')}}"></script></body></html>
