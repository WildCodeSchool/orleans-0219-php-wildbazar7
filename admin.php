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
    <title>Phone case</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" crossorigin="anonymous">
</head>
<body>

<form action="admin.php" method="post">
    <div class="container">
        <div class="row content-justify-center">
            <div class="col-5">
                <div>
                    <label for="title">Product Name : </label>
                    <input type="text" id="nom" name="product_title" required>
                    <small><?php if($validations['product_title']!==true){echo 'please fill this field';} ?></small>
                </div>
                <div class="form-group">
                    <label for="price">Price : </label>
                    <input class="float-right" type="tel" id="set_price" name="product_price" required>
                    <small><?php if($validations['product_price']!==true){echo 'please fill this field';} ?></small>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="image">Image link :</label>
                    <input type="tel" id="set_price" name="product_image" required>
                    <small><?php if($validations['product_image']!==true){echo 'please fill this field';} ?></small>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="product_inStock" id="exampleRadios1" value="true"
                           checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="product_inStock" id="exampleRadios2"
                           value="false">
                    <label class="form-check-label" for="exampleRadios2">
                        No
                    </label>
                </div>
            </div>

            <div class="col-7">
                <div class="form-group">
                    <label for="descriptionLong">product modal description :</label>
                    <textarea class="w-100" type="text" id="product_descLong" name="product_descriptionLong"
                              required></textarea>
                    <small><?php if($validations['product_descriptionLong']!==true){echo 'please fill this field';} ?></small>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="courriel">Product page description :</label>
                    <textarea class="w-100" type="email" id="product_descShort" name="product_descriptionShort"
                              required></textarea>
                    <small><?php if($validations['product_descriptionShort']!==true){echo 'please fill this field';} ?></small>
                </div>
            </div>
            <div class="button">
                <button type="submit">post product</button>
            </div>

        </div>
    </div>
</form>

</body>
</html>