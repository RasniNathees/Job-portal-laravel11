<x-layout>
    <section>
        <x-page-heading>Register</x-page-heading>
        <div class="flex mx-5 md:mx-0 flex-col md:flex-row  md:min-h-full rounded-2xl border border-white/15">
            <x-form.form action='/register' method="POST">
                <x-form.field label='User Name' type='text' name='name' />
                <x-form.field label='Email' type='text' name='email' />
                <x-form.field label='Password' type='password' name='password' />
                <x-form.field label='Confirm Password' type='password' name='password_confirmation' />

                <x-form.button>Register</x-form.button>

            </x-form.form>
            <div class="bg-green-500 flex-1 md:flex hidden  rounded-tr-2xl rounded-br-2xl">
                <img src="{{ Vite::asset('resources/images/signup.jpeg') }}" class=" rounded-tr-2xl rounded-br-2xl">
            </div>
        </div>
    </section>
</x-layout>
