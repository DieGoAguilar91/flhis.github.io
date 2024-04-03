 function mostrarPassword() {
    // Selecciona todos los elementos con la clase 'input-password'
    var inputsPassword = document.querySelectorAll('.input-password');
    // Itera sobre cada elemento y cambia su tipo y el ícono correspondiente
    inputsPassword.forEach(function(inputPassword) {
      var icon = inputPassword.nextElementSibling.querySelector('span');
    
      if (inputPassword.type === 'password') {
        inputPassword.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      } else {
        inputPassword.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      }
    });
  }
  