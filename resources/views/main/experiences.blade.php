<div class="box">
    @if(LaravelLocalization::getCurrentLocale() == 'ru')
        <h2>Опыт</h2>
    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
        <h2>Experiences</h2>
    @else
        <h2>Hier is not translate.</h2>
    @endif

    <div class="job clearfix">
        <div class="col-xs-3">
            <div class="where">Google</div>
            <div class="year">2013 - 2014</div>
        </div>
        <div class="col-xs-9">
            <div class="profession">Front-end developer / php programmer</div>
            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, et, illum perferendis veritatis velit sunt similique qui magni totam harum tempore eius laboriosam accusantium necessitatibus voluptatum? Enim, itaque dignissimos quia.
            </div>
        </div>
    </div>
    <div class="job clearfix">
        <div class="col-xs-3">
            <div class="where">Twitter</div>
            <div class="year">2012</div>
        </div>
        <div class="col-xs-9">
            <div class="profession">Web Developer</div>
            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, nihil sit nemo voluptatem praesentium. Quia, qui facere consectetur libero asperiores fugiat consequuntur deserunt culpa repudiandae sed quidem voluptas explicabo soluta.</div>
        </div>
    </div>
</div>