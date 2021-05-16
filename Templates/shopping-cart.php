<!-- Shopping Cart Section -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h2 class="font-baloo font-size-20">Shopping Cart</h2>
        <!-- Items Section -->
        <div class="row">
            <div class="col-sm-9">
                <?php 
                    $keys = $_GET['cartItems'];
                    $keys = explode(',',$keys);
                    $cartItems = array_filter($articles,function ($key) use ($keys) {
                            return in_array($key['id'], $keys);
                        }
                    );
                    array_map( function ($item){ 
                        include './Templates/cartItem.php';
                    }, $cartItems);
                ?>
            </div>
            <!-- Sub total section -->
            <div class="col-sm-3">
                <div class="sub-total text-center mt-2">
                    <p class="font-size-12 font-raleway text-success py-3"><i class="fas fa-check"> Your order is
                            eligible for free delivery.</i></p>
                    <div class="border-top py-4">
                        <h2 class="font-baloo font-size-20">Subtotal (<?php echo count($cartItems); ?>
                            items):&nbsp;<span class="text-danger"><span class="text-danger" id="deal-price">0
                                    DH</span></span></h2>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to checkout</button>
                    </div>
                </div>
            </div> <!-- Sub total section End-->
        </div>
        <!-- Items Section End -->
    </div>
</section><!-- Shopping Cart Section End -->