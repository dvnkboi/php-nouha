<!-- Shopping Cart Section -->
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h2 class="font-baloo font-size-20">Shopping Cart</h2>
        <!-- Items Section -->
        <div class="row">
            <div class="col-sm-9">
            <?php ?>
                <?php foreach ($topSaleArticles as $item) : ?>
                <!-- Cart Item-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/S10" alt="cart-item" class="img-fluid" style="height: 120px;">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="font-baloo font-size-20">
                            <?php echo htmlspecialchars( $item['nom'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <small>by Samsung</small>
                        <!-- Rating -->
                        <div class="d-flex">
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-raleway font-size-14">20,394 ratings</a>
                        </div><!-- Rating End-->

                        <!-- Quantity -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-raleway w-25">
                                <button class="qty-up border bg-light" data-id="product1"><i
                                        class="fas fa-caret-up"></i></button>
                                <input type="text" name="qty-input" data-id="product1"
                                    class="qty-input border px-2 bg-light w-100" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="product1"><i
                                        class="fas fa-caret-down"></i></button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3">Delete</button>
                            <button type="submit" class="btn font-baloo text-danger">Save for later</button>
                        </div>
                        <!-- Quantity End -->
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product-price">152</span>
                        </div>
                    </div>
                </div>
                <!-- Cart Item End-->
                <?php endforeach; ?>
            </div>
            <!-- Sub total section -->
            <div class="col-sm-3">
                <div class="sub-total text-center mt-2">
                    <p class="font-size-12 font-raleway text-success py-3"><i class="fas fa-check"> Your order is
                            eligible for free delivery.</i></p>
                    <div class="border-top py-4">
                        <h2 class="font-baloo font-size-20">Subtotal (2 items):&nbsp;<span class="text-danger">$<span
                                    class="text-danger" id="deal-price">152</span></span></h2>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to checkout</button>
                    </div>
                </div>
            </div> <!-- Sub total section End-->
        </div>
        <!-- Items Section End -->
    </div>
</section><!-- Shopping Cart Section End -->