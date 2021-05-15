$(document).ready(function () {
  // Owl Carousel for Banner section
  $('#banner-area .owl-carousel').owlCarousel({
    loop: true,
    dots: true,
    items: 1,
    autoplay: true,
    lazyLoad: true,
  });

  // Top Sale OWL Carousel
  $('#top-sale .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });

  // Isotope filter
  let $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows',
  });

  // Filter items on button click
  $('.button-group').on('click', 'button', function () {
    let filterValue = $(this).attr('data-filter');
    $grid.isotope({
      filter: filterValue,
    });
  });

  // Product Quantity Section
  const $qtyUp = $('.qty .qty-up');
  const $qtyDown = $('.qty .qty-down');
  // let $input = $(".qty .qty-input");

  // Add event listeners to qty buttons
  // Increase
  $qtyUp.click(function (e) {
    let $input = $(`.qty-input[data-id='${$(this).data('id')}']`);
    if (isNaN($input.val())) {
      $input.val(1);
      return;
    }

    if ($input.val() >= 1 && $input.val() < 10) {
      $input.val(function (i, oldValue) {
        return ++oldValue;
      });
    }

    updatePricings($input);
  });
  // Decrease
  $qtyDown.click(function (e) {
    let $input = $(`.qty-input[data-id='${$(this).data('id')}']`);
    if (isNaN($input.val())) {
      $input.val(1);
      return;
    }

    if ($input.val() > 1 && $input.val() <= 10) {
      $input.val(function (i, oldValue) {
        return --oldValue;
      });
    }

    updatePricings($input);
  });
});

(async () => {
  await getCartCount();
})();

$('.addtocart').click(async function (e) {
  e.preventDefault();
  e.stopPropagation();
  console.log('bruh',$(this).attr('prodId'));
  await localforage.setItem($(this).attr('prodId'), 1);
  await getCartCount();
});


async function getCartCount() {
  const keys = await localforage.keys();
  let cartCount = 0;
  for (let key of keys) {
    if (key.includes('ATC')) cartCount++;
  }
  await localforage.setItem('cartCount', cartCount);

  $('.cartCount').html(cartCount);
}

async function goToCart() {
  let keys = await localforage.keys();
  keys = keys.filter((val) => val != 'cartCount');
  keys = keys.map((e) => e.replace('ATC_', ''));
  window.location.href = `cart.php?cartItems=${keys}`;
}

$('#cartBtn').click(async (e) => {
  e.preventDefault();
  e.stopPropagation();

  await goToCart();
});

$('.deleteCart').click(async function () {
  let id = $(this).attr('id');
  id = id.split('_')[1];
  id = 'ATC_' + id;
  await localforage.removeItem(id);

  await goToCart();
});

function updateTotal() {
  let sum = 0;
  $('.product-price').each(function () {
    sum += Number($(this).html().split(' ')[0]);
  });
  sum = sum + ' DH';

  $('#deal-price').html(sum);
}

function updatePricings($input){

  let id = $input.attr('data-id');
  id = id.split('_')[1];
  let price = $('body').find(`#CI_${id} .product-price`);

  let priceVal = parseFloat(price.attr('op'));
  let qtyVal = $input.val();

  $(price).html(priceVal * qtyVal + ' DH');

  updateTotal();
}

$(document).ready(function(){
  updateTotal();
});

$('.displayItem').click(function() {
  let id = $(this).attr('item');
  id = id.split('_')[1];
  window.location.href = `product.php?item=${id}`;
});
