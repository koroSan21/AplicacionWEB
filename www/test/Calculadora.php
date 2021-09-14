
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<form action="Calculadora.php">
    <input type="text" name="n1">
    <select name="signo">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="n2">
    <input type="submit">
</form>
</body>
</html>

<?php

$n1 = $_GET ['n1'];
$n2 = $_GET ['n2'];
$signo = $_GET ['signo'];
$resultado = 0;
if($signo=="+"){
    $resultado = $n1 + $n2;
}else if($signo == "-"){
    $resultado = $n1 - $n2;
}else if($signo == "*"){
    $resultado = $n1 * $n2;
}else{
    $resultado = $n1 / $n2;
}
echo "El resultado es: $resultado";

?>