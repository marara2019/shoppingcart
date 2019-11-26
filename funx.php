 <?php
require_once "Item.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * @return array Itemクラスのインスタンスを要素とする配列
 */
function createItems():array {
	$items = array(
		new Item("Head First PHP & MySQL",4650,"Lynn Beighley","978-4873114446"),
		new Item("リーダブルコード",2600,"Dustin Boswell","978-4873115658"), 
		new Item("Head First デザインパターン",5060,"Eric Freeman","978-4873112497"),
		new Item("PHP によるデザインパターン入門",2400,"下岡秀幸","978-4798015163"));
	return $items;
}
?>