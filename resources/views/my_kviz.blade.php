@extends('layouts.base')
@section('content')
    </br>
    <h1>Мои квизы</h1></br></br>

        <div class="d-md-inline-block">
        <a id="nazvanie" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Название
        </a>
        <div class="dropdown-menu dropdown-menu">
            <a class="dropdown-item" >Сортировать от А до Я</a>
            <a class="dropdown-item" >Сортировать от Я до А</a>
        </div>
        </div>
    <div class="d-md-inline-block">
            <a id="status"class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cтатус
            </a>
            <div class="dropdown-menu dropdown-menu">
                <a class="dropdown-item" >Сначала заполненные</a>
                <a class="dropdown-item" >Сначала незаполненные</a>
            </div>
    </div>
    <div class="d-md-inline-block">
        <a id="date"class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Дата
        </a>
        <div class="dropdown-menu dropdown-menu">
            <a class="dropdown-item" >Сначала новые</a>
            <a class="dropdown-item" >Сначала старые</a>
        </div>
        </div>
        <hr>
            @foreach($objs as $obj)
        <div class="d-md-inline-block">
        <a href="{{asset('quiz/show/'.$obj->id)}}"> &#9733; {{$obj->header}}</a>
        </div>
<div class="d-md-inline-block">
    <p id="zelen">Заполнен</p>
</div>
    <div class="d-md-inline-block">
        <form method="post">
        <select id="sostoyanie">
            <option value="1">На утверждении</option>
            <option value="2">В работе</option>
            <option value="3">Выслать правки</option>
        </select>
        </form>
    </div>
            <div class="d-md-inline-block">
                <p id ="data">{{$obj->created_at}} <img width="20" height="24" title="Pen free icon" alt="Pen free icon" src="https://image.flaticon.com/icons/svg/237/237517.svg">
                    <img width="20" height="24" title="Rubbish bin free icon" alt="Rubbish bin free icon" src="https://image.flaticon.com/icons/svg/64/64022.svg"></p>
            </div>
    <hr>

        <a> &#9734; Названии компании №2</a>
@endforeach
<div>
    {!! $objs->links() !!}
</div>
@endsection
