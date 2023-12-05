function togglePassword() {
    var passwordField = document.getElementById('passwordPass');
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}

function login(event){
  event.preventDefault();
  entrarLogin(document.getElementById('emailPass').value, document.getElementById('passwordPass').value);
}

function entrarLogin(emailLoginRes, passwordLoginRes){
    console.log("Entrando...");
    firebase.auth().signInWithEmailAndPassword(emailLoginRes, passwordLoginRes).then(response => {
        console.log('success', response);
        window.location.href = "/"
    }).catch(error => {
        console.log('error', error)


        if(error.message.includes('auth/user-not-found')){
            document.getElementById("emailPass").style = "background-color: red !important"
        }else if(error.message.includes('auth/wrong-password')){
            document.getElementById("passwordPass").style = "background-color: red !important"
        }else{
            console.log("sla oq aconteceu")
        }
    });
    console.log("Processo finalizado.")
}

firebase.auth().onAuthStateChanged(function(user){

    if (user == null){

    }else{
      document.getElementById("loginBt").classList.add('hideElement')
      document.getElementById("sairBt").classList.remove('hideElement')
    }
})

function sairLogin(){
  firebase.auth().signOut().then(() => {
        window.location.reload();
    }).catch(() => {
        console.log("Falha ao sair");
    })
}
