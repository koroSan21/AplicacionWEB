<form>

<form >
        Escoga una puerta para probar suerte.
        <br>
       
        <select name="op">
            <option value="0">Puerta 1</option>
            <option value="1">Puerta 2</option>
            <option value="2">Puerta 3</option>
            
        </select>
        
        <input type="submit" name="slc" value="Seleccionar">
    </form>

</form>

<?php

if (isset( $_GET['slc'])){
    
    $op=$_GET['op'];
    switch($op){ 
    case 0:
        echo "GANASTE UN BMW ULTIMO MODELO";
        break;
    case 1:
        echo "GANASTE UNA SUPERPIEDRA";
        break;
    case 2:
        echo "GANASTE UNA CABRA PARA QUITARTE ESA SOLEDAD";
        break;
} 
}

?>
