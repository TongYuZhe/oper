<?php
	class add extends op{
		public function get(){
			return $this -> result = $this -> a + $this -> b;
		}
	}
?>