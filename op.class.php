<?php
	class op extends sourceop{
		public $a;
		public $b;
		public $oper;
		public $result;
		public function __call($call,$call2){
			echo '<br/>'.$call.'()方法不存在';
		}
		public function switc(){
			switch($this -> oper){
				case '+':
					$opz = new add ($this -> a,$this -> b,$this -> oper);
					return $opz -> get();
				case '-':
					$opz = new sub ($this -> a,$this -> b,$this -> oper);
					return $opz -> get();
				case '*':
					$opz = new ride($this -> a,$this -> b,$this -> oper);
					return $opz -> get();
				case '/':
					$opz = new rem ($this -> a,$this -> b,$this -> oper);
					return $opz -> get();
				case '%';
					$opz = new mo ($this -> a,$this -> b,$this -> oper);
					return $opz -> get();
				default:
					return $this -> result = '您的输入有误';
			}
		}
		function __set($seta,$setb){
			print '<br/>'.$seta . "->" . $setb . "不存在";
		}
		function __get($geta){
			print "<br/>值" . $geta . "不存在";
		}
		function __construct($a,$b,$oper){
			$this -> a = $a;
			$this -> b = $b;
			$this -> oper = $oper;
			//$this -> result = $result;
		}
	}	
	
	
?>