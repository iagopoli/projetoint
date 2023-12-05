function cadastrar(event) {
    event.preventDefault();
    console.log("eeeee")
    cadastrarUser(document.getElementById('emailPass').value, document.getElementById('passwordPass').value)
  }

  function cadastrarUser(emailSignupRes, passwordSignupRes) {
    console.log("[ UwU ] Cadastrando...");
    firebase.auth().createUserWithEmailAndPassword(emailSignupRes, passwordSignupRes).then(response => {
      console.log('success', response);
      console.log("[ OwO ] Cadastrado!");
    }).catch(error => {
      console.log('error', error);
    });
  }
