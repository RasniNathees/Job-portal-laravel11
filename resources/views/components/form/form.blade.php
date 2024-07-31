@props(['method' =>'GET','action'] )
<form id="form" action="{{$action}}" method={{$method}} class="  pb-4 bg-gradient-to-br from-black to-sky-800 flex-grow-0   md:w-[326px] flex flex-col space-y-6  items-center  pt-12 rounded-2xl md:rounded-tr-none md:rounded-br-none  w-rounded-lg shadow-md ">
   
    @csrf
    @if ($method !== 'GET')
    @method($method)
    @endif
    
    {{$slot}}
</form>