<?php
/* inicia uma sessão para podemos manipular a variaves de sessão*/
session_start();

$user = filter_input(INPUT_POST, 'user');
$senha = filter_input(INPUT_POST, 'senha');

var_dump($user);
die();

/* codifica a senha em md5 */
$senha_cod = md5($senha);

$query = mysqli_query($conn, "Select * from user where user = " . $user . " && senha = " . $senha_cod . "");

/* guarda valores do banco */
$row = mysqli_fetch_assoc($query);

/* conta se teve respota do banco para saber se o login e valido  */
$resposta = mysqli_num_rows($query);

if ($resposta > 0) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = $row['user'];

    header('Location:./dash.php');
} else {

    header("Location:./login.php");
}
