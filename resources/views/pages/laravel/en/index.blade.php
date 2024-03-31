<x-app-layout title="Freelance Laravel Developer">
    <div class="container max-w-screen-md lg:pt-20 pt-8">
        <article>
            <header class="mb-8">
                <h1 class="text-xl lg:text-3xl font-bold font-wide text-primary">
                    <x-text-reveal>{{ __('Freelance Laravel Developer') }}</x-text-reveal>
                </h1>
            </header>

            <img src="{{ url('images/me@work.jpg') }}" class="rounded-lg shadow-xl shadow-primary/10 mb-12" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" />

            <x-post-content>
                <div class="md:flex md:items-start font-medium text-gray-800">
                    I am Jeffrey van Rossum, a freelance PHP developer with years of Laravel experience. I've worked on a varity of
                    Laravel apps, from simple apps to complex API's. And the site you're on right now, is made with Laravel too.
                </div>

                <x-markdown>
## Why I use Laravel
[Laravel](https://laravel.com) is a very popular PHP framwork developed by Taylor Otwell. The framework
allows you to work quickly and is suitable for both simple and complex applications. The framework is
also ideal for creating API's.

I have worked with other frameworks in the past (Symfony, CodeIgniter), but Laravel is by far the
most pleasant to work with. The framework also makes the application of [_Test Driven
Development_](https://www.madetech.com/blog/9-benefits-of-test-driven-development) very accessible. I
like to apply this method, because by thoroughly testing your code you can avoid unnecessary errors.

## Hire me as Freelance Laravel Developer
Looking for an experienced Laravel developer? The following might appeal to you:

* Years of experience of working with [Laravel and PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321).
* Experience with Tailwind CSS, Alpine.js and LaraveL Livewire.
* Writing tests with Pest and PHPUnit (Test Driven Development).
* Working with version control (GIT).
* Fluent in Dutch and English.
* Experience with working in a team as well as independently.
* Available on an hourly, project or contract basis.
* Preferably works remotely, but working (partly) on location is an option.

If you want to hire me or want additional information, feel free to send an email to
[jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
</x-markdown>
            </x-post-content>
        </div>
    </div>
</x-site-layout>
