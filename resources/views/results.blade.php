<x-layout>
    
        @foreach ( $jobs as $job )
        <x-job-card-wide :$job>
        </x-job-card-wide>
        @endforeach
        
  
</x-layout>