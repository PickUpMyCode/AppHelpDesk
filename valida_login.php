<?php

session_start();

// $_SESSION['x'] = 'oi sou um valor de sessao';
// echo $_SESSION['y'];
// print_r($_SESSION);
//VARIAVEL QUE VERIFICA SE A AUTENTICAÇÃO FOI REALIZADA
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil = null;

$perfis = [1 => 'administrativo', 2 => 'usuario'];
//USUARIOS DO SISTEMA
$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com', 'senha' => '1234', 'perfil' => 1),
    array('id' => 2, 'email' => 'user@teste.com', 'senha' => '1234', 'perfil' => 2)
);
/*

echo '<pre>';
print_r($usuarios_app);
echo '</pre>';

*/

foreach($usuarios_app as $user){
    /*
    echo 'Usuario app: ' . $user['email'] . '/' . $user['senha'];
    echo '<br />';
    echo 'Usuario form: ' . $_POST['email'] . '/' . $_POST['senha'];
    echo '<hr />';
    */
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil = $user['perfil'];
    }
}

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
print_r($_POST);
*/

?>