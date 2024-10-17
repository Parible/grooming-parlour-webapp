<x-layout>

<div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5 mb-5">
        <i class="fa-solid fa-users fa-2xl text-gray-400"></i>

            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{$inactive_customer_count}}
                </h2>
                <p class="text-slate-500">Inactive Customers</p>
            </div>
        </div>


<div class="overflow-x-auto p-2">
                <table class="w-full text-sm text-left  text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-2 rounded-l-lg">ID</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Contact</th>
                            <th scope="col" class="px-4 py-3">Location</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3">Date Registered</th>
                            <th scope="col" class="px-4 py-3">
                            <th scope="col" class="px-4 py-3 rounded-r-lg">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @unless ($inactive_customers->isEmpty())
                    @forelse ($inactive_customers->sortByDesc('created_at') as $customer)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">#{{ $customer->id }}</th>
                            <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white hover:text-blue-500"><a href="{{ route('existingcustomer.show', ['customer_id' => $customer->id]) }}"> {{ $customer->customer_name }}</a></th>
                            <td class="px-4 py-3">{{ $customer->contact }}</td>
                            <td class="px-4 py-3">{{ $customer->location }}</td>
                            <td class="px-4 py-3">
                            <div class="flex items-center">
                             
                            @if($inactive_customers)
                                    <!-- <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                                            class="fa-solid fa-circle-check"></i>Active</span>
                                -->
                                           
                                     <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                                            class="fa-solid fa-triangle-exclamation"></i>Inactive</span>
                             
                                            @endif
                                    <!-- <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                                            class="fa-solid fa-check-double"></i></span> -->
                             
                            </div>
                        </td>

                            <td class="px-4 py-3">{{ $customer->created_at->format('Y-m-d H:i:s') }}</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                            <a href="{{ route('existingcustomer.show', ['customer_id' => $customer->id]) }}">
                                <button type="button" class="pt-2 text-white bg-gray-600 hover:bg-gray-900 focus:ring-4 focus:ring-gray-200 font-medium inline-flex items-center rounded-md text-sm pr-2 pt-2 pb-2 pl-2 text-center sm:ml-auto">
                             View
                                </button></a>
                                    
                             
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

            </x-layout> 



            