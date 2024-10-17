<x-layout>


<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="bg-white rounded-xl border border-gray-200 shadow-lg p-4 sm:p-7 dark:bg-slate-900">
    <div class="mb-8">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Profile
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
       Add and manage staff information 
      </p>
    </div>

    <form action="/staff/existing/{id}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <!-- Grid -->
      <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
        <div class="sm:col-span-3">
          <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Profile photo
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="flex items-center gap-5">
            <img class="inline-block h-16 w-16 rounded-full ring-2 ring-white dark:ring-gray-800" src="{{ asset('/images/svgs/user-circle-svgrepo-com.svg')}}" alt="Image Description">
            <div class="flex gap-x-2">
              <div>
              
              



              <label class="inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
    <input type="file" name="image" autocomplete="off" class="block w-full text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-violet-50 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-violet-700 hover:file:bg-violet-100" />
    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" x2="12" y1="3" y2="15"/></svg>
    Upload photo
</label>



              </div>
            </div>
          </div>
        </div>
        <!-- End Col -->

   

        <div class="sm:col-span-3">
          <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
           Name
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input type="text" name="staff_name" value="{{ $staff->staff_name}}" autocomplete="off" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter staff name">
          @error('staff_name')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label  class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Location
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <input  type="text" name="location" value="{{ $staff->location }}" autocomplete="off" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter current location">
            @error('location')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                     </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <div class="inline-block">
            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Phone
            </label>
            <span class="text-sm text-gray-400 dark:text-gray-600">
              (Ghana)
            </span>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          
        <div class="space-y-2">
            <input  type="text" name="contact" value="{{ $staff->contact}}" autocomplete="off" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" >
            @error('contact')
                                    <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
                                @enderror
                     </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->

      <div class="mt-5 flex justify-end gap-x-2">
      <a  href="/staff"><button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Cancel
      </button></a>
      <a href=""><button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-600 text-white hover:bg-gray-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Save changes
      </button></a>
     
    </div>
   
  </div>
  <!-- End Card -->
</form>
</div>
<!-- End Card Section -->


















</x-layout>