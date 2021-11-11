<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To Do List</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    </head>
    <body>
        <div class="conteudo">
            <div class="topo">
                <form method="post">
                    <input type="text" id="inputNovaTarefa" placeholder="Adicione uma tarefa"/>
                    <input type="submit" value="+" id="btnAddTarefa" />
                </form>
            </div>
            <ul id="listaTarefas">
                <li>
                    <span class="textoTarefa">Tarefa 1</span>
                    <span>Data</span>
                    <div>
                        <button class="btnAcao"><i class="fa fa-pencil"></i></button>
                        <button class="btnAcao"><i class="fa fa-trash"></i></button>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>