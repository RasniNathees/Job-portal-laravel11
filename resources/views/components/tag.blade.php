@props(['size'])

@php
    $class ="bg-white/10  hover:bg-white/30 transition-colors duration-[400ms]";
    
    if($size === 'small')
        $class .=" text-2xs rounded-xl px-3 py-1 ";
    
    if($size === 'large')
        $class .=" text-lg rounded-3xl px-6 py-2  justify-center text-center";
    

@endphp
<a href="#" class="{{$class}}">
    {{ $slot }}</a>
