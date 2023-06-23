
@foreach( $list as $key => $list )

    {{$key}}  <a href="http://">Ver mais</a>
    <br>
    {{ $list->first()->c_id }}
    <br><br>
    
    @foreach($list as $list)
        {{$list->p_name}} <a href="http://">Detalhes</a>
        <br>
    @endforeach
    
    <br>

@endforeach