<?php

require './database/DBController.php';

// Include header template.
require_once './header.php';

// var_dump($db);
// Include banner area template.
include './Templates/banner-area.php';

// Include Top-sale area template.
include './Templates/top-sale-area.php';

// Include Special Price area template.
include './Templates/special-price-area.php';

// Include banner-ads area template.
include './Templates/banner-ads-area.php';

// Include banner-ads area template.
include './Templates/new-phones-area.php';

// Include footer template.
require_once './footer.php';
