document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('fade-in');
    
    var savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
      document.body.classList.add(savedTheme);
    
      var themeLabel = document.querySelector('.theme-toggle label');
  
    }
    if (savedTheme) {
      document.body.classList.add(savedTheme);
    }
});

