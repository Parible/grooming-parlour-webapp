

<x-layout>


@if(auth()->check() && auth()->user()->isAdmin())
    <!-- Admin-only content -->




<form action="/newstaff"  class="hidden lg:block lg:pl-32">
                            <label for="topbar-search" class="sr-only">Search</label>
                            <div class="relative mt-8 lg:w-64">
                               
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                               

                                <input type="search" name="search" id="topbar-search" 
                                    class="block w-full rounded-full border border-gray-300 bg-white p-2.5 pl-10 text-gray-900 focus:border-cyan-600 focus:ring-cyan-600 sm:text-sm"
                                    placeholder="Search Staff...">
                            </div>
                        </form>


                        <div class="flex justify-end px-4 py-2 -mt-14 mr-24">
                                <a href="/newstaff"><button type="button"
                                        class="transform rounded-full bg-red-500 px-4 py-2 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-red-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                        Add New Staff+
                                    </button></a>
                    </div>


   
    <!-- ====== Table Section Start -->
    <section class="mr-16 -mt-16 mx-auto bg-white py-20 lg:py-[120px]">
        <div class="container">
            
      

            <div class="mr-2 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">

                    
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gradient-to-tr from-red-800 to-red-500 text-center">
                                    
                                    <!-- <th
                                        class="w-1/12 min-w-[80px] px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                       ID
                                    </th> -->
                                    <!-- <th
                                        class="w-1/12 min-w-[80px] px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                       Profile
                                    </th> -->
                                    <th
                                        class="w-1/12 min-w-[80px] px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                        Staff Name
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                        Contact
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                        Location
                                       
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                        DOB
                                    </th>
                                    <th
                                        class="w-1/12 min-w-[80px] border-r border-transparent px-3 py-4 text-sm font-semibold text-white lg:px-2 lg:py-2">
                                        Edit
                                    </th>
                                    
   
                            </thead>

                            <tbody>

                            @if(isset($searchQuery))
    
                            <p>Search results for: "{{ $searchQuery }}"</p>

                            @endif

                          
                            @unless ($staff->isEmpty()) 
                          

                        
                            @foreach ($staff as $staff)

                    
                                        <tr>
                                           
                            
                                            <!-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] px-2 py-2 text-center text-base text-sm font-medium">
                                                <a href="{{ route('staff.show', ['id' => $staff->id]) }}">

                                                

                                                <img class="w-16 h-16 rounded-full object-cover"
                                                    src="{{ $staff->image ? asset('storage/' . $staff->image) : asset('') }}"
                                                    alt="">
                                                <a href="{{ asset('storage/' . $staff->image) }}" target="_blank"
                                                    class="text-xs text-blue-500">View</a>

                                                </td> -->

                                            <td
                                                class="text-dark text border-b border-[#E8E8E8] bg-white px-2 py-2 text-center text-base text-sm font-medium">
                                                {{ $staff->staff_name }}
                                            </td>
                                            
                                            <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] px-2 py-2 text-center text-base text-sm font-medium">
                                                {{ $staff->contact }}
                                            </td>

                                         <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] px-2 py-2 text-center text-base text-sm font-medium">
                                                {{ $staff->location }}
                                            </td> 

                                         <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] px-2 py-2 text-center text-base text-sm font-medium">
                                                {{ $staff->dob }}
                                            </td> 
                                         <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] px-2 py-2 text-center text-base text-sm font-medium">
                                                Edit
                                            </td> 

                        
                                            <!-- <td
                                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] px-2 py-2 text-center text-base text-sm font-medium">
                                            <button> <a href="/staff">
                                               CLICK
                                             </button></a>
                                            </td>
                                             -->
                            
                                            </tr>

                                          
                                           
                                            @endforeach
                                            
                                            @else
                                            <p class="text-2xl font-bold text-red-500"> Staff Doesn't exist </p>
                                            <a href="/newstaff">Add Staff</a>
                                            @endunless

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONDITION IF ITS A USER -->
    @else

    
   
    










    <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-8 mx-auto">
        <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Our Team</h2>

        <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($staff as $member)
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg" src="{{ $member->image ? asset('storage/' . $member->image) : asset('') }}" alt="avatar" />
                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">{{ $member->staff_name }}</h3>
                        <!-- <span class="mt-1 font-medium text-gray-600 dark:text-gray-300"></span> -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endif



































<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>


</x-layout>