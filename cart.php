<?php
require_once("func.php");
session_start();

/* take a request in session*/
$cart = null;
if (isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
}else{
    $cart = [];
}
/* take order from request parameter*/
$id=-1;
if (isset($_REQUEST["id"])){
    $id=$_REQUEST["id"];
}
$mode="";
if(isset($_REQUEST["mode"])){
    $mode=$_REQUEST["mode"];
}

/* take the selected products*/
$items=createItems();
$items=$items[$id];
/* enlist in cart*/
$cart[]= $item;
/* return to session in order to relist the list or products*/
$_SESSION["cart"]=$cart;

if ($mode=="clear"){
    unset($_SESSION);
    session_destroy();
    $cart=[];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04 - ショップシステム</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />	
</head>

<body>
	<h1>ショップシステム</h1>
	<p><a href="entry.php">買い物を続ける</a>　<a href="cart.php?mode=clear">カートをクリアする</a></p>
	<table>
		<tr>
			<th>書籍名</th>
			<th>著者</th>
			<th>価格</th>
			<th>ISBNコード</th>
			<th></th>
		</tr>
		<?php for($i = 0;$i<count($cart);$i++){?>
		<tr>
			<td><?=$cart[$i]->getPname()?></td>
			<td><?=$cart[$i]->getWname()?></td>
			<td><?=$cart[$i]->getPrice()?>円</td>
			<td><?=$cart[$i]->getIsbn()?>円</td>
		</tr>
		<?php }?>
			</table>
</body>

</html>