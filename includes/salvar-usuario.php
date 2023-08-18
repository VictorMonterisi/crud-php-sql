<?php
    switch($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $data_nascimento = $_POST['data-nascimento'];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nascimento}')"; // Query de inserção
            $resultado = $conn->query($sql);
            if($resultado === true){
                echo '<script>alert("Novo usuário cadastrado com sucesso!")</script>';
                echo '<script>location.href="?page=listar"</script>';
            } else {
                echo '<script>alert("Não foi possível cadastrar o novo usuário. Tente novamente.")</script>';
            }
        break;
        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $data_nascimento = $_POST['data-nascimento'];

            $sql = "UPDATE usuarios SET 
                        nome = '{$nome}',
                        email = '{$email}',
                        senha = '{$senha}',
                        data_nascimento = '{$data_nascimento}'
                    WHERE
                        id = ".$_REQUEST['id']; // Query de edição
            $resultado = $conn->query($sql);
            if($resultado === true){
                echo '<script>alert("Usuário editado com sucesso!")</script>';
                echo '<script>location.href="?page=listar"</script>';
            } else {
                echo '<script>alert("Não foi possível editar o usuário. Tente novamente.")</script>';
            }
        break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            $resultado = $conn->query($sql);
            if($resultado === true){
                echo '<script>alert("Usuário excluído com sucesso!")</script>';
                echo '<script>location.href="?page=listar"</script>';
            } else {
                echo '<script>alert("Não foi possível excluir o usuário.")</script>';
            }
        break;
    }