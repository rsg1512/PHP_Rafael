<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {

        //  Capturando e limpando dados do formulário
        $usuario = trim($_POST["nm_user"] ?? "");
        $log_in   = trim($_POST["nm_login"] ?? "");
        $senha   = trim($_POST["ds_password"] ?? "");
        $email   = trim($_POST["ds_email"] ?? "");

        //  Validação simples (didática)
        if ($usuario == "") {
            die("O usuario é obrigatório.");
        }
       
        $sql = "INSERT INTO tb_usuario
                (nm_usuario, nm_login, ds_password, ds_email)
                VALUES
                (:usuario, :log_in, :senha, :email)";

        /*
        prepare -> é um método do PHP Data Objects (PDO) que prepara uma consulta SQL para execução, retornando um objeto
        
        O bindParam() no PHP PDO é um método usado para vincular (associar) uma variável PHP a um marcador nomeado (:nome) ou de interrogação (?) em uma consulta SQL preparada
        
        */ 


        $stmt = $pdo->prepare($sql);

        //  Bind dos parâmetros
        $stmt->bindParam(":usuario", $usuario);
        $stmt->bindParam(":log_in", $log_in);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":email", $email);

        //Executa
        $stmt->execute();

        echo "Cliente cadastrado com sucesso!";
        

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }

} else {
    echo "Erro no envio do formulário.";
}
?>