<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript">
	
</script>
<body>
<?php
$string = 'ABCDEFG';
$reverse = '';
$i = 0;
while(!empty($string[$i])){ 
      $reverse = $string[$i].$reverse; 
      $i++;
}
echo $reverse;
?>
</body>
</html>