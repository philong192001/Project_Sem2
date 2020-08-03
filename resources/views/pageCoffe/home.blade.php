@extends('master')
@section('content')
<!-- start banner Area -->
<section class="banner-area" id="home">	
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-start">
			<div class="banner-content col-lg-7">
				<h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
				<h1>
					Start your day with <br>
					a black Coffee				
				</h1>
				<a href="#" class="primary-btn text-uppercase">Buy Now</a>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start video-sec Area -->
<section class="video-sec-area pb-100 pt-40" id="about">
	<div class="container">
		<div class="row justify-content-start align-items-center">
			<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
				<div class="overlay overlay-bg"></div>
				<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="{{ asset('img/play-icon.png') }}" alt=""></a>
			</div>						
			<div class="col-lg-6 video-left">
				<h6>Live Coffee making process.</h6>
				<h1>We Telecast our <br>
				Coffee Making Live</h1>
				<p><span>We are here to listen from you deliver exellence</span></p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
				</p>
				<img class="img-fluid" src="{{ asset('img/signature.png') }}" alt="">
			</div>
		</div>
	</div>	
</section>
<!-- End video-sec Area -->
<section class="menu-area section-gap" id="coffee">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">What kind of Coffee we serve for you</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>						
		<div class="row">

			@foreach ($new_product as $item)
					<div class="col-lg-4">
						<div class="single-menu">
							<div class="single-item-header">
								<a href="{{ route('productDetail', $item->id) }}" class="img-pop-home">
									<img  src="{{ $item->link_image }}" alt="" height="200px;" width="290px;">
								</a>
							</div><br>
							<div class="title text-center">
								<h4 class="single-item-title"><a href="{{ route('productDetail', $item->id) }}">
									{{ $item->name_product }}
								</a></h4>

								<p>{{ $item->content }}</p>

								<p class="price float-right">
									<span class="flash-del">${{number_format($item->unit_price)  }}</span>										
								</p>
								
								
							</div>
							
							
						</div>
					</div>
			@endforeach
			
		</div>	
	</div>

</section>
<!-- Start menu Area -->
{{-- <section class="menu-area section-gap" id="coffee">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">What kind of Coffee we serve for you</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>						
		<div class="row">

			@foreach ($new_product as $item)
					<div class="col-lg-4">
						<div class="single-menu">
							<div class="single-item-header">
								<a href="{{ $item->link_image }}" class="img-pop-home">
									<img  src="{{ $item->link_image }}" alt="" height="200px;" width="290px;">
								</a>
							</div><br>
							<div class="title text-center">
								<h4 class="single-item-title"><a href="">
									{{ $item->name_product }}
								</a></h4>

								<p>{{ $item->content }}</p>

								<p class="price float-right">
									<span class="flash-del">${{number_format($item->unit_price)  }}</span>										
								</p>
								
								
							</div>
							
							
						</div>
					</div>
			@endforeach
			
		</div>	
	</div>

</section> --}}
<!-- End menu Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">What kind of Coffee we serve for you</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-4">
				<a href="{{ asset('img/g1.jpg') }}" class="img-pop-home">
					<img class="img-fluid" src="{{ asset('img/g1.jpg') }}" alt="">
				</a>	
				<a href="{{ asset('img/g2.jpg') }}" class="img-pop-home">
					<img class="img-fluid" src="{{ asset('img/g2.jpg') }}" alt="">
				</a>	
			</div>
			<div class="col-lg-8">
				<a href="{{ asset('img/g3.jpg') }}" class="img-pop-home">
					<img class="img-fluid" src="{{ asset('img/g3.jpg') }}" alt="">
				</a>	
				<div class="row">
					<div class="col-lg-6">
						<a href="{{ asset('img/g4.jpg') }}" class="img-pop-home">
							<img class="img-fluid" src="{{ asset('img/g4.jpg') }}" alt="">
						</a>	
					</div>
					<div class="col-lg-6">
						<a href="{{ asset('img/g5.jpg') }}" class="img-pop-home">
							<img class="img-fluid" src="{{ asset('img/g5.jpg') }}" alt="">
						</a>	
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- End gallery Area -->

<!-- Start review Area -->
<section class="review-area section-gap" id="review">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">What kind of Coffee we serve for you</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-6 col-md-6 single-review">
				<img src="{{ asset('img/r1.png') }}" alt="">
				<div class="title d-flex flex-row">
					<h4>lorem ipusm</h4>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>								
					</div>
				</div>
				<p>
					Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
				</p>
			</div>	
			<div class="col-lg-6 col-md-6 single-review">
				<img src="{{ asset('img/r2.png') }}" alt="">
				<div class="title d-flex flex-row">
					<h4>lorem ipusm</h4>
					<div class="star">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>								
					</div>
				</div>
				<p>
					Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
				</p>
			</div>	
		</div>
		<div class="row counter-row">
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter">2536</h1>
				<p>Happy Client</p>
			</div>
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter">7562</h1>
				<p>Total Projects</p>
			</div>
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter">2013</h1>
				<p>Cups Coffee</p>
			</div>
			<div class="col-lg-3 col-md-6 single-counter">
				<h1 class="counter">10536</h1>
				<p>Total Submitted</p>
			</div>																		
		</div>
	</div>	
</section>
<!-- End review Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">What kind of Coffee we serve for you</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="col-lg-6 col-md-6 single-blog">
				<img class="img-fluid" src="{{ asset('img/b1.jpg') }}" alt="">
				<ul class="post-tags">
					<li><a href="#">Travel</a></li>
					<li><a href="#">Life Style</a></li>
				</ul>
				<a href="#"><h4>Portable latest Fashion for young women</h4></a>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
				</p>
				<p class="post-date">
					31st January, 2018
				</p>
			</div>
			<div class="col-lg-6 col-md-6 single-blog">
				<img class="img-fluid" src="{{ asset('img/b2.jpg') }}" alt="">
				<ul class="post-tags">
					<li><a href="#">Travel</a></li>
					<li><a href="#">Life Style</a></li>
				</ul>
				<a href="#"><h4>Portable latest Fashion for young women</h4></a>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
				</p>
				<p class="post-date">
					31st January, 2018
				</p>
			</div>						
		</div>
	</div>	
</section>
<!-- End blog Area -->
@endsection