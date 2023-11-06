<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Employee') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="bg-green-100 border mb-4 border-green-400 text-green-700 px-4 py-3 rounded relative alert-dismiss" role="alert">
                <strong>Success:</strong> {{ session('success') }}
            </div>
        @endif

            <div class=" overflow-hidden bg-gray-200 light:bg-gray-400 ">
                <div class="relative overflow-y-auto shadow-xl sm:rounded-lg bg-gray-200 light:bg-gray-400 ">
                    <table class="w-full text-sm text-left text-gray-200 dark:text-gray-700">
                        <thead class="text-md text-gray-300 uppercase bg-gray-300 light:bg-gray-900 dark:text-gray-700">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Monthly Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr class="bg-white border-b light:bg-gray-800 light:border-gray-700">
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->empFname}}</td>
                                    <td>{{$employee->empLname}}</td>
                                    <td>{{$employee->gender}}</td>
                                    <td>{{$employee->birthday}}</td>
                                    <td>{{$employee->age}}</td>
                                    <td>{{$employee->monthly_salary}}</td>
                                    <td>
                                        <div class="flex my-2">
                                            <a href="{{route('manageEmp.edit', ['employee' => $employee])}}"  class="inline-block p-2 bg-green-400 text-white rounded transition duration-300 hover:bg-green-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                            
                                            <form method="post" action="{{route('manageEmp.delete' , ['employee' => $employee])}}" class="inline-block ml-2 p-2 bg-red-500 text-white rounded transition duration-300 hover:bg-red-400">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="custom-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>     
                <div class="mt-7 flex items-center justify-center mb-5">
                    <button class=" shadow-lg shadow-gray-600 bg-red-600  hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                             <a href="{{route('manageEmp.add')}}" >Add Employee</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



<script>
setTimeout(function() {
        document.querySelectorAll('.alert-dismiss').forEach(function(alert) {
            alert.style.display = 'none';
        });
    }, 900); 
</script>