function showNotification() {
    var notification = document.getElementById('notification');
    notification.style.display = 'block';
  
    setTimeout(function() {
      notification.style.opacity = '1';
    }, 10);
  
    setTimeout(function() {
      notification.style.opacity = '0';
  
      setTimeout(function() {
        notification.style.display = 'none';
      }, 500);
    }, 3000);
  }
  
  function nextStep() {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
  
    if (username && email && password) {
      document.getElementById('formContainer').classList.add('fade-in-right');
      document.getElementById('step1Fields').style.display = 'none';
      document.getElementById('step2Fields').style.display = 'block';
      document.getElementById('nextButton').style.display = 'none';
      document.getElementById('prevButton').style.display = 'block';
      document.getElementById('submitButton').style.display = 'block';
  
      setTimeout(function() {
        document.getElementById('formContainer').classList.remove('fade-in-right');
      }, 500);
    } else {
      showNotification()
    }
  }
  
  function prevStep() {
    document.getElementById('formContainer').classList.add('fade-in-left');
    document.getElementById('step1Fields').style.display = 'block';
    document.getElementById('step2Fields').style.display = 'none';
    document.getElementById('nextButton').style.display = 'block';
    document.getElementById('prevButton').style.display = 'none';
    document.getElementById('submitButton').style.display = 'none';
  
    setTimeout(function() {
      document.getElementById('formContainer').classList.remove('fade-in-left');
    }, 500);
  }
  
  function submitForm() {
    var companionName = document.getElementById('companionName').value;
    var relationship = document.getElementById('relationship').value;
  
    if (companionName && relationship) {
      alert("Formulário enviado com sucesso!");
    } else {
      alert("Preencha todos os campos do segundo formulário.");
    }
  }
  document.querySelector(".signup-link").addEventListener("click", () => { this.location.href = "./login" })
  document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('fade-in');

      
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
          
    
          var themeLabel = document.querySelector('.theme-toggle label');
          themeLabel.innerHTML = savedTheme === 'light-theme' ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        }
      });
      

