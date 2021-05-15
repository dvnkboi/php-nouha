<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h2 class="font-rubik font-size-20">Top Sales</h2>
        <hr>
        <!-- OWL Carousel -->
        <div class="owl-carousel owl-theme">
            <?php array_map( function ($item){ 
                include './Templates/productItem.php';
            }, $topSaleArticles);?>
        </div>
    </div> <!-- OWL Carousel End-->
    </div>
</section><!-- Top Sale End -->