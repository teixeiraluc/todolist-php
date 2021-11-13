<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>To Do List</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">

    </head>
    <body>
        <div class="conteudo">
            <div class="topo">
                <h3>to-do-list</h3>
                <button id="btnAddTarefa" data-toggle="modal" data-target="#demoModal"><i class="fa fa-plus"></i></button>
            </div>
            <table id="listaTarefas">
                <tr>
                    <th>#</th>
                    <th>Tarefa</th>
                    <th>Observações</th>
                    <th>Data de Conclusão</th>
                    <th>Concluída</th>
                    
                    <th colspan="2">---------</th>
                </tr>
                @foreach($tarefas as $k => $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->task}}</td>
                    <td>{{$data->comment}}</td>
                    <td>{{$data->conclusion_date}}</td>
                    <td><input type="checkbox" name="check" @if ($data->check) checked @endif disabled/></td>

                    <td>
                        <button class="btnAcao"><a class="fa fa-pencil"></a></button>
                        <form method="POST" action="{{ route('excluir-tarefa', ['id', $data->id]) }}">
                            <input class="btnAcao fa fa-trash" type="submit"/>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="demoModalLabel"> Insira uma tarefa:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('registrar-tarefa') }}" method="post">
                            @csrf
                            <table>
                                <tr>
                                    <th>Tarefa:</th>
                                    <td><input type="text" name="task"/></td>
                                </tr>
                                <tr>
                                    <th>Observações:</th>
                                    <td><input type="text" name="comment"/></td>
                                </tr>
                                <tr>
                                    <th>Data de Conclusão:</th>
                                    <td><input type="text" name="conclusion_date"/></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Salvar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>