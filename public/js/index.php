<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .loader {
            width: 215px;
            height: 215px;
            display: block;
            margin: auto;
            position: relative;
            background: #FFF;
            box-sizing: border-box;
        }

        .loader::after {
            content: '';
            width: calc(100% - 30px);
            height: calc(100% - 30px);
            top: 15px;
            left: 15px;
            position: absolute;
            background-image: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5) 50%, transparent 100%),
                radial-gradient(circle 50px, #DDD 100%, transparent 0),
                linear-gradient(#DDD 16px, transparent 0),
                linear-gradient(#DDD 24px, transparent 0);
            background-repeat: no-repeat;
            background-size: 75px 175px, 100% 100px, 80% 16px, 80% 16px;
            background-position: -185px 0, center 10px, center 125px, center 155px;
            box-sizing: border-box;
            animation: animloader 1s linear infinite;
        }

        @keyframes animloader {
            to {
                background-position: 185px 0, center 10px, center 125px, center 155px;
            }
        }
    </style>
</head>

<body>
    <span class="loader"></span>
</body>

</html>