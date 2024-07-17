<?php

function getLastProducts($limit = null)
{
    $sql = 'SELECT * FROM products ORDER BY id DESC'; //Сортировка в обратном порядке
    $link = createConnection();


    if($limit) {
        $sql =$sql.'LIMIT '.$limit;
    }
    $result = mysqli_query($link,$sql);
//    if ($result === false){
//        echo "error". mysqli_error($link);
//    }
    return createSmartyRecArr($result);
}