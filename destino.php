<?php
echo $_POST['usuario'];
echo '<br>';

echo $_POST['clave'];
echo '<br>';

echo $_POST['nombreapellido'];
echo '<br>';

echo $_POST['ciudad'];
echo '<br>';

echo $_POST['nacimiento'];
echo '<br>';

echo $_POST['correo'];
echo '<br>';

if(isset( $_POST['php'])){
    echo $_POST['php'].PHP_EOL;
    echo $_POST['saberphp'];
    echo '<br>';
}
if(isset( $_POST['html5'])){
    echo $_POST['html5'].PHP_EOL;
    echo $_POST['saberhtml5'];
    echo '<br>';
}

if(isset( $_POST['css'])){
    echo $_POST['css'].PHP_EOL;
    echo $_POST['sabercss'];
    echo '<br>';
}

echo $_POST['color'];
echo '<br>';   
   
?>