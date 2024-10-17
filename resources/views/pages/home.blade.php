<x-layout>



<section class="bg-white dark:bg-gray-900 sm:p-5">
    <div class="mx-auto max-w-screen-xl -mt-10">





    <div class="mb-6 w-full h-full flex flex-col lg:flex-row items-center justify-between gap-5 lg:gap-10">
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-users fa-2xl text-green-600"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{ $active_customer_count}}
                </h2>
                <p class="text-slate-500">Active Customers</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
        <i class="fa-solid fa-users fa-2xl text-gray-400"></i>

            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{$inactive_customer_count}}
                </h2>
                <p class="text-slate-500">Inactive Customers</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-users fa-2xl text-blue-600"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                  {{ $user_count}}
                </h2>
                <p class="text-slate-500">Secretaries</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-user-shield fa-2xl text-red-800"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{ $staff_count}}
                </h2>
                <p class="text-slate-500">Workers</p>
            </div>
        </div>
    </div>


    <div class="bg-white dark:bg-gray-800 relative border border-gray-100 rounded-lg overflow-hidden lg:rounded-lg">
          <div class="mt-4 ml-5">
            <span class="text-gray-600 text-2xl font-semibold antialiasing">Customers</span>
          </div>

            <div class="flex flex-col md:flex-row items-center mt-4 justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                  







<form action="">
                <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
                    <div class="relative flex items-center mb-3" data-te-input-wrapper-init>
  <input
    type="search" name="search" id="simple-search"
    class="peer block min-h-[auto] w-full rounded-lg  border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
    id="exampleSearch2"
    placeholder="Search customer..." />
  <button
    class="relative z-[2] flex-shrink-0 flex items-center rounded-r bg-gray-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-gray-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
    type="submit"
    id="button-addon1"
    data-te-ripple-init
    data-te-ripple-color="light">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 20 20"
      fill="currentColor"
      class="h-5 w-5">
      <path
        fill-rule="evenodd"
        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
        clip-rule="evenodd" />
    </svg>
  </button>
  <label
    for="exampleSearch2"
    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
    >Search</label
  >
</div>


                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                
                        
                <a href="/newcustomer">
                            <button
  type="button"
  data-te-ripple-init
  data-te-ripple-color="light"
  class="inline-block rounded bg-gray-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-gray-600 ">
  New Form
</button></a>
                                    

                <!-- <button type="button" data-modal-toggle="add-product-modal" class="text-white bg-gray-800 shadow-lg hover:shadow-xl hover:bg-gray-900 focus:ring-4 focus:ring-gray-200 font-medium inline-flex items-center rounded-md text-sm px-3 py-2 text-center sm:ml-auto">
                    <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Quick Add
                </button> -->
                <div class="inline-flex gap-x-2">
                                    <a wire:navigate.hover href="" type="button" " data-modal-toggle="add-product-modal"
                                        class="rounded bg-neutral-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] transition duration-150 ease-in-out hover:bg-neutral-800 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-neutral-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:outline-none focus:ring-0 active:bg-neutral-900 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] inline-flex items-center gap-x-2"
                                        data-te-toggle="modal" data-te-target="#exampleModalVarying"
                                        data-te-whatever="@fat" data-te-ripple-init data-te-ripple-color="light">
                                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Quick Add
                                    
                                    </a>
                                </div>

                    <div class="flex items-center space-x-3 w-full md:w-auto">
                    <a href="/"><button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                      <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                      </svg>
                      Refresh 
                  </button></a>
                        <!-- <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button> -->
                        <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Sort by</h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:rounded-lg">Latest</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white hover:rounded-lg">Name</a>
                                </li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto p-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="antialiased text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-3 py-2 ">ID</th>
                            <th scope="col" class="px-3 py-3">Name</th>
                            <th scope="col" class="px-3 py-3">Contact</th>
                            <th scope="col" class="px-3 py-3">Location</th>
                            <!-- <th scope="col" class="px-3 py-3">Status</th> -->
                            <th scope="col" class="px-3 py-3 whitespace-nowrap">Date Registered</th>
                            <!-- <th scope="col" class="px-4 py-3">Action</th> -->
                            <!-- <th scope="col" class="px-3 py-3"> -->
                            <th scope="col" class="px-3 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @unless ($customers->isEmpty())
                    @forelse ($customers->sortByDesc('created_at') as $customer)
                        <tr class="border-b dark:border-gray-700 hover:bg-gray-50">
                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 dark:text-white">#{{ $customer->id }}</th>
                            <td scope="row" class="px-3 py-3">   <div class="font-semibold capitalize text-neutral-500 hover:underline hover:text-neutral-900 font-size:1rem">
                                    <a wire:navigate.hover href="{{ route('existingcustomer.show', ['customer_id' => $customer->id]) }}" >
                                    {{ $customer->customer_name }}
                                    </a>
                                </div></th>
                            <!-- <td class="px-4 py-3"></td> -->

                            <td class="px-3 py-3">
                            <p class=""><span class="font-semibold"><i class="fa-solid fa-phone"></i> {{ $customer->contact }}</span>
                            </p>
                            
                        </td>

                        <td class="px-3 py-3 max-w-[200px] overflow-hidden whitespace-nowrap text-overflow-ellipsis truncate"><i class="fas fa-home"></i>
{{ $customer->location }}</td>


<!-- 
                            <td class="px-3 py-3">
                            <div class="flex items-center">
                                

                            @if(\App\Models\Transactions::isActiveCustomer($customer->id))
                         
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                                            class="fa-solid fa-circle-check"></i>Active</span>
                                            
                                           
                            @else
                            <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                            class="fa-solid fa-triangle-exclamation"></i>Inactive</span>
                            
                            
                           @endif
                                   
                             
                            </div>
                        </td> -->
                            <td class="px-3 py-3">


                            <p><i class="fa-solid fa-calendar-days"></i>
                            {{  $customer->created_at->format('M d, Y') }}
                                <i class="fa-regular fa-clock"></i>  {{  $customer->created_at->format('g:i a') }}
                                </p>
                                </td>

                             
<!-- 
                                <td class="px-3 py-3">
                               
                                <a href="#" role="button" class="inline-block rounded-full border-2 border-gray-500 text-gray-500 hover:border-gray-600 hover:bg-gray-400 hover:bg-opacity-10 hover:text-gray-600 focus:border-gray-700 focus:text-gray-700 active:border-gray-800 active:text-gray-800 dark:border-gray-300 dark:text-gray-300 dark:hover:hover:bg-gray-300 px-2 py-2 pb-2 pt-1 text-xs font-medium uppercase leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">Assign</a>

                                </td> -->
                            


                            <!-- <td class="py-3 px-3 whitespace-nowrap">
                            <button>       
                                            <a  href="{{route('existingcustomerdetail.show' ,['customer_id'=>$customer->id])}}"
                                                type="button"
                                                class="py-2 px-2 rounded-lg text-sm text-yellow-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 ">
                                                <i class="fas fa-eye"></i>
                                                View


                                            </a>
                                            </button></a>
                                      
                                 
  <button>                                      

<a href="{{ route('updateexistingcustomer.show', ['customer_id' => $customer->id]) }}"><button type="button" class=" py-2 px-2 rounded-lg text-sm text-yellow-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
<i class="fa-solid fa-pen-to-square"></i>
Edit
</button></a>

                            </td> -->
                            
                            <td class="py-3 h-px ">
                            <div class="px-6 py-1.5">
                                <div class="relative inline-flex items-center gap-x-1">
                                  
                               
                                        <!-- <div class="py-1">
                                            <a  href=""
                                                type="button"
                                                class="py-2 px-2 rounded-lg text-sm text-yellow-600 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </div>
                                 

                                   
                                        <div class="py-1">
                                            <button type="button" data-te-toggle="modal"
                                                data-te-target=""
                                                class="py-2 px-2 rounded-lg text-sm text-red-700 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div> -->
                                  

                                    <!-- Modal -->
                                    <div data-te-modal-init
                                        class="fixed left-0 -top-20 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                        id="" tabindex="-1"
                                        aria-labelledby="" aria-hidden="true">
                                        <div data-te-modal-dialog-ref
                                            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[500px]:mx-auto min-[500px]:mt-7 min-[500px]:min-h-[calc(100%-3.5rem)] min-[500px]:max-w-[450px]">
                                            <div
                                                class="min-[500px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
                                                <p class="pt-5 text-center text-red-600"><i
                                                        class="fa-solid fa-triangle-exclamation fa-2xl"></i></p>

                                                <!--Modal body-->
                                                <div class="relative flex-auto p-4 text-center text-lg"
                                                    data-te-modal-body-ref>
                                                    Are you sure you want to delete? <br /> <span
                                                        class="text-primary text-xl">qwe
                                                        </span>
                                                </div>

                                                <div
                                                    class="w-full flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md p-4">
                                                    <button type="button"
                                                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                                        data-te-modal-dismiss data-te-ripple-init
                                                        data-te-ripple-color="light">
                                                        Close
                                                    </button>
                                                    <button 
                                                        type="button"
                                                        class="ml-1 inline-flex items-center justify-center gap-2 rounded bg-red-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-red-700"
                                                        data-te-ripple-init data-te-ripple-color="light">
                                                        Delete
                                                       
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>

                        </tr>
                        @endforeach
                                 @else
                                  <p class="text-sm font-semibold text-red-500"> No such customer</p>
                    @endunless

                        @if(isset($searchQuery))
                           <p class="text-sm text-black-500">Search results for: <span class="text-sm font-semibold text-red-500">"{{ $searchQuery }}"</span></p>
                        @endif
                      
                    </tbody>
                </table>
            </div>
            </div>

            @include('partials.pagination')


            @include('partials.add_modal')
            @include('partials.edit_modal')

            @include('partials.staffpartial ')

            @include('partials.table')
            

        
    </div>
    </section>

</x-layout>