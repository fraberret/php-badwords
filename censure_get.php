<?php



$paragraph= $_POST["paragraph"];
$censuredWord=$_POST["wordToCensure"];
$paragrafo_censurato = str_ireplace($censuredWord, '***', $paragraph);
var_dump($_POST);
?>


<html>
<body>
<h3>Paragrafo non censurato</h3>
<p><?php echo $paragraph?></p>

<h3>Lunghezza paragrafo</h3>
<p><?php echo strlen($paragraph)?></p>

<h3>Parola da censurare</h3>
<p><?php echo $censuredWord?></p>

<h3>Paragrafo censurato</h3>
<p><?php echo $paragrafo_censurato?></p>


</body>
</html>