<?php
class book2 extends book
	
	$publisher = "";
	
	
	function __construct($booktitle, $bookprice, $bookpublisher){
		$this->title = $booktitle;
		$this->price = $bookprice;
		$this->publisher = $bookpublisher;
	}
	
	function getPublisher(){
		return $this->publisher;
	}
	
	function setPublisher($newPublisher){
		$this->publisher = newPublisher;
	}