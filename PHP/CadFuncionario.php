<?php

    include 'Config.php';
    mysqli_set_charset($con,"utf8");
    $Cod = $_POST['txt_cod'];
    $Nome = $_POST['txt_nome'];
    $Idade = $_POST['txt_idade'];
    $Cidade = $_POST['txt_cidade'];
    $Salario = $_POST['txt_salario'];
    $CPF = $_POST['txt_cpf'];

    $stmt = $con->prepare("INSERT INTO funcionarios(Codf,Nome,Idade,Cidade,Salario,CPf) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("isisis",$Cod,$Nome,$Idade,$Cidade,$Salario,$CPF);
    if($stmt->execute()){
        header("location:../Index.html");
    }

?>