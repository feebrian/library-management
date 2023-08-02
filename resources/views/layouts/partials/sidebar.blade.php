<div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
    <h2 class="text-3xl font-semibold text-center text-blue-800">BookVerse</h2>


    <div class="flex flex-col justify-between mt-6">
        <aside>
            <ul>
                <li>
                    <a class="flex items-center px-4 py-2 text-gray-700 rounded-md hover:bg-gray-200 {{ $title == 'Dashboard' ? 'bg-gray-100' : '' }}"
                        href="/dashboard">
                        @include('svg.computer')
                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 {{ $title == 'Members' ? 'bg-gray-100' : '' }}"
                        href="/dashboard/members">
                        @include('svg.group')
                        <span class="mx-4 font-medium">Members</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 {{ $title == 'Books' ? 'bg-gray-100' : '' }}"
                        href="/dashboard/books">
                        @include('svg.book')
                        <span class="mx-4 font-medium">Books</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 {{ $title == 'Returned Books' ? 'bg-gray-100' : '' }}"
                        href="/dashboard/returned">
                        @include('svg.arrow-down')
                        <span class="mx-4 font-medium">Returned</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 {{ $title == 'Unreturned Books' ? 'bg-gray-100' : '' }}"
                        href="/dashboard/unreturned">
                        @include('svg.arrow-up')
                        <span class="mx-4 font-medium">Unreturned</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 {{ $title == 'Issued' ? 'bg-gray-100' : '' }}"
                        href="/dashboard/issued">
                        @include('svg.warning')
                        <span class="mx-4 font-medium">Issued</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200 {{ $title == 'Settings' ? 'bg-gray-100' : '' }}"
                        href="/dashboard/settings">
                        @include('svg.gear')
                        <span class="mx-4 font-medium">Settings</span>
                    </a>
                </li>
            </ul>

        </aside>

    </div>
</div>
