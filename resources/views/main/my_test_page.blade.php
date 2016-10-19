@extends('resume')

@section('blade_scripts')
    <script>
        var CKEDITOR = require("lodash");
        CKEDITOR.replace( 'editor1', {
            customConfig: '/resources/assets/js/ckeditor/config.js'
        } );
        CKEDITOR.plugins.addExternal( 'abbr', '/resources/assets/js/ckeditor/abbr/', 'plugin.js' );
        CKEDITOR.replace( 'editor1' );
    </script>
@stop

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="description pull-right">
                        @if(LaravelLocalization::getCurrentLocale() == 'en')
                            <h3>Fixed Mobile Convergence</h3>
                        @else
                            <h3>Конвергенция мобильной и фиксированной связи.</h3>
                        @endif

                        @if (LaravelLocalization::getCurrentLocale() == 'en')

                            <ul class="tsc_list tsc_li_check">
                                <li>Proven experience in the deployment of software application on a Linux environment.</li>
                                <li>Knowledge of Linux-supporting associated Linux problems during deployment.</li>
                                <li>Scripting experience is highly benefical; TCL, C, Bash, Perl, Shell Scripting, etc.</li>
                            </ul>

                        @elseif(LaravelLocalization::getCurrentLocale() == 'ru')
                            <div>
                                <ul class="tsc_list tsc_li_check">
                                    <li>Построение переходов от фиксированной к мобильной связи без реальной офисной АТС по коротким внутренним номерам сотрудников из офисов в другие офисы относительно внутрикорпоративных тарифов.</li>
                                    <li>Общий план короткой нумерации.</li>
                                    <li>Виртуализация АТС, Asterisk.</li>
                                    <li>Программирование голосового меню (IVR или DISA).</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box">
                    <h2>Testing CkEditor</h2>

                    <label>
                        <textarea id="bodyField"></textarea>

                        @ckeditor('bodyField')
                    </label>

                    <pre class="code"></pre>
                    <p></p>
                    <pre class="code"></pre>
                </div>
            </div>
        </div>
    </div>
@stop