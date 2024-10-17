<x-layout>


<div class="w-full">
    <div class="flex flex-col">

        <div class="-m-1.5 overflow-x-auto ">
            <div class="p-1.5 min-w-full inline-block align-middle ">


            
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <div class="my-3 text-center">
                @if($active_customers->isNotEmpty())
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                                            class="fa-solid fa-circle-check"></i>Active</span>
                               
                                           @else
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full inline-flex items-center gap-1"><i
                                            class="fa-solid fa-triangle-exclamation"></i>Inactive</span>
                               
                                            @endif
                </div>
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-end md:items-center border-b border-gray-200  md:-px-16">

                        
                            <div class="container mt-10 mx-auto md:-px-16 ">

                                <!-- Section: Design Block -->
                                <section class="">
                                    

                                    <div class="ml-0  lg:ml-16 -mt-8 flex flex-wrap">
                                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pr-6 lg:-ml-16">

                                        <h2 class="mb-12 text-center text-4xl font-semibold underline">
                                      {{ $customer_name}}
                                    </h2>
                                       
                                 

                                            {{-- Created At --}}
                                            <div class="mb-2 flex items-center text-sm font-semibold text-primary">
                                                <span class="text-neutral-600 mr-3">Date Registed:</span><i class="fa-solid fa-calendar-days"></i><span class="ml-1.5"> {{ $created_at->format('M d, Y') }} <i class="fa-regular fa-clock"></i><span class="ml-1.5">{{ $created_at->format('g:i a') }}</span></span>
                                                

                                              
                                                
                                            </div>
                                            
                                            <div class="mb-6 flex items-center text-sm font-semibold text-green-700">
                                                <span class="text-neutral-600 mr-3">Location: </span><i class="fas fa-home mr-1"></i>

                                                 <span>{{ $location }}</span>
                                                

                                              
                                                
                                            </div>

                                            {{-- Contact Details --}}
                                            <h3 class="mb-1 text-md font-semibold underline">Contact Details</h3>
                                            <p class="mb-6 text-neutral-500">
                                              
                                                <span class="inline-block w-full"><span
                                                        class="text-neutral-900">Mobile:</span>
                                                    <u> <i class="fa-solid fa-phone"></i> {{ $contact }}</u></span>
                                               
                                            </p>



                                        </div>


                 

                                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 lg:pl-0">

                                        
                                 
    
  





<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 



      </div>
     
        <!-- Author -->
          
            <!-- END HIDDEN FORM -->
         
            </div>



            <div class="">
                            
                            <h2 class=" mb-2 text-center text-2xl font-semibold ">
                                          History
                                        </h2>
                                           
    
                                            @include('partials.existingcustomerhistory')
                       
                                            </div>

                                       
                                    </div>

                                 
                                    
                                </section>
                            <!-- Container for demo purpose -->
                            {{--  --}}

                        </div>
                        
                </div>
            </div>
            
        </div>
    </div>
  






            









</x-layout>