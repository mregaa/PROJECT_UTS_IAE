<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head><title>Generic - Road Trip by TEMPLATED</title><meta charset="utf-8"><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="assets/css/main.css"></head><body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" style="height: 100px;">
			</header>

		<section id="post" class="wrapper bg-img" data-bg="banner2.jpg"><div class="inner">
					<article class="box"><header>
						</header><div class="content">
							
                        <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($cars as $car)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $car->image }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $car->name }}</h5>
                                <p class="card-text">
                                    <strong>Harga:</strong> Rp {{ number_format($car->price, 0, ',', '.') }}<br>
                                    <strong>Tahun:</strong> {{ $car->year }}<br>
                                    <strong>Stok:</strong> {{ $car->stock }}
                                </p>
                                <div class="d-flex justify-content-end">
                                    <a href="http://localhost:8002/orders/{{ $car['id'] }}" class="btn btn-primary">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    </div>
                </div>

						</div>
							</ul></footer></article></div>
			</section><!-- Footer --><footer id="footer"><div class="inner">


		</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script><script src="assets/js/jquery.scrolly.min.js"></script><script src="assets/js/jquery.scrollex.min.js"></script><script src="assets/js/skel.min.js"></script><script src="assets/js/util.js"></script><script src="assets/js/main.js"></script></body></html>
