
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-h-screen mx-auto sm:px-6 lg:px-8 ">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg flex justify-center items-center bg-gray-200 light:bg-gray-400 ">
                <div class="p-6 bg-gray-100 text-gray-100 shadow-xl rounded px-8 pt-6 pb-8 mb-4 ">
                    <form method="post" action="{{ route('manageEmp.store') }}" class="grid gap-2 px-4">
                        @csrf
                        @method('post')
                        
                        <div class="mb-2 mt-6 grid grid-cols-2"> 
                            <label class="text-left pr-4 font-bold text-gray-700">First Name :</label>
                            <input type="text" name="empFname" 
                                class="shadow appearance-non border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="p-0 m-0">
                            <x-input-error :messages="$errors->get('empFname')"/>
                        </div>

                        <div class="mb-2 grid grid-cols-2"> 
                            <label class="text-left pr-4 font-bold text-gray-700">Last Name : </label>
                            <input type="text" name="empLname" 
                                class="shadow appearance-non border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="p-0 m-0">
                            <x-input-error :messages="$errors->get('empLname')"/>
                        </div>

                        <div class="mb-2 grid grid-cols-2"> 
                            <label class="text-left pr-4 font-bold text-gray-700">Gender :</label>
                            <select name="gender" id="gender"
                                class="shadow appearance-non border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="0">Select your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="p-0 m-0">
                            <x-input-error :messages="$errors->get('gender')"/>
                        </div>

                        <div class="mb-2 grid grid-cols-2"> 
                            <label class="text-left pr-4 font-bold text-gray-700">Birthday :</label>
                            <input type="date" name="birthday"  max="{{ now()->subYear()->endOfYear()->toDateString() }}"
                                class="shadow appearance-non border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="p-0 m-0">
                            <x-input-error :messages="$errors->get('birthday')"/>
                        </div>

                        <div class="mb-2 grid grid-cols-2">
                            <label class="text-left pr-4 font-bold text-gray-700" >Age: </label>
                            <input type="text" name="age" id="age"  readonly 
                                 class="shadow appearance-non border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
                        </div>
                        <div class="p-0 m-0">
                            <x-input-error :messages="$errors->get('age')"/>
                        </div>

                        <div class="mb-2 grid grid-cols-2"> 
                            <label class="text-left pr-4 font-bold text-gray-700">Monthly Salary :</label>
                            <input type="text" name="monthly_salary"
                                class="shadow appearance-non border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>
                        <div class="p-0 m-0">
                            <x-input-error :messages="$errors->get('monthly_salary')"/>
                        </div>

                        <div class="mt-7 flex items-center justify-center">
                            <input class="shadow-lg shadow-gray-600 bg-red-700 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
                                type="submit" value="Add Employee">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const birthdayInput = document.querySelector('input[name="birthday"]');
        const ageInput = document.querySelector('input[name="age"]');

        birthdayInput.addEventListener('input', function () {
            const dob = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - dob.getFullYear();
            ageInput.value = age;
        });
    });
</script>
