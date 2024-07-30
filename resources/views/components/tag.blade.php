@props(['size'])

@php
    $class ="bg-white/10 rounded-xl hover:bg-white/30 transition-colors duration-[400ms]";
    
    if($size === 'small')
        $class .=" text-2xs  px-4 py-1 ";
    
    if($size === 'large')
        $class .=" text-lg px-6 py-2 ";
    

@endphp
<a href="#" class="{{$class}}">
    {{ $slot }}</a>
