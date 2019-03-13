<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel='stylesheet' type='text/css' href='style.css' >

	<title> Phone Bazar </title>

</head>
<body>

<! --Navbar -->

<?php include 'header.php';?>

	<!--Jumbotron-->

	<section>
		<div class="jumbotron jumbotron-fluid">
			<div class="container main-title mt-5 bg-white">
				<h1 class="display-4 text-vw-title">Phone Bazar</h1>
				<p class="lead text-vw-text">"Phone accessories with beautiful design"</p>
			</div>
		</div>
	</section>

	<!-- Category -->

	<section>
		<div class="container">
			<h2 class="title font-weight-bold py-3 pb-4 ---title---">Categories</h2>

			<div class="row justify-content-center">
				<div class="col-md-6 flex-unset col-lg-4 text-center diamond">
					<h3 class="cat-titles">phone case</h3>
					<a href="phoneCase.php"><img class="img-acc-resize align-self-center mr-3" src="assets/cat-1-icon.png" alt="icon">
					</a>
				</div> 

				<div class="col-md-6 flex-unset col-lg-4 text-center diamond">
					<h3 class="cat-titles">charger</h3>
					<a href="page_produit.php"><img class="img-acc-resize align-self-center mr-3" src="assets/cat-2-icon.png" alt="icon">
					</a>
				</div> 

				<div class="col-md-6 flex-unset col-lg-4 text-center diamond">
					<h3 class="cat-titles">audio</h3>
					<a href="audio.php"><img class="img-acc-resize align-self-center mr-3" src="assets/cat-3-icon.png" alt="icon">
					</a>
				</div>

				<div class="col-md-6 flex-unset col-lg-4 text-center diamond">
					<h3 class="cat-titles">accessories</h3>
					<a href="accessories.php"><img class="img-acc-resize align-self-center mr-3" src="assets/cat-4-icon.png" alt="icon">
					</a>
				</div> 
			</div>
		</div> 
	</section>

	<!-- About us-->

	<section id="About_us">
		<div class="container px-5">
			<h2 class="title-no-mb font-weight-bold pt-5 mt-5 ---title---">About Us</h2>
			<div class="row justify-content-center ml-5 mb-4">
				<div class="col-lg-2 text-center">
					<img class="logoabt" src="assets/logo_transparent.png" alt="logoabt">
				</div>
				<div class="col-lg-10 pt-5">
					<p> Phone Bazar is a specialist compagny in sales of trend accessories and connected objects.<br>
					Our mission? To help you find the accessories that best meet your expectations, your needs.<br>
				Known for the originality of our products as well as the richness of its content,<br> PhoneBazar has become a reference site in the field of mobile accessorist.<br>
			By ordering accessories for your mobile from our website, you are sure to buy a quality product.</p>
	</div>
</div>
		</div>
</section>


<!-- Top Selling -->

<section id="Top_Selling">
	<div class="container px-5">
		<h2 class="text-center py-3 mt-2 font-weight-bold ---title---">Top Selling</h2>
		<h5 class="text-center pb-5 font-italic">Top selling products last week</h5>
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 py-2">
				<a href="#" data-toggle="modal" data-target="#mod1">
					<div class="card px-4 pb-1 h-100 card-border-c rounded-0">
						<img class="card-img-top img-fluid card-img-wrap mx-auto" src="assets/pc0.jpg" alt="Card image cap">
						<div class="card-block pt-2">
							<h4 class="card-title">Abstract</h4>
							<p class="card-text mb-5">This is a longer card with supporting text below as a natural lead-in to</p>
							<span><p class="card-text text-stock"><small>in stock</small></p></span>
							<span><p class="card-text text-price mr-0">25$</p></span>
							<span><img class="basket-icon" src="assets/basket.jpg" alt="basket-icon"></span>
						</div>
					</div>
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 py-2">
				<a href="#" data-toggle="modal" data-target="#mod2">
				<div class="card px-4 pb-1 h-100 card-border-c rounded-0">
					<img class="card-img-top img-fluid card-img-wrap mx-auto" src="assets/audio5.jpg" alt="Card image cap">
					<div class="card-block pt-2">
						<h4 class="card-title">Speaker</h4>
						<p class="card-text mb-5">This is a longer card with supporting text below as a natural lead-in to</p>
						<span><p class="card-text text-stock mr-3"><small>in stock</small></p></span>
						<span><p class="card-text text-price mr-0">49.99$</p></span>
						<span><img class="basket-icon" src="assets/basket.jpg" alt="basket-icon"></span>
					</div>
				</div>
                </a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 py-2">
                <a href="#" data-toggle="modal" data-target="#mod3">
				<div class="card px-4 pb-1 h-100 card-border-c rounded-0">
					<img class="card-img-top img-fluid card-img-wrap mx-auto" src="assets/a8.png" alt="Card image cap">
					<div class="card-block pt-2">
						<h4 class="card-title">Car accessory</h4>
						<p class="card-text mb-5">This is a longer card with supporting text below as a natural lead-in to</p>
						<span><p class="card-text text-stock mr-3"><small>in stock</small></p></span>
						<span><p class="card-text text-price mr-0">55$</p></span>
						<span><img class="basket-icon" src="assets/basket.jpg" alt="basket-icon"></span>
					</div>
				</div>
                </a>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="mod1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-style">
			<div class="modal-header modal-header-style">
				<h5 class="modal-title" id="exampleModalLabel">Abstract</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="cross-style" aria-hidden="true">&#10005;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-6 p-0">
							<div class="modal-img-wrap">
								<img class="modal-img" src="assets/pc0.jpg" alt="product image">
							</div>
						</div>
						<div class="col-md-6 ml-auto p-0">
							<div class="modal-text-wrap">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut neque quis orci ullamcorper consectetur. Donec nunc dolor, fermentum in turpis eget, tristique tincidunt justo. Donec porta risus eget rhoncus aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
								<div class="modal-price-wrap">
									<p class="text-stock-small">in stock</p>
									<br>
									<div class="row justify-content-center">
										<div class="col-3">
											<p>25$</p>
										</div>
										<div class="col-9">
											<button class="btn btn-style btn-modal ml-3">Add to cart</button>
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
</div>
<div class="modal fade" id="mod2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-style">
			<div class="modal-header modal-header-style">
				<h5 class="modal-title" id="exampleModalLabel">Speaker</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="cross-style" aria-hidden="true">&#10005;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-6 p-0">
							<div class="modal-img-wrap">
								<img class="modal-img" src="assets/audio5.jpg" alt="product image">
							</div>
						</div>
						<div class="col-md-6 ml-auto p-0">
							<div class="modal-text-wrap">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut neque quis orci ullamcorper consectetur. Donec nunc dolor, fermentum in turpis eget, tristique tincidunt justo. Donec porta risus eget rhoncus aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
								<div class="modal-price-wrap">
									<p class="text-stock-small">in stock</p>
									<br>
									<div class="row justify-content-center">
										<div class="col-3">
											<p>49.99$</p>
										</div>
										<div class="col-9">
											<button class="btn btn-style btn-modal ml-3">Add to cart</button>
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
</div>
<div class="modal fade" id="mod3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-style">
			<div class="modal-header modal-header-style">
				<h5 class="modal-title" id="exampleModalLabel">Car accessory</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="cross-style" aria-hidden="true">&#10005;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-6 p-0">
							<div class="modal-img-wrap">
								<img class="modal-img" src="assets/a8.png" alt="product image">
							</div>
						</div>
						<div class="col-md-6 ml-auto p-0">
							<div class="modal-text-wrap">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut neque quis orci ullamcorper consectetur. Donec nunc dolor, fermentum in turpis eget, tristique tincidunt justo. Donec porta risus eget rhoncus aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
								<div class="modal-price-wrap">
									<p class="text-stock-small">in stock</p>
									<br>
									<div class="row justify-content-center">
										<div class="col-3">
											<p>55$</p>
										</div>
										<div class="col-9">
											<button class="btn btn-style btn-modal ml-3">Add to cart</button>
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
</div>

<!--Footer-->
<?php include 'footer.php';?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
