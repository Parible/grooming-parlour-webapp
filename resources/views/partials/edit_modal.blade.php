






















@unless ($customers->isEmpty())
<!-- Edit Product Modal -->
<div class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full" id="product-modal">
    <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold">
                    Assign Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="product-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
            <form action="/existingcustomer/{customer_id}" method="POST">
                @csrf
                @method('PUT')
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="" class="text-sm font-medium text-gray-900 block mb-2">Customer Name</label>
                            <input type="text" autocomplete="off" disabled name="customer_name" value="{{ $customer->customer_name }}"   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
                            @error('customer_name')
             <p class="mt-1 bg-white text-xs font-semibold text-red-500">{{ $message }}</p>
            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Contact</label>
                            <input type="text"  autocomplete="off" disabled name="contact" value="+233 {{ $customer->contact }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
                            @error('contact')
             <p class="mt-1 bg-white text-xs font-semibold text-red-500">{{ $message }}</p>
            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Location</label>
                            <input name="location" type="text"  disabled value="{{ $customer->location }}"   autocomplete="off" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
                            @error('location')
             <p class="mt-1 bg-white text-xs font-semibold text-red-500">{{ $message }}</p>
            @enderror
            <div class="hidden mt-2 space-y-3">
                
                <!--HIDDEN FORM-->
          <input name="author" type="text" value="{{ auth()->user()->name }}"   autocomplete="off" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-gray-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-red-700 dark:text-gray-400 dark:focus:ring-red-600" placeholder="Location">
          <input type="text" autocomplete="off"  name="customer_name" value="{{ $customer->customer_name }}"   class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
          <input type="text"  autocomplete="off"  name="contact" value="{{ $customer->contact }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
        <input name="location" type="text"   value="{{ $customer->location }}"   autocomplete="off" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
        </div>  
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="" class="text-sm font-medium text-gray-900 block mb-2">Type of service</label>
                            <select name="service" autocomplete="off"
    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    <option value="">--Choose--</option>
    @foreach ($services as $service)
    <option value="{{ $service->id }}" data-service-name="{{ $service->service_name }}" data-service-amt="{{ $service->service_amt }}">{{ $service->service_name }}</option>
    @endforeach
</select>
                        </div>

                    
                        <div class="col-span-6 sm:col-span-3">
                            <label for="" class="text-sm font-medium text-gray-900 block mb-2">Assigned to</label>
                            <select name="staff_name"  autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 text-center text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="">--Choose--</option>
                                    
                                    
                                    @foreach($cashier as $cashier)
                                    <option value="{{ $cashier->staff_name }}">  {{ $cashier->staff_name }}</option>
                                     @endforeach
                                    
                                      </select>
          <!-- <input name="staff" type="text" value="{{ old('staff') }}"   autocomplete="off" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-gray-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-red-700 dark:text-gray-400 dark:focus:ring-red-600" placeholder="Barber/Hairdresser"> -->
          @error('staff')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
            
                        </div>
                        
                        <!-- <div class="col-span-full">                          
                            <label for="product-details" class="text-sm font-medium text-gray-900 block mb-2">Other Details</label>
                            <textarea id="product-details" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="e.g. Add any additional information here..."></textarea>
                        </div> -->
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="p-6 border-t border-gray-200 rounded-b">
                    <button class="text-white bg-gray-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Done</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endunless