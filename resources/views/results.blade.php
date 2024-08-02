<x-layout>
    <x-section-heading>Search Results</x-section-heading>
       <section>
        @foreach ( $jobs as $job )
        <x-job-card-wide :$job>
        </x-job-card-wide>
       
        @endforeach
        
       </section>
  
</x-layout>