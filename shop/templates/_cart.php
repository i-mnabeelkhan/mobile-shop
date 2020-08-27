<?php
if (isset($_POST["delete_cart"])) {
  $deltedRecord = $cart->deleteCart($_POST["cart_id"]);

}
?>
<!-- START OF CART SECTION -->
<section class="text-gray-700 body-font">
  <div class="container px-5 py-10 mx-auto flex flex-wrap">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
          Shoping Cart
        </h1>
        <div class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
          Street art subway tile salvia four dollar toast bitters selfies
          quinoa yuccie synth meditation iPhone intelligentsia prism tofu.
          Viral gochujang bitters dreamcatcher.
        </div>
      </div>
    </div>

    <?php
    $cartData = $products->getData("cart");
    $subTotal = array();
    $tot = array();
    if ($cartData == null) echo "<div class='w-full flex justify-center'><img src='./assets/blog/empty_cart.png' class='w-64 object-center'></div>";
    else {
      echo '<div class="flex flex-wrap -m-4">';
      foreach ($cartData as $cartItem) {
        $arr = $products->getProduct($cartItem["item_id"]);
        $totalPrice[] = $arr[0]["item_price"] * $cartItem["item_quantity"];
        $item = $arr[0];


    ?>


        <div class="p-4 lg:w-1/2 md:w-full">
          <div class="relative items-center flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
            <div class="w-32 h-32 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center flex-shrink-0">
              <img src="<?php echo $item['item_image'] ?>" alt="" />
            </div>
            <div class="flex-grow">
              <div class="text-gray-900 flex justify-between text-lg title-font font-medium mb-3">
                <div>
                  <?php echo $item['item_name'] ?>
                </div>
                <div class="text-indigo-500">
                  <span class="cart-product-quantity" id="quantity-<?php echo $item['item_id'] ?>"><?php echo $cartItem["item_quantity"] ?></span> x <span class="cart-product-price" id="price-<?php echo $item['item_id'] ?>"><?php echo $item["item_price"] ?></span>
                </div>
              </div>
              <p class="leading-relaxed text-base">
                <span class="text-sm">by: <?php echo $item['item_brand'] ?></span>
                Blue bottle crucifix vinyl post-ironic four dollar toast
                vegan taxidermy. Gastropub indxgo juice poutine.
              </p>
              <div class="product-rating py-1 text-yellow-500">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="flex w-full mt-4">
                <div class="custom-number-input h-10 w-32">
                  <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                    <button data-action="decrement" data-id="<?php echo $item['item_id'] ?>" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                      <span class="m-auto px-2 text-2xl font-thin">−</span>
                    </button>
                    <input type="number" disabled data-id="<?php echo $item['item_id'] ?>" class="outline-none focus:outline-none text-center w-8 bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-basecursor-default flex items-center text-gray-700 outline-none" name="custom-input-number" value="<?php echo $cartItem['item_quantity'] ?>" />
                    <button data-id="<?php echo $item['item_id'] ?>" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                      <span class="m-auto px-2 text-2xl font-thin">+</span>
                    </button>
                  </div>
                </div>
              </div>
              <form method="POST">
                <input type="hidden" name="cart_id" value="<?php echo $cartItem['cart_id'] ?>">
                <button class="absolute left-0 top-0" type="submit" name="delete_cart">
                  <i class="fas fa-times px-3 py-2 hover:text-red-700"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
    <?php }
      echo "</div>";
    }
    ?>

    <div class="flex flex-col mx-auto bg-gray-200 text-center mt-5 w-full p-4 rounded-lg">
      <strong>Total Price: <span id="total-cart-price" class="text-indigo-500"><?php echo $cart->getSum($totalPrice ?? [0]); ?></span></strong>
    </div>
  </div>
</section>
<!-- END OF CART SECTION -->