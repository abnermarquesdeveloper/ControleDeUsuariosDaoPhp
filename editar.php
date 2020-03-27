<?php
    require 'config.php';
    require 'dao/UsuarioDaoMysql.php';
    
    $usuarioDao = new UsuarioDaoMysql($pdo);

    $usuario = false;
    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $usuario = $usuarioDao->findById($id);
    }
    if($usuario === false){
        header("Location: index.php");
        exit;
    }
?>
<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario->getId();?>"/>
    <label>
        Nome:<br>
        <input type="text" name="nome" value="<?=$usuario->getNome();?>"/><br><br>
    </label>
    <label>
        Email:<br>
        <input type="text" name="email" value="<?=$usuario->getEmail();?>"/><br><br>
    </label>
    <input type="submit" value="Atualizar"/><br>
</form>