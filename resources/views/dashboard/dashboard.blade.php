@extends('layouts.dashboard-layout')
@section('container')
    <div class="stat-container flex gap-x-8 font-poppins-reguler">
        <div class="card roundecard rounded-md w-96 bg-white shadow-md">
            <div class="card-body">
                <div class="flex justify-between">
                    <div class="stat-logo bg-error p-4 text-white rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <div class="title text-md">Total Books</div>
                        <div class="value flex justify-end text-2xl font-inter-bold ">40K</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded-md w-96 bg-white shadow-md">
            <div class="card-body">
                <div class="flex justify-between">
                    <div class="stat-logo bg-warning p-4 text-white rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <div class="title text-lg">Issued</div>
                        <div class="value flex justify-end text-2xl font-inter-bold">40K</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded-md w-96 bg-white shadow-md">
            <div class="card-body">
                <div class="flex justify-between">
                    <div class="stat-logo bg-success p-4 text-white rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <div class="title text-md">Total Members</div>
                        <div class="value flex justify-end text-2xl font-inter-bold">40K</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded-md w-96 bg-white shadow-md">
            <div class="card-body">
                <div class="flex justify-between">
                    <div class="stat-logo bg-info p-4 text-white rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <div class="title text-md">Logged In User</div>
                        <div class="value flex justify-end text-2xl font-inter-bold">40K</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
