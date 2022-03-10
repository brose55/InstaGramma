<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="col-3 mr-6">
                <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQFWhHYy3ZPuaQ/company-logo_200_200/0/1582504380019?e=1654732800&v=beta&t=oUaZULk7aqSZ4_FLnqRAonxfUnvb2VPADENVOJJK7dU" style="border-radius: 50rem">
            </div>
            <div class="col-9">
                <div><h1>Social Snowball</h1></div>
                <div class="flex">
                    <div class="pr-5"><strong>36</strong> posts</div>
                    <div class="pr-5"><strong>4,529</strong> followers</div>
                    <div class="pr-5"><strong>13</strong> following</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
