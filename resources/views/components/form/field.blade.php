@props(['type'=>'text', 'name', 'label','width'=>' max-w-[212px]'])
<div class="flex flex-col {{$width}} space-y-1 mb-4">
    <label for="name" class="mx-1 text-md w-full">{{$label}}</label>
    <input type={{$type}} name="{{$name}}" 
    class=" flex-wrap  bg-white bg-opacity-80 text-gray-900 border border-gray-300 rounded p-2 mb-4 "
    value="{{old($name)}}">
    @error($name)
    <p class=" text-red-600 text-sm font-bold">{{$message}}</p>    
    @enderror
</div>