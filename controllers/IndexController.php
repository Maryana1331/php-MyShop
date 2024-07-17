<?php
/**
 * Контролер главное страницы
 **/
include_once '../models/CategoriesModel.php';
include_once '../models/ProductModel.php';


function indexAction($smarty) {
    $allCategories = getAllCategories();
    $lastProducts = getLastProducts(LASTPRODUCTS);

    $smarty-> assign('pageTitle', 'Главная страница');
    $smarty-> assign('allCategories',$allCategories);
    $smarty-> assign('lastProducts',$lastProducts);
    loadTemplate($smarty,'index');
}