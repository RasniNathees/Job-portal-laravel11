@php
    $defaultClass = 'px-2 py-4 mt-6 bg-white/5 rouded-xl flex gap-6 border  border-transparent hover:border-sky-800 group transition-colors duration-500'
@endphp

<div {{$attributes([ 'class'=>$defaultClass])}} >


    {{$slot}}
</div>