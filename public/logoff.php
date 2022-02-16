<?

    session_start();

    //remover indices especificos das variaveis de sessao
    //unset();

    //unset($_SESSION['x']) removendo indice especifico

    //destruir todos os indices
    session_destroy(); // a sessao so sera destruida numa proxima requisicao
    header("Location: index.php");
    // echo '<prev>';
    // print_r($_SESSION);
    // echo '</prev>';

?>