<?php
/**
 * 商品クラス
 */
class Item {
	/**
	 * 属性
	 * @var string $name  商品名
	 * @var int    $price 価格
	 */
	private $name;
	private $price;

	/**
	 * コンストラクタ
	 * @param string $name  商品名
	 * @param int    $price 価格
	 */
	function __construct(string $Pname, int $price,string $Wname, string $isbn) {
		$this->Pname = $Pname;
		$this->price = $price;
		$this->Wname = $Wname;
		$this->isbn=$isbn;
	}

	/** アクセサメソッド群 */

	function setPname(string $Pname):void {
		$this->Pname = $Pname;
	}
	function getPname():string {
		return $this->Pname;
	}
	function setWname(string $Wname):void {
		$this->Wname = $Wname;
	}
	function getWname():string {
		return $this->Wname;
	}

	function setPrice(int $price):void {
		$this->price = $price;
	}
	function getPrice():string {
		return number_format($this->price);
	}
	function setIsbn(string $isbn):void {
		$this->isbn = $isbn;
	}
	function getIsbn():string {
		return $this->isbn;
	}
}
?>