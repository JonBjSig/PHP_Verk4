<?php
class Book
{
	$title = "";
	$price = 0;
	
	function __construct($booktitle, $bookprice){
		$this->title = $booktitle;
		$this->price = $bookprice;
	}
	
	function setPrice($newprice){
		$this->price = $newprice;
	}
	
	function getPrice(){
		return $this->price;
	}
	
	function setTitle($newtitle){
		$this->title = $newtitle;
	}
	
	function getTitle(){
		return $this->title;
	}
}
?>