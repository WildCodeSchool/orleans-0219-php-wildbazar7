<?php

$validations = array_map(function() {return false;}, $_POST);


foreach ($_POST as $key => $val){
    $val = trim($val);
    if(strlen($val) != 0){
        $validations[$key] = true;
    }
}

var_dump($validations);

if(count(array_unique($validations)) === 1 && end($validations) === true && is_numeric($_POST['product_price'])) {
    header('Location: success.php');
}


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Accessories</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" crossorigin="anonymous">
    </head>
    <body>
    <!-- Navbar -->

    <?php include 'header.php' ?>

    <section>
        <form action="admin.php" method="post">
            <div class="container">
                <h2 class="font-weight-bold my-5 ---title--- cat-title mx-auto">Form Accessories</h2>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" id="title" name="product_title" rows="1">
                            <small><?php if($validations['product_title']!==true){echo 'please fill this field';} ?></small>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Image</label>
                            <input class="form-control" id="imageUrl" name="product_image" rows="1">
                            <small><?php if($validations['product_image']!==true){echo 'please fill this field';} ?></small>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="descShort">Description on product page</label>
                            <textarea class="form-control" id="descShort" name="product_descriptionShort" rows="4"></textarea>
                            <small><?php if($validations['product_descriptionShort']!==true){echo 'please fill this field';} ?></small>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="descLong">Description Modal</label>
                            <textarea class="form-control" id="descLong" name="product_descriptionLong" rows="4"></textarea>
                            <small><?php if($validations['product_descriptionLong']!==true){echo 'please fill this field';} ?></small>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" id="price" name="product_price" rows="1">
                            <small><?php if($validations['product_price']!==true){echo 'please fill this field';} ?></small>
                        </div>
                    </div>
                    <div class="col-3 .offset-3">
                        <fieldset class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-9">
                                    <legend class="col-form-label col-sm-2 pt-0">Stock</legend>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                               value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            In stock
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                               value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Out stock
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="text-center mt-1 mb-5">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </div>
        </form>
    </section>

    <!--Footer-->

    <?php include 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
    </html>

