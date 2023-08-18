<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar"> <!-- Esse campo oculto manda a ação -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Seu Nome">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control" placeholder="seu-email@mail.com">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite uma senha">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data-nascimento" class="form-control" placeholder="seu-email@mail.com">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>