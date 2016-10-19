<div class="box">
    @if(LaravelLocalization::getCurrentLocale() == 'ru')
        <h2>Увлечения</h2>
    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
        <h2>Hobbies</h2>
    @else
        <h2>Hier is not translate.</h2>
    @endif

        @if(LaravelLocalization::getCurrentLocale() == 'ru')
            <div class="hobby">Природа</div>
            <div class="hobby">Спорт</div>
            <div class="hobby">Программирование</div>
        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
            <div class="hobby">Nature</div>
            <div class="hobby">Fitness</div>
            <div class="hobby">Programming</div>
        @else
            <h2>Hier is not translate.</h2>
        @endif

</div>