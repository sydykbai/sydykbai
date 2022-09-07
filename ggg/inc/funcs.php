<?php
function get_products(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM phones");
    return $res->fetchAll();
}

