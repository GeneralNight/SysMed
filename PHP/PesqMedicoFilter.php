<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sysmed | Pesquisa Médico por nome</title>
    <link rel="shortcut icon" href="../src/Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/Global.css">
    <link rel="stylesheet" href="../CSS/Index.css">
    <link rel="stylesheet" href="../CSS/PesqNome.css">
    <link rel="stylesheet" href="../CSS/Lista.css">
</head>

<?php

    include 'Config.php';
    mysqli_set_charset($con,"utf8");
    $nome = $_POST['txt_name'];
    $sql="SELECT * FROM medicos WHERE Nome LIKE '%$nome%' ORDER BY Nome ASC ";
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
                <a href="./PesqMedicoNome.php" class="menu-link actual-page"><li class="container-menu-link">Médicos - Pesquisa por nome</li></a>
                <a href="./ListaPaciente.php" class="menu-link"><li class="container-menu-link">Pacientes - Lista geral</li></a>
                <a href="./PesqPacienteNome.php" class="menu-link"><li class="container-menu-link">Pacientes Pesquisa por nome</li></a>
                <a href="./ListaFuncionario.php" class="menu-link"><li class="container-menu-link">Funcionários - Lista geral</li></a>
                <a href="./PesqFuncionarioNome.php" class="menu-link"><li class="container-menu-link">Funcionários - Pesquisa por nome</li></a>
        </nav>
    </header>

    <div class="container-content">
    <p class="page-name">Procura por nome de médicos <button onclick="window.location='./PesqMedicoNome.php'"class="search-other">Procurar outro</button></p>
        <p class="search-filter">Procurando por: <?php echo $nome;?></p>
        <div class="container-list">
            <div class="header-list">
                <p class="">Código do médico</p>
                <p class="">Nome</p>
                <p class="">Idade</p>
                <p class="">Especialidade</p>
                <p class="">CPF</p>
                <p class="">Cidade</p>
            </div>
            <?php

                while($row = $result->fetch_assoc()) {
                    echo "<div class='table-line'><p>".$row["CodM"]."</p><p>".$row["Nome"]."</p><p>".$row["Idade"]."</p><p>".$row["Especialidade"]."</p><p>".$row["CPF"]."</p><p>".$row["Cidade"]."</p></div>";
                }

            ?>
        </div>
    </div>

</body>
</html>
<script src="JavaScript/Index.js"></script>