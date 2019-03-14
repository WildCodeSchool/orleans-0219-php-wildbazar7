<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phone case</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" crossorigin="anonymous">
</head>
<body>
<!--Navbar -->

<?php
include 'header.php';
include 'catArray.php';

?>

	<section id="phonecases">
		<div class="container">
			<h2 class="font-weight-bold my-5 ---title--- cat-title mx-auto">phone case</h2>
			<div class="container">
				<div class="row justify-content-center">

                    <?php for($x=0; $x<count($phoneCaseArray); $x++) { ?>

                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 py-2">
						        <a href="#" data-toggle="modal" data-target=<?php echo '#'.$phoneCaseArray[$x]["modalTarget"] ?>>
							    <div class="card px-4 pb-1 h-100 card-border-c rounded-0">
								    <img class="card-img-top img-fluid card-img-wrap mx-auto" src=<?php echo $phoneCaseArray[$x]["image"] ?> alt="Card image cap">
								    <div class="card-block pt-2">
									    <h4 class="card-title"><?php echo $phoneCaseArray[$x]["title"] ?></h4>
									    <p class="card-text mb-5"><?php echo $phoneCaseArray[$x]["description"] ?></p>
									    <span><p class="card-text text-stock"><small><?php echo $phoneCaseArray[$x]["stock"] ?></small></p></span>
									    <span><p class="card-text text-price mr-0"><?php echo $phoneCaseArray[$x]["price"] ?></p></span>
									    <span><img class="basket-icon" src="assets/basket.jpg" alt="basket-icon"></span>
								    </div>
							    </div>
						        </a>
					        </div>

                        <!-- modals -->
                        <div class="modal fade" id=<?php echo $phoneCaseArray[$x]["modalTarget"] ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content modal-style">
                                    <div class="modal-header modal-header-style">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $phoneCaseArray[$x]["title"] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="cross-style" aria-hidden="true">&#10005;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-md-6 p-0">
                                                    <div class="modal-img-wrap">
                                                        <img class="modal-img" src=<?php echo $phoneCaseArray[$x]["image"] ?> alt="product image">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ml-auto p-0">
                                                    <div class="modal-text-wrap">
                                                        <p><?php echo $phoneCaseArray[$x]["descriptionModal"] ?></p>
                                                        <div class="modal-price-wrap">
                                                            <p class="text-stock-small"><?php echo $phoneCaseArray[$x]["stock"] ?></p>
                                                            <br>
                                                            <div class="row justify-content-center modal-description">
                                                                <div class="col-3">
                                                                    <p><?php echo $phoneCaseArray[$x]["price"] ?></p>
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

                    <?php } ?>

				</div>
			</div>
		</div>
	</section>

	<!--Footer-->

<?php include 'footer.php' ?>

<!-- Modal -->



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>