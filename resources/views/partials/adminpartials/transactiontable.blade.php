<div class="  mt-8 bg-white dark:bg-gray-800 relative border border-gray-100 rounded-lg overflow-hidden lg:rounded-sm">

    
    
            <div class="ml-5 mt-4">
              <span class="text-gray-600 text-2xl font-semibold antialiasing">All Transactions</span>
            </div>
            

            <div class="flex flex-col md:flex-row items-center mt-4 justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">


                    <form class="flex items-center">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="search" name="search" id="search" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search customer..." >
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                
                    
      <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                  <a href="/manage"><button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                      <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                      </svg>
                      Update 
                  </button></a>
                  <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                      <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                      </svg>
                      Export
                  </button>
              </div>
              <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
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
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-3 py-2">ID</th>
                            <th scope="col" class="px-3 py-3">Name</th>
                            <th scope="col" class="px-3 py-3">Contact</th>
                            <th scope="col" class="px-3 py-3">Location</th>
                            <th scope="col" class="px-3 py-3"> Assigned to</th>
                            <th scope="col" class="px-3 py-3">Service Type</th>
                            <th scope="col" class="px-3 py-3"> Price</th>
                            <th scope="col" class="px-3 py-3">Cashier</th>
                            <th scope="col" class="px-3 py-3">Last Visisted</th>
                            
                            <th scope="col" class="px-3 py-3">additional Notes</th>
                            <th scope="col" class="px-3 py-3">
                            <th scope="col" class="px-3 py-3">
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    @unless ($customers->isEmpty())
                    @forelse ($customers->sortByDesc('created_at') as $customer)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">#{{ $customer->id }}</th>
                            <td scope="row" class="px-3 py-3 whitespace-nowrap font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ $customer->customer_name }}</th>
                            <td class="px-3 py-3 whitespace-nowrap">{{ $customer->contact }}</td>
                            <td class="px-3 py-3 whitespace-nowrap max-w-[200px] overflow-hidden text-overflow-ellipsis truncate">{{ $customer->location }}</td>
                            <td class="px-3 py-3 whitespace-nowrap">{{ $customer->contact }}</td>
                            <td class="px-3 py-3 whitespace-nowrap max-w-[200px] overflow-hidden text-overflow-ellipsis truncate">{{ $customer->services }}</td>
                            <td class="px-3 py-3 whitespace-nowrap">GH&#8373; {{$customer->service_amt}}</td>
                            <td class="px-3 py-3 whitespace-nowrap">{{$customer->author}}</td>
                           
                            <td class="px-3 py-3 whitespace-nowrap">{{ $customer->created_at->format('Y-m-d H:i:s') }}</td>
                            
                            <td class="px-3 py-3 whitespace-nowrap">
                            @if($customer->additionals)    
                            {{$customer->additionals}} @else No Info @endif</td>
                           
                            @endforeach
                            @else
                            <p class="text-sm font-bold text-red-500"> Not found</p>
                                        @endunless
                       
                        @if(isset($searchQuery))
                           <p class="text-sm text-black-500">Search results for: <span class="text-sm font-semibold text-red-500">"{{ $searchQuery }}"</span></p>
                        @endif
                      
                    </tbody>
                   
                </table>
            </div>

           