<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="icone.ico">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> login</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="/css/login.css">


<body>

  <div class="container">
    <div class="welcome-container">
      <h2>Bem-vindo</h2>
      <a href="/">
        <button class="back-button">&#8592;</button>
      </a>
    </div>



    <div class="login-container">
      <h2 class="mb-5  ">Login e Cadastro</h2>
      @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-danger">
                {{$error}}
            </li>
            @endforeach
        </ul>
      @endif
      <form method="post" action="{{ route('login') }}">
        @csrf
        <input type="email" class="form-control" name="email" placeholder="Usuário" id="emailPass" required>
        <div class="password-container">
          <input type="password" name="password"  class="form-control" id="passwordPass" placeholder="Senha" required>
          <span class="password-toggle" onclick="togglePassword()">👁️</span>
        </div>
        <div class="form-group d-flex justify-content-between">
          <button class="btn btn-dark ,  mt-5 " type="submit" >Login</button>
          <a class="btn btn-dark , mt-5 " href="{{route('register')}}" >Cadastro</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-app-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-auth-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-firestore-compat.js"></script>

  <script src="/js/startFirebase.js"></script>
  <script src="/js/login.js"></script>
  <script src="/js/register.js"></script>
</body>

</html>
