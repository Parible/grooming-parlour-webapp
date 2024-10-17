
        <nav id="sidenav-1"
    class="fixed left-0 top-0 h-screen w-60 -translate-x-full overflow-hidden bg-neutral-900 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] dark:bg-zinc-800 xl:data-[te-sidenav-hidden='false']:translate-x-0 fixed z-20 h-full pt-16 "
    data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-mode-breakpoint-over="0"
    data-te-sidenav-mode-breakpoint-side="xl" data-te-sidenav-content="#content">
    @if(auth()->check() && auth()->user()->isAdmin())
    @else
    <a wire:navigate.hover class="mb-3 flex items-center justify-center py-6" href="/">
        <img class=" object-cover rounded-full mr-2 w-[150px]" src="{{ asset('/images/groomingimage.jpg')}}" alt="TE Logo" />
    </a>
   
    @endif

    <ul class="relative m-0 list-none px-[0.2rem] space-y-1" data-te-sidenav-menu-ref>
        <li class="relative">
            <a wire:navigate.hover
                class="{{ request()->is('/') ? 'bg-neutral-200 text-gray-700 hover:bg-neutral-200' : '' }}   hover:bg-neutral-200 group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-200 outline-none transition duration-300 ease-linear hover:bg-neutral-300 hover:outline-none hover:text-gray-700 data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                href="/" data-te-sidenav-link-ref>
                <span
                    class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none">
                    <i class="fa-solid fa-house-chimney"></i>
                </span>
                <span>Dashboard</span></a>
        </li>
        <li class="relative">
            <a class="{{ request()->is('/existingcustomer/{customer_id}') || request()->is('/newcustomer')  ? 'bg-neutral-200 text-gray-700 hover:bg-neutral-200 ' : '' }} hover:bg-neutral-200 group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-200 outline-none transition duration-300 ease-linear hover:bg-neutral-300 hover:outline-none hover:text-gray-700 data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                data-te-sidenav-link-ref>
                <span
                    class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none">
                    <i class="fa-solid fa-users"></i>
                </span>
                <span>Customers</span>
                <span
                    class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 motion-reduce:transition-none [&>svg]:h-3 [&>svg]:w-3 [&>svg]:fill-gray-600 group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600"
                    data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg>
                </span>
            </a>
            <ul class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block my-1"
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a wire:navigate.hover href="/customers/active"
                        class="{{ request()->is('customers/active') ? 'bg-neutral-100 text-gray-700 hover:bg-neutral-100 ' : '' }}   flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>Active</a>
                </li>
                <li class="relative">
                    <a wire:navigate.hover href="/customers/inactive"
                        class="{{ request()->is('customers/inactive') ? 'bg-neutral-100 text-gray-700 hover:bg-neutral-100 ' : '' }}  flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>Inactive</a>
                </li>
               
            </ul>
        </li>
        <li class="relative">
            <a href="/staff" wire:navigate.hover
                class="{{ request()->is('staff') ? 'bg-neutral-200 text-gray-700 hover:bg-neutral-200 ' : '' }}  hover:bg-neutral-200 group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-200 outline-none transition duration-300 ease-linear hover:bg-neutral-300 hover:outline-none hover:text-gray-700 data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                data-te-sidenav-link-ref>
                <span
                    class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none ">
                    <i class="fa-solid fa-user-shield"></i>
                </span>
                <span>Workers</span>
            </a>
        </li>
        @if(auth()->check() && auth()->user()->isAdmin())
          
            
            <li class="relative">
            <a class="{{ request()->is('/existingcustomer/{customer_id}') || request()->is('/newcustomer')  ? 'bg-neutral-200 text-gray-700 hover:bg-neutral-200 ' : '' }} hover:bg-neutral-200 group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-200 outline-none transition duration-300 ease-linear hover:bg-neutral-300 hover:outline-none hover:text-gray-700 data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                data-te-sidenav-link-ref>
                <span
                    class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none">
                    <i class="fa-solid fa-users"></i>
                </span>
                <span>Manage</span>
                <span
                    class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 motion-reduce:transition-none [&>svg]:h-3 [&>svg]:w-3 [&>svg]:fill-gray-600 group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600"
                    data-te-sidenav-rotate-icon-ref>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg>
                </span>
            </a>
            <ul class="show !visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block my-1"
                data-te-sidenav-collapse-ref>
                <li class="relative">
                    <a wire:navigate.hover href="/manage/overview"
                        class="{{ request()->is('manage/overview') || request()->is('manage/overview') ? 'bg-neutral-100 text-gray-700 hover:bg-neutral-100 ' : '' }}   flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>Overview</a>
                </li>
                <li class="relative">
                    <a wire:navigate.hover href="/manage"
                        class="{{ request()->is('manage') || request()->is('manage') ? 'bg-neutral-100 text-gray-700 hover:bg-neutral-100 ' : '' }}   flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>Transaction</a>
                </li>
                <li class="relative">
                    <a wire:navigate.hover href="/manage/income/daily"
                        class="{{ request()->is('manage/income/daily') ? 'bg-neutral-100 text-gray-700 hover:bg-neutral-100 ' : '' }}  flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>End Of Day</a>
                </li>
                <li class="relative">
                    <a wire:navigate.hover href="#"
                        class="{{ request()->is('') ? 'bg-neutral-100 text-gray-700 hover:bg-neutral-100 ' : '' }}  flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-primary-400/10 hover:text-primary-600 hover:outline-none focus:bg-primary-400/10 focus:text-primary-600 focus:outline-none active:bg-primary-400/10 active:text-primary-600 active:outline-none data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>Report</a>
                </li>
               
            </ul>
        </li>
            
            <li class="relative">
                <a href="/manage/users" wire:navigate.hover
                    class="{{ request()->is('manage/users') || request()->is('manage/users') ? 'bg-neutral-200 text-gray-700 hover:bg-neutral-200 ' : '' }} hover:bg-neutral-200 group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-200 outline-none transition duration-300 ease-linear hover:bg-neutral-300 hover:outline-none hover:text-gray-700 data-[te-sidenav-state-active]:text-primary-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                    data-te-sidenav-link-ref>
                    <span
                        class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-700 [&>svg]:transition [&>svg]:duration-300 [&>svg]:ease-linear group-hover:[&>svg]:fill-primary-600 group-focus:[&>svg]:fill-primary-600 group-active:[&>svg]:fill-primary-600 group-[te-sidenav-state-active]:[&>svg]:fill-primary-600 motion-reduce:[&>svg]:transition-none ">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span>Secretaries</span>
                </a>
            </li>
          @endif
      
    </ul>
</nav>
      


      


























