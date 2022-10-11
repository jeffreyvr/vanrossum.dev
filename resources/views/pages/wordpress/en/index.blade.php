<x-site-layout title="Freelance WordPress Developer">
    <div class="container max-w-screen-md lg:pt-20 pt-8">
        <article>
            <header class="mb-8">
                <h1 class="text-xl lg:text-3xl font-bold font-wide text-primary">
                    <x-text-reveal>{{ __('Freelance WordPress Developer') }}</x-text-reveal>
                </h1>
            </header>

            <img src="{{ url('images/me@work2.jpg') }}" data-aos="fade-up" data-aos-duration="1000" class="rounded-xl shadow-2xl shadow-primary/25 mb-12"  />

            <x-post-content>
                <div class="md:flex md:items-start font-medium text-gray-800">
                    I am Jeffrey van Rossum, freelance PHP developer with over 8 years of WordPress experience. Over the
                    years I have worked on many websites with WordPress, including custom plugins and themes.
                </div>

                @markdown
                <div class="md:flex md:items-start font-bold text-gray-800">
                    <img class="shadow-lg relative z-10 w-full md:w-64 md:mr-8 mb-4 md:mb-0 rounded"
                         src="{{ url('images/avatar.jpg') }}">
                    I am Jeffrey van Rossum, freelance PHP developer with over 8 years of WordPress experience. Over the
                    years I have worked on many websites with WordPress, including custom plugins and themes.
                </div>

                ## Why WordPress?
                [WordPress](https://wordpress.org) is the most widely used CMS in the world. With WordPress you can
                realize a fully operational website in no time. In addition, the basic functionality of WordPress is
                extensible with plugins.

                There are plenty of plugins and themes, but sometimes you need customization. As a WordPress developer I
                have developed several custom plugins. For example, for a company in the publishing industry, I worked
                on a subscription plugin that synchronizes subscriptions to a CRM system. I have developed several
                [open-source](https://profiles.wordpress.org/jeffreyvr/#content-plugins) plugins for WordPress.

                ## Hire me as Freelance WordPress Developer
                Looking for an experienced WordPress developer? The following might appeal to you:

                * Years of experience working with [WordPress and
                PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
                * Experience with several front-end frameworks including Tailwind CSS, Alpine.js and Vue.js
                * Working with version control (GIT)
                * Fluent in Dutch and English
                * Experience with working in a team as well as independently
                * Available on an hourly, project or contract basis
                * Preferably works remotely, but working (partly) on location is certainly an option

                If you want to hire me or want additional information, feel free to send an email to
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </x-post-content>

            <x-code-snippet title="TailPress" url="https://github.com/jeffreyvr/tailpress">
                @markdown(Storage::get('code-snippets/wordpress.md'))
            </x-code-snippet>
        </article>
    </div>
</x-site-layout>
