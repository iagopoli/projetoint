<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

<head>
    <link rel="icon" type="image/x-icon" href="icone.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Perguntas Frequentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/faq.css">
</head>

<body class="bg-light">
    <br>
    <br><br>
    <br>
    <div class="faq-container">
        <h1>Perguntas Frequentes</h1>

        <!-- Adicionar pergunta -->
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-dark">Adicionar</button>
            </div>
        </form>

        <!-- Lista de perguntas frequentes -->
        @forelse ($duvidas as $duvida)
            <div class="faq-item d-flex justify-content-between">
                <div>
                    <div>
                        <h2>{{ $duvida->titulo }}</h2>
                        <p>{{ $duvida->descricao }}</p>
                    </div>

                    <!-- Link para Comentários -->
                    <a class="btn btn-link" href="{{ route('faq.show', $duvida->id) }}">Comentários</a>
                </div>
                @if (Auth::check() && $duvida->user_id == Auth::user()->id)
                    <div class="d-flex" style="gap: 10px">
                        <!-- Botão de Excluir -->
                        <form action="{{ route('faq.destroy', $duvida->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="height: 40px"><i class="bi bi-trash"></i></button>
                        </form>

                        <!-- Botão de Editar -->
                        <button class="btn btn-info" data-toggle="modal" style="height: 40px"
                            data-id="{{ $duvida->id }}" data-titulo="{{ $duvida->titulo }}"
                            data-descricao="{{ $duvida->descricao }}" data-target="#editarPergunta"><i
                                class="bi bi-pen"></i></button>
                    </div>
                @endif
            </div>
        @empty
            <p class="text-muted">Nenhuma pergunta frequente encontrada.</p>
        @endforelse
    </div>
    <Br>
    <br>
    <br>
    <br>
    <a href="/" class="back-button">Voltar</a>
    <br>
    <br>
    <br>
    <!-- FOOTER -->
    <div class="d-flex flex-column h-100">
        <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">Viver bem</h5>
                        <p class="small text-muted"> Site informativo sobre alimentação saudável e informações
                            essenciais para o
                            pleno funcionamento do corpo humano</p>
                        <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
                                href="https://classroom.google.com/u/0/c/NTg4OTkyOTAxMDE1?hl=pt-BR">projetointegrador</a>
                        </p>
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


    <div class="modal fade" id="editarPergunta" tabindex="-1" role="dialog" aria-labelledby="editarPerguntaLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarPerguntaLabel">Editar Comentário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulário de Edição -->
                    <form action="{{ route('faq.update', '__ID__') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <h5>Editar titulo</h5>
                        <div class="form-group">
                            <label for="perguntaEdit"></label>
                            <input type="text" name="titulo" id="tituloEdit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comentarioEdit"></label>
                            <textarea name="descricao" id="comentarioEdit" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO FOOTER -->
</body>

<!-- Scripts Bootstrap e outros (se necessário) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
        $("#editarPergunta").on("show.bs.modal", function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var comentario = button.data('comentario');
            var modal = $(this);

            modal.find('.modal-body #comentarioEdit').val(comentario);
            modal.find('form')[0].action = modal.find('form')[0].action.replaceAll('__ID__', id);
        });
    })
</script>

=======
<head>
    <link rel="icon" type="image/x-icon" href="icone.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FAQ - Perguntas Frequentes</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/css/faq.css">
</head>
<body>
<br>
  <br>
<div class="faq-container">
  <h1>Perguntas Frequentes</h1>
  <br>
  <br>
  <div class="faq-item">
    <h2>O que é a Taxa Metabólica Basal (TMB)?</h2>
    <p>A Taxa Metabólica Basal (TMB) é a quantidade de calorias que o seu corpo queima em repouso para manter as funções vitais.</p>
  </div>
  <div class="faq-item">
    <h2>Como posso calcular minha TMB?</h2>
    <p>Você pode calcular sua TMB usando a fórmula de Harris-Benedict, que leva em consideração seu peso, altura e idade.</p>
  </div>
  <div class="faq-item">
    <h2>Qual é a interpretação da TMB?</h2>
    <p>A interpretação da TMB varia de acordo com a faixa de valores. Valores mais baixos podem indicar um metabolismo lento, enquanto valores mais altos indicam um metabolismo mais rápido.</p>

<div class="faq-container">


  <div class="faq-item">
    <h2>O que é o Índice de Massa Corporal (IMC)?</h2>
    <p>O IMC é uma medida que relaciona o peso de uma pessoa com sua altura, usada para avaliar se o peso está dentro de faixas consideradas saudáveis.</p>
  </div>

  <div class="faq-item">
    <h2>Como calcular o IMC?</h2>
    <p>O IMC é calculado dividindo o peso da pessoa (em quilogramas) pela altura ao quadrado (em metros). A fórmula é IMC = peso / (altura * altura).</p>
  </div>

  <div class="faq-item">
    <h2>Qual é a interpretação dos valores de IMC?</h2>
    <p>O IMC é interpretado em faixas, sendo: abaixo de 18.5 (Abaixo do Peso), 18.5 - 24.9 (Peso Normal), 25 - 29.9 (Sobrepeso), 30 - 34.9 (Obesidade Grau 1), 35 - 39.9 (Obesidade Grau 2) e acima de 40 (Obesidade Grau 3).</p>
  </div>
  </div>
</div>
</div>
  <br>
  <br>
    <a href="/" class="back-button">Voltar</a>
  <br>
  <br>
  <br>

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

                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-3">Suporte</h5>
                        <ul class="list-unstyled text-muted">
                        <li><a href="/faq">FAQ</a></li>

                    </ul>

                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- FIM DO FOOTER -->
</body>
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
</html>
