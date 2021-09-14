<form>

<form >
        Ingrese la edad de 2 personas.
        <br><br><br><br><br>
        
        nombre de la persona 1"<---->"nombre de la persona 2<br>
        <input type="text" name="nombre1">
        <input type="text" name="nombre2"><br><br>        
        edad de la persona 1"<---->"edad de la persona 2<br>
        <input type="text" name="edad1">
        <input type="text" name="edad2">
        <input type="submit" name="slc" value="Consultar">
    </form>

</form>
</html>

<?php

$nombre1=$_GET['nombre1'];
$nombre2=$_GET['nombre2'];
$edad1=$_GET['edad1'];
$edad2=$_GET['edad2'];

if ($edad1<$edad2) {
    echo $nombre2," es mayor que ", $nombre1;
}elseif($edad1>$edad2){
    echo $nombre1," es mayor que ",$nombre2;
}else{
    echo $nombre1," y ",$nombre2," tienen la misma edad";
}
?>