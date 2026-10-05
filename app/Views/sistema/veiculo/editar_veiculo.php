<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Editar Veiculo</title>
    </head>
    <body>
        <h1>Editar Veículo</h1>

        <form action="<?= base_url('veiculo/atualizar/'.$veiculo['VEI_ID']) ?>" method="POST">
            <label>Modelo:</label><br>
            <input type="text" id="modelo" name="medelo" value="<?= $veiculo['VEI_MODELO'] ?>" required>
            <br><br>

            <label>Placa:</label><br>
            <input type="text" id="placa" name="placa" value="<?= $veiculo['VEI_PLACA'] ?>" required>
            <br><br>

            <label>Marca:</label><br>
            <input type="text" id="marca" name="marca" value="<?= $veiculo['VEI_MARCA'] ?>" required>
            <br><br>

            <label>Ano:</label><br>
            <input type="date" id="date" name="date" value="<?= $veiculo['VEI_ANO'] ?>" required>
            <br><br>

            <label>Cliente:</label><br>
            <select id="veiculo" name="veiculo" required>
                <?php foreach($veiculo as $res): ?>
                    <option value="<?= $res['RES_ID'] ?>"
                        <?= $CLI['CLI_ID'] == $veiculo['FK_CLI_ID'] ? 'selected' : '' ?>>
                        <?= $CLI['CLI_NOME'] ?>
                        <?= $CLI['CLI_CPF'] ?>
                        <?= $CLI['CLI_TEL'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <br><br>

            <input type="submit" id="editar_veiculo" name="editar_veiculo" value="Salvar Alterações">
        </form>

        <br>
        <a href="<?= base_url('veiculo') ?>"><button>Voltar</button></a>
    </body>
</html>