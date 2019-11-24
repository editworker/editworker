<?php

include_once ('common.php');

$stock_sql = "SELECT * FROM stock";
$result = mysqli_query($stock_conn, $stock_sql);
$row_count =  mysqli_num_rows($result);

//업데이트쿼리
for($i=0; $i<$row_count; $i++){
    $stock_id = $_POST['stock_id'][$i];
    $stock_no = $_POST['stock_no'][$i];
    $stock_name = $_POST['stock_name'][$i];
    $stock_tel = $_POST['stock_tel'][$i];
    $stock_sql_edit = "UPDATE stock SET stock_no='{$stock_no}', stock_name='{$stock_name}', stock_tel='{$stock_tel}' WHERE stock_id = $stock_id";
    mysqli_query($stock_conn, $stock_sql_edit);
}

//삭제쿼리
if(isset($stock_delete)){
    for($k=0; $k<$row_count; $k++){
        $stock_id = $_POST['stock_id'][$k];
        $stock_no = $_POST['stock_no'][$k];
        $stock_name = $_POST['stock_name'][$k];
        $stock_tel = $_POST['stock_tel'][$k];
        $stock_delete = $_POST['stock_delete'][$k];
    $stock_sql_delete = "DELETE FROM stock WHERE stock_id = '{$stock_delete}'";
    mysqli_query($stock_conn, $stock_sql_delete);
    //Header("Location:stock.php");
    }
}
Header("Location:stock.php");
?>