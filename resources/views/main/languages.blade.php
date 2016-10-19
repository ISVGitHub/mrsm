<div class="box">
    @if(LaravelLocalization::getCurrentLocale() == 'ru')
        <h2>Иностранные языки</h2>
    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
        <h2>Languages</h2>
    @else
        <h2>Hier is not translate.</h2>
    @endif

    <div id="language-skills">
        <div class="skill">Russian<div class="icons pull-right"><div style="width: 100%;" class="icons-red"></div></div></div>
        <div class="skill">English<div class="icons pull-right"><div style="width: 50%;" class="icons-red"></div></div></div>
        <div class="skill">Spanish<div class="icons pull-right"><div style="width: 20%;" class="icons-red"></div></div></div>
    </div>
</div>