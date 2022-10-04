<?php
    $datos = fopen("datosPerfil.txt",'r');
    $contador = 0;
    while ($linea = fgets($datos)) {
        $dato[$contador] = explode("|",$linea);
        echo($dato[$contador][0])."<br>";
        echo($dato[$contador][1])."<br>";
        echo($dato[$contador][2])."<br>";
        echo($dato[$contador][3])."<br>";
        echo($dato[$contador][4])."<br>";
        $contador++;
    }
    fclose($datos);
?>

<form action="cambio_formulario.php" method="post">
        <p>Nombre: <input type="text" name="nombre" /></p>
        <p>Apellidos: <input type="text" name="apellidos" /></p>
        <p>Correo: <input type="text" name="correo" /></p>
        <select  name="pais" id="pais">
        <optgroup label="Pais">
            <option value="España">España</option>
            <option value="Francia">Francia</option>
            <option value="Portugal">Portugal</option>
        </optgroup>
        </select>
        <p>Notificación por email</P>
        <p>si<input type="radio" name="noti" value="si"/></p>
        <p>no<input type="radio" name="noti" value="no"/></p>
        <p><input type="submit" /></p>
    </form>

<?php
