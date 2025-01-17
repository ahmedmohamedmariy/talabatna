@extends('layout.template')
@section('title')
Restaurant Card
@endsection
	@section('body')

	<!-- hero-section -->
	<section class="hero-section about gap" style="background-image: url(assets/img/background-1.png);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="about-text">
						<ul class="crumbs d-flex">
							<li><a href="index.html">Home</a></li>
							<li><a href="index.html"><i class="fa-solid fa-right-long"></i>Restaurants</a></li>
							<li class="two"><a href="index.html"><i class="fa-solid fa-right-long"></i>The Wilmington</a></li>
						</ul>
						<div class="logo-detail">
							<img alt="logo" src="assets/img/logos-2.jpg">
							<h2>Kennington Lane Cafe</h2>
						</div>
						<div class="rate">
							<span>Rate:</span>
								<div class="star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
								<span>CUISINES:</span>
								<div class="cafa-button">
										<a href="#">american</a>
										<a href="#">steakhouse</a>
										<a href="#">seafood</a>
								</div>
								<span>FEATURES:</span>
								<p>Lorem mollis aliquam ut porttitor. Nisl rhoncus mattis rhoncus urna neque. Pharetra sit amet aliquam id. Urna nec tincidunt praesent semper feugiat nibh.</p>
						</div>

					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="about-img">
						<img alt="man" src="assets/img/restaurant-1.jpg">
						<div class="hours">
							<i class="fa-regular fa-clock"></i>
							<h4>9am – 12pm<br><span>Hours</span></h4>
						</div>
						<div class="hours two">
							<i class="fa-solid fa-utensils"></i>
							<h4>Breakfast, Lunch, Dinner<br><span>Meals</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- tabs -->
	<section class="tabs gap">

      <div class="container">

      <div class="tabs-img-back">

      <div class="row">

           <div class="col-lg-12">

               <div class="Provides" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">


               <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Breakfast</button>
                 <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"              role="tab" aria-controls="v-pills-profile" aria-selected="false">Lunch</button>
                 <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Dinner</button>

               </div>
               <div class="like-meal">
               	<a href="#"><i class="fa-solid fa-heart"></i>Like Meals</a>
               </div>

              </div>

             </div>

           <div class="col-lg-12">

               <div class="tab-content" id="v-pills-tabContent" >

                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                 <div class="row">
                 	<div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-13.png">
                 			<div class="dish-foods">
                 				<h3>Egg, kiwi
														and sauce chilli</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Potatoes with pork and dried fruits
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
									</div>
                 	<div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-2.png">
                 			<div class="dish-foods">
                 				<h3>Potatoes with pork
														and dried fruits</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$46</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Potatoes with pork and dried fruits
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
									</div>
                 	<div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-3.png">
                 			<div class="dish-foods">
                 				<h3>Rice with shrimps and kiwi</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Rice with shrimps and kiwi
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-4.png">
                 			<div class="dish-foods">
                 				<h3>Spaghetti with mushrooms and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Spaghetti with mushrooms and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-5.png">
                 			<div class="dish-foods">
                 				<h3>Sliced pork, avocado and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Sliced pork, avocado and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-6.png">
                 			<div class="dish-foods">
                 				<h3>Veal meat, tomatoes and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Veal meat, tomatoes and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 </div>

                 </div>
                 <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                   <div class="row">
                   	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-4.png">
                 			<div class="dish-foods">
                 				<h3>Spaghetti with mushrooms and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Spaghetti with mushrooms and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-6.png">
                 			<div class="dish-foods">
                 				<h3>Veal meat, tomatoes and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Veal meat, tomatoes and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-5.png">
                 			<div class="dish-foods">
                 				<h3>Sliced pork, avocado and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Sliced pork, avocado and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-1.png">
                 			<div class="dish-foods">
                 				<h3>Pasta, kiwi
									and sauce chilli</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Potatoes with pork and dried fruits
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
					</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-2.png">
                 			<div class="dish-foods">
                 				<h3>Potatoes with pork
									and dried fruits</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$46</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Potatoes with pork and dried fruits
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
					</div>

                 </div>

                 </div>
                 <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                 	<div class="row">

                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-1.png">
                 			<div class="dish-foods">
                 				<h3>Pasta, kiwi
									and sauce chilli</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Potatoes with pork and dried fruits
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
					</div>
					<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-5.png">
                 			<div class="dish-foods">
                 				<h3>Sliced pork, avocado and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Sliced pork, avocado and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-6.png">
                 			<div class="dish-foods">
                 				<h3>Veal meat, tomatoes and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Veal meat, tomatoes and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-2.png">
                 			<div class="dish-foods">
                 				<h3>Potatoes with pork
									and dried fruits</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$46</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Potatoes with pork and dried fruits
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
					</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-3.png">
                 			<div class="dish-foods">
                 				<h3>Rice with shrimps and kiwi</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Rice with shrimps and kiwi
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 	<div class="col-xl-4 col-lg-6">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-4.png">
                 			<div class="dish-foods">
                 				<h3>Spaghetti with mushrooms and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$49</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Spaghetti with mushrooms and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
                 </div>
                 </div>


              </div>

              </div>

        </div>

      </div>

     </div>

   </section>
   <!-- Lunch Section -->
   <section class="lunch-section gap" style="background:#fcfcfc">
   	 <div class="container">
   	 	<h2 data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">See also category Lunch</h2>
   	 	<div class="row">
   	 		<div class="col-xl-4 col-lg-6" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-7.png">
                 			<div class="dish-foods">
                 				<h3>Fruits with rice chips</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$39</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Fruits with rice chips
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
					</div>
            <div class="col-xl-4 col-lg-6"  data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-10.png">
                 			<div class="dish-foods">
                 				<h3>Vegetables with rice chips</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$35</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Vegetables with rice chips
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
					</div>
            <div class="col-xl-4 col-lg-6" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
                 		<div class="dish">
                 			<img alt="food-dish" src="assets/img/dish-11.png">
                 			<div class="dish-foods">
                 				<h3>Pork with vegetables and...</h3>
 										<div class="dish-icon">
											<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
											 </div>
											 <div class="dish-icon end">

											 	<i class="info fa-solid fa-circle-info"></i>
											 	<div class="star">
											 		<a href="#"><i class="fa-solid fa-heart"></i></a>
											 	</div>
											 </div>
					              	</div>
					              	<div class="price">
					              		<h2>$45</h2>
						              	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
										</div>
										<button class="button-price">Add to Basket<i class="fa-solid fa-bag-shopping"></i></button>
	                 			</div>
	                 			<div class="dish-info" style="display: none;">
	                 				<i class="info2 fa-solid fa-xmark"></i>
	                 				<h5>
	                 					Pork with vegetables and...
	                 				</h5>
	                 				<div class="cafa-button">
													<a href="#">Breakfast</a>
													<a href="#">Brunch</a>
										</div>
										<p>In egestas erat imperdiet sed euismod nisi porta. Ultrices sagittis orci a scelerisque. Diam quam nulla porttitor.</p>
										<ul class="menu-dish">
											 <li>Nulla porttitor massa id;</li>
											 <li>Aliquam vestibulum morbi;</li>
											 <li>Blandit donec adipiscing;</li>
										</ul>
	                 			</div>
                 		</div>
                 	</div>
   	 	</div>
   	 </div>
   </section>


	@endsection