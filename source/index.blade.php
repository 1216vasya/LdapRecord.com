@extends('_layouts.master')

@section('body')
<section class="retro-hero">
    <div class="retro-hero-background" style="height: 80%;width: 145%;transform: rotate(140deg);offset-rotate: 90%;background-color: #6f296f;"></div>

    <div class="retro-hero-content md:mx-48 my-auto">
        <h1 class="retro-hero-heading sm:text-3xl lg:text-5xl">
            <em>Integrating LDAP is hard work</em>
        </h1>

        <h2 class="text-shadow font-light hidden sm:block mt-4 text-white">
            <strong class="font-extrabold italic">LdapRecord</strong> is a <strong class="font-extrabold italic">PHP</strong> package that helps you integrate LDAP into your applications. No hair-pulling necessary.
        </h2>

        <h4 class="text-shadow font-light block sm:hidden mt-4 text-white">
            <strong class="font-extrabold italic">LdapRecord</strong> is a <strong class="font-extrabold italic">PHP</strong> package that helps you integrate LDAP into your applications. No hair-pulling necessary.
        </h4>

        <div class="flex justify-center mb-8">
            <a href="/docs/installation" title="{{ $page->siteName }} getting started" class="uppercase tracking-wide italic bg-purple-500 hover:bg-purple-600 font-extrabold text-white hover:text-white rounded mr-4 py-2 px-6">
                Get Started
            </a>

            <a href="https://github.com/DirectoryTree/LdapRecord" title="GitHub LdapRecord Source Code Link" class="uppercase tracking-wide italic bg-gray-400 hover:bg-gray-600 text-blue-900 font-extrabold hover:text-white rounded py-2 px-6">
                Source Code
            </a>
        </div>
    </div>
</section>

<div class="md:mb-32 lg:w-2/3 mx-auto relative z-10 -mt-64">
    <div class="feature shadow mx-4 md:mx-12">
        <div class="top-bar flex items-center justify-between">
            <div class="flex justify-start items-center">
                <span class="mx-1">
                    <img src="/assets/img/icon-only.svg" style="width:10px;height:10px;" alt="window icon">
                </span>
                <span class="text-white">LdapRecord</span>
            </div>
            <div class="flex justify-end circles">
                <button type="button">_</button>
                <button type="button">🗖</button>
                <button type="button">X</button>
            </div>
        </div>

        @include('docs.examples.landing')
    </div>
</div>

<section class="container max-w-6xl mx-auto px-6 py-0 mt-16 md:mt-0">
    <!-- Fast Setup. -->
    <div class="flex flex-col-reverse md:flex-row md:flex md:items-center lg:mb-32">
        <div class="md:w-3/5">
            @component('components.feature')
                @include('docs.examples.fast-setup')
            @endcomponent
        </div>

        <div class="md:w-2/5 md:ml-8 flex flex-col items-center md:items-start">
            <div class="flex items-center">
                <img src="/assets/img/clock.svg" class="h-12 w-12" alt="window icon">

                <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0 mt-0 ml-2 font-extrabold italic text-shadow">
                    Up and running fast
                </h3>
            </div>

            <p class="text-xl text-center md:text-left">
                Effortlessly connect to your LDAP servers and start running queries & operations faster than dial up.
            </p>
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    <!-- Fluent Query Builder. -->
    <div class="flex flex-col md:flex-row md:flex md:items-center lg:mb-32">
        <div class="md:w-2/5 md:mr-8 flex flex-col items-center md:items-start">
            <div class="flex items-center">
                <img src="/assets/img/repeat.svg" class="h-12 w-12" alt="window icon">

                <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0 mt-0 ml-2 font-extrabold italic text-shadow">
                    Fluent Query Builder
                </h3>
            </div>

            <p class="text-xl text-center md:text-left">
                Building LDAP queries has never been so easy. Find the objects you're
                looking for in a couple lines or less with a fluent interface.
            </p>
        </div>

        <div class="md:w-3/5">
            @component('components.feature')
                @include('docs.examples.fluent')
            @endcomponent
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    <!-- ActiveRecord. -->
    <div class="flex flex-col-reverse md:flex-row md:flex md:items-center mb-24">
        <div class="md:w-3/5">
            @component('components.feature')
                @include('docs.examples.active-record')
            @endcomponent
        </div>

        <div class="md:w-2/5 md:ml-8 flex flex-col items-center md:items-start">
            <div class="flex items-center">
                <img src="/assets/img/volume-control.svg" class="h-12 w-12" alt="stack icon">

                <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0 mt-0 ml-2 font-extrabold italic text-shadow">
                    Supercharged ActiveRecord
                </h3>
            </div>

            <p class="text-xl text-center md:text-left">
                Create and modify LDAP objects with ease. All LDAP objects are individual models. Simply modify the
                attributes on the model and save it to persist the changes to your LDAP server.
            </p>
        </div>
    </div>
</section>
@endsection
