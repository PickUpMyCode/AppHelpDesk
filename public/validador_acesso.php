<?

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] === 'NAO') header('Location: index.php?login=erro2');

// echo $_SESSION['x'];

// $_SESSION['y'] = 1500;
?>