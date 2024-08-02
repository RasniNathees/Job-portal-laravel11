<x-layout>
    <div class="space-y-8">
        <section>
            <h1 class="font-bold text-3xl text-center">Unlock Your Future: Start Your Job Search Now!</h1>
           
            <x-form.form action="/search" method="GET" class="mt-6 flex justify-center">
                <input type="text" name ='search' class="rounded-xl border border-white/15 focus:outline-none focus:ring-2 focus:ring-sky-400 px-5 py-4 w-full max-w-xl mx-auto bg-white/5" placeholder="Web Developer ....">
            </x-form.form>
        </section>
        
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3  gap-8 md:grid-cols-2 ">
               @foreach ($futuredJobs as $job)
               <x-job-card :$job />
               @endforeach
                
                
            </div>

        </section>
        <section class="min-w-5  ">
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 h-full   flex flex-wrap gap-1   ">
                
                @foreach ($tags as $tag )
               
                <x-tag size='large' :$tag/>
              
                @endforeach
              
            
               

        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div>
                @foreach ($jobs as $job)
                <x-job-card-wide :$job/>
                @endforeach
                
              
            </div>
            </div>

        </section>
    </div>
    <div class="p-4">
       
        {{ $jobs->links() }}
    </div>
</x-layout>
