<!-- Product Section -->

<?php 
    $product = $article->getOne($_GET['item']);
    $product = $product[0];
?>

<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src=".<?php echo htmlspecialchars($product['image_path'] , ENT_QUOTES, 'UTF-8'); ?>.png" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to buy</button>
                    </div>
                    <div class="col">
                        <button id="<?php echo htmlspecialchars( "ATC_" . $product['id'], ENT_QUOTES, 'UTF-8'); ?>" type="submit" class="btn btn-warning form-control addtocart">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo htmlspecialchars( $product['nom'], ENT_QUOTES, 'UTF-8'); ?></h5>
                <small>by <?php echo htmlspecialchars(explode(" ",$product['nom'])[0], ENT_QUOTES, 'UTF-8'); ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                </div>
                <hr class="m-0">
                <!-- Price Section -->
                <table class="my-3">
                    <tr class="font-raleway font-size-14">
                        <td>M.R.P:</td>
                        <td class="strike"><?php echo (floatval($product['prix']) + floatval($product['prix']) * 0.05)  . " DH"; ?></td>
                    </tr>
                    <tr class="font-raleway font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger"><span><?php echo floatval($product['prix'])  . " DH"; ?></span><small
                                class="text-dark font-size-12">&nbsp;&nbsp;Inc. VAT</small></td>
                    </tr>
                    <tr class="font-raleway font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger"><?php echo floatval($product['prix']) * 0.05  . " DH"; ?></span></td>
                    </tr>
                </table><!-- Price Section End -->

                <!-- Policy Section -->
                <div class="d-flex">
                    <div class="return text-center mr-5">
                        <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa-retweet border p-3 rounded-pill" aria-hidden="true"></span>
                        </div>
                        <a href="#" class="font-raleway font-size-12">10 days<br>Replacement</a>
                    </div>
                    <div class="return text-center mr-5">
                        <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa-truck border p-3 rounded-pill" aria-hidden="true"></span>
                        </div>
                        <a href="#" class="font-raleway font-size-12">1-2 Days<br>Delivery</a>
                    </div>
                    <div class="return text-center mr-5">
                        <div class="font-size-20 my-2 color-secondary">
                            <span class="fas fa-check border p-3 rounded-pill" aria-hidden="true"></span>
                        </div>
                        <a href="#" class="font-raleway font-size-12">1 Year<br>Warranty</a>
                    </div>
                </div><!-- Policy Section End -->
                <hr>

                <div class="row">
                    <!-- Color Section -->
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-primary-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                                <div class="p-2 color-secondary-bg rounded-circle">
                                    <button class="btn font-size-14"></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- Color Section End-->
                </div>

                <!-- Ram size Section ENd -->
            </div>
            <div class="col-12 py-4">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p><?php echo htmlspecialchars($product['descrip'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </div>
    </div>
</section><!-- Product Section End -->
