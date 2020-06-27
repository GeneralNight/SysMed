<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sysmed | Lista de Pacientes</title>
    <link rel="shortcut icon" href="../src/Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/Global.css">
    <link rel="stylesheet" href="../CSS/Index.css">
    <link rel="stylesheet" href="../CSS/Lista.css">
</head>

<?php

    include 'config.php';
    mysqli_set_charset($con,"utf8");
    $sql="SELECT * FROM pacientes";
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
                <a href="./ListaPaciente.php" class="menu-link actual-page"><li class="container-menu-link">Pacientes - Lista geral</li></a>
                <a href="./PesqPacienteNome.php" class="menu-link"><li class="container-menu-link">Pacientes Pesquisa por nome</li></a>
                <a href="./ListaFuncionario.php" class="menu-link"><li class="container-menu-link">Funcionários - Lista geral</li></a>
                <a href="./PesqFuncionarioNome.php" class="menu-link"><li class="container-menu-link">Funcionários - Pesquisa por nome</li></a>
        </nav>
    </header>

    <div class="container-content">
        <p class="page-name">Lista geral de pacientes</p>
        <div class="container-list">
            <div class="header-list">
                <p class="">Código do paciente</p>
                <p class="">Nome</p>
                <p class="">Idade</p>
                <p class="">Cidade</p>
                <p class="">CPF</p>
                <p class="">Doença</p>
            </div>
            <?php

                while($row = $result->fetch_assoc()) {
                    echo "<div class='table-line'><p>".$row["CodP"]."</p><p>".$row["Nome"]."</p><p>".$row["Idade"]."</p><p>".$row["Cidade"]."</p><p>".$row["CPF"]."</p><p>".$row["Doenca"]."</p></div>";
                }

            ?>
        </div>
    </div>
</body>
</html>