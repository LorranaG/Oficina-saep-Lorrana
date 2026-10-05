<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Novo Cliente</title>
    </head>
    <body>
        <h1>Novo Cliente</h1>
        <form action="<?= base_url('cliente/inserir') ?>" method="POST">
            <label>Cliente:</label><br>
            <input type="text" id="nome" name="nome" placeholder="Nome..." required>

            <br><br>
            
            <label>TELEFONE:</label><br>
            <input type="text" id="telefone" name="telefone" required>

            <br><br>

             <label>CPF:</label><br>
            <input type="text" id="telefone" name="telefone" required>

            <br><br>

            <label>Cliente:</label><br>
            <select id="cliente" name="cliente" required>
                <option value="">Selecione o cliente</option>
                <?php foreach($cliente as $cli): ?>
                    <option value="<?= $cli['CLI_ID'] ?>">
                        <?= $cli['CLI_NOME'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <br><br>

            <input type="submit" id="cadastrar_veiculo" name="cadastrar_veiculo" value="Cadastrar">
        </form>
        <br>
        <a href="<?= base_url('veiculo') ?>"><button>Voltar</button></a>
    </body>
</html>