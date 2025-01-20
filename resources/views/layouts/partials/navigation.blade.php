@props([
    'active' => 'text-primary dark:text-secondary'
])
<a class="{{ request()->localizedRouteIs('home') ? $active : '' }} block lg:hidden" href="{{ localized_route('home') }}">{{ __('Home') }}</a>
<a class="{{ request()->localizedRouteIs('about') ? $active : '' }}" href="{{ localized_route('about') }}">{{ __('About') }}</a>
{{-- <a class="{{ request()->localizedRouteIs('projects') ? $active : '' }}" href="{{ localized_route('projects') }}">{{ __('Projects') }}</a> --}}
<a class="{{ request()->routeIs('products') ? $active : '' }}" href="{{ route('products') }}">{{ __('Products') }}</a>
<a class="{{ request()->routeIs('posts') ? $active : '' }}" href="{{ route('posts') }}">{{ __('Blog') }}</a>
<a class="{{ request()->localizedRouteIs('contact') ? $active : '' }}" href="{{ localized_route('contact')}}">{{ __('Contact') }}</a>
