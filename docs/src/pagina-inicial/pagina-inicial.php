<?php
require_once '../controllers/PlacaController.php';

$controller = new PlacaController();
$placas = $controller->listarPlacas();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Platech</title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="navbar">
                <div class="navbar-content">
                    <div class="navbar-content-title">
                        <h1>Platech</h1>
                    </div>
                    <div class="nav-item">
                        <select class="nav-item-select">
                            <option>Consultar placas</option>
                        </select>
                    </div>
                    <div class="nav-item">
                        <select class="nav-item-select" id="clientMenu">
                            <option>Clientes</option>
                            <option>Cadastrar Clientes</option>
                            <option>Fechamento</option>
                        </select>
                    </div>
                    <div class="nav-item">
                        <select class="nav-item-select" id="controlMenu">
                            <option>Controle de material</option>
                            <option>Lotes</option>
                        </select>
                    </div>
                    <div class="nav-item">
                        <button id="homeButton" class="nav-item-select button-center">Página Inicial</button>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div>
                    <button class="menu-toggle">
                        <span class="hamburger"></span>
                        <span class="hamburger"></span>
                        <span class="hamburger"></span>
                    </button>
                </div>
                <img
                    class="icone"
                    src="../../assets/pictures/platech-icon.png"
                    alt="logo da empresa platech"
                />
                <div class="container_image_profile">
                    <img
                        class="icone-profile"
                        src="../../assets/pictures/profile-image.png"
                        alt="imagem do usuário logado"
                    />
                </div>
            </div>
        </header>

        <div class="overlay"></div>

        <div class="square">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            Solicitante
                            <img
                                class="refresh"
                                src="../../assets//pictures/refresh.png"
                                alt="botao de refresh"
                            />
                        </th>
                        <th>
                            Tipo
                            <img
                                class="refresh"
                                src="../../assets//pictures/refresh.png"
                                alt="botao de refresh"
                            />
                        </th>
                        <th>
                            Placa
                            <img
                                class="refresh"
                                src="../../assets//pictures/refresh.png"
                                alt="botao de refresh"
                            />
                        </th>
                        <th>
                            Categoria
                            <img
                                class="refresh"
                                src="../../assets//pictures/refresh.png"
                                alt="botao de refresh"
                            />
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($placas) > 0): ?>
                        <?php foreach ($placas as $placa): ?>
                            <tr>
                                <td><?= $placa['solicitante'] ?></td>
                                <td><?= $placa['tipo'] ?></td>
                                <td><?= $placa['numero_placa'] ?></td>
                                <td><?= $placa['categoria'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="4">Nenhum resultado encontrado</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>