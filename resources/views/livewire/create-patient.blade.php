<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Add new Patient</h3>
        </div>
    </div>
    <div class="container mx-auto mt-8">

        @include('layouts.messages')

        <form wire:submit.prevent="submit">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Name
                    </label>
                    <input 
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        wire:model="form.name" id="name" type="text" required placeholder="i.e Rose">
                    @error('email') 
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label for="email-address" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Email address</label>
                        <input 
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="email-address" wire:model="form.email" type="email" autocomplete="email" required>
                        @error('email') 
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                        Phone
                    </label>
                    <input 
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        wire:model="form.phone" id="phone" type="number" required placeholder="i.e Rose">
                    @error('email') 
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label for="dob" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Date of Birth</label>
                        <input 
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="dob" wire:model="form.dob" type="date" autocomplete="date" required>
                        @error('dob') 
                            <p class="text-red-500 text-xs italic">{{$message}}</p>
                        @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="weight">
                        Weight (lb)
                    </label>
                    <input 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="weight" type="number">
                    @error('weight') 
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="height">
                        Height (m)
                    </label>
                    <input 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="height" type="number">
                    @error('height') 
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">
                        Gender
                    </label>
                    <div class="relative">
                        <select wire:model="form.gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            @foreach ($genderOptions as $key => $option)
                                <option value="{{$key}}">{{$option}}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full flex justify-center">
                    Submit
                </button>
            </div>
        </form>

    </div>
</div>
