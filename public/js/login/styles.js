function successCheckIcon() {
    let checkElement = document.querySelector(".check-animation");
    let sentButton = document.getElementById("sent-button");
  
    sentButton.style.display = "none";
  
    setTimeout(function() {
      checkElement.classList.add("active"); // Adiciona a classe 'active' para ativar a animação
    }, 100); // Adiciona um pequeno atraso para iniciar a animação
  
    setTimeout(function() {
      checkElement.style.opacity = "0"; // Define a opacidade para 0 após 3 segundos
      setTimeout(function() {
        checkElement.classList.remove("active");
        sentButton.style.display = "block";
        checkElement.style.opacity = "1"; 
        sentButton.style.height = "auto"; 
      }, 300); 
    }, 3000); 
  }
  
document.querySelector(".btn").addEventListener("click", () => {
    document.querySelector(".loader-area").innerHTML = "<div class='loader' style='margin: -10px; margin-left:10px;'></div>"
})

document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('fade-in');
  });
  