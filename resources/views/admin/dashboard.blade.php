@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

            <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                Dashboard
            </div>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!

                    <ul class="my-8">
                        <li><a href="{{ route('posts.create') }}">{{ __('Create a new post') }}</a></li>
                    </ul>

                    @auth
                    <a href="{{ route('logout') }}" class="no-underline hover:underline text-sm bg-black text-white p-3"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </p>
            </div>
        </div>
    </div>
</div>
@endsection