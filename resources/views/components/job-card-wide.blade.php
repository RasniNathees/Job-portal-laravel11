@props(['job'])
<x-card-container>
    <div class="h-full  ">
        <img src="https://picsum.photos/seed/{{rand(1,10000)}}/100/100
 " alt=""
            class=" rounded-2xl   ">
    </div>
    <div class=" flex-1 flex flex-col  p-1">
        <div class="mx-2 text-sm text-gray-300 ">Jobhorizon</div>

        <div class="mx-2">
            <h3 class="font-bold text-2xl mb-6 md:text-lg  group-hover:text-sky-800 transition-colors duration-500">Full stack Laravel Developer</h3>
            <p class="mt-auto text-gray-300 self-start text-sm">Full Time - From $60,000</p>
        </div>
    </div>
    <div class="  ">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
            @endforeach
        </div>

    </div>

</x-card-container>
