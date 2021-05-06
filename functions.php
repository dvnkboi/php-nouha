<?php 

namespace mobileshop;

require_once './database/DBController.php';

$db = new DBController();

require_once './database/Article.php';

require_once './database/Category.php';

$article = new Article($db);

$articles = $article->getAll();

$category = new Category($db);

$categories = $category->getAll();

$topSaleArticles =  array_filter($articles, function($article){
    if($article['prix'] > 7000) return true; 
});
