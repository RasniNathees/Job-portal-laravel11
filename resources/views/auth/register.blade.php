<x-layout>
   <section>
   <x-page-heading>Register</x-page-heading>
   <div class="flex mx-5 md:mx-0 flex-col md:flex-row  md:min-h-full rounded-2xl border border-white/15">    
    <form class="bg-gradient-to-br from-purple-600 to-blue-400   md:w-[326px] flex flex-col space-y-6  items-center  pt-12 rounded-2xl md:rounded-tr-none md:rounded-br-none  w-rounded-lg shadow-md pb-6">
        @csrf
        <div class="flex flex-col   space-y-1 mb-4">
            <x-form.label>User Name</x-form.label>
            <x-form.input type="text" name="name"/>
        </div>
        <div class="flex flex-col space-y-1 mb-4">
            <x-form.label>User Email</x-form.label>
            <x-form.input type="email" name="email"/>
        </div>
        <div class="flex flex-col   space-y-1 mb-4">
            <x-form.label>Password</x-form.label>
            <x-form.input type="password" name="password"/>
        </div>
        <div class="flex flex-col space-y-1 mb-4">
            <x-form.label>Confirm Passowrd</x-form.label>
            <x-form.input type="password" name="password_confirmation"/>
        </div>

        <button class="bg-gradient-to-br from-lime-800 to-red-800 text-white  py-2 px-4 rounded shadow-lg hover:from-sky-700 hover:to-orange-400 transition duration-300 hover:text-black">
            Save
        </button>
        
    </form>
    <div class="bg-green-500 flex-1 md:flex hidden rounded-tr-2xl rounded-br-2xl" > 
        <img src="{{ Vite::asset('resources/images/signup.jpeg') }}">
    </div>
</div>
   </section>
</x-layout>