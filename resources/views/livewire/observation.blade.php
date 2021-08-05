<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h3 class="font-bold pl-2">Blood Pressure Observations</h3>
        </div>
    </div>
    <div class="container mx-auto mt-4">
        <div>
            <a href="{{route('observations.create')}}" class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold mb-3 py-2 px-4 rounded">
                Create <i class="fa fa-plus"></i>
            </a>
        </div>
        <br>
        @include('layouts.messages')
        <livewire:observations-table
            searchable="name, email, gender" 
            exportable 
        />
    </div>
</div>
