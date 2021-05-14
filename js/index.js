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
    loop: true,
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
  });
});

(async () => {
  await getCartCount();
  $('.addtocart').click(async function (e) {
    console.log($(this).attr('id'));
    await localforage.setItem($(this).attr('id'), true);
    await getCartCount();
  });
})();

async function getCartCount() {
  const keys = await localforage.keys();
  let cartCount = 0;
  for (let key of keys) {
    if (key.includes('ATC')) cartCount++;
  }
  await localforage.setItem('cartCount', cartCount);

  $('.cartCount').html(cartCount);
}

$("#cartBtn").click(async () => {
  let keys = await localforage.keys();
  keys = keys.filter(val => val != 'cartCount');
  keys = keys.map(e => e.replace('ATC_',''));
  window.location.href=`index.php?cartItems=${keys}`;
});