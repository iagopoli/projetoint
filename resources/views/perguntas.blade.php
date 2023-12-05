<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="icone.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas - Lista de Títulos e Mensagens</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/faq.css">
</head>

<body class="bg-light">

    <div class="faq-container bg-white p-4 rounded">
        <h1 class="text-center text-dark mb-4">{{ $duvida->titulo }}</h1>

        <!-- Formulário para adicionar comentários -->
        <form action="{{ route('comentarios.store') }}" method="POST">
            @csrf
            <input type="hidden" name="duvida_id" value="{{ $duvida->id }}">
            <div class="form-group my-3">
                <label for="comentario" class="text-dark">Comentário</label>
                <textarea name="comentario" id="comentario" cols="30" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-dark">Adicionar Comentário</button>
            </div>
        </form>

        <!-- Seção para exibir comentários existentes -->
        <div class="comentarios-section">
            <h2 class="text-dark">Comentários</h2>
            <!-- Iterar sobre os comentários existentes -->
            @forelse ($duvida->comentarios as $comentario)
                <div class="comentario bg-dark text-white p-3 mb-3 rounded d-flex justify-content-between">
                    <div>
                        <h3>{{ $comentario->user->name ?? 'Anônimo' }}</h3>
                        <p>{{ $comentario->comentario }}</p>
                    </div>
                    <div class="d-flex" style="gap: 10px">
                        <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="height: 40px"><i class="bi bi-trash"></i></button>
                        </form>
                        <!-- Botão de Editar -->
                        <button class="btn btn-info" data-toggle="modal" style="height: 40px" data-id="{{ $comentario->id }}"
                            data-target="#editarPergunta" data-comentario="{{ $comentario->comentario }}"><i class="bi bi-pen"></i></button>
                    </div>
                </div>

            @empty
                <p class="text-muted">Nenhum comentário ainda.</p>
            @endforelse
            <!-- Repita conforme necessário para cada comentário -->
        </div>
    </div>

    <br>
    <a href="/faq" class="back-button">Voltar</a>
    <br>
    <br>
    <!-- Rodapé -->
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
                    <form action="{{ route('comentarios.update', '__ID__') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="comentarioEdit">Novo Comentário</label>
                            <textarea name="comentario" id="comentarioEdit" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editarPergunta{{ $duvida->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editarPerguntaLabel{{ $duvida->id }}" aria-hidden="true">
            <!-- ... (o conteúdo do modal de edição) ... -->
        </div>


    </div>

    <div class="d-flex flex-column h-100">

        <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">Viver bem</h5>
                        <p class="small text-muted"> Site informativo sobre alimentação saudável e informações
                            essenciais para o pleno funcionamento do corpo humano</p>
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


    <!-- Scripts Bootstrap e outros (se necessário) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){
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
</body>

</html>
