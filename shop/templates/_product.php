<?php
if (isset($_POST["product_atc"])) {
  $cart->addToCart($_POST["user_id"], $_POST["item_id"]);
}
if (isset($_POST["add_to_wishlist"])) {
  $cart->addToWishlist($_POST["user_id"], $_POST["item_id"]);
}
if (isset($_POST["save_for_later"])) {
  $cart->saveForLater($_POST["user_id"], $_POST["item_id"]);
}
if (isset($_GET["item_id"])) {
  $item = $products->getProduct($_GET["item_id"]);
  $item = $item[0] ?? 1;
?>
  <!-- START OF PRODUCT SECTION -->
  <section class="text-gray-700 body-font overflow-hidden">
    <div class="container px-5 pt-8 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap justify-center">
        <img alt="ecommerce" class="lg:w-1/2 md:w-1/4 w-64 lg:h-auto h-64 object-cover object-center rounded" src=" <?php echo $item["item_image"] ?>" />
        <div class="lg:w-1/2 md:w-3/4 w-full md:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">
            <?php echo $item["item_brand"] ?>
          </h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
            <?php echo $item["item_name"] ?>
          </h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3">4 Reviews</span>
            </span>
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
          <p class="leading-relaxed">
            Fam locavore kickstarter distillery. Mixtape chillwave tumeric
            sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo
            juiceramps cornhole raw denim forage brooklyn. Everyday carry +1
            seitan poutine tumeric. Gastropub blue bottle austin listicle
            pour-over, neutra jean shorts keytar banjo tattooed umami
            cardigan.
          </p>
          <div class="flex mt-6 items-center mb-2">
            <div class="flex">
              <span class="mr-3">Color</span>
              <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
              <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
              <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
            </div>
            <div class="flex ml-6 items-center">
              <span class="mr-3">Size</span>
              <div class="relative">
                <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-indigo-500 text-base pl-3 pr-10">
                  <option>SM</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                    <path d="M6 9l6 6 6-6"></path>
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="flex w-full pb-5 border-b-2 border-gray-200 mb-5">
            <div class="custom-number-input h-10 w-32">
              <div class="flex items-center flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <span class="mr-3">Quantity: </span>
                <span class=" hidden cart-product-quantity" id="quantity-<?php echo $item['item_id'] ?>"><?php echo $item['item_quantity'] ?></span>
                <button data-action="decrement" data-id="<?php echo $item['item_id'] ?>" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                  <span class="m-auto px-2 text-2xl font-thin">−</span>
                </button>
                <input type="number" disabled data-id="<?php echo $item['item_id'] ?>" class="outline-none focus:outline-none text-center w-8 bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center h-full text-gray-700 outline-none" name="custom-input-number" value="<?php echo $item['item_quantity'] ?>" />
                <button data-id="<?php echo $item['item_id'] ?>" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                  <span class="m-auto px-2 text-2xl font-thin">+</span>
                </button>
              </div>
            </div>
          </div>

          <div class="flex">
            <span class="cart-product-price hidden"> <?php echo $item["item_price"] ?></span>
            <span id="total-cart-price" class="title-font font-medium text-2xl text-gray-900"> <?php echo $item["item_price"] ?></span>
            <form method="post" class="flex ml-auto">
              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
              <input type="hidden" name="user_id" value="1">
              <?php
              if (in_array($item["item_id"], $GLOBALS['itemsInCart'])) {

              ?>
                <button type="submit" disabled class="bg-blue-500  text-xs text-white my-2 py-2 px-4 border border-blue-500 cursor-not-allowed border-transparent rounded">
                  In the Cart
                </button>
              <?php } else { ?>
                <?php if (!in_array($item["item_id"], $GLOBALS["itemsInWishlist"])) { ?>
                  <button type="submit" name="product_atc" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                    Add to Cart
                  </button>
                  <button type="submit" name="add_to_wishlist" class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                    </svg>
                  </button>
              <?php } else {
                  echo '<button type="submit" name="save_for_later" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                Add to Cart
              </button>
                <button type="submit" disabled name="add_to_wishlist" class="cursor-not-allowed rounded-full w-10 h-10 bg-indigo-500 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                  <svg fill="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                  </svg>
                </button>';
                }
              } ?>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF PRODUCT SECTION -->

<?php }
?>