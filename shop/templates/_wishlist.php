<?php
if (isset($_POST["delete_wishlist"])) {
  $deltedRecord = $cart->deleteCart($_POST["item_id"], "wishlist", "item_id");
}
if (isset($_POST["save_for_later"])) {
  $cart->saveForLater($_POST["user_id"], $_POST["item_id"]);
}
?>
<!-- START OF WISHLIST SECTION -->
<section class="text-gray-700 body-font">
  <div class="container px-5 py-10 mx-auto flex flex-wrap">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
          Your Wishlist
        </h1>
        <div class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
          Street art subway tile salvia four dollar toast bitters selfies
          quinoa yuccie synth meditation iPhone intelligentsia prism tofu.
          Viral gochujang bitters dreamcatcher.
        </div>
      </div>
    </div>
    <?php
    $wishlists = $products->getData("wishlist");
    if ($wishlists == null) echo "<div class='w-full flex justify-center'><img src='./assets/blog/empty_cart.png' class='w-64 object-center'></div>";
    else {

      echo '<div class="flex flex-wrap -m-4">';
      foreach ($wishlists as $wishlist) {
        $arr = $products->getProduct($wishlist["item_id"]);
        $item = $arr[0];
    ?>
        <div class="p-4 lg:w-1/2 md:w-full">
          <div class="relative items-center flex border-2 rounded-lg border-gray-200 p-8 sm:flex-row flex-col">
            <div class="w-32 h-32 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center flex-shrink-0">
              <img src="<?php echo $item["item_image"] ?>" alt="" />
            </div>
            <div class="flex-grow">
              <div class="text-gray-900 flex justify-between text-lg title-font font-medium mb-3">
                <div>
                  <?php echo $item["item_name"] ?>
                </div>
              </div>
              <p class="leading-relaxed text-base">
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
              <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900"><?php echo $item["item_price"] ?></span>
                <form method="POST" class="flex ml-auto">
                  <button name="save_for_later" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                    Add to Cart
                  </button>
              </div>
              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
              <input type="hidden" name="user_id" value="1">
              <button type="submit" name="delete_wishlist" class="absolute left-0 top-0">
                <i class="fas fa-times px-3 py-2 hover:text-red-700"></i>
              </button>
              </form>

            </div>
          </div>
        </div>
    <?php }
      echo "</div>";
    } ?>
  </div>
</section>
<!-- END OF WISHLIST SECTION -->