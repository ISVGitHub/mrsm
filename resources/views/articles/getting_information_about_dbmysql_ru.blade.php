@extends('resume')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
         xmlns="http://www.w3.org/1999/html">
        <div class="row">
            @include('articles.header_template_articles')
        </div>

        <div class="row">
            <!-- LEFT BLOCK -->
            <div class="col-xs-12 col-sm-8">
                <h1>Получение информации о базах данных и таблицах от MySQL по MariaDB в f23</h1>

                <div class="box">
                    <h2>Соединение с MariaDB</h2>
                    <p>Классическое соединение к MariaDB и основные параметры соединения</p>
                    <pre class="code"><strong>mysql -h</strong> hostname_or_ip <strong>-u</strong> username <strong>-p</strong>password database_name</pre>
                        <ul>
                            <li><p> -h указываем хост. Вместо localhost, используемый IP.</p></li>
                            <li><p>-u указываем имя пользователя базы данных</p></li>
                            <li><p>-p указываем пароль. Обратите внимание, что пароль и опция -р слитно указывается.</p></li>
                            <li><p>После всех опций указывается database_name, но не обязательно.</p></li>
                        </ul>

                </div>
                <div class="box">
                    <h2>Обзор и выбор базы данных</h2>
                    <p>Предполагается, что при соединении база данных не указывалась.</p>
                    <pre class="code"><strong>MariaDB [(none)]></strong>SHOW databases;</pre>
                    <p>SHOW DATABASES список баз данных на MySQL серевере.</p>
                    <pre class="code"><strong>MariaDB [(none)]></strong>USE db_name;</pre>
                    <p>Применение USE db_name указывает MySQL использовать db_name текущей базой по умолчанию.</p>
                    <pre class="code"><strong>MariaDB [(db_name)]></strong>SHOW tables;</pre>
                    <p>SHOW tables; список не временных таблиц в базе данных.
                    <pre class="code"><strong>MariaDB [(db_name)]></strong>SELECT * FROM some_tables;</pre>
                    <p>Делается выборка всех столбцов из некой таблицы.</p>


                </div>

            </div>
            <!-- RIGHT BLOCK -->
            @include('articles.right_block')
        </div>
    </div>
@stop