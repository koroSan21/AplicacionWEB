<form>

<label>Nombre: </label><input type="text" name="nombre"><br>
<label>Apellido: </label><input type="text" name="apellido"><br>
<label>Ciudad: </label><select name="ciudad">
    <option>Guaymas</option>
    <option>Hermosillo</option>
    <option>Obregon</option>
    <option>Empalme</option>
    <option>Cananea</option>
    <option>Nogales</option>
    <option>Navojoa</option>
    <option>Caborca</option>
</select>
<br>
<label>Edad: </label><input type="number" name="edad"><br>
<label>Telefono: </label><input type="text" name="telefono"><br>
<label>Correo: </label><input type="text" name="correo"><br>
Estado civil:<br>
<select name="estado_civil">
    <option>Soltero</option>
    <option>Casado</option>
</select>
<button> Enviar </button>
</form>
<?php
    echo $nombre=$_GET['nombre']," ",$apellido=$_GET['apellido'];
    echo " de la ",$ciudad=$_GET['ciudad']," tiene ",$edad=$_GET['edad'];
    echo " su telefono es ",$telefono=$_GET['telefono']," su correo es ",$correo=$_GET['correo'];
    echo " el es ",$estado_civil=$_GET['estado_civil'];
?>