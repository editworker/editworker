<?php

include_once ('common.php');

$stock_sql = "INSERT INTO stock (stock_no, stock_name, stock_tel) VALUES ('{$stock_no}', '{$stock_name}', '{$stock_tel}')";
$result = mysqli_query($stock_conn, $stock_sql);
//mysqli_set_charset($jb_conn, 'utf8');
//mysqli_query($jb_conn, $jb_sql);

if($result){
    Header("Location:stock.php");
}else{
    echo "실패";
}
?>

