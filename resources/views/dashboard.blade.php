<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
       <div class="grid grid-cols-2 gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8 t">
               <div class=" flex items-center justify-center bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 mx-12" viewBox="0 0 24 24">
                            <path d="M15.0491 8.53666L18.5858 5H14V3H22V11H20V6.41421L16.4633 9.95088C17.4274 11.2127 18 12.7895 18 14.5C18 18.6421 14.6421 22 10.5 22C6.35786 22 3 18.6421 3 14.5C3 10.3579 6.35786 7 10.5 7C12.2105 7 13.7873 7.57264 15.0491 8.53666ZM10.5 20C13.5376 20 16 17.5376 16 14.5C16 11.4624 13.5376 9 10.5 9C7.46243 9 5 11.4624 5 14.5C5 17.5376 7.46243 20 10.5 20Z">
                            </path>
                        </svg>
                        
                        <h2 class="text-xl font-semibold text-gray-800">Male Employees</h2>
                        <p class="mt-2 text-2xl text-center text-gray-600 ">{{ $maleCount }}</p>
                    </div>
                </div>

                <div class="flex items-center justify-center bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6 text-left">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-20 h-20 mx-12">
                            <path d="M11 15.9339C7.33064 15.445 4.5 12.3031 4.5 8.5C4.5 4.35786 7.85786 1 12 1C16.1421 1 19.5 4.35786 19.5 8.5C19.5 12.3031 16.6694 15.445 13 15.9339V18H18V20H13V24H11V20H6V18H11V15.9339ZM12 14C15.0376 14 17.5 11.5376 17.5 8.5C17.5 5.46243 15.0376 3 12 3C8.96243 3 6.5 5.46243 6.5 8.5C6.5 11.5376 8.96243 14 12 14Z">
                            </path>
                        </svg>
                        <h2 class="text-xl font-semibold text-gray-800">Female Employees</h2>
                        <p class="mt-2 text-2xl text-center text-gray-600">{{ $femaleCount }}</p>
                    </div>
                </div>
    	
                <div class="flex items-center justify-center bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-20 h-20 mx-12">
                            <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 8H4V19H20V8ZM15.0355 10.136L16.4497 11.5503L11.5 16.5L7.96447 12.9645L9.37868 11.5503L11.5 13.6716L15.0355 10.136Z">
                            </path>
                        </svg>
                        <h2 class="text-xl text-center font-semibold text-gray-800">Average Age </br>of All Employees</h2>
                        <p class="mt-2 text-2xl  text-center text-gray-600">{{ $averageAge }}</p>
                    </div>
                </div>
                <div class="flex items-center justify-center bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-20 h-20 mx-12">
                            <path d="M22.0049 6H15.0049C11.6912 6 9.00488 8.68629 9.00488 12C9.00488 15.3137 11.6912 18 15.0049 18H22.0049V20C22.0049 20.5523 21.5572 21 21.0049 21H3.00488C2.4526 21 2.00488 20.5523 2.00488 20V4C2.00488 3.44772 2.4526 3 3.00488 3H21.0049C21.5572 3 22.0049 3.44772 22.0049 4V6ZM15.0049 8H23.0049V16H15.0049C12.7957 16 11.0049 14.2091 11.0049 12C11.0049 9.79086 12.7957 8 15.0049 8ZM15.0049 11V13H18.0049V11H15.0049Z">
                            </path>
                        </svg>
                       
                        <h2 class="text-xl font-semibold text-gray-800">Total Monthly Salary</h2>
                        <p class="mt-2 text-2xl text-center text-gray-600">{{ $totalSalary }}</p>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
