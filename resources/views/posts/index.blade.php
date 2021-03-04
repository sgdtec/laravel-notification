@extends('layouts.app')

@section('content')
    
    <h1>Listagem dos posts</h1>

            <table class="table table-bordered table-striped table-hover table-sm">
                <thead class="thead-dark">                
                    <tr>
                    <th class="text-center">#</th>
                    <th>Titulo</th>
                    <th>Conteudo</th>
                    <th width="140" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                    <th class="text-center">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $posts->links() !!}
@endsection