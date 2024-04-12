<?php



$paragraph= $_POST["paragraph"];
$censuredWord=$_POST["wordToCensure"];
var_dump($_POST);
?>


<html>
<body>

<p><?php echo $paragraph?></p>
<p><?php echo strlen($paragraph)?></p>


</body>
</html>