@props(['type', 'name', 'label'])
<div class="flex flex-col max-w-[212px] space-y-1 mb-4">
    <label for="name" class="mx-1 text-md">{{$label}}</label>
    <input type={{$type}} name="{{$name}}" 
    class=" flex-wrap bg-white bg-opacity-80 text-gray-900 border border-gray-300 rounded p-2 mb-4 w-full"
    value="{{old($name)}}">
    @error($name)
    <p class=" text-red-600 text-sm font-bold">{{$message}}</p>    
    @enderror
</div>