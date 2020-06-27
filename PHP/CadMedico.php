<?php

    include 'Config.php';
    mysqli_set_charset($con,"utf8");
    $Cod = $_POST['txt_cod'];
    $Nome = $_POST['txt_nome'];
    $Idade = $_POST['txt_idade'];
    $Especialidade = $_POST['txt_especialidade'];
    $CPF = $_POST['txt_cpf'];
    $Cidade = $_POST['txt_cidade'];

    $stmt = $con->prepare("INSERT INTO medicos(CodM,Nome,Idade,Especialidade,CPF,Cidade) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("isisss",$Cod,$Nome,$Idade,$Especialidade,$CPF,$Cidade);
    if($stmt->execute()){
        header("location:../Index.html");
    }

?>