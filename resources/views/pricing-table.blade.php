@extends('layout.template')
@section('title')
Pricing Table
@endsection
	@section('body')

<!-- hero-section -->
<section class="hero-section about gap" style="background-image: url({{url('frontend/img/background-3.png')}});">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="about-text pricing-table">
					<ul class="crumbs d-flex" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
						<li><a href="index.html">Home</a></li>
						<li class="two"><a href="index.html"><i class="fa-solid fa-right-long"></i>Pricing Table</a></li>
					</ul>
					<h2 data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">Lunch sets</h2>
					<p data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">Ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Mauris augue neque gravida in fermentum et sollicitudin.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- pricing-table-cards -->
<section class="gap no-top">
<div class="container">
	<div class="row">
		<div class="col-xl-4 col-lg-6 col-md-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
			<div class="pricing-table-cards" style="background-image: url({{url('frontend/img/blur-1.png')}});">
				<img alt="food" src="{{url('frontend/img/food-5.png')}}">
				<div class="pricing-table-cards-pric">
					<h6><i class="fa-solid fa-box"></i>x3</h6>
					<h4>$112<span>/ per week</span></h4>

					<h3>Small Business Lunch</h3>
				</div>
				<p>Commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Amet justo donec enim malesuada diam vulputate ut pharetra.</p>
				<ul class="pricing-plan-list">
					<li><h5><i class="fa-solid fa-circle-check"></i>Sem et tortor consequat id porta;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Facilisis magna etiam tempor;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Nec tincidunt praesent semper;</h5></li>
					<li class="color"><h5><i class="fa-solid fa-circle-check"></i>Nibh sed pulvinar proin;</h5></li>
					<li class="color"><h5><i class="fa-solid fa-circle-check"></i>Vulputate mi sit amet mauris;</h5></li>
					<li class="color"><h5><i class="fa-solid fa-circle-check"></i>Elit ut aliquam purus sit amet;</h5></li>
				</ul>
				<button class="button-price">Order now</button>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
			<div class="pricing-table-cards" style="background-image: url({{url('frontend/img/blur-2.png')}});">
				<img alt="food" src="{{url('frontend/img/food-6.png')}}">
				<div class="pricing-table-cards-pric">
					<h6><i class="fa-solid fa-box"></i>x6</h6>
					<h4>$270<span>/ per week</span></h4>

					<h3>Large Business Lunch</h3>
				</div>
				<p>Volutpat est velit egestas dui id. Elementum eu facilisis sed odio morbi quis. Imperdiet nulla malesuada pellentesque elit.</p>
				<ul class="pricing-plan-list">
					<li><h5><i class="fa-solid fa-circle-check"></i>Sem et tortor consequat id porta;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Facilisis magna etiam tempor;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Nec tincidunt praesent semper;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Nibh sed pulvinar proin;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Vulputate mi sit amet mauris;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Elit ut aliquam purus sit amet;</h5></li>
				</ul>
				<button class="button-price">Order now</button>
			</div>
		</div>
		<div class="col-xl-4 col-lg-6 col-md-12" data-aos="fade-up"  data-aos-delay="500" data-aos-duration="600">
			<div class="pricing-table-cards" style="background-image: url({{url('frontend/img/blur-3.png')}});">
				<img alt="food" src="{{url('frontend/img/food-7.png')}}">
				<div class="pricing-table-cards-pric">
					<h6><i class="fa-solid fa-box"></i>x4</h6>
					<h4>$180<span>/ per week</span></h4>

					<h3>Medium Business Lunch</h3>
				</div>
				<p>Facilisi morbi tempus iaculis urna. Consequat id porta nibh venenatis cras sed felis eget. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
				<ul class="pricing-plan-list">
					<li><h5><i class="fa-solid fa-circle-check"></i>Sem et tortor consequat id porta;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Facilisis magna etiam tempor;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Nec tincidunt praesent semper;</h5></li>
					<li><h5><i class="fa-solid fa-circle-check"></i>Nibh sed pulvinar proin;</h5></li>
					<li class="color"><h5><i class="fa-solid fa-circle-check"></i>Vulputate mi sit amet mauris;</h5></li>
					<li class="color"><h5><i class="fa-solid fa-circle-check"></i>Elit ut aliquam purus sit amet;</h5></li>
				</ul>
				<button class="button-price">Order now</button>
			</div>
		</div>
	</div>
</div>
</section>
<!-- subscribe-section -->
<section class="subscribe-section gap" style="background:#fcfcfc">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
			<div class="img-subscribe">
				<img alt="Illustration" src="{{url('frontend/img/illustration-4.png')}}">
			</div>
		</div>
		<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
			<div class="get-the-menu">
				<h2>Get the menu of your favorite restaurants every day</h2>
				<form>
					<i class="fa-regular fa-bell"></i>
					<input type="text" name="email" placeholder="Enter email address">
					<button class="button button-2">Subscribe</button>
				</form>
			</div>
		</div>
	</div>
</div>
</section>

	@endsection