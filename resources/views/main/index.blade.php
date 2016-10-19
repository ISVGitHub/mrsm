@extends('resume')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="photo-header" class="text-center">
                    {{--PHOTO (AVATAR)--}}
                    <div id="photo">
                        <img src={{ asset('img/myphoto.png') }} alt="avatar">
                    </div>
                    @include('common.language_switch')
                    <div id="text-header">
                        <h1>{{ trans('main_index_file.hello') }},
                            <br> {{ trans('main_index_file.my_name_is') }}
                            <span>{{ trans('main_index_file.name') }}</span>
                            <sup>ISV</sup>
                            {{ trans('main_index_file.and_this') }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                {{--CENTER BLOCK--}}
            <div class="col-xs-12">

            </div>
            <div class="col-xs-12 col-sm-7">
                {{--ABOUT ME--}}
                @include('main.aboutme')
                {{--BASE Skills--}}
                @include('main.base_skills')
                {{--EXPERIENCES--}}
                @include('main.experiences')
                {{--ARTICLES--}}
                @include('main.links_to_articles')

            </div>
            <div class="col-xs-12 col-sm-5">
                {{--CONTACT--}}
                @include('main.contact')
                {{--WEB--}}
                @include('main.level_skils')
                {{--SDK--}}
                @include('main.sdk_skills_level')
                {{--LANGUAGES--}}
                @include('main.languages')
                {{--HOBBIES--}}
                @include('main.hobbies')
            </div>
        </div>
    </div>
@stop