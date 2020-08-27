//init Owl Carousel for Hero Section
$("#hero-carousel").owlCarousel({
  nav: false,
  loop: true,
  items: 1,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
  dots: true,
});
//init Owl Carousel for Top Sales Section
$("#top-sale-carousel").owlCarousel({
  nav: true,
  dots: false,
  loop: true,
  items: 1,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 5,
    },
  },
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
});
//init Owl Carousel for New Phones Section
$("#new-phones-carousel").owlCarousel({
  nav: false,
  dots: true,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    800: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 5,
    },
  },
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  autoplaySpeed: 800,
});

//isotope filter for filtering brand-items
var $brandItems = $("#brands-grid").isotope({
  layoutMode: "fitRows",
  itemSelector: ".brand-item",
});

$("#brand-filter").on("click", "button", function () {
  var filterValue = $(this).attr("data-filter");
  $("#brand-filter button").removeClass('is-active');
  $(this).addClass("is-active");
  $brandItems.isotope({ filter: filterValue });
});

//Counter
$(".custom-number-input button").on("click", function(){
  var id = $(this).attr("data-id");
  if($(this).attr("data-action") == "increment"){
    var oldValue= $("input[data-id="+id+"]").val();
    if(oldValue<10){
      oldValue = parseInt(oldValue)+1;
    }
    $("input[data-id="+id+"]").val(oldValue);
    $("#quantity-"+id).html(oldValue) ;
    $("#total-cart-price").html(calcSum());
  }
  else
    {
      var oldValue= $("input[data-id="+id+"]").val();
    if(oldValue>1){
      oldValue = parseInt(oldValue)-1;
    }
    $("input[data-id="+id+"]").val(oldValue);
    $("#quantity-"+id).html(oldValue) ;
    $("#total-cart-price").html(calcSum());

    }
});

//totalPrice of all products

var prices = document.getElementsByClassName("cart-product-price");
var quantities = document.getElementsByClassName("cart-product-quantity");

function calcSum(){
    var sum=0;
    var arr= [];
  for(i=0; i<prices.length; i++){
    arr.push(parseFloat(prices[i].innerHTML) * parseFloat(quantities[i].innerHTML));
    sum += (arr[i]);
  }
  return parseFloat(sum).toFixed(2);
}
