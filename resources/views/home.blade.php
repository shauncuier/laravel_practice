@foreach ($DataKey as $CountryName)
@if($loop->last)
{{ $CountryName }}
@endif
@endforeach
