<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Cadastro efetuado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }

            break;
        
        case 'editar':
            
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=". $_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Edição efetuada com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível editar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }

            break;
        
        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=". $_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Exclusão efetuada com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Não foi possível excluir');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }

            break;       

    }
?>