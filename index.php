<?php
    include 'includes/head.php';
    include 'includes/header.php';

?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <?php
                        include 'includes/config.php'; // Faz a conexão com o banco de dados
                        switch(@$_REQUEST['page']) {
                            case 'novo':
                                include 'includes/novo-usuario.php';
                            break;
                            case 'listar':
                                include 'includes/listar-usuarios.php';
                            break;
                            case 'salvar':
                                include 'includes/salvar-usuario.php';
                            break;
                            case 'editar':
                                include 'includes/editar-usuario.php';
                            break;
                            default:
                                echo '<h1>Bem-vindo(a)!</h1>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
<?php

    include 'includes/footer.php';
?>