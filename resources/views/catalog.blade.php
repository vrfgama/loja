
@foreach( $list as $key => $list )

    {{$key}} 
    <br><br>
    
    @foreach($list as $list)
        {{$list->name}}
        <br>
    @endforeach
    
    <br>

@endforeach