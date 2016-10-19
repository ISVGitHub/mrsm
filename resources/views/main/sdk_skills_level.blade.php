<div class="box">
    @if(LaravelLocalization::getCurrentLocale() == 'ru')
        <h2>SDK уровни знаний</h2>
    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
        <h2>SDK Skills Level</h2>
    @else
        <h2>Hier is not translate.</h2>
    @endif

    <div class="skills">
        <div class="item-skills" data-percent="0.55">JDK</div>
        <div class="item-skills" data-percent="0.30">iPhone</div>
        <div class="item-skills" data-percent="0.20">DirectX</div>
        <div class="item-skills" data-percent="0.40">Source SDK</div>
        <div class="item-skills" data-percent="0.45">Android SDK</div>
        <div class="skills-legend clearfix">
            <div class="legend-left legend">Beginner</div>
            <div class="legend-left legend"><span>Proficient</span></div>
            <div class="legend-right legend"><span>Expert</span></div>
            <div class="legend-right legend">Master</div>
        </div>
    </div>
</div>