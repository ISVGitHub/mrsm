@section('blade_scripts')
{{--Some my jscript--}}
@stop
<div class="box">
    @if (LaravelLocalization::getCurrentLocale() == 'en')
        <a style="text-decoration: none;">
            <h2>Base Skills</h2>
        </a>
    @else
        <a style="text-decoration: none;">
            <h2>Основные навыки</h2>
        </a>
    @endif
    <div id="collapseOne" class="panel-collapse collapse in">

        <ul id="education" class="clearfix">
            <li>
                <div class="year pull-left">-- 1 --</div>
                <div class="description pull-right">
                    @if(LaravelLocalization::getCurrentLocale() == 'en')
                        <h3>Software Deployment Engineer - Linux</h3>
                    @else
                        <h3>Системное администрирование Linux</h3>
                    @endif

                    @if (LaravelLocalization::getCurrentLocale() == 'en')

                        <ul class="tsc_list tsc_li_check">
                            <li>Proven experience in the deployment of software application on a Linux environment.</li>
                            <li>Knowledge of Linux-supporting associated Linux problems during deployment.</li>
                            <li>Scripting experience is highly benefical; TCL, C, Bash, Perl, Shell Scripting, etc.</li>
                        </ul>

                    @elseif(LaravelLocalization::getCurrentLocale() == 'ru')

                        <ul class="tsc_list tsc_li_check">
                            <li>Успешный опыт развертывания приложений в среде Linux.</li>
                            <li>Знание Linux взаимосвязей и проблем во время развёртывания.</li>
                            <li>Опыт написания сценариев: TCL, C, Bash, Perl, Shell Scripting, итп.</li>
                        </ul>

                    @endif

                </div>
            </li>
            <li>
                <div class="year pull-left">-- 2 --</div>
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
                            <ul class="tsc_list tsc_li_check">
                                <li>Построение переходов от фиксированной к мобильной связи без реальной офисной АТС по коротким внутренним номерам сотрудников из офисов в другие офисы относительно внутрикорпоративных тарифов.</li>
                                <li>Общий план короткой нумерации.</li>
                                <li>Виртуализация АТС, Asterisk.</li>
                                <li>Программирование голосового меню (IVR или DISA).</li>
                            </ul>
                        @endif
                    </div>
            </li>
            <li>
                <div class="year pull-left">-- 3 --</div>
                <div class="description pull-right">
                    <h3>First level graduation in Graphic Design</h3>
                    <p>Aspernatur, mollitia, quos maxime eius suscipit sed beatae ducimus quaerat quibusdam perferendis?
                        Iusto, quibusdam asperiores unde repellat.</p>
                </div>
            </li>
            <li>
                <div class="year pull-left">-- 4 --</div>
                <div class="description pull-right">
                    <h3>Second level graduation in Graphic Design</h3>
                    <p>Ducimus, aliquam tempore autem itaque et accusantium!</p>
                </div>
            </li>
        </ul>

    </div>
</div>