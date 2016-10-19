<div class="box">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <a rel="alternate" hreflang="{{$localeCode}}" class="text-right" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">{{ $properties['native'] }}</a>
    @endforeach
</div>
