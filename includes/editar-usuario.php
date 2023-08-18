<?php
    $sql = "SELECT * FROM usuarios WHERE id='{$_REQUEST["id"]}'";
    $resultado = $conn->query($sql);
    $row = $resultado->fetch_object();
?>

<h1>Editar Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar"> <!-- Esse campo oculto manda a ação -->
    <input type="hidden" name="id" value="<?php echo $row->id; ?>"> <!-- Esse campo oculto manda o ID correspondente -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $row->nome ;?>" class="form-control" placeholder="Seu Nome">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php echo $row->email ;?>" class="form-control" placeholder="seu-email@mail.com">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite uma nova senha" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data-nascimento" value="<?php echo $row->data_nascimento ;?>" class="form-control" placeholder="seu-email@mail.com">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>