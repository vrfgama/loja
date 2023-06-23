
@foreach( $list as $key => $list )

    {{$key}}  <a href="{{ route('category', $list->first()->c_id) }}">Ver mais</a>
    <br>
    {{ $list->first()->c_id }}
    <br><br>
    
    @foreach($list as $list)
        {{$list->p_name}} <a href="http://">Detalhes</a>
        <br>
    @endforeach
    
    <br>

@endforeach