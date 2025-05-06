<?php
require_once('inc/config.php');
require_once('inc/api_functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes e Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .section {
            background-color: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f7f7f7;
            color: #555;
        }

        @media (max-width: 768px) {
            table {
                display: block;
            }

            thead {
                display: none;
            }

            tbody {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            tr {
                display: flex;
                flex-direction: column;
                background-color: #fff;
                padding: 15px;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            }

            td {
                display: flex;
                justify-content: space-between;
                padding: 8px 0;
                border: none;
                border-bottom: 1px solid #eee;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #333;
            }

            td:last-child {
                border-bottom: none;
            }
        }
    </style>
</head>
<body>

<div class="section">
    <h2>Clientes</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $results = api_request('get_all_clients', 'GET');
                foreach($results['data']['results'] as $client): ?>
                    <tr>
                        <td data-label="Nome"><?= htmlspecialchars($client['nome']) ?></td>
                        <td data-label="Email"><?= htmlspecialchars($client['email']) ?></td>
                        <td data-label="Telefone"><?= htmlspecialchars($client['telefone']) ?></td>
                        <td data-label="Data de Cadastro"><?= htmlspecialchars($client['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="section">
    <h2>Produtos</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $results = api_request('get_all_products', 'GET');
                foreach($results['data']['results'] as $product): ?>
                    <tr>
                        <td data-label="Produto"><?= htmlspecialchars($product['produto']) ?></td>
                        <td data-label="Quantidade"><?= htmlspecialchars($product['quantidade']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
