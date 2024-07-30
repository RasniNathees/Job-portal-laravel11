<x-layout>
    <div class="space-y-8">
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
            <div class="mt-6 space-x-1">
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
