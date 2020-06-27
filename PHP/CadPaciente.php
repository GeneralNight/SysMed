<?php

    include 'Config.php';
    mysqli_set_charset($con,"utf8");
    $Cod = $_POST['txt_cod'];
    $Nome = $_POST['txt_nome'];
    $Idade = $_POST['txt_idade'];
    $Cidade = $_POST['txt_cidade'];
    $CPF = $_POST['txt_cpf'];
    $Doenca = $_POST['txt_doenca'];

    $stmt = $con->prepare("INSERT INTO pacientes(CodP,Nome,Idade,Cidade,CPF,Doenca) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("isisss",$Cod,$Nome,$Idade,$Cidade,$CPF,$Doenca);
    if($stmt->execute()){
        header("location:../Index.html");
    }

?>