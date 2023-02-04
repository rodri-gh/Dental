<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <svg height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <circle cx="16" cy="16" fill="#2AD452" r="16" />
                                        <path
                                            d="M22.5 19.154c0 2.57-2.086 4.276-5.166 4.533V26h-2.11v-2.336A11.495 11.495 0 0 1 9.5 21.35l1.552-2.126c1.383 1.075 2.692 1.776 4.269 2.01v-4.58c-3.541-.888-5.19-2.173-5.19-4.813 0-2.523 2.061-4.252 5.093-4.486V6h2.11v1.402a9.49 9.49 0 0 1 4.56 1.776l-1.359 2.196c-1.067-.771-2.158-1.262-3.298-1.495v4.439c3.687.888 5.263 2.313 5.263 4.836zm-7.18-5.327V9.715c-1.527.117-2.327.935-2.327 1.963 0 .98.46 1.612 2.328 2.15zm4.318 5.49c0-1.05-.51-1.681-2.401-2.219v4.23c1.528-.118 2.401-.889 2.401-2.01z"
                                            fill="#fff" />
                                    </g>
                                </svg>
                                {{-- <div
                                    class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                    <span class="flex items-center">30%</span>
                                </div> --}}
                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">{{number_format($total_cobrado,2)}}
                                        Bs.
                                    </div>

                                    <div class="mt-1 text-base text-gray-600">Beneficios</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <svg height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <circle cx="16" cy="16" fill="#EBEB56" r="16" />
                                        <path
                                            d="M22.5 19.154c0 2.57-2.086 4.276-5.166 4.533V26h-2.11v-2.336A11.495 11.495 0 0 1 9.5 21.35l1.552-2.126c1.383 1.075 2.692 1.776 4.269 2.01v-4.58c-3.541-.888-5.19-2.173-5.19-4.813 0-2.523 2.061-4.252 5.093-4.486V6h2.11v1.402a9.49 9.49 0 0 1 4.56 1.776l-1.359 2.196c-1.067-.771-2.158-1.262-3.298-1.495v4.439c3.687.888 5.263 2.313 5.263 4.836zm-7.18-5.327V9.715c-1.527.117-2.327.935-2.327 1.963 0 .98.46 1.612 2.328 2.15zm4.318 5.49c0-1.05-.51-1.681-2.401-2.219v4.23c1.528-.118 2.401-.889 2.401-2.01z"
                                            fill="#fff" />
                                    </g>
                                </svg>
                                {{-- <div
                                    class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                    <span class="flex items-center">30%</span>
                                </div> --}}
                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">
                                        {{number_format($total_saldo_pendiente,2)}} Bs.</div>

                                    <div class="mt-1 text-base text-gray-600">Pendiente</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="/pacientes">
                        <div class="p-5">
                            <div class="flex justify-between">
                                <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" height="32" width="32">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fc6;
                                            }

                                            .cls-2 {
                                                fill: #ffde76;
                                            }

                                            .cls-3 {
                                                fill: #f6ccaf;
                                            }

                                            .cls-4 {
                                                fill: #ffdec7;
                                            }

                                            .cls-5 {
                                                fill: #374f68;
                                            }

                                            .cls-6 {
                                                fill: #db5669;
                                            }

                                            .cls-7 {
                                                fill: #ffba55;
                                            }

                                            .cls-8 {
                                                fill: #f26674;
                                            }

                                            .cls-9 {
                                                fill: #425b72;
                                            }

                                            .cls-10 {
                                                fill: #dad7e5;
                                            }

                                            .cls-11 {
                                                fill: #edebf2;
                                            }

                                            .cls-12 {
                                                fill: #231f20;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g data-name="Crowd Patient" id="Crowd_Patient">
                                        <path class="cls-1"
                                            d="M18.45,38.92A9,9,0,0,0,15.52,43H1V42c0-8.45,10.6-12.13,15.84-5.84A8.89,8.89,0,0,1,18.45,38.92Z" />
                                        <path class="cls-2"
                                            d="M18.45,38.92A8.82,8.82,0,0,0,16.53,41H6a2.84,2.84,0,0,1-2.52-3.76,8.59,8.59,0,0,1,.69-1.58,2.77,2.77,0,0,1,1.58-1.57C11,31.19,17.37,34.59,18.45,38.92Z" />
                                        <path class="cls-3"
                                            d="M14,27c0,3.25.09,3.65-.36,4.64A4,4,0,0,1,6,30V27c1.47.61,3.87,1.13,5,0A2.08,2.08,0,0,1,14,27Z" />
                                        <path class="cls-4"
                                            d="M14,27c0,3.25.09,3.65-.36,4.64C11.24,32.74,8,31.33,8,27.58A3.44,3.44,0,0,0,11,27,2.08,2.08,0,0,1,14,27Z" />
                                        <path class="cls-5"
                                            d="M14,27a2.08,2.08,0,0,0-3,0c-1.5,1.5-5,0-5,0a4,4,0,0,1,8,0Z" />
                                        <path class="cls-6" d="M33,46v1H15a10.25,10.25,0,0,1,.52-4A9,9,0,0,1,33,46Z" />
                                        <path class="cls-6" d="M33,46v1H15a10.25,10.25,0,0,1,.52-4A9,9,0,0,1,33,46Z" />
                                        <path class="cls-7" d="M16.53,41a8.74,8.74,0,0,0-1,2h-2a8.74,8.74,0,0,1,1-2Z" />
                                        <path class="cls-1"
                                            d="M18.45,38.92C15.4,41.32,18,41,14.53,41A8.91,8.91,0,0,1,18,37.93,7.25,7.25,0,0,1,18.45,38.92Z" />
                                        <path class="cls-8"
                                            d="M32.94,45c-17.71,0-11.7,0-13,0a2.84,2.84,0,0,1-2.52-3.76,9.22,9.22,0,0,1,1.3-2.55A9,9,0,0,1,32.94,45Z" />
                                        <path class="cls-3"
                                            d="M28,31c0,3.25.09,3.65-.36,4.64A4,4,0,0,1,20,34V31c1.47.61,3.87,1.13,5,0A2.08,2.08,0,0,1,28,31Z" />
                                        <path class="cls-4"
                                            d="M28,31c0,3.25.09,3.65-.36,4.64-2.4,1.1-5.64-.31-5.64-4.06A3.44,3.44,0,0,0,25,31,2.08,2.08,0,0,1,28,31Z" />
                                        <path class="cls-5"
                                            d="M28,31a2.08,2.08,0,0,0-3,0c-1.5,1.5-5,0-5,0a4,4,0,0,1,8,0Z" />
                                        <path class="cls-1"
                                            d="M47,42v1H32.48a9,9,0,0,0-2.93-4.08C33,29.54,47,31.93,47,42Z" />
                                        <path class="cls-2"
                                            d="M46.94,41c-17.71,0-11.7,0-13,0a2.84,2.84,0,0,1-2.52-3.76,9.22,9.22,0,0,1,1.3-2.55A9,9,0,0,1,46.94,41Z" />
                                        <path class="cls-3"
                                            d="M42,27c0,3.25.09,3.65-.36,4.64A4,4,0,0,1,34,30V27c1.47.61,3.87,1.13,5,0A2.08,2.08,0,0,1,42,27Z" />
                                        <path class="cls-4"
                                            d="M42,27c0,3.25.09,3.65-.36,4.64-2.4,1.1-5.64-.31-5.64-4.06A3.44,3.44,0,0,0,39,27,2.08,2.08,0,0,1,42,27Z" />
                                        <path class="cls-5"
                                            d="M42,27a2.08,2.08,0,0,0-3,0c-1.5,1.5-5,0-5,0a4,4,0,0,1,8,0Z" />
                                        <path class="cls-9"
                                            d="M28,31a2.57,2.57,0,0,0-1.06-.6c-1.48-.41-1.74.86-3,1.17A9.64,9.64,0,0,1,22,31a4,4,0,0,1,3-3.87A4,4,0,0,1,28,31Z" />
                                        <path class="cls-9"
                                            d="M42,26.43a2.57,2.57,0,0,0-1.06-.6c-1.48-.41-1.74.86-3,1.17a9.64,9.64,0,0,1-2-.57,4,4,0,0,1,3-3.87A4,4,0,0,1,42,26.43Z" />
                                        <path class="cls-9"
                                            d="M14,26.43a2.57,2.57,0,0,0-1.06-.6c-1.48-.41-1.74.86-3,1.17A9.64,9.64,0,0,1,8,26.43a4,4,0,0,1,3-3.87A4,4,0,0,1,14,26.43Z" />
                                        <path class="cls-10"
                                            d="M34,11a10,10,0,0,1-2,6c-5.76,7.67-18,3.54-18-6a10,10,0,0,1,4-8l0,0A10,10,0,0,1,34,11Z" />
                                        <path class="cls-11"
                                            d="M34,11a10,10,0,0,1-2,6A10,10,0,0,1,18,3,10,10,0,0,1,34,11Z" />
                                        <polygon class="cls-8"
                                            points="29 9 26 9 26 6 22 6 22 9 19 9 19 13 22 13 22 16 26 16 26 13 29 13 29 9" />
                                        <path class="cls-12"
                                            d="M45.07,34.93a10.06,10.06,0,0,0-3.63-2.32C43.34,30.8,43,28.82,43,26a5,5,0,0,0-10,0h0c0,2.91-.34,4.81,1.57,6.62a10,10,0,0,0-5.45,4.81,10.1,10.1,0,0,0-1.69-.81C29.34,34.81,29,32.87,29,30a5,5,0,0,0-10,0c-.05.1,0-.65,0,3a5,5,0,0,0,1.57,3.62,10.1,10.1,0,0,0-1.69.81,9.93,9.93,0,0,0-5.44-4.82C15.34,30.8,15,28.82,15,26A5,5,0,0,0,5,26H5c0,2.73-.36,4.79,1.57,6.62A10,10,0,0,0,0,42v1a1,1,0,0,0,1,1H14.2a13.36,13.36,0,0,0-.2,3,1,1,0,0,0,1,1H33a1,1,0,0,0,1-1,13.32,13.32,0,0,0-.2-3H47a1,1,0,0,0,1-1C48,40,47.56,37.41,45.07,34.93ZM40.5,24.35a2.93,2.93,0,0,0-2.21.94c-.61.62-2.14.36-3.21,0A3,3,0,0,1,40.5,24.35ZM35,29V27.38c4.67,1.21,4.57-1.73,6-.89V29a3,3,0,0,1-6,0Zm-8.5-.65a2.93,2.93,0,0,0-2.21.94c-.61.62-2.14.36-3.21,0A3,3,0,0,1,26.5,28.35ZM21,33V31.38c4.67,1.21,4.57-1.73,6-.89V33a3,3,0,0,1-6,0Zm-8.5-8.65a2.93,2.93,0,0,0-2.21.94c-.61.62-2.14.36-3.21,0A3,3,0,0,1,12.5,24.35ZM7,29V27.38c4.67,1.21,4.57-1.73,6-.89V29a3,3,0,0,1-6,0ZM2,42c0-8.44,11.65-11.18,15.25-3.36A10.07,10.07,0,0,0,14.84,42Zm14,4a8,8,0,0,1,16,0Zm17.16-4a9.87,9.87,0,0,0-2.4-3.34C34.35,30.86,46,33.49,46,42Z" />
                                        <path class="cls-12"
                                            d="M24,22A11,11,0,1,0,13,11,11,11,0,0,0,24,22ZM24,2a9,9,0,1,1-9,9A9,9,0,0,1,24,2Z" />
                                        <path class="cls-12"
                                            d="M19,14h2v2a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V14h2a1,1,0,0,0,1-1V9a1,1,0,0,0-1-1H27V6a1,1,0,0,0-1-1H22a1,1,0,0,0-1,1V8H19a1,1,0,0,0-1,1v4A1,1,0,0,0,19,14Zm1-4h2a1,1,0,0,0,1-1V7h2V9a1,1,0,0,0,1,1h2v2H26a1,1,0,0,0-1,1v2H23V13a1,1,0,0,0-1-1H20Z" />
                                    </g>
                                </svg>
                                {{-- <div
                                    class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                    <span class="flex items-center">30%</span>
                                </div> --}}
                            </div>
                            <div class="ml-2 w-full flex-1">
                                <div>
                                    <div class="mt-3 text-3xl font-bold leading-8">{{$total_pacientes}}</div>

                                    <div class="mt-1 text-base text-gray-600">Pacientes</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="#">
                        <div class="p-3">
                            <div class="flex justify-between">
                                <p class="font-bold text-xl">Tratamientos</p>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                    </path>
                                </svg>
                                {{-- <div
                                    class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                    <span class="flex items-center">30%</span>
                                </div> --}}

                            </div>
                            <div class="m-0 w-full flex-1">
                                <div class="flex justify-between">
                                    <div class=" m-0 text-base text-gray-600">Finalizados</div>
                                    <div class="text-xl font-bold leading-8">{{$total_tratamientos_finalizados}}</div>
                                </div>
                                <div class="flex justify-between">
                                    <div class=" m-0 text-base text-gray-600">Pendientes</div>
                                    <div class="text-xl font-bold leading-8">{{$total_tratamientos_pendientes}}</div>
                                </div>
                                <div class="flex justify-between">
                                    <div class=" m-0 text-base text-gray-600">Totales</div>
                                    <div class="text-xl font-bold leading-8">{{$total_tratamientos}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>