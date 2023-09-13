<?php
session_start();
if ($_SESSION['id'] == '' || $_SESSION['id'] == NULL) {
    unset($_SESSION['id']);
    header("location: index.php");
} elseif (isset($_SESSION['id'])) {
}
echo 'Você esta logado com:'.$_SESSION['user']; 

?>

<a href="config/sair.php">Sair</a>
