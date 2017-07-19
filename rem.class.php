<?php
	class rem extends op{
		public function get(){
			if($this -> b != 0){
				return $this -> result = $this -> a / $this -> b;
			}else{
				return $this -> result = '除数不能为0';
				break;
			}
		}
	}	
?>