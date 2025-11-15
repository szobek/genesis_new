@props([
    "url"
])
@if($url)
<p>
    <a href="{{ $url }}" class="btn btn-primary" target="_blank">Letöltés</a>
</p>
@endif