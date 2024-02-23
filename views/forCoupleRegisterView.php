<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $site_url ?>/public/css/signup/signup.css?id=<?= uniqid() ?>">
  <link rel="stylesheet" href="<?= $site_url ?>/public/css/styles.css?id=<?= uniqid() ?>">

  <title><?= $title; ?></title>
</head>
<body>
  <div id="formContainer" class="form-container light-theme">
    <div class="notification" style="font-weight: bold;" id="notification">Você precisa preencher os campos!</div>

    <h2>Cadastro</h2>
    <form onsubmit="return false">

      <div id="step1Fields">
      <h3>Seu Cadastro</h3>

        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="ConfirmPassword">Confirme a senha:</label>
        <input type="password" id="passwordConfirm" name="passwordConfirm" required>

        <label for="birthdate">Data de Nascimento:</label>
        <input type="date" id="birthdate" name="birthdate" required>
  
        <label for="gender">Sexo:</label>
        <select id="gender" name="gender" required>
          <option value="" disabled selected>Selecione o sexo</option>
          <option value="male">Masculino</option>
          <option value="female">Feminino</option>
          <option value="other">Outro</option>
        </select>
      </div>

      <div id="step2Fields" style="display: none;">
    
      <div id="step1Fields">
      <h3>Seu/Sua Parceiro(a)</h3>

        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="ConfirmPassword">Confirme a senha:</label>
        <input type="password" id="passwordConfirm" name="passwordConfirm" required>

        <label for="birthdate">Data de Nascimento:</label>
        <input type="date" id="birthdate" name="birthdate" required>
  
        <label for="gender">Sexo:</label>
        <select id="gender" name="gender" required>
          <option value="" disabled selected>Selecione o sexo</option>
          <option value="male">Masculino</option>
          <option value="female">Feminino</option>
          <option value="other">Outro</option>
        </select>
      </div>

      </div>
      <div class="signup-link">
        <p>Já é cadastrado?<span> Login</span></p>
      </div>
      <button id="nextButton" onclick="nextStep()">Próximo Passo</button>
      <button id="submitButton" style="display: none;" onclick="submitForm()">Cadastrar</button>
      <button id="prevButton" style="display: none;" onclick="prevStep()">Voltar para o passo anterior</button>
      
    </form>
  </div>

  <script src="<?= $site_url ?>/public/js/signup/script.js?id=<?= uniqid() ?>"></script>
</body>
</html>
