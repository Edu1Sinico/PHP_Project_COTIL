<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SisFin</title>
    <link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../../vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<style>
    body {
        margin: 5px;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* width: 100%; */
    }

    .text-center {
        background-color: greenyellow;
        margin: 10px;
        padding: 15px;
        width: 85%;
        border-radius: 30px;
        color: white;
    }

    .div-nav-links {
        display: flex;
        align-items: center;
        flex-direction: column;
        height: 100%;
        width: 85%;
        margin: 10px;
    }

    .div-nav-links h4 a button{
        text-align: center;
        width: 100%;
        padding: 10px;
        border-radius: 20px;
        border: none;
        background-color: lightgray;
        cursor: pointer;
        transition: all 0.3s ease;
        color: black;
    }

    .div-nav-links h4 a button:hover {
        background-color: darkgray;
        color: white;
    }

    .div-nav-links h4 a:hover {
        text-decoration: none;
    }
</style>

<body class="container">
    <h1 class="text-center">.:| SisFin - Sistema de Gestão Financeira |:.</h1>
    <div class="div-nav-links">
        <h4><a href="/cliente"><button>Cadastro de Clientes</button></a></h4>
        <h4><a href="/fornecedor"><button>Cadastro de Fornecedores</button></a></h4>
    </div>
</body>

</html>