<link rel="stylesheet" href="../css/estilo.css">
<?php
session_start();
include "../includes/conexao.php";

$msg = "";

if (!empty($_POST)) {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM funcionario 
            WHERE usuario='$usuario' AND senha='$senha'";

    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) == 1) {
        $f = mysqli_fetch_assoc($res);
        $_SESSION['admin_id'] = $f['id'];
        $_SESSION['admin_nome'] = $f['nome'];
        header("Location: index.php");
    } else {
        $msg = "Login inválido!";
    }
}
?>

<div class="container">
    <h2>Login Administrativo</h2>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="senha" required>
        <button type="submit">Entrar</button>
    </form>
    <p><?= $msg ?></p>
</div>
