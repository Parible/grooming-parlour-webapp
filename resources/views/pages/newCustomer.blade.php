<x-layout>

<!-- Card Section -->
<div class="max-w-2xl -mt-4 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="bg-white rounded-xl border border-gray-200 shadow-lg p-4 sm:p-7 dark:bg-slate-900">
    <div class="text-center mb-8">
      <div class="mb-8">
      <!-- <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        New Customer Profile
      </h2> -->
        </div>
    
        <div class="-mt-6 sm:col-span-9">
          <div class="flex items-center gap-5">
            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800" src="{{ asset('/images/svgs/user-circle-svgrepo-com.svg')}}" alt="Image Description">
            <div class="flex gap-x-2">
              <div>
               <p class="font-semibold">New Customer Form</p>
              </div>
            </div>
          </div>
        </div> 
    </div>

    <form  id="myForm" action="/newcustomer" method="POST">
                @csrf

      <!-- Section -->
      <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
        <label  class="inline-block text-sm font-medium dark:text-white">
          Name & Contact
        </label>

        <div class="mt-2 space-y-3">
          <input  type="text" autocomplete="off" name="customer_name" value="{{old('customer_name')}}"  class="border border-gray-50 py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-gray-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-red-700 dark:text-gray-400 dark:focus:ring-red-600" placeholder="Full Name">
          @error('customer_name')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
           <input type="text"  autocomplete="off" name="contact" value="{{old('contact')}}"  class="border border-gray-50 py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-gray-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-red-700 dark:text-gray-400 dark:focus:ring-red-600" placeholder="Phone Number">
           @error('contact')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
        </div>
      </div>
      <!-- End Section -->

      <!-- Section -->
      <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent">
        <label class="inline-block text-sm font-medium dark:text-white">
          Location
        </label>

        <div class="mt-2 space-y-3">
          <input name="location" type="text" value="{{old('location')}}"  autocomplete="off" class="border border-gray-50 py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-gray-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-red-700 dark:text-gray-400 dark:focus:ring-red-600" placeholder="Location">
          @error('location')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
            
      
    <div class="mt-5 flex justify-end gap-x-2">
      <a  href="/"><button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Cancel
      </button></a>
      <button type="submit"  id="submitButton" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-600 text-white hover:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Save changes
      </button>
     
    </div>
  </div>
 
  <!-- End Card -->
</div>
<!-- End Card Section -->
 </form>



</x-layout>