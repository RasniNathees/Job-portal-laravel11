@props(['size','tag'])

@php
        $class = "bg-white/10  hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 whitespace-nowrap";
                //   bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300 whitespace-nowrap 
    
    if($size === 'small')
        $class .=" px-3 py-1 text-2xs max-w-80 ";
    
    if($size === 'large')
        $class .=" px-2 py-1 text-sm";
    

@endphp
<a href="/search?search={{$tag->name}}" class="{{$class}}">
  {{$tag->name}}</a>
