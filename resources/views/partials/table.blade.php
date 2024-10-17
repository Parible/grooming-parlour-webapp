

<div class="bg-white dark:bg-gray-800 relative border border-gray-100 rounded-lg overflow-hidden lg:rounded-lg">

    
    
<div class="p-3">
  <span class="text-gray-600 text-2xl font-semibold antialiasing">Recently Visisted</span>
</div>



<div class="overflow-x-auto p-2">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-2">ID</th>
                            <th scope="col" class="px-3 py-3">Name</th>
                            <th scope="col" class="px-3 py-3">Assigned</th>
                            <th scope="col" class="px-3 py-3">Service Type</th>
                            <th scope="col" class="px-3 py-3"> Price</th>
                            <th scope="col" class="px-3 py-3 whitespace-nowwrap">Last Visisted</th>
                            <th scope="col" class="px-3 py-3 whitespace-nowwrap">Notes</th>
                            <th scope="col" class="px-3 py-3">
                            <th scope="col" class="px-3 py-3">
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    @unless ($customers->isEmpty())
                    @forelse (   $assigned_customers->sortByDesc('created_at') as $customer)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">#{{ $customer->id }}</th>
                            <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ $customer->customer_name }}</th>
                          

                            <td class="px-3 py-3">{{ $customer->staff_name }}</td>
                            <td class="px-3 py-3 px-3 py-3 max-w-[200px] overflow-hidden whitespace-nowrap text-overflow-ellipsis truncate">{{ $customer->services }}</td>
                            <td class="px-3 py-3">GH&#8373; {{$customer->service_amt}}</td>
                           
                           
                            <td class="px-3 py-3">  <p><i class="fa-solid fa-calendar-days"></i>
                            {{  $customer->created_at->format('M d, Y') }}
                                <i class="fa-regular fa-clock"></i>  {{  $customer->created_at->format('g:i a') }}
                                </p>
                            </td>
                            
                            <td class="px-3 py-3">
                            @if($customer->additionals)    
                            {{$customer->additionals}} @else No Info @endif</td>

                            @endforeach
                            @else
                            <p class="text-sm font-bold text-red-500"> Not found</p>
                                        @endunless
<!--                        
                        @if(isset($searchQuery))
                           <p class="text-sm text-black-500">Search results for: <span class="text-sm font-semibold text-red-500">"{{ $searchQuery }}"</span></p>
                        @endif
                       -->
                    </tbody>
                   
                </table>
            </div>

           


                
        </div>
    </div>
    </div>
</section>





