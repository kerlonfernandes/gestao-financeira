function toggleTheme() {
    var body = document.body;
    var themeSwitch = document.getElementById('themeSwitch');
    var themeLabel = document.querySelector('.theme-toggle label');
  
    if (body.classList.contains("light-theme")) {
      body.classList.remove("light-theme");
      body.classList.add("dark-theme");
      localStorage.setItem("theme", "dark-theme");
  
      // Altera a label para o ícone da lua
      themeLabel.innerHTML = '<i class="fas fa-moon"></i>';
    } else {
      body.classList.remove("dark-theme");
      body.classList.add("light-theme");
      localStorage.setItem("theme", "light-theme");
  
      // Altera a label para o ícone do sol
      themeLabel.innerHTML = '<i class="fas fa-sun"></i>';
    }
  }
  
  // Verifica o tema armazenado no localStorage ao carregar a página
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".signup-link").addEventListener("click", () => { this.location.href = "./signup" })

    var hasVisited = localStorage.getItem("hasVisited");
  
    // Se ainda não tiver visitado, exibe "Bem-vindo!"
    if (!hasVisited) {
      document.querySelector('.welcome').textContent = 'Bem-vindo!';
  
      // Marca que o usuário já visitou
      localStorage.setItem("hasVisited", "true");
    } else {
      // Se já tiver visitado, exibe "Olá novamente!"
      document.querySelector('.welcome').textContent = 'Olá novamente! Que bom ter você de volta.';
    }
  
    var savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
      document.body.classList.add(savedTheme);
    
      var themeLabel = document.querySelector('.theme-toggle label');
  
      if (savedTheme === 'light-theme') {
        themeLabel.innerHTML = '<i class="fas fa-sun"></i>';
      } else {
        themeLabel.innerHTML = '<i class="fas fa-moon"></i>';
        document.querySelector(".loader").style.color = "black";
            }
    }
    if (savedTheme) {
      document.body.classList.add(savedTheme);
      
      // Atualiza a label com base no tema
      var themeLabel = document.querySelector('.theme-toggle label');
      themeLabel.innerHTML = savedTheme === 'light-theme' ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
    }
  });
  