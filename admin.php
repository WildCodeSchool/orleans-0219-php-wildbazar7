<?php
require 'connec.php';

$pdo = new PDO(DSN, USER, PW);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$validation = $_POST;

var_dump($_POST);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    foreach ($validation as $key => $val) {
        $validation[$key] = trim($val);
    }

    $maxLenTitle = 100;
    $maxLenDescShort = 2500;
    $maxLenDescLong = 5000;

    if (strlen($validation['product_title']) > $maxLenTitle) {
        $errors['product_title'] = 'cannot go above ' . $maxLenTitle . ' char';
    }
    if (strlen($validation['product_descriptionShort']) > $maxLenDescShort) {
        $errors['product_descriptionShort'] = 'cannot go above ' . $maxLenDescShort . ' char';
    }
    if (strlen($validation['product_descriptionLong']) > $maxLenDescLong) {
        $errors['product_descriptionLong'] = 'cannot go above ' . $maxLenDescLong . ' char';
    }
    if (strlen($validation['product_image']) > $maxLenTitle) {
        $errors['product_image'] = 'cannot go above ' . $maxLenTitle . ' char';
    }

    if (strlen($validation['product_title']) == 0) {
        $errors['product_title'] = 'this field is required';
    }
    if (strlen($validation['product_image']) == 0) {
        $errors['product_image'] = 'this field is required';
    }
    if (strlen($validation['product_descriptionShort']) == 0) {
        $errors['product_descriptionShort'] = 'this field is required';
    }
    if (strlen($validation['product_descriptionLong']) == 0) {
        $errors['product_descriptionLong'] = 'this field is required';
    }
    if (strval(strlen($validation['product_price'])) == 0) {
        $errors['product_price'] = 'this field is required';
    }

    if (!is_numeric($validation['product_price'])) {
        $errors['product_price'] = 'this field must be a number';
    }


    if (empty($errors)) {
        try {
            $query = "INSERT INTO phone_case (title, description, description_modal, price, image, stock) VALUES (:title, :description, :description_modal, :price, :image, :stock)";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':title', $_POST['product_title'], PDO::PARAM_STR);
            $statement->bindValue(':description', $_POST['product_descriptionShort'], PDO::PARAM_STR);
            $statement->bindValue(':description_modal', $_POST['product_descriptionLong'], PDO::PARAM_STR);
            $statement->bindValue(':price', $_POST['product_price'], PDO::PARAM_STR);
            $statement->bindValue(':image', $_POST['product_image'], PDO::PARAM_STR);
            $statement->bindValue(':stock', $_POST['gridRadiosStock'], PDO::PARAM_STR);
            $statement->execute();
            var_dump($statement);
            header('location:success.php');
            exit();
        }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
        }
    }

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
<link rel="icon" href="assets/logo_transparent.png"/>
<?php include 'header.php' ?>

<section>
    <form action="admin.php" method="post">
        <div class="container">
            <h2 class="font-weight-bold my-5 ---title--- cat-title mx-auto">Form Accessories</h2>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" id="title" name="product_title" rows="1"
                               value=<?= $validation['product_title'] ?? '' ?>>
                        <small class="text-danger"><?php if (!empty($errors['product_title'])) {
                                echo $errors['product_title'];
                            } ?></small>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Image</label>
                        <input class="form-control" id="imageUrl" name="product_image" rows="1"
                               value=<?= $validation['product_image'] ?? '' ?>>
                        <small class="text-danger"><?php if (!empty($errors['product_image'])) {
                                echo $errors['product_image'];
                            } ?></small>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="form-group">
                        <label for="descShort">Description on product page</label>
                        <textarea class="form-control" id="descShort" name="product_descriptionShort"
                                  rows="4"><?= $validation['product_descriptionShort'] ?? '' ?></textarea>
                        <small class="text-danger"><?php if (!empty($errors['product_descriptionShort'])) {
                                echo $errors['product_descriptionShort'];
                            } ?></small>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="form-group">
                        <label for="descLong">Description Modal</label>
                        <textarea class="form-control" id="descLong" name="product_descriptionLong" rows="4"
                        ><?= $validation['product_descriptionLong'] ?? '' ?></textarea>
                        <small class="text-danger"><?php if (!empty($errors['product_descriptionLong'])) {
                                echo $errors['product_descriptionLong'];
                            } ?></small>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="product_price" rows="1"
                               value=<?= $validation['product_price'] ?? '' ?>>
                        <small class="text-danger"><?php if (!empty($errors['product_price'])) {
                                echo $errors['product_price'];
                            } ?></small>
                    </div>
                </div>
                <div class="col-3 .offset-3">
                    <fieldset class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-9">
                                <legend class="col-form-label col-sm-2 pt-0">Stock</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadiosStock" id="gridRadios1"
                                           value="1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        In stock
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadiosStock" id="gridRadios2"
                                           value="0">
                                    <label class="form-check-label" for="gridRadios2">
                                        Out stock
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btn btn-style btn-modal">Add to cart</button>
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

