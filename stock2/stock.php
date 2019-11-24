
<?php

include_once ('common.php');

$stock_sql = "SELECT * FROM stock ORDER BY stock_no ASC";
$result = mysqli_query($stock_conn, $stock_sql);
mysqli_query($stock_conn, $stock_sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stock</title>
</head>


<body>
<div class="stock_wrap">

    <!--리스트 추가-->
    <div class="stock_add">
        <div class="stock_add_in">
            <form action="stock_update.php" name="stockForm" id="stockForm" method="POST">
                <h2 class="stock_add_tit">리스트 추가</h2>
                <ul class="stock_add_list">
                    <li class="stock_add_item">
                        <input type="text" name="stock_no" id="stock_no" placeholder="순서" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" autofocus>
                    </li>
                    <li class="stock_add_item">
                        <input type="text" name="stock_name" id="stock_name" placeholder="이름">
                    </li>
                    <li class="stock_add_item">
                        <input type="text" name="stock_tel" id="stock_tel" placeholder="연락처">
                    </li>
                    <li class="stock_add_item">
                        <input type="submit" class="stock_add_submit stock_btn" value="등록">
                    </li>
                </ul>
            </form>
        </div> <!--stock_add_in end-->
    </div> <!--stock_add end-->

    <div class="stock_list">
        <div class="stock_table">
            <div class="stock_thead">
                <h2 class="stock_list_tit">주식 리스트</h2>
                <ul class="stock_tr">
                    <li class="stock_th">삭제</li>
                    <li class="stock_th">번호</li>
                    <li class="stock_th">이름</li>
                    <li class="stock_th">전화번호</li>
                </ul>
            </div>
            <!--주식리스트-->
            <div class="stock_body">
                <form action="stock_edit_update.php" method="POST">
                <?php for($i=0; $row=mysqli_fetch_array($result); $i++) { ?>
                    <ul class="stock_item<?php echo $i; ?> stock_item">
                        <li class="stock_item_in">
                            <input type="checkbox" name="stock_delete[]" value="<?php echo $row['stock_id']; ?>">
                        </li>
                        <li class="stock_item_in">
                            <input type="hidden" name="stock_id[]" id="stock_id" value="<?php echo $row['stock_id']; ?>">
                            <input type="text" name="stock_no[]" value="<?php echo $row['stock_no']; ?>">
                        </li>
                        <li class="stock_item_in">
                            <input type="text" name="stock_name[]" value="<?php echo $row['stock_name']; ?>">
                        </li>
                        <li class="stock_item_in">
                            <input type="text" name="stock_tel[]" value="<?php echo $row['stock_tel']; ?>">
                        </li>
                    </ul>
                <?php } ?>
                    <!--stock_edit_btn-->
                    <div class="stock_edit_btn">
                        <input type="submit" value="수정완료" class="stock_btn">
                    </div>
                </form>
            </div> <!--stock_body end-->
        </div> <!--stock_table end-->
    </div> <!--stock_list end-->
</div> <!--stock_wrap end-->


</body>
</html>
