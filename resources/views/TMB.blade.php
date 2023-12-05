<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="icone.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TMB </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/TMB.css">
</head>

<body>
  <!-- inicio do nav bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img class="imglogo" src="logo.png" alt="Terceiro Slide">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(página atual)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/alimentaçao">Alimentação</a>
          <a class="dropdown-item" href="/habitos">Hábitos saudáveis</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Calculadoras
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/IMC">IMC</a>
          <a class="dropdown-item" href="/TMB">TMB</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/sobre">Sobre</a>
      </li>
      </li>
    </ul>

  </div>
</nav>
 <!-- fim do navbar-->

  <!-- inicio do carousel -->

   <!-- fim do carousel -->
  <br><br>
  <div class="container">
  <div class="calculator">
    <h2>Calculadora de TMB</h2>
    <div class="input-container">
      <label for="weight">Peso (kg):</label>
      <input type="number" id="weight" min="1" step="0.01">
    </div>
    <div class="input-container">
      <label for="height">Altura (cm):</label>
      <input type="number" id="height" min="1">
    </div>
    <div class="input-container">
      <label for="age">Idade:</label>
      <input type="number" id="age" min="1">
    </div>
    <button id="calculate">Calcular TMB</button>
    <div id="result"></div>
  </div>

  <div class="imc-table">
    <h2>Tabela de Interpretação da TMB</h2>
    <table>
      <thead>
        <tr>
          <th>Intervalo de TMB</th>
          <th>Interpretação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>0 - 1200</td>
          <td>Muito Baixa</td>
        </tr>
        <tr>
          <td>1201 - 1500</td>
          <td>Baixa</td>
        </tr>
        <tr>
          <td>1501 - 1800</td>
          <td>Normal</td>
        </tr>
        <tr>
          <td>1801 - 2200</td>
          <td>Alta</td>
        </tr>
        <tr>
          <td>2201 em diante</td>
          <td>Muito Alta</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <script src="/js/TMB.js"></script>

  <br>
<br>
    <!-- FOOTER -->

   <div class="d-flex flex-column h-100">

    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Viver bem</h5>
                    <p class="small text-muted"> Site informativo sobre alimentação saudável e informações essenciais para o pleno funcionamento do corpo humano</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="https://classroom.google.com/u/0/c/NTg4OTkyOTAxMDE1?hl=pt-BR">projetointegrador</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Inicio</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="/">Home</a></li>

                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3">Suporte</h5>
                        <ul class="list-unstyled text-muted">
                        <li><a href="/faq">FAQ</a></li>

                    </ul>

                </div>
            </div>
        </div>
    </footer>
</div>
    <!-- FIM DO FOOTER -->

</body>

</html>
