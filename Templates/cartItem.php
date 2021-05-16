<div id="<?php echo htmlspecialchars( 'CI_' . $item['id'], ENT_QUOTES, 'UTF-8'); ?>"
    class="row border-top py-3 mt-3 cartItem">
    <div class="col-sm-2">
        <img src=".<?php echo htmlspecialchars($item['image_path'] , ENT_QUOTES, 'UTF-8'); ?>.png" alt="cart-item"
            class="img-fluid w-100" style="height: 140px;object-fit:scale-down;">
    </div>
    <div class="col-sm-8">
        <h2 class="font-baloo font-size-20">
            <?php echo htmlspecialchars( $item['nom'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <small>by
            <?php echo htmlspecialchars(explode(" ",$item['nom'])[0], ENT_QUOTES, 'UTF-8'); ?></small>
        <!-- Quantity -->
        <div class="qty d-flex pt-2">
            <div class="d-flex font-raleway w-25">
                <button class="qty-up border bg-light"
                    data-id="<?php echo htmlspecialchars( 'CI_' . $item['id'], ENT_QUOTES, 'UTF-8'); ?>"><i
                        class="fas fa-caret-up"></i></button>
                <input type="text" name="qty-input"
                    data-id="<?php echo htmlspecialchars( 'CI_' . $item['id'], ENT_QUOTES, 'UTF-8'); ?>"
                    class="qty-input border px-2 bg-light w-100" disabled value="1" placeholder="1" value="1">
                <button class="qty-down border bg-light"
                    data-id="<?php echo htmlspecialchars( 'CI_' . $item['id'], ENT_QUOTES, 'UTF-8'); ?>"><i
                        class="fas fa-caret-down"></i></button>
            </div>
            <button id="<?php echo htmlspecialchars( 'DFC_' . $item['id'], ENT_QUOTES, 'UTF-8'); ?>" type="submit"
                class="btn font-baloo text-danger px-3 deleteCart">Delete</button>
        </div>
        <!-- Quantity End -->
    </div>
    <div class="col-sm-2 text-right">
        <div class="font-size-20 text-danger font-baloo">
            <span class="product-price" op="<?php echo $item['prix']; ?>"><?php echo $item['prix']; ?>
                DH</span>
        </div>
    </div>
</div>