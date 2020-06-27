<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sysmed | Pesquisa Funcionário por nome</title>
    <link rel="shortcut icon" href="../src/Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/Global.css">
    <link rel="stylesheet" href="../CSS/Index.css">
    <link rel="stylesheet" href="../CSS/PesqNome.css">
</head>

<?php

    include 'config.php';
    mysqli_set_charset($con,"utf8");
    $sql="SELECT * FROM medicos";
    $result = $con->query($sql);

?>

<body>
    <header class="cabecalho">
        <img src="../src/logo.png" class="img-logo">
        <nav class="container-menu">
            <ul class="list-menu">
                <a href="../Index.html" class="menu-link"><li class="container-menu-link">Início</li></a>
                <a href="../CadMedico.html" class="menu-link"><li class="container-menu-link">Cadastro de Médicos</li></a>
                <a href="../CadPaciente.html" class="menu-link"><li class="container-menu-link">Cadastro de Pacientes</li></a>
                <a href="../CadFuncionario.html" class="menu-link"><li class="container-menu-link">Cadastro de Funcionários</li></a>
                <a href="./ListaMedico.php" class="menu-link"><li class="container-menu-link">Médicos - Lista Geral</li></a>
                <a href="./PesqMedicoNome.php" class="menu-link"><li class="container-menu-link">Médicos - Pesquisa por nome</li></a>
                <a href="./ListaPaciente.php" class="menu-link"><li class="container-menu-link">Pacientes - Lista geral</li></a>
                <a href="./PesqPacienteNome.php" class="menu-link"><li class="container-menu-link">Pacientes Pesquisa por nome</li></a>
                <a href="./ListaFuncionario.php" class="menu-link"><li class="container-menu-link">Funcionários - Lista geral</li></a>
                <a href="./PesqFuncionarioNome.php" class="menu-link actual-page"><li class="container-menu-link">Funcionários - Pesquisa por nome</li></a>
        </nav>
    </header>

    <div class="container-content">
        <p class="page-name">Pesquisa de funcionários por nome</p>
        <form action="./PesqFuncionarioFilter.php" method="post" class="f_search_name">
                <label for="t_name" class="lbl-data">
                    Nome do funcionário <input type="text" name="txt_name" id="t_name" placeholder="" autocomplete="off" required class="input-data">
                </label>
            <div class="container-button-actions">
                <input type="submit" class="b-action b-cadastrar" value="Pesquisar">
                <input type="reset" onclick="window.location='../Index.html'" class="b-action b-voltar" value="Voltar">
            </div>
        </form>
    </div>
</body>
</html>


<script>
    window.onload=function(){
        document.getElementsByClassName("input-data")[0].focus();
    }
</script>