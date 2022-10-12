<x-app-layout :title="__('Contact')">

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header class="mb-8">
                <h1 class="text-3xl font-semibold font-wide text-primary leading-tight mb-1">{{ __('Contact') }}</h1>
            </header>

            <div class="">

                @if (session('status'))
                <div class="bg-green-100 text-green-700 rounded p-4">
                    {{ session('status') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="bg-red-100 text-red-700 rounded p-4 mb-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    <div class="w-full mb-4">
                        <x-label for="name">
                            {{ __('Your name') }}
                        </x-label>
                        <x-input name="name" id="name" />
                    </div>

                    <div class="w-full mb-4 hidden">
                        <x-label for="last_name">
                            {{ __('Last name') }}
                        </x-label>
                        <x-input name="last_name" id="last_name" />
                    </div>

                    <div class="w-full mb-4">
                        <x-label for="email">
                            {{ __('Your email') }}
                        </x-label>
                        <x-input name="email" id="email" type="email" />
                    </div>

                    <div class="w-full mb-4">
                        <x-label for="message">
                            {{ __('Message') }}
                        </x-label>
                        <x-textarea rows="10" name="message" id="message"></x-textarea>
                    </div>

                    <div class="flex justify-end">
                        <x-button type="submit">{{ __('Send') }}</x-button>
                    </div>

                </form>
            </div>
        </article>
    </div>
</x-site-layout>
