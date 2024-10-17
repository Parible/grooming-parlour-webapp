<x-layout>
<div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-users fa-2xl text-blue-600"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                  {{ $user_count}}
                </h2>
                <p class="text-slate-500">Secretaries</p>
            </div>
        </div>
<div class="grid max-w-full my-4">
                  <div class="bg-white border border-gray-100 rounded-lg mb-4 p-4 sm:p-6 h-full">
                     <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold leading-none text-gray-900">Secretaries</h3>
                        <a href="" class="text-sm font-medium text-red-600 text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                        Add
                        </a>
                     </div>
                     @foreach ($users as $user)
                     <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                   
                                 @if($user->image)
                                 <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . $user->image) }}" alt="avatar">
                             @else
                                 <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('/images/svgs/user-circle-svgrepo-com.svg')}}" alt="Default Image">
                             @endif
                                 
                                 </div>
                                 <div class="flex-1 min-w-0">
                                   
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                      {{ $user->name }}
                                    </p>
                                   
                                    <p class="text-sm text-gray-500 truncate">
                                       <span>{{ $user->email}}</span>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    <a href="">View activities</a>
                                 </div>
                              </div>
         
                        </ul>
                     </div>
                     @endforeach
                  </div>
                
               </div>
            

</x-layout>