<div class="mt-4">
    <h2>Comentário do Post</h2>
    @if (auth()->check())
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comment.store') }}" method="POST" class="form">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
                <input type="text" 
                    name="title" 
                    placeholder="Titulo"
                    class="form-control"
                >
            </div>

            <div class="form-group">
                <textarea name="content"
                        cols="30"
                        rols="5"
                        class="form-control"
                        placeholder="Faça seu Comentário"
                ></textarea>                
            </div>

            <div class="form-group">
                <button type="submit"
                        class="btn btn-success btb-sm"
                >Enviar</button>
            </div>
        </form>
    @else
        <p>Para fazer um comentário, faça o login <a href="{{ route('login') }}">Fazer Login</a></p>
    @endif

    <hr>
    <h3>Comentários ({{ $post->comments->count()}})</h3>
    @foreach ($post->comments as $comment)
        <p>
            <b>{{ $comment->user->name }} Comentou:</b><br />
            {{ $comment->title }} <br />
            {{ $comment->content }}

        </p>
    @endforeach
</div>