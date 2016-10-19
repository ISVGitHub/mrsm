@extends('resume')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-xs-12">
                <div id="photo-header" class="text-center">
                    <!-- PHOTO (AVATAR) -->
                    <div id="photo">
                        <img src="{{ asset('img/myphoto.png') }}" alt="avatar">
                    </div>
                    @include('common.language_switch')
                    <div id="text-header">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="{{url('main')}}">Главная</a></li>
                            <li><a href="#">Профиль</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- LEFT BLOCK -->
            <div class="col-xs-12 col-sm-8">
                <h1>Настройка сетевого экрана на роутере MikroTik</h1>

                <div class="box">
                    <h2>Введение</h2>
                    <p>Первое, что надо сделать: защитить роутер от маньяков из интернета. По умолчанию, брандмауэр роутера разрешает все подключения. Мы не можем подключить к нему клавиатуру и монитор для настройки или корректировки того, что мы натворим в дальнейшем, поэтому отнеситесь внимательно к тому, что и как вы настраиваете.</p>

                </div>
                <div class="box">
                    <h2>Требования</h2>

                    <p>Прежде чем приступить к установке rbenv, нужно создать пользователя с расширенными привилегиями в CentOS 7. Соответствующую информацию можно найти:
                        <a href="/main"> Начальная настройка сервера CentOS 7.</a>
                        Если необходимые требования выполнены, то можно перейти к установке rbenv.</p>
                </div>

            </div>
            <!-- RIGHT BLOCK -->
            <div class="col-xs-12 col-sm-4">
                <div class="box alert-link">
                    <h3>Другие мои статьи</h3>
                    <ul class="list-unstyled">
                        <li><h4><a href="/main">Как устанавливают Centos 7</a></h4></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@stop