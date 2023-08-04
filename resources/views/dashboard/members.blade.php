{{-- @dd($chart) --}}
@extends('layouts.dashboard-layout')
@section('container')
    <h1 class="font-poppins-bold text-2xl">User Management Control</h1>
    <p class="text-slate-400 font-poppins-medium">User dashboard for monitoring</p>
    <div class="p-4 rounded-md bg-white shadow-sm w-full mt-2">
        <div class="overflow-x-auto">
            <div class="flex justify-between m-2">
                <form action="#" method="GET">
                    <input type="text" name="search-user" id="search-user" placeholder="Search..."
                        class="input input-sm input-bordered w-full max-w-xs">
                </form>
            </div>
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User Permission</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td><img src="{{ asset('images/pfp.jpg') }}" class="w-12" alt=""></td>
                            <td>{{ $u->username }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->user_permission }}</td>
                            <td>
                                <span
                                    class="{{ $u->status == 'Active' ? 'bg-accent p-2 rounded-md text-white text-base hover:bg-accent-focus' : '' }}">{{ $u->status }}</span>
                            </td>
                            <td class="flex gap-x-1 mt-2.5">
                                <a href="#" class="btn btn-warning btn-sm">
                                    @include('svg.pencil')
                                </a>
                                <form action="#" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-error btn-sm">
                                        @include('svg.trash')
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links('pagination::simple-tailwind') }}
        </div>
    </div>

    <div class="flex gap-x-4">
        <div class="w-6/12 p2-2 rounded-md bg-white my-4 shadow-sm">
            {!! $chartUserMonthly->container() !!}
        </div>
        <div class="w-6/12 p2-2 rounded-md bg-white my-4 shadow-sm">
            {!! $chartUserCategory->container() !!}
        </div>
    </div>

    <script src="{{ $chartUserMonthly->cdn() }}"></script>
    {{ $chartUserMonthly->script() }}

    <script src="{{ $chartUserCategory->cdn() }}"></script>
    {{ $chartUserCategory->script() }}
@endsection
