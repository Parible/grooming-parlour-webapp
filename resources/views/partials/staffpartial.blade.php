               <div class="grid  my-4 max-w-full">
                  <div class="bg-white border border-gray-100 rounded-lg mb-4 p-4 sm:p-6 h-full">
                     <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold leading-none text-gray-900">Workers</h3>
                        <a href="/staff" class="text-sm font-medium text-red-600 text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                        View all
                        </a>
                     </div>
                     @foreach ($staff as $staff)
                     <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                   
                                 @if($staff->image)
                                 <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . $staff->image) }}" alt="avatar">
                             @else
                                 <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/images/svgs/user-circle-svgrepo-com.svg')}}" alt="Default Image">
                             @endif
                                 
                                 </div>
                                 <div class="flex-1 min-w-0">
                                   
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                      {{ $staff->staff_name }}
                                    </p>
                                   
                                    <p class="text-sm text-gray-500 truncate">
                                       <span>{{ $staff->location}}</span>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    {{ $staff->contact }}
                                 </div>
                              </div>
         
                        </ul>
                     </div>
                     @endforeach
                  </div>
                
               </div>
            
