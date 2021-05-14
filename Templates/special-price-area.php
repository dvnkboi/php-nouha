<!-- Special Price -->
<section id="special-price">
    <div class="container py-4">
        <h2 class="font-rubik font-size-20">Special Price</h2>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <button class="btn" data-filter=".apple">Apple</button>
            <button class="btn" data-filter=".samsung">Samsung</button>
            <button class="btn" data-filter=".xiaomi">Xiaomi</button>
        </div>
        <div class="grid">
        <?php array_map( function ($item){ ?>
            <div class="grid-item <?php echo htmlspecialchars(explode(" ",$item['nom'])[0], ENT_QUOTES, 'UTF-8'); ?> border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-raleway">
                        <div class="text-center">
                            <h6><?php echo htmlspecialchars(explode(" ",$item['nom'])[0] . ' ' . $item['nom' ], ENT_QUOTES, 'UTF-8'); ?></h6>
                            <div class="rating text-warning font-size12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo htmlspecialchars($item['prix'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                            <button id="<?php echo htmlspecialchars( "ATC_" . $item['id'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-warning font-size-12 addtocart">Add To</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $articles);?>
        </div>
    </div>
</section><!-- Special Price End -->
