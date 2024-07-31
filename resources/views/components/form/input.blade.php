@props(['type', 'name'])
<input type={{$type}} name="{{$name}}" class=" flex-wrap bg-white bg-opacity-80 text-gray-900 border border-gray-300 rounded p-2 mb-4 w-full"
>
@error($name)
<p class=" text-red-600 text-sm font-bold">{{$message}}</p>    
@enderror