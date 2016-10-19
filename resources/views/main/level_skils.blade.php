<div class="box">
    @if(LaravelLocalization::getCurrentLocale() == 'ru')
        <h2>Web уровни знаний</h2>
    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
        <h2>Web Skills Level</h2>
    @else
        <h2>Hier is not translate.</h2>
    @endif

    <div class="skills">
        <div class="item-skills" data-percent="1.00"><a>HTML</a></div>
        <div class="item-skills" data-percent="0.90">CSS</div>
        <div class="item-skills" data-percent="0.80">jQuery</div>
        <div class="item-skills" data-percent="0.75">PHP</div>
        <div class="item-skills" data-percent="0.25">Laravel 5</div>
        <div class="skills-legend clearfix">
            <div class="legend-left legend">Beginner</div>
            <div class="legend-left legend"><span>Proficient</span></div>
            <div class="legend-right legend"><span>Expert</span></div>
            <div class="legend-right legend">Master</div>
        </div>
    </div>
</div>