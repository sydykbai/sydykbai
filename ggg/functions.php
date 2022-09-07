<?php
function selectDb($connect){
    $sql='SELECT * FROM `mabel`';
    $res=mysqli_query($connect, $sql);
    $products=[];
    while ($row=$res->fetch_assoc()){
        $products[$row['id']]=$row;
    }
return $products;
}

function categoryDb($connect){
    $sql='SELECT * FROM `categories`';
    $res=mysqli_query($connect,$sql);
    $categories=[];
    while ($row=$res->fetch_assoc()){
        $categories[$row['id']]=$row;
    }
    return $categories;
}

function getTree($categories){
    $tree=[];
    foreach ($categories as $id=>&$node){
        if ($node['parent_id'] == 0){
            $tree[$id] = &$node;
        }
else{
            $categories[$node['parent_id']]['child'][$id] = &$node;
        }
    }
    return $tree;
}
?>