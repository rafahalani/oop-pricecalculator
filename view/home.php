<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body class="text-center">
<form method="get">
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

</body>
</html>