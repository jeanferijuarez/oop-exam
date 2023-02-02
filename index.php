<?php
    require_once "Medicine.php";
    require_once "Cart.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        $medicine = [];    

        $medicine[0] = new Medicine;
        $medicine[0]->setName("Biogesic");
        $medicine[0]->setDescription("Biogesic is a trusted brand of paracetamol, a medication that is typically used to relieve mild to moderate pain and reduce fevers.");
        $medicine[0]->setPrice(1.5);
        $medicine[0]->setDose(500);
        $medicine[0]->setType("Branded");
        $medicine[0]->setExpirationDate("12/31/2023");

        $medicine[1] = new Medicine;
        $medicine[1]->setName("Paracetamol");
        $medicine[1]->setDescription("Paracetamol, also known as acetaminophen, is a medication used to treat fever and mild to moderate pain.");
        $medicine[1]->setPrice(0.5);
        $medicine[1]->setDose(500);
        $medicine[1]->setType("Generic");
        $medicine[1]->setExpirationDate("10/31/2023");

        $cart = new Cart;

        $cart->addToCart($medicine[0]);
        $cart->addToCart($medicine[1]);
        $cart->viewCart();
        $cart->computeTotal();
    ?>
</body>
</html>