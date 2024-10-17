<x-layout>

@if(auth()->check() && auth()->user()->isAdmin())





    @include('partials.adminpartials.incomeinfo')


<section class="bg-white dark:bg-gray-900 sm:p-5">
    <div class="mx-auto max-w-screen-xl -mt-10">


    


    @include('partials.adminpartials.transactiontable')
    </div>
    
</section>







@include('partials.staffpartial ')




    @else
    <span class="text-red-800 font-bold">
        Nothing is see here :)
    </span>
@endif


</x-layout>














