<x-layout>
    <x-page-heading>Create Organization</x-section-heading>
        <x-form.form method="post" action="/organization" class="mt-6  flex flex-col items-center" enctype="multipart/form-data">
            <x-form.field label='Organization Name' name='name' width='w-4/6' />
            <x-form.field label='Email' name='email' width='w-4/6' />
            <x-form.field label='Phone Number' name='phpne' width='w-4/6' />
            <x-form.field label='Address' name='address' width='w-4/6' />

            <x-form.field label='City' name='city' width='w-4/6' />

            <x-form.field label='Website' name='website' width='w-4/6' />

            <x-form.field label='Organization Logo' type="file" name='logo' width='w-4/6' />
            <x-form.button>Submit</x-form.button>
        </x-form.form>
</x-layout>
