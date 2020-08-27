<?php

shuffle($all_products);
if (isset($_POST["top_sale_atc"])) {
  $cart->addToCart($_POST["user_id"], $_POST["item_id"]);
}
?>
<!-- TOP SALE SECTION -->
<section class="text-gray-700 body-font" id="top-sale-section">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
          Top Sales of the Year
        </h1>
        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
          Street art subway tile salvia four dollar toast bitters selfies
          quinoa yuccie synth meditation iPhone intelligentsia prism tofu.
          Viral gochujang bitters dreamcatcher.
        </p>
      </div>
    </div>
    <div class="">
      <div class="owl-carousel owl-theme relative" id="top-sale-carousel">
        <?php
        array_map(function ($item) {
        ?>
          <div class="p-4 mb-6 item product">
            <a href="products.php?item_id=<?php echo $item['item_id'] ?>">
              <img alt="content" class="h-full" src="<?php echo $item['item_image'] ?>" />
            </a>
            <div class="text-center">
              <h2 class="text-xl font-medium title-font text-gray-900 mt-5">
                <?php echo $item['item_name'] ?>
              </h2>
              <div class="product-rating py-1 text-yellow-500">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="product-price py-1">
                <span>
                  <?php echo $item['item_price'] ?>
                </span>
              </div>
              <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                <input type="hidden" name="user_id" value="1">
                <?php
                if (in_array($item["item_id"], $GLOBALS['itemsInCart'])) {

                ?>
                  <button type="submit" disabled class="bg-blue-500  text-xs text-white my-2 py-2 px-4 border border-blue-500 cursor-not-allowed border-transparent rounded">
                    In the Cart
                  </button>
                <?php } else { ?>
                  <button type="submit" name="top_sale_atc" class="bg-transparent hover:bg-blue-500 text-blue-700 text-xs hover:text-white my-2 py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Add to Cart
                  </button>
                <?php } ?>
              </form>
            </div>
          </div>
        <?php }, $all_products); ?>
      </div>
    </div>
  </div>
</section>
<!-- END OF TOP SALE SECTION -->