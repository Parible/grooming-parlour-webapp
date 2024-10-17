<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="icon" type="image/svg+xml" href="images/groomingimage.jpg" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body class="flex h-screen max-w-6xl items-center justify-center overflow-hidden" style="background: #ffffff;">
    <div class="flex h-screen">
        <div
            class="i flex hidden items-center justify-around bg-gradient-to-tr from-red-800 to-red-500 md:block md:p-48">
            <div>
                <h1 class="font-sans text-3xl font-bold text-white">Genius</h1>
                <h1 class="font-sans text-2xl font-bold text-white">GroomingParlour</h1>
                {{-- <p class="mt-1 text-white">Sign Up Today</p> --}}
                <a href=""><button  type="button"
                    class="mt-4 mb-2 block w-28 rounded-2xl bg-white py-2 font-bold text-red-800">Sign In</button></a>
            </div>
        </div>
        <div class="flex w-1/2 items-center justify-center bg-white mx-auto md:p-48">

        <form method="POST" action="/login" class="bg-white">
                                        @csrf

                                        <div class="mb-4 mx-auto">
              <img src="{{ asset('/images/groomingimage.jpg')}}" class="h-32 -ml-6 rounded-full" alt="Grooming Image" />
              </div>
              
                                        <p class="font-bold mb-4">Login </p>

                                        <div class="relative flex items-stretch" data-te-input-wrapper-init
                                            data-te-input-group-ref>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-l border border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700"
                                                id="basic-addon1" data-te-input-group-text-ref>@</span>
                                            <input type="email"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                placeholder="Email" aria-label="Email" name="email"
                                                id="exampleFormControlInput" aria-describedby="basic-addon1"
                                                value="{{ old('email') }}" />
                                            <label for="exampleFormControlInput"
                                                class="pointer-events-none absolute bg-white left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">Email
                                            </label>
                                        </div>
                                        @error('email')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror

                                        <div class="relative mt-4 flex items-stretch" data-te-input-wrapper-init
                                            data-te-input-group-ref>
                                            <span
                                                class="flex items-center whitespace-nowrap rounded-l border border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700"
                                                id="basic-addon1" data-te-input-group-text-ref>$#</span>
                                            <input type="password"
                                                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                placeholder="Email" aria-label="Password" name="password"
                                                id="exampleFormControlInput" aria-describedby="basic-addon1" />
                                            <label for="exampleFormControlInput"
                                                class="pointer-events-none absolute bg-white left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none">Password
                                            </label>
                                        </div>
                                        @error('password')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror

                                        <!--Submit button-->
                                        <div class="mb-12 pb-1 pt-1 mt-4 text-center">
                                            <button wire:loading.attr="disabled"
                                             type="submit"
                                             
                                                class=" bg-gradient-to-tr from-red-700 to-red-400 hover:shadow-xl mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Log in
                                                <div wire:loading
                                                 >
                                                <x-loading-spinner />
                                            </button>
                                                                  
                                                           

                                        
                                            <!--Forgot password link-->
                                            <!-- <p>Click log in to validate credentials.</p> -->
                                        </div>

                                        <!--Register button-->
                                        <div class="flex items-center justify-between pb-6">
                                            <p class="mb-0 mr-2">Forgot password?</p>
                                            <button type="button"
                                                class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700"
                                                data-te-toggle="modal" data-te-target="#leftTopModal"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Contact Admin
                                            </button>
                                        </div>

                                        {{--  --}}
                                        <!-- Modal top left -->
                                        <div data-te-modal-init
                                            class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                            id="leftTopModal" tabindex="-1" aria-labelledby="leftTopModalLabel"
                                            aria-hidden="true">
                                            <div data-te-modal-dialog-ref
                                                class="pointer-events-none absolute left-7 h-auto w-full translate-x-[-100%] opacity-0 transition-all duration-300 ease-in-out max-[576px]:left-auto min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div
                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div class="flex flex-shrink-0 items-center justify-between rounded-t-md p-4"
                                                        style="
                                                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                                                      ">
                                                        <h5 class="text-xl font-medium leading-normal text-white"
                                                            id="leftTopModalLabel">
                                                            Contact Administrator
                                                        </h5>
                                                        <button type="button"
                                                            class="box-content rounded-none border-none text-white hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                            data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex flex-auto flex-wrap justify-center p-4"
                                                        data-te-modal-body-ref>
                                                        <!-- First Testimonial -->
                                                        <div class="mb-12 md:mb-0 text-center">
                                                            <div class="mb-6 flex justify-center">
                                                                <img src="{{ asset('images/svgs/user-circle-svgrepo-com.svg') }}"
                                                                    class="w-32 rounded-full shadow-lg" />
                                                            </div>
                                                            <h5 class="mb-4 text-xl font-semibold">Patrick Nyame</h5>
                                                            <h6 class="mb-4 font-semibold text-primary">
                                                                Software Developer
                                                            </h6>
                                                            <p class="mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    fill="currentColor"
                                                                    class="inline-block h-7 w-7 pr-2"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                                                                </svg>
                                                                Hi there, Welcome to Genius Grooming Parlour
                                                                Contact us via phone or mail to get yout password reset.

                                                                
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 gap-3">
                                                        <a href="tel:0573849343" type="button"
                                                            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                                            data-te-ripple-init data-te-ripple-color="light">
                                                            Call
                                                        </a>
                                                        <a href="mailto:genuisgroomingparlour.com" type="button"
                                                            class="inline-block rounded bg-info px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] "
                                                            data-te-ripple-color="light">
                                                            Email
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--  --}}

                                    </form>

            
        </div>
    </div>
        
    @livewireScripts    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

</html>


















