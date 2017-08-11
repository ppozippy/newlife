<?php
	class default_default extends main_main{
		function pageIndex($inPath){
			echo 'Hello World';
			return $this->fetch("default/index.html");
		}
	}
?>