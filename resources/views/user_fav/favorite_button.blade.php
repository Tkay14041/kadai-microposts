
    @if (Auth::user()->alreadyFav($micropost->id))
        {!! Form::open(['route' => ['micropost.toUnFav', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.toFav', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
