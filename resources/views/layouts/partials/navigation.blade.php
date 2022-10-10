@props([
    'active' => 'text-secondary underline decoration-primary decoration-2'
])
<a class="{{ request()->localizedRouteIs('about') ? $active : 'text-primary' }}" href="{{ localized_route('about') }}">{{ __('About') }}<span class="text-primary">.</span></a>
<a class="{{ request()->localizedRouteIs('projects') ? $active : 'text-primary' }}" href="{{ localized_route('projects') }}">{{ __('Projects') }}<span class="text-primary">.</span></a>
<a class="{{ request()->routeIs('posts') ? $active : 'text-primary' }}" href="{{ route('posts') }}">{{ __('Blog') }}<span class="text-primary">.</span></a>
<a class="{{ request()->localizedRouteIs('contact') ? $active : 'text-primary' }}" href="{{ localized_route('contact')}}">{{ __('Contact') }}<span class="text-primary">.</span></a>
