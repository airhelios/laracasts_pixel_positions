@props(['employer', 'width' => 90])

@if (str_contains($employer->logo, 'logo'))
    <img src="{{ asset('storage/'.$employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
@else  
    <img src="http://picsum.photos/seed/{{ rand(0,1000) }}/{{ $width}}" alt="" class="rounded-xl">
@endif




