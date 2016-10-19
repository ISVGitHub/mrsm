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
                            <li class="active"><a href="{{ url('/main') }}">Главная</a></li>
                            <li><a href="#">Профиль</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- LEFT BLOCK -->
            <div class="col-xs-12 col-sm-8">
                <h1>Установка RUBY on RAILS при помощи RBENV в Centos 7</h1>

                <div class="box">
                    <h2>Введение</h2>

                    <p>Ruby on Rails – это очень популярный открытый веб-фреймворк для создания Rails-приложений.

                    Ниженаписанное мной продемонстрирует установку Ruby on Rails в CentOS 7 при помощи rbenv. Этот инструмент – упрощённый аналог RVM, который позволяет устанавливать и управлять различными версиями Ruby, а также обеспечивает использование соответствующих версий Ruby в среде разработки и производства.</p>
                </div>
                <div class="box">
                    <h2>Требования</h2>

                    <p>Прежде чем приступить к установке rbenv, нужно создать пользователя с расширенными привилегиями в CentOS 7. Соответствующую информацию можно найти:
                        <a href="/main"> Начальная настройка сервера CentOS 7.</a>
                        Если необходимые требования выполнены, то можно перейти к установке rbenv.</p>
                </div>
                <div class="box">
                    <h2>Установка rbenv</h2>

                    <p>Давайте установим rbenv, который будет управлять нашей Ruby установкой.<br>
                        Установим rbenv и Ruby зависимости с yum:</p>

                    <pre class="code">sudo yum install -y git-core zlib zlib-devel gcc-c++ patch readline readline-devel libyaml-devel libffi-devel openssl-devel make bzip2 autoconf automake libtool bison curl sqlite-devel</pre>

                    <p>Сейчас мы готовы установить rbenv. Это просто и нужно запустить следующие команды
                        от пользователя, который будет использовать Ruby:</p>
                    <pre class="code">cd
git clone git://github.com/sstephenson/rbenv.git .rbenv
echo 'export PATH="$HOME/.rbenv/bin:$PATH"' >> ~/.bash_profile
echo 'eval "$(rbenv init -)"' >> ~/.bash_profile
exec $SHELL

git clone git://github.com/sstephenson/ruby-build.git ~/.rbenv/plugins/ruby-build
echo 'export PATH="$HOME/.rbenv/plugins/ruby-build/bin:$PATH"' >> ~/.bash_profile
exec $SHELL</pre>
                    <p>Это установит rbenv в домашнюю директорию и создаст соответсвующее окружение переменных, которые откроют rbenv доступ к версиям Ruby.

                        Теперь можно устанавливать Ruby.</p>

                </div>
                <div class="box">
                   <h2>Установка Ruby</h2>
                    <p>Сначала определите, какую версию Ruby нужно установить. В руководстве показано, как установить последнюю на данный момент версию — Ruby 2.2.1.

                        Как пользователь Ruby запустите следующие команды:</p>
                    <pre>rbenv install -v 2.2.1
rbenv global 2.2.1</pre>
                    <p>Субкоманда <mark>global</mark> задаёт общесистемную версию Ruby, которую смогут использовать все оболочки. Чтобы глобально использовать другую версию, просто задайте её номер в команде.<br>

                        Убедитесь, что установка прошла успешно:</p>
                    <pre>ruby -v</pre>
                    <p>Rubygems может сгенерировать локальную документацию для каждого установленного gem-а, но этот процесс занимает довольно много времени. Чтобы отключить его, запустите:</p>
                    <pre>echo "gem: --no-document" > ~/.gemrc</pre>
                    <p>Затем нужно установить gem по имени bundler, который управляет зависимостями приложений.</p>
                    <pre>gem install bundler</pre>
                    <p>Готово! После установки Ruby переходите к Rails.</p>
                </div>
                <div class="box">
                    <h2>Установка Rails</h2>
                    <p>Теперь установите Rails 4.2.0:</p>
                    <pre>gem install rails -v 4.2.0</pre>
                    <p>После установки любой версии Ruby или gem-а нужно запускать субкоманду rehash, которая установит shim для каждого исполняемого файла, известного rbenv, и позволит использовать его:</p>
                    <pre>rbenv rehash</pre>
                    <p>Убедитесь, что установка Rails прошла успешно, запросив версию:</p>
                    <pre>rails -v</pre>
                    <p>Если всё прошло без ошибок, на экране появится: <mark>Rails 4.2.0.</mark></p>
                </div>
                <div class="box">
                    <h2>Установка Javascript</h2>
                    <p>Некоторые функции Rails (например, Asset Pipeline) зависят от среды выполнения Javascript. Чтобы обеспечить эту среду, установите Node.js.<br>

                        Добавьте репозиторий EPEL:</p>

                    <pre>sudo yum -y install epel-release</pre>
                    <p>А затем установите Node.js:</p>

                    <pre>sudo yum install nodejs</pre>

                    <p class="bg-info"><b>Примечание:</b> Скорее всего, репозиторий содержит несколько устаревшую версию Node.js; чтобы получить последний релиз, соберите его из исходников.</p>

                    <p><strong>Готово! </strong>Фреймворк Ruby on Rails установлен.</p>
                </div>
                <div class="box">
                    <h3>Опциональные действия</h3>
                    <p>Чтобы улучшить установку, выполните инструкции данного раздела.</p>
                    <h4>Настройка Git</h4>
                    <p>Система контроля версий – очень важный элемент при написании приложения. Получить инструкции по установке и настройке Git можно в руководстве <a href="#">Установка Git на CentOS 7</a>.</p>
                    <h4>Установка базы данных</h4>
                    <p>По умолчанию Rails использует базу данных sqlite3, которая может не справиться с нагрузкой приложения. Потому рекомендуется установить систему управления базами данных (СУБД) MySQL или PostgreSQL.<br>

                        К примеру, установить MariaDB можно при помощи yum:</p>
                    <pre>sudo yum install mariadb-server mariadb-devel</pre>
                    <p>Затем установите <mark>mysql2</mark> gem, командой:</p>
                    <pre>gem install mysql2</pre>
                    <p>Теперь приложение Rails может использовать БД MariaDB.</p>
                    <h4>Создание приложения Rails (опционально)</h4>
                    <p>Чтобы протестировать установку Ruby on Rails, создайте тестовое приложение. Для простоты в качестве БД будет использоваться sqlite3.

                        Итак, создайте каталог приложения в домашнем каталоге:</p>
                    <pre>cd ~
rails new testapp</pre>
                    <p>Затем перейдите в этот каталог:</p>
                    <pre>cd testapp</pre>
                    <p>Создадим базу данных:</p>
                    <pre>rake db:create</pre>
                    <p>Если вы ещё не знаете внешнего IP-адреса сервера, используйте эту команду:</p>
                    <pre>ip addr show enp2s0 | grep inet | awk '{ print $2; }' | sed 's/\/.*$//'</pre>
                    <p>Скопируйте адрес IPv4 в буфер обмена, а затем используйте его в этой команде, чтобы запустить Rails-приложение:</p>
                    <pre>rails server --binding=server_public_IP</pre>
                    <p>Если всё прошло должным образом, Rails-приложение будет запущено на порт 3000. Откройте приложение Rails в браузере:</p>
                    <pre>http://server_public_IP:3000</pre>
                    <p>Если всё прошло успешно, на экране появится приветственная страница Welcome aboard.</p>
                    <h4>Готово!</h4>
                    <p>Тестовое приложение можно использовать для разработки уникального приложения Ruby on Rails.</p>

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