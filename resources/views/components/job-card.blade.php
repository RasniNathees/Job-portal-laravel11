@props(['job'])
<x-card-container class="flex-col text-center">
<div class="self-start text-sm">Jobhorizon</div>

    <div class=" py-4 mt-2 px-4"  >
        <h3 class="group-hover:text-sky-800 font-bold text-xl  transition-colors duration-500">Full stack Laravel Developer</h3>
        <p class="text-sm mt-6">Full Time - From $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex flex-col gap-1">
            @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag/>
            @endforeach
            
          
        </div>
        <img src="{{ Vite::asset('resources/images/logo.png') }} "height="60px" width='60px' alt=""
            class=" rounded-2xl">
    </div>
</x-card-container>
