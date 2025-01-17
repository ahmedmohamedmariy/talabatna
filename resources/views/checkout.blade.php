@extends('layout.template')
@section('title')
Checkout
@endsection
	@section('body')

<!-- hero-section -->
<section class="hero-section about checkout gap" style="background-image: url({{url('frontend/img/background-3.png')}});">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="about-text pricing-table">
					<ul class="crumbs d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
						<li><a href="index.html">Home</a></li>
						<li><a href="index.html"><i class="fa-solid fa-right-long"></i>Restaurants </a></li>
						<li><a href="index.html"><i class="fa-solid fa-right-long"></i>Restaurant Сard</a></li>
						<li class="two"><a href="index.html"><i class="fa-solid fa-right-long"></i>Checkout</a></li>
					</ul>
					<h2 data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">Checkout</h2>
					<p data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">Sit amet nisl purus in mollis nunc sed id semper. Condimentum id venenatis a condimentum vitae sapien pellentesque.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- checkout-order -->
<section class="gap">
<div class="container">
	<div class="row">
		<div class="col-xl-5 col-lg-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
			<div class="checkout-order">
				<div class="title-checkout">
					<h2>Your order:</h2>
					<h6>3</h6>
				</div>
				<div class="banner-wilmington">
					<img alt="logo" src="{{url('frontend/img/logo-s.jpg')}}">
					<h6>Kennington Lane Cafe</h6>
				</div>
				<ul>
					<li class="price-list">
					<i class="closeButton fa-solid fa-xmark"></i>
					<div class="counter-container">
						<div class="counter-food">
							<img alt="food" src="{{url('frontend/img/order-1.png')}}')}}">
							<h4>Pasta, kiwi and sauce chilli</h4>
						</div>
						<h3>$39</h3>
					</div>
					<div class="price">
							<div>
								  <h2>$39</h2>
								  <span>Sum</span>
							  </div>
								  <div>
									  <div class="qty-input">
										<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
										<input class="product-qty" type="number" name="product-qty" min="0" value="1">
										<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
									</div>
									<span>Quantity</span>
								</div>
								</div>
					</li>
					<li class="price-list">
					<i class="closeButton fa-solid fa-xmark"></i>
					<div class="counter-container">
						<div class="counter-food">
							<img alt="food" src="{{url('frontend/img/order-2.png')}}">
							<h4>Rice with shrimps and kiwi</h4>
						</div>
						<h3>$49</h3>
					</div>
					<div class="price">
							<div>
								  <h2>$49</h2>
								  <span>Sum</span>
							  </div>
								  <div>
									  <div class="qty-input">
										<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
										<input class="product-qty" type="number" name="product-qty" min="0" value="1">
										<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
									</div>
									<span>Quantity</span>
								</div>
								</div>
					</li>
				</ul>
				<div class="totel-price">
					<span>Total order:</span>
					<h5>$137</h5>
				</div>
				<div class="totel-price">
					<span>To pay:</span>
					<h2>$137</h2>
				</div>

			</div>
		</div>
		<div class="offset-xl-1 col-xl-6 col-lg-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
			<form class="checkout-form">
				<h4>Buyer information</h4>
				<input type="text" name="Name" placeholder="Full Name">
				<div class="row">
					<div class="col-lg-6">
						<input type="text" name="E-mail" placeholder="E-mail">
					</div>
					<div class="col-lg-6">
						<input type="text" name="E-mail" placeholder="Phone">
					</div>
				</div>
				<h4 class="two">Delivery addresses</h4>
				<select class="nice-select Advice">
					  <option>California</option>
					  <option>California 1</option>
					  <option>California 2</option>
					  <option>California 3</option>
					  <option>California 4</option>
				</select>
				<input type="text" name="Name" placeholder="Street">
				<div class="row">
					<div class="col-lg-6">
						<input type="text" name="E-mail" placeholder="House number">
					</div>
					<div class="col-lg-6">
						<input type="number" name="E-mail" placeholder="Apartment number">
						<span>*dispensable</span>
					</div>
				</div>
				<h4 class="two">Payment method</h4>
				<div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					 <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Card</button>
					 <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"              role="tab" aria-controls="v-pills-profile" aria-selected="false">Cash</button>
				   </div>
				   <div class="tab-content" id="v-pills-tabContent">

						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<label>
								  <input type="radio" name="test" value="small" checked>
								  <img alt="checkbox-img" src="{{url('frontend/img/checkbox-1.png')}}">
								</label>

								<label>
								  <input type="radio" name="test" value="big">
								  <img alt="checkbox-img" src="{{url('frontend/img/checkbox-2.png')}}">
								</label>
								<label>
								  <input type="radio" name="test" value="big">
								  <img alt="checkbox-img" src="{{url('frontend/img/checkbox-3.png')}}">
								</label>
								<input type="number" name="Name" placeholder="Card number">
									<div class="row">
										<div class="col-lg-6">
											<input type="text" name="E-mail" placeholder="Expiration Date">
										</div>
										<div class="col-lg-6">
											<input type="password" placeholder="CVV">
										</div>
									</div>
									<label class="checkbox-one">Save my payments details for future purchases
									  <input type="checkbox" checked="checked">
									  <span class="checkmark"></span>
									</label>

						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

						</div>


					</div>
				</div>
					<button class="button-price">Send</button>
			</form>
		</div>
	</div>
</div>
</section>

	@endsection