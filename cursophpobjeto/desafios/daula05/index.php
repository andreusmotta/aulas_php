<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <main>
        <h1>Sistema do Banco de Limathan</h1>        
    </main>
    <main>
        <h2>Escolha sua opção:</h2>
        <form method="post">
            <input type="submit" name="bAcessaCC" value="Acessar Conta Corrente">
            <input type="submit" name="bAcessaCP" value="Acessar Conta Poupança">
            <input type="submit" name="bCriaConta" value="Criar nova conta">
        </form>
    </main>
    <main>
            <!-- <?php if(isset($_POST['bCriaConta'])) : ?>
                Colocar os HTML aqui.
            <?php endif; ?> -->

        <?php 
            if (isset($_POST['bCriaConta'])) {
                echo "Conta criada";
            }
        ?>

        <?php if(isset($_POST['bAcessaCC'])) : ?>
            <h3>Saldo da Conta Corrente: {valor}</h3>        
            <form method="post">                
                <input type="submit" name="bDepositar" value="Depositar Dinheiro">
                <input type="submit" name="bSacar" value="Sacar Dinheiro">
                <input type="submit" name="bMensal" value="Pagar Mensalidade">
                <input type="submit" name="bFechar" value="Fechar Conta">
            </form>
        <?php endif; ?>

        <?php if(isset($_POST['bAcessaCP'])) : ?>
            <h3>Saldo da Conta Poupança: {valor}</h3>        
            <form method="post">                
                <input type="submit" name="bDepositar" value="Depositar Dinheiro">
                <input type="submit" name="bSacar" value="Sacar Dinheiro">
                <input type="submit" name="bMensal" value="Pagar Mensalidade">
                <input type="submit" name="bFechar" value="Fechar Conta">
            </form>
        <?php endif; ?>

    </main>
</body>
</html>