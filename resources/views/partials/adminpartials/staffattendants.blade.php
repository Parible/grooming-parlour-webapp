<div class="overflow-x-auto p-2">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-2 py-2">ID</th>
                            <th scope="col" class="px-4 py-3">STaff name</th>
                            <th scope="col" class="px-4 py-3">Contact</th>
                            <th scope="col" class="px-4 py-3">Location</th>
                           
                            <th scope="col" class="px-4 py-3">
                            <th scope="col" class="px-4 py-3">
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    @unless ($staff->isEmpty())
                    @forelse ($staff->sortByDesc('created_at') as staff)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">#{{ $staff->id }}</th>
                            <td scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white"> {{ $staff->staff_name }}</th>
                            <td class="px-4 py-3">{{ staff->contact }}</td>
                            <td class="px-4 py-3">{{ staff->location }}</td>
                           
                            <td class="px-4 py-3">{{ $staff->created_at->format('Y-m-d H:i:s') }}</td>
                            
                           
                           
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