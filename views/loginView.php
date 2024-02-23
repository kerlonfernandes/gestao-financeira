<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $site_url ?>/public/css/login/login.css?id=<?= uniqid() ?>">
  <link rel="stylesheet" href="<?= $site_url ?>/public/css/styles.css?id=<?= uniqid() ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Tela de Login</title>

  <title><?= $title ?></title>
</head>

<body class="">
  <div class="login-container">
    <div class="welcome-container">
      <h2 class="welcome">Bem-vindo!</h2>
    </div>
    <form onsubmit="return false">
      <label for="username">Entre com e-mail ou usuário:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required>

      <button class="btn p-3 m-3" id="sent"><span class="sent-button" id="sent-button">Enviar</span>

        <div class="check-animation">
          Enviado com sucesso! <i class="fa-solid fa-check"></i>
        </div>
      </button>
    </form>
    <div class="loader-area"></div>
    <div class="signup-link">
      <p>Ainda não tem cadastro? <span>Cadastre-se aqui</span></p>
    </div>

    <div class="theme-toggle">
      <input type="checkbox" id="themeSwitch" onclick="toggleTheme()" style="display: none;">
      <label for="themeSwitch"><i class="fas fa-sun"></i></label>
    </div>
  </div>

  <script src="<?= $site_url ?>/public/js/login/script.js?id=<?= uniqid() ?>"></script>
  <script src="<?= $site_url ?>/public/js/login/styles.js?id=<?= uniqid() ?>"></script>



</body>

</html>