<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $site_url ?>/public/css/styles.css?id=<?= uniqid() ?>">
  <link rel="stylesheet" href="<?= $site_url ?>/public/css/signup/signupform.css?id=<?= uniqid() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title><?= $title ?></title>
  <style>
    #spinner {
      border: 4px solid rgba(0, 0, 0, 0.1);
      border-top: 4px solid #3498db;
      border-radius: 50%;
      width: 10px;
      height: 10px;
      animation: spin 1s linear infinite;
      margin: 5px;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .password-strength-bar {
      height: 10px;
      background-color: #ddd;
      transition: width 0.3s ease-in-out;
      /* Adiciona uma transição suave */
    }

    .strong {
      background-color: green;
    }

    .medium {
      background-color: orange;
    }

    .weak {
      background-color: red;
    }


    .progress-bar {
      width: 100%;
      height: 10px;
      background-color: #ddd;
      border-radius: 5px;
      overflow: hidden;
    }

    .bar {
      height: 100%;
      width: 0;
      transition: width 0.3s ease;
    }

    .bar.weak {
      background-color: red;
    }

    .bar.medium {
      background-color: orange;
    }

    .bar.strong {
      background-color: green;
    }

    .bar.active {
      background-color: #333;
    }

    #password-strength-message {
      margin-top: 10px;
    }
  </style>
</head>

<body>

  <div class="form-container">
    <h2>Cadastre-se</h2>
    <form id="form-onlyu">
      <label for="username">Nome de usuário:</label>
      <span class="rslt"></span>
      <input type="text" id="username" name="username" required>

      <label for="email">E-mail:</label>
      <span class="rsltem"></span>
      <input type="email" id="email" name="email" required>
      <label for="password">Senha:</label>
      <div class="password-strength-meter">
        <div class="progress-bar">
          <div id="password-strength-bar" class="bar"></div>
        </div>

      </div>
      <small style="color: red;"><div id="password-strength-message"></div></small>

      <input type="password" id="password" name="password" required>

      <label for="confirm-password">Confirmar Senha:</label>
      <span class="rsltpassconfirm"></span>
      <input type="password" id="confirm-password" name="confirm-password" required>

      <label for="birthdate">Data de Nascimento:</label>
      <input type="date" id="birthdate" name="birthdate" required>

      <label for="gender">Sexo:</label>
      <select id="gender" name="gender" required>
        <option value="" disabled selected>Selecione o sexo</option>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
        <option value="Outro">Outro</option>
      </select>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
  <script src="<?= $site_url ?>/public/js/js.js?id=<?= uniqid() ?>"></script>
  <script src="<?= $site_url ?>/public/js/script.js?id=<?= uniqid() ?>"></script>
  <script src="<?= $site_url ?>/public/js/signup/index.js?id=<?= uniqid() ?>"></script>

</body>

</html>