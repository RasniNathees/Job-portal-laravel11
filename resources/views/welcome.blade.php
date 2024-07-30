<x-layout>
    <div class="space-y-8">
        <section>
            <h1 class="font-bold text-3xl text-center">Unlock Your Future: Start Your Job Search Now!</h1>
            <form action=""class="mt-6 flex justify-center">
                <input type="text" class="rounded-xl border border-white/15 focus:outline-none focus:ring-2 focus:ring-sky-400 px-5 py-4 w-full max-w-xl mx-auto bg-white/5" placeholder="Web Developer ....">

            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 md:grid-cols-2 ">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 flex flex-wrap space-y-1 ">
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
                <x-tag size="large">Tag</x-tag>
               </div>

        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div>
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>

        </section>
    </div>
</x-layout>
