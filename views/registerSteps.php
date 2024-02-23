<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= $site_url ?>/public/css/styles.css?id=<?= uniqid() ?>">


    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .center-content {
            flex-direction: column;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-areas-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            /* Altere para coluna para empilhar os cards verticalmente */
            align-items: center;
            /* Centralize os cards horizontalmente */
        }

        .card-areas {
            background-color: #fff;
            border-radius: 8px;
            margin: 25px;
            padding: 40px;
            flex: 1;
            max-width: 300px;
            transition: transform 0.3s, box-shadow 0.3s;
            font-weight: bold;
            font-size: 18px;
            color: #333;
            text-align: center;
            text-decoration: underline white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-areas:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-size: 20px;
            text-decoration: underline white;
        }

        @media (max-width: 768px) {
            .card-areas {
                padding: 20px;
            }
        }

        .fade-in-right-onload {
            animation: fadeInRight 0.7s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>O foco da conta será</h1>
        <div class="painel-escolha mt-5" style="margin: 10px;">
            <ul class="card-areas-list">

                <a href="?accountfor=onlyu">
                    <li class="card-areas">
                        <div>Apenas para você <img src="<?= $site_url ?>/public/images/single-cat.jpg" style="border-radius:10px;" width="48px" alt="couple-icon"></div>
                    </li>
                </a>
                <a href="?accountfor=couple">
                    <li class="card-areas">
                        <div>Para Casais <img src="<?= $site_url ?>/public/images/cat-couple.png" width="48px" alt="couple-icon"></div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elementToAnimate = document.querySelector(".container"); // Substitua "formContainer" pelo ID do seu elemento
            elementToAnimate.classList.add("fade-in-right-onload");
        });
    </script>
</body>

</html>