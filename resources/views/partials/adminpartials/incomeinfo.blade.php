
    
    <div class="-mt-8 w-full h-full flex flex-col lg:flex-row items-center justify-between gap-5 lg:gap-10">
        <div class="w-full lg:w-1/3 border border-gray-50 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-sun fa-2xl text-green-600"></i>
            <!-- <i class="fa-solid fa-users fa-2xl text-green-600"></i> -->
            <div>
            <h2 class="font-bold text-3xl text-slate-600">GH&#8373; {{ $daily_income }}
                </h2>
                <p class="text-slate-500">Daily income</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 border border-gray-50 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
            <i class="fa-solid fa-calendar-week fa-2xl text-green-600"></i>
            <!-- <i class="fa-solid fa-users fa-2xl text-yellow-500"></i> -->
            <div>
            
            <h2 class="font-bold text-3xl text-slate-600"> GH&#8373; {{ $weekly_income }} 
                </h2>
                <p class="text-slate-500">Weekly Income</p>
            </div>
        </div>
        <div class="w-full lg:w-1/3 border border-gray-50 h-[100px] bg-slate-50 rounded-md flex items-center gap-5 p-5">
        <i class="fa-solid fa-calendar-alt fa-2xl text-green-600"></i>
            <div>
                <h2 class="font-bold text-3xl text-slate-600">
                GH&#8373;  {{$monthly_income}}
                </h2>
                <p class="text-slate-500">Monthly Income</p>
            </div>
        </div>
       
    </div>
