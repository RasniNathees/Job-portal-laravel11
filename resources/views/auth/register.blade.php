<x-layout>
   <section>
   <x-page-heading>Register</x-page-heading>
   <div class="flex mx-5 md:mx-0 flex-col md:flex-row  md:min-h-full rounded-2xl border border-white/15">    
    <x-form.form action='/user' method="POST">
        <div class="flex flex-col    max-w-[212px] space-y-1 mb-4">
            <x-form.label>User Name</x-form.label>
            <x-form.input type="text" name="name"/>
        </div>
        <div class="flex flex-col max-w-[212px] space-y-1 mb-4">
            <x-form.label>User Email</x-form.label>
            <x-form.input type="text" name="email"/>
        </div>
        <div class="flex flex-col max-w-[212px]  space-y-1 mb-4">
            <x-form.label>Password</x-form.label>
            <x-form.input type="password" name="password"/>
        </div>
        <div class="flex flex-col max-w-[212px] space-y-1 mb-4">
            <x-form.label>Confirm Passowrd</x-form.label>
            <x-form.input type="password"  name="password_confirmation"/>
        </div>

        <x-form.button>Register</x-form.button>
        
    </x-form.form>
    <div class="bg-green-500 flex-1 md:flex hidden  rounded-tr-2xl rounded-br-2xl" > 
        <img src="{{ Vite::asset('resources/images/signup.jpeg') }}" class=" rounded-tr-2xl rounded-br-2xl">
    </div>
</div>
   </section>
</x-layout>