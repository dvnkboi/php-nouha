<!-- Special Price -->
<section id="special-price">
    <div class="container py-4">
        <h2 class="font-rubik font-size-20">Products</h2>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <button class="btn" data-filter=".apple">Apple</button>
            <button class="btn" data-filter=".samsung">Samsung</button>
            <button class="btn" data-filter=".xiaomi">Xiaomi</button>
        </div>
        <div class="grid">
        <?php array_map( function ($item){ 
            include './Templates/productItem.php';
        }, $articles);?>
        </div>
    </div>
</section><!-- Special Price End -->
