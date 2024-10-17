

<x-layout>


@if(auth()->check() && auth()->user()->isAdmin())
<div class="flex items-center sm:justify-end w-full">
                

                <a href="/newstaff"><button type="button"  class="text-white bg-gray-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2 text-center sm:ml-auto">
                    <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add New Staff
                </button></a>
            </div>
@endif



<div class="ml-2 mt-4 mb-2 flex flex-wrap justify-start">
    @foreach ($staff as $member)
    <div class="max-w-sm w-full pt-4 md:w-80 bg-white dark:bg-gray-800 dark:border-gray-700 mx-2 mb-4">
        <a href="#">
           


        @if($member->image)
    <img class="h-64 w-80 rounded-md ml-4 object-cover" src="{{ asset('storage/' . $member->image) }}" alt="avatar">
@else
    <img class="h-64 w-80 rounded-full ml-4" src="{{ asset('images/svgs/user-circle-svgrepo-com.svg')}}" alt="Default Image">
@endif

        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $member->staff_name}}</h5>
            </a>
            <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400">{{ $member->location}}</p>
            <p class="mb-3 font-semibold text-gray-700 dark:text-gray-400">{{ $member->contact}}</p>

            @if(auth()->check() && auth()->user()->isAdmin())
            <a href="" class="text-white bg-gray-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                Edit
                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                Delete
                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            </a>

            @else

            <!-- <a href="#" class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                Read more
               
            </a> -->
            @endif

        </div>
    </div>
    @endforeach
</div>
</div>

</div>






<!-- 

<div
      class="bg-white p-6 shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] w-full max-w-sm rounded-2xl font-[sans-serif] overflow-hidden mx-auto mt-4">
      <div class="flex flex-col items-center">
        <img src='https://readymadeui.com/profile_2.webp' class="w-28 h-w-28 rounded-full" />
        <div class="mt-4 text-center">
          <p class="text-xl text-[#333] font-extrabold">John Doe</p>
          <p class="text-sm text-gray-500 mt-2">Marketing Coordinator</p>
        </div>
      </div>
      <div class="mt-8 flex justify-between">
        <div class="bg-gray-100 hover:bg-gray-200 w-12 h-12 p-3 flex items-center justify-center rounded-full cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="26px" viewBox="0 0 512 512">
            <path fill-rule="evenodd"
              d="M256.612 13.686C119.557 13.686 8.2 124.223 8.2 261.489c0 137.259 111.357 247.796 248.412 247.796S503.8 398.747 503.8 261.489c0-137.266-110.133-247.803-247.188-247.803zm19.579 314.61c-18.355-1.217-25.698-10.93-40.382-19.435-7.342 41.296-17.132 80.165-45.277 100.817-8.566-61.948 12.237-108.104 22.027-157.91-17.132-27.938 2.447-86.242 37.934-71.668 44.054 17.008-37.934 106.894 17.132 117.824 58.738 12.148 81.988-100.816 46.501-137.259-52.62-52.233-151.74-1.216-139.502 74.095 3.67 18.225 22.027 24.295 8.566 49.807-34.264-7.287-44.054-34.016-42.83-68.025 2.447-57.093 51.395-97.18 101.567-103.25 62.409-7.287 121.147 23.078 128.489 81.382 9.79 66.815-28.145 138.483-94.225 133.622z"
              data-original="#000000" />
          </svg>
        </div>
        <div class="bg-gray-100 hover:bg-gray-200 w-12 h-12 p-3 flex items-center justify-center rounded-full cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="26px" viewBox="0 0 512 512">
            <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0"
              data-original="#000000" />
            <path
              d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0"
              data-original="#000000" />
            <path
              d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0"
              data-original="#000000" />
          </svg>
        </div>
        <div class="bg-gray-100 hover:bg-gray-200 w-12 h-12 p-3 flex items-center justify-center rounded-full cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="26px" viewBox="0 0 512 512">
            <path fill="#333"
              d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z"
              data-original="#03a9f4" />
          </svg>
        </div>
        <div class="bg-gray-100 hover:bg-gray-200 w-12 h-12 p-3 flex items-center justify-center rounded-full cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="26px" viewBox="0 0 682.667 682.667">
            <path
              d="M604.672 0H35.297C15.8.012-.003 15.824 0 35.328v569.375C.012 624.2 15.824 640.003 35.328 640h306.547V392.5H258.75v-96.875h83.125v-71.293c0-82.676 50.473-127.676 124.223-127.676 35.324 0 65.68 2.633 74.527 3.809v86.41H489.77c-40.125 0-47.895 19.066-47.895 47.05v61.7h95.938l-12.5 96.875h-83.438V640h162.797c19.508.004 35.324-15.805 35.328-35.313V35.298C639.992 15.8 624.176-.003 604.672 0zm0 0"
              data-original="#000000" />
          </svg>
        </div>
      </div>
    </div> -->



</x-layout>