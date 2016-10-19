<div class="col-xs-12">
    <div id="photo-header" class="text-center">
        {{--PHOTO (AVATAR)--}}
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