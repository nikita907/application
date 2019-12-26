@extends('layouts.base')
@section('header')

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url(/public/images/back.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <p><font  face="Times New Roman" color="#000000" size="9" >Описание,что такое квиз: </font></p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(/public/images/back1.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <p><font color="#000000" size="9" face="Arial" ><em>Зачем нужны квизы: </font></em></p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(/public/images/back3.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <p id="#2"><font color="#000000" size="9" face="Arial" ><em>Основные преимущества: </font></em></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>
@endsection
@section('content')

    <!-- Features Section -->

    </br> </br>
    <hr>
    <form style="background-color:#ced4da">
    <div>
        <br>
            <h2 id="1" >&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;Для кого подходит сервис?</h2>
            <br>
        <div class="whom">
        <ul>
            <li>
                <strong>IT компании</strong>
            </li>
            </br>
            <li>
                    <strong>Фрилансеры</strong>
                </li>
            </br>
                <li>
                    <strong> IT-Студии</strong>
                </li>
            </ul>
        </div>
    </div>
    <hr>
    </form>
    </br> </br> </br>
    <form style="background-color:#e2e3e5">
    <div class="whom">
        <ul>
            <h2 id="2">&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;Основные преимущества сервиса:</h2>
            <br>
            <li>
               <p><strong>Основное преимущество данного сервиса заключается в простоте,быстроте и удобстве его использования.
                       Данный сервис не имеет аналогов</strong></p>
            </li>
            <br>
            <li>
                <p><strong>Нет необходимсти в течении длительного времени объяснять клиенту:что как и почему-Просто покажите ему наш сайт</strong></p>
            </li>
            <br>
        </ul>
    </div>
    </form>
    </br> </br> </br>
    <hr>
    <form style="background-color:#ced4da">
        <div class="whom">
            <h2 id="3">&#8195;&#8195;&#8195;&#8195;&#8195;&#8195;Чем выгоден сервис для клиентов заказчика?</h2>
            <ul>
                <br>
            <li>
                <strong>Нет необходимости регистрации</strong>
            </li>
            <br>
                <li>
                    <strong>Всё выполняется просто и быстро-всего за пару кликов</strong>
                </li>
                <br>
                <li>
                    <strong>Возможность общения с компанией напрямую</strong>
                </li>
                <br>
            </ul>
        </div>
    </form>
    <br>  <br>  <br>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>








@endsection
