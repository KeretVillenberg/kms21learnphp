<?php

use App\Controllers\ArticleController;
use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/page1', function(){
    include 'views/page1.php';
});
Router::addRoute('/page2', function(){
    include 'views/page2.php';
});
Router::addRoute('/articles', [ArticleController::class, 'index']);


