<?php

//DB 연동 정보
$stock_host = 'ellan.pergayoo.net';
$stock_user = 'root';
$stock_db = 'stock';
$stock_pw = 'roahdla99!';
$stock_port = '3306';

//DB 네임
$stock_id = $_POST['stock_id'];
$stock_no = $_POST['stock_no'];
$stock_name = $_POST['stock_name'];
$stock_tel = $_POST['stock_tel'];
$stock_edit = $_POST['stock_edit'];
$stock_delete = $_POST['stock_delete'];

$stock_conn = mysqli_connect($stock_host, $stock_user, $stock_pw, $stock_db, $stock_port) or die("연결 실패");

?>

<style>
    *{margin:0; padding:0; list-style:none; text-decoration:none; box-sizing:border-box;}
    input{border:none; outline:none; display:block; width:100%; background:none;}

    /*stock_list*/
    .stock_list{width:100%; max-width:800px; margin:0 auto; position:relative; top:200px;}
    .stock_table{text-align:center; border:1px solid #333541;}
    .stock_list_tit{line-height:40px; width:800px; background:#333541; color:#fff; text-align:center;}

    /*stock_thead*/
    .stock_tr{overflow:hidden; padding-top:20px;}
    .stock_th{display:inline-block; line-height:40px;}
    .stock_th:nth-child(1){width:50px;}
    .stock_th:nth-child(2){width:100px;}
    .stock_th:nth-child(3){width:160px;}
    .stock_th:nth-child(4){width:200px;}

    /*stock_tbody*/
    .stock_item{margin:10px auto; width:650px;}
    .stock_item_in{display:inline-block; line-height:40px; background:#fff;}
    .stock_item_in:nth-child(1){width:50px;}
    .stock_item_in:nth-child(2){width:100px;}
    .stock_item_in:nth-child(3){width:160px;}
    .stock_item_in:nth-child(4){width:200px;}
    .stock_item_in input{border:1px solid #333541; line-height:40px; padding:0 10px;}
    .stock_submit{background:#333541; max-width:300px; height:40px; padding:10px; margin:0 auto; }
    .stock_del_btn{cursor:pointer; color:#fff}

    /*stock_edit_btn*/
    .stock_edit_btn{background:#333541; position:fixed; bottom:20px; right:20px; width:100px; height:40px;}
    .stock_edit_btn > a {display:block; color:#fff; font-size:13px; line-height:40px; text-align:center;}
    .stock_edit_btn > input{color:#fff; line-height:40px; cursor:pointer;}

    /*stock_add*/
    .stock_add{width:800px; position:fixed; top:10px; left:50%; margin-left:-400px; z-index:10; background:#f2f2f2;}
    .stock_add_in{position:relative;}
    .stock_add_tit{line-height:40px; width:800px; background:#333541; color:#fff; text-align:center;}
    .stock_add_list{text-align:center; padding:20px; overflow:hidden;}
    .stock_add_item{display:inline-block; background:#fff; margin:0 10px;}
    .stock_add_item:nth-child(1){width:100px;}
    .stock_add_item:nth-child(2){width:160px;}
    .stock_add_item:nth-child(3){width:200px;}
    .stock_add_item:nth-child(4){width:100px; background:#333541;}
    .stock_add_item > input{height:40px; padding:0 10px; color:#333541;}
    .stock_add_submit{cursor:pointer; color:#fff !important;}

    .stock_btn:hover{background:#000; transition:0.5s all; -webkit-transition:0.5s all;}

    /*stock_edit*/
    .stock_edit_wrap .stock_list{top:10px;}
    .stock_edit_wrap .stock_item{border:0;}
    .stock_edit_wrap .stock_item_in{height:40px; border:1px solid #333541;}
    .stock_edit_wrap .stock_item_in > input{line-height:40px; padding:0 10px;}

</style>
