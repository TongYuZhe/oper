<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript"> 
	//验证只能为数字 
	function checkNumber(a){ 
		var a = document.getElementById('a').value;
		var b = document.getElementById('b').value;
		var reg = /^[0-9]+$/; 
		if(a!=""&&!reg.test(a)||b!=""&&!reg.test(b)){ 
			alert('只能输入数字！'); 
			return false; 
		}else{
			return true;
		}
	} 
</script>
</head>
<body>
	<form action="oper.php" method="get">
    	<input type="text" name="a" id="a" />
        <select name="oper">
        	<option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="b" id="b" />
        <button type="submit" onclick='return checkNumber()'>计算</button>
    </form>
</body>
</html>