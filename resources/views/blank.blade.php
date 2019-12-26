@extends('layouts.base')
@section('content')
    </hr>
    <h3>{{$obj->header}}</h3>
</hr>
<input id="previous" size="100" type="button" value="{{$obj->previous}}">
<input id="next" type="button" value="{{$obj->next}}">
@endsection
