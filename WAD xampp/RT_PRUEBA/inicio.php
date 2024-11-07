<?php
session_start ();

if (isset($_SESSION['user'])){
    echo "puedes ver esta pagina". " Bienvenido: ".$_SESSION['user'];

}else {
    echo "no puedes ver esta pagina logueate";
}


?>
<br>
<a href="logout.php">Salir</a>
