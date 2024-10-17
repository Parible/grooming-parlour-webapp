
<!-- Add Product Modal -->
<div class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full" id="add-product-modal">
    <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold">
                    Add Customer
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="add-product-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form  id="myForm" action="/" method="POST">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="" class="text-sm font-medium text-gray-900 block mb-2">Customer Name</label>
                            <input type="text" autocomplete="off" name="customer_name" value="{{old('customer_name')}}"  class="shadow-sm bg-white border border-gray-400 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Full name”" required>
                            @error('customer_name')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="" class="text-sm font-medium text-gray-900 block mb-2">Contact</label>
                            <input type="text"  autocomplete="off" name="contact" value="{{old('contact')}}" class="shadow-sm bg-white border border-gray-400 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Phone number" required>
                            @error('contact')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Location</label>
                            <input name="location" type="text" value="{{old('location')}}"  autocomplete="off" class="shadow-sm bg-white border border-gray-400 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="residence" required>
                            @error('location')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
                        </div>
                       
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="p-6 border-t border-gray-200 rounded-b">
                    <button class="text-white bg-gray-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"    id="submitButton" type="submit">Add Customer</button>
                </div>
            </form>
        </div>
    </div>
</div>




      