<x-layout>

<div class="max-w-2xl -mt-4  sm:px-6 lg:px-8 lg:py-14 mx-auto">

  <!-- Card -->
  <div class="block max-w-full rounded-lg bg-white p-6 dark:bg-neutral-700">
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
                <p class="antialiasing font-semibold text-neutral-500">Edit Customer Details</p>
              </div>
            </div>
          </div>
        </div>
    </div>


<div
  class="">
  <form action="/existingcustomer/{{ $customer->id }}/edit" method="POST">
                @csrf
                @method('PUT')
    <!--Name input-->
    <div class="relative mb-6" data-te-input-wrapper-init>
      <input
        type="text" type="text" autocomplete="off" name="customer_name" value="{{ $customer->customer_name }}" 
        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
       
       />
        @error('customer_name')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
      
    </div>

    <div class="relative mb-6" data-te-input-wrapper-init>
      <input
      type="text"  autocomplete="off"  name="contact" value="{{ $customer->contact }}" 
        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
       
        />
        @error('contact')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
   
    </div>

    <div class="relative mb-6" data-te-input-wrapper-init>
      <input
        name="location" type="text"  value="{{ $customer->location }}"   autocomplete="off"
        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
       
       />
        @error('location')
             <p class="mt-1 bg-white text-xs font-bold text-red-500">{{ $message }}</p>
            @enderror
    
    </div>
    <input name="author" type="hidden" value="{{ auth()->user()->name }}" >
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
      <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<a href="/"><button
  type="button"
  class="inline-block rounded bg-neutral-50 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
  Cancel
</button></a>

<button
  type="submit"
  class="inline-block rounded bg-neutral-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] transition duration-150 ease-in-out hover:bg-neutral-800 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-neutral-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:outline-none focus:ring-0 active:bg-neutral-900 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] dark:bg-neutral-900 dark:shadow-[0_4px_9px_-4px_#030202] dark:hover:bg-neutral-900 dark:hover:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)] dark:focus:bg-neutral-900 dark:focus:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)] dark:active:bg-neutral-900 dark:active:shadow-[0_8px_9px_-4px_rgba(3,2,2,0.3),0_4px_18px_0_rgba(3,2,2,0.2)]">
 Update
</button>
  </form>
    </div>
    </div>
    </div>
    
    



</x-layout>