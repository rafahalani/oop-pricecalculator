<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>view</title>
</head>
<body>

<select name = "customer">
    <?php foreach($allCustomers AS $customerItem):?>

    <option value="<?php echo $customerItem->getId()?>"

        <?php if(isset($_GET["customer"]) && $_GET["customer"] == $customerItem->getId()){
            echo ' selected="selected"';}
        ?>>

        <?php echo $customerItem->getName()?>

        </option><?php endforeach; ?></select>

<select name = "product">
    <?php foreach($allProducts AS $productItem):?>

        <option value="<?php echo $productItem->getId()?>"

            <?php if(isset($_GET["product"]) && $_GET["product"] == $productItem->getId()){
                echo ' selected="selected"';}
            ?>>

            <?php echo $productItem->getName()?>

        </option>
    <?php endforeach; ?>
</select>

<button type="submit">Search</button>
</form>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Customer:</h2>
            <ul class="text-left">
                <li>Name: <?php echo $customer->getName()?></li>
                <li>ID: <?php echo $customer->getId()?></li>
                <li>Group: <?php echo $customer->getGroup()?></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>Product:</h2>
            <ul class="text-left">
                <li>Name: <?php echo $product->getName()?></li>
                <li>Id: <?php echo $product->getId()?></li>
                <li>Description: <?php echo $product->getDescription()?></li>
                <li>Price: <?php echo $product->getPrice()?></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2>Group:</h2>
            <ul class="text-left">
                <li>Name: <?php echo $product->getName()?></li>
                <li>Id: <?php echo $product->getId()?></li>
                <li>Description: <?php echo $product->getDescription()?></li>
                <li>Price: <?php echo $product->getPrice()?></li>
            </ul>
        </div>
    </div>
</div>



<!--<div class="dropdown">
<form method="get">
    <select name = "customer">

        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CustomerId</button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
            <?php /*foreach($allCustomers AS $customerItem):*/?>
                <li role="presentation"> <?php /*echo $customerItem->getId() . '<br>';*/?></li>
            <?php /*endforeach;*/?>
        </ul>
    </select>
</form>
</div>
<div class="dropdown">
<form method="get">

        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">ProductId</button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">

            <?php /*foreach ($allProducts AS $productItem): */?>
            <li role="presentation"> <?php /*echo $productItem->getId() . '<br>';*/?></li>
            <?php /*endforeach;*/?>
        </ul>

</form>
</div>


<!--<h2> Your name : <?php /*/*echo '<br>' . $customer->getName() . '<br>';
    echo '<br>' . $customer->getId();
    */?>
</h2>-->-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
