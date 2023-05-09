<?php
    require_once "Product.php";
    require_once "CDMusic.php";
    require_once "CDRack.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Management</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="bacground-color:#dea450;">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" style="bacground-color:#dea450;" href="#">CD Product Management</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                </div>
            </nav>
        </div>
    </div>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="table-responsive">
        <h2 style="margin: 30px 0 30px 0;">Input Product</h2>

        <form method="post" action="">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Product Name" name="name" required="required">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Price" name="price" required="required">
            </div>

            <div class="form-group">
                <label>Discount</label>
                <input type="text" class="form-control" placeholder="Product Discount" name="discount" required="required">
            </div>

            <div class="form-group">
                <label>Artist</label>
                <input type="text; font= calibri" class="form-control" placeholder="CD Artist" name="artist" required="required">
            </div>

            <div class="form-group">
                <label>Genre</label>
                <input type="text" class="form-control" placeholder="CD Genre" name="genre" required="required">
            </div>

            <div class="form-group">
                <label>Rack Name</label>
                <input type="text" class="form-control" placeholder="CD Rack Name" name="rackname" required="required">
            </div>

            <div class="form-group">
                <label>Capacity</label>
                <input type="text" class="form-control" placeholder="CD Rack Capacity" name="capacity" required="required">
            </div>

            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="CD Rack Model" name="model" required="required">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-bottom: 20px">
        </form>
         <?php
            if (isset($_POST['submit'])) 
            {
                $product = new Product();
                $product->setName($name = $_POST['name']);
                $product->setPrice($price = $_POST['price']);
                $product->setDiscount($discount = $_POST['discount']);
                echo "<pre>";
                echo "Product Name      : " . $product->getName() . "<br>";
                echo "Product Price     : Rp" . $product->getPrice() . "<br>";
                echo "Product Discount  : Rp" . $product->getDiscount() . "<br><br>";
                echo "</pre>";
//CDMusic
                $cd_music = new CDMusic();
                $cd_music->setArtist($artist = $_POST['artist']);
                $cd_music->setGenre($genre = $_POST['genre']);
                echo "<pre>";
                echo "CD Artist Name    : " . $cd_music->artist . "<br>";
                echo "CD Music Price    : Rp" . $cd_music->getPriceWithTaxCDM() . "<br>";
                echo "CD Music Discount : Rp" . $cd_music->getDiscountTaxCDM() . "<br>";
                echo "CD Music Genre    : " . $cd_music->genre . "<br><br>";
                echo "</pre>";
//CDRack
                $cd_rack = new CDRack();
                $cd_rack->setRackName($rackname = $_POST['rackname']);
                $cd_rack->setCapacity($capacity = $_POST['capacity']);
                $cd_rack->setModel($model = $_POST['model']);
                echo "<pre>";
                echo "CD Rack Name      : " . $cd_rack->rackname . "<br>";
                echo "CD Rack Price     : Rp" . $cd_rack->getPriceWithTaxCDR() . "<br>";
                echo "CD Rack Discount  : Rp" . $cd_rack->getDiscountTaxCDR() . "<br>";
                echo "CD Rack Capacity  : " . $cd_rack->capacity . "<br>";
                echo "CD Rack Model     : " . $cd_rack->model . "<br>";
                echo "</pre>";
            }
        ?>
    </div>
    </main>
</body>
</html>