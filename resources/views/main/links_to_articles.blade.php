<div class="box">
    @if(LaravelLocalization::getCurrentLocale() == 'ru')
        <h2>Мои статьи</h2>
    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
        <h2>Articles</h2>
    @else
        <h2>Hier is not translate.</h2>
    @endif


    <ul class="list-unstyled">
        <li><h5><a href="{{url('install_ruby_centos7')}}">
                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                        <i class="glyphicon glyphicon-file"></i>
                        Установка RUBY on RAILS при помощи RBENV в Centos 7
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        <i class="glyphicon glyphicon-file"></i>
                        How to install Ruby on Rails on Centos 7
                    @else
                        <p>Нет перевода в links_to_articles.blade.php</p>
                    @endif
                </a>
            </h5>
        </li>

        <li><h5><a href="{{url('article_use_keys_in_ssh')}}">
                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                        <i class="glyphicon glyphicon-file"></i>
                        Подключения по SSH без ввода пароля используя ключи аутентификации
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        <i class="glyphicon glyphicon-file"></i>
                        Perform SSH Login without password using authentication keys
                    @else
                        <p>Нет перевода в links_to_articles.blade.php</p>
                    @endif
                </a>
            </h5>
        </li>

        <li><h5><a href="{{url('article_my_experiance_dbmysql')}}">
                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                        <i class="glyphicon glyphicon-file"></i>
                        Получение информации о базах данных и таблицах от MySQL по MariaDB в f23
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        <i class="glyphicon glyphicon-file"></i>
                        Getting Information About Databases and Tables from MySQL over MariaDB
                    @else
                        <p>Hier is not translate in links_to_articles.blade.php</p>
                    @endif
                </a>
            </h5>
        </li>





        @if(App::environment() == 'local')
        <li><h5><a href="{{url('adjustment_firewall_on_mikrotik')}}">
                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                        <i class="glyphicon glyphicon-file"></i>
                        Настройка сетевого экрана на роутере MikroTik
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        <i class="glyphicon glyphicon-file"></i>
                        Adjustment of the firewall on MikroTik router
                    @else
                        <p>Hier is not translate.</p>
                    @endif
                </a>
            </h5>
        </li>
        @endif
    </ul>
</div>