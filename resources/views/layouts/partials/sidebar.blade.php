<div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
    <h2 class="text-3xl font-semibold text-center text-blue-800">BookVerse</h2>


    <div class="flex flex-col justify-between mt-6">
        <aside>
            <ul>
                <li>
                    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md " href="#">
                        @include('svg.home')
                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200" href="#">
                        @include('svg.gear')
                        <span class="mx-4 font-medium">Settings</span>
                    </a>
                </li>
            </ul>

        </aside>

    </div>
</div>
