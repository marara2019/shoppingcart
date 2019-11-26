 <?php
require_once "Item2.php";
?>
<?php
/**
 * 商品の配列を生成する。
 * @return array Itemクラスのインスタンスを要素とする配列
 */
function createItems():array {
	$items = array(
		new Item("The Net", 500,114),
		new Item("Star Wars: Force Awakens",2,800,150), 
		new Item("Outbreak",900,129));
	return $items;
}
?>