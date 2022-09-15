<x-guest-layout>
    <div class="container mx-auto">
       <section class="m-2 p-2 bg-gray-100">

            @foreach ($listings as $listing)
            <ul>
                <li class="border list-none rounded-sm px-3 py-3">
                    <a href="{{ route('listings.show',$listing->id) }}">{{ $listing->name }}</a>
                </li>
            </ul>    
            @endforeach
          
       </section>
    </div>
</x-guest-layout>