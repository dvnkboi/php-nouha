<div item="<?php echo 'ITEM_' . $item['id']; ?>"
    class="grid-item displayItem <?php echo htmlspecialchars(explode(" ",$item['nom'])[0], ENT_QUOTES, 'UTF-8'); ?> border"
    style="width:200px;cursor:pointer;">
    <div class="item py-2 px-2">
        <div class="product font-raleway w-100">
            <div class="text-center d-flex justify-content-center align-items-center flex-column w-100">
                <div class="d-flex justify-content-center align-items-center" style="height:10rem;width:100%">
                    <img style="height:100%;width:100%;object-fit:scale-down;"
                        src=".<?php echo htmlspecialchars($item['image_path'] , ENT_QUOTES, 'UTF-8'); ?>.png"
                        alt="<?php echo htmlspecialchars($item['nom'], ENT_QUOTES, 'UTF-8'); ?>">

                </div>
                <h6 style="height:40px">
                    <?php echo htmlspecialchars(explode(" ",$item['nom'])[0] . ' ' . $item['nom' ], ENT_QUOTES, 'UTF-8'); ?>
                </h6>
                <div class="rating text-warning font-size12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                    <span><?php echo htmlspecialchars($item['prix'], ENT_QUOTES, 'UTF-8'); ?> DH</span>
                </div>
                <button prodId="<?php echo htmlspecialchars( "ATC_" . $item['id'], ENT_QUOTES, 'UTF-8'); ?>"
                    class="btn btn-warning font-size-12 addtocart">Add To</button>
            </div>
        </div>
    </div>
</div>