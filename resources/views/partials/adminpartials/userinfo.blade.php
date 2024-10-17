
    <div class="mb-6 w-full h-full flex flex-col lg:flex-row items-center justify-between gap-5 lg:gap-10">
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-users fa-2xl text-green-600"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{ $active_customer_count}}
                </h2>
                <p class="text-slate-500">Active Customers</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
        <i class="fa-solid fa-users fa-2xl text-gray-400"></i>

            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{$inactive_customer_count}}
                </h2>
                <p class="text-slate-500">Inactive Customers</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-users fa-2xl text-yellow-500"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{ $customer_count}}
                </h2>
                <p class="text-slate-500">Customer Base</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-users fa-2xl text-blue-600"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                  {{ $user_count}}
                </h2>
                <p class="text-slate-500">Secretaries</p>
            </div>
        </div>
        <div class="w-full lg:w-1/4 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-user-shield fa-2xl text-red-800"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                {{ $staff_count}}
                </h2>
                <p class="text-slate-500">Total Staff</p>
            </div>
        </div>
    </div>

