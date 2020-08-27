<?php
ob_start();
//REQUIRE MYSQL CONNECTION
require("database/DBController.php");
$db = new DBController();
require("database/Product.php");
$products = new Product($db);
$all_products = $products->getData();
require("database/Cart.php");
$cart = new Cart($db);
$arr = $products->getData("cart");
$GLOBALS['itemsInCart'] = $cart->getCartIds($products->getData("cart"));
$GLOBALS['itemsInWishlist'] = $cart->getCartIds($products->getData("wishlist"));
