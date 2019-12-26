@extends('layouts.base')
@section('content')
    <div class="d-md-inline-block">
<br/><h2 id="ready">Готовые решения</h2>
    </div>
        <div class="d-md-inline-block">
<input size="50"type="submit" value="Создать шаблон" id="createSh">
    </div>
<br/><br/>
<form method="POST" action="{{asset('quiz/add')}}">
    {!! csrf_field() !!}
    <div class="row">
        <div  class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Бриф реквизиты</a>
                    </h4>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Выбрать шаблон" class="knopka">
                </div>
                </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Блок о компании</a>
                    </h4>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Выбрать шаблон" class="knopka">
                </div>
                </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                       <a href="">Блок реквизиты</a>
                    </h4>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Выбрать шаблон" class="knopka">
                </div>
                </div>
        </div>
    </div>
&nbsp;
    <hr>
    <h2>Cоздать квиз</h2>
    </br>
    <img class="img-fluid rounded" src="/public/images/skrin1.jpg" alt="">
    <hr>
    <p ><h4 class="discription">Заголовок(название группы вопросов)</h4>
    <h6 class="discription">Добавьте заголовок,чтобы клиенту было понятно,<br>к какой группе относится вопрос</h6>
        <input type="text" class="textblock" size="40" placeholder="Введите заголовок" name="header">
    </p>
    <div class="d-md-inline-block">
        <p><h4 class="discription">Название кнопки перехода<br> к предыдущей группе вопросов</h4>
        <h6 class="discription">Эта кнопка будет размещена в правом нижнем углу экрана<br> и даёт возможность клиенту вернуться к предыдущей<br>группе вопросов</h6>
        <input type="text" class="textblock" size="40" placeholder="Введите название" name="previous">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </p>
    </div>
    <div class="d-md-inline-block">
    <p ><h4 class="discription">Название кнопки перехода <br>к следующей группе вопросов</h4>
    <h6 class="discription">Эта кнопка будет размещена в правом нижнем углу экрана<br> и даёт возможность клиенту перейти к следующей<br> группе вопросов</h6>
    <input type="text" class="textblock" size="40" placeholder="Введите название" name="next">
    </p>
    </div>
    <p class="discription"><h4 class="discription">Текст благодарности за выполнение квиза</h4>
    <h6 class="discription">Введите текст благодарности,который будет выведен клиенту после заполнения квиза</h6>
    <input type="text" class="textblock" size="90" placeholder="Введите текст" name="thank">
</br></br></br>
    </p>
    <div class="d-md-inline-block">
    <p class="discription"><b>Название вопроса:</b><br>
        <input type="text" class="textblock" src="test.jpg" size="40"  placeholder="Введите название вопроса" name="question_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    </div>
    <div class="d-md-inline-block">
    <p class="discription"><b>Описание к вопросу:</b><br>
        <input type="text" class="textblock" size="40" placeholder="Введите описание вопроса" name="question_discription">
    </p>
    </div>
    <p class="discription"><b>Подсказка в поле для ввода:</b><br>
        <input type="text" class="textblock" size="40" placeholder="Введите подсказку для поля ввода" name="question_tip">
    </p>
    <input type="checkbox" checked>Обязательный вопрос</br></br>
    <br><br>
    <div class="d-md-inline-block">
        <input id="addQuestion" class="button" type="submit" value="Добавить вопрос" name="addOne">
        <input id="addGroup" class="button" type="submit" value="Добавить группу вопросов" name="addGroup">
        <input  id="save" class="button" type="submit" value="Сохранить" name="saving">&nbsp;
        <input  id="generate" class="button" type="submit" value="Сгенерировать квиз" name="generating">
    </div>
    </form>
<div id="first"></div>
@endsection
