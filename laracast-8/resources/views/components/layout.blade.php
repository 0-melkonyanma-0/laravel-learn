<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" />
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="{{ route('index') }}">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 items-center flex">
                @auth
                    <span class="text-xl font-bold uppercase">
                        {{ __('Welcome back') }}, <i>{{ auth()->user()->name }}</i> !
                    </span>

                    <form action="{{ route('logout.destroy') }}" class="text-xs font-semibold text-blue-500 ml-6"
                        method="POST">
                        @csrf
                        <input type="submit" value="Log Out" />
                    </form>
                @else
                    <a href="{{ route('login.create') }}" class="text-xs font-bold uppercase me-3">{{ __('Log In') }}</a>
                    <a href="{{ route('register.create') }}" class="text-xs font-bold uppercase">{{ __('Register') }}</a>
                @endauth
                <a href="#newsletter"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    {{ __('Subscribe for Updates') }}
                </a>
            </div>
        </nav>

        {{ $slot }}

        <x-flash />

        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">{{ __('Stay in touch with the latest posts') }}</h5>
            <p class="text-sm mt-3">{{ __('Promise to keep the inbox clean. No bugs.') }}</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0
                                lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            {{ __('Subscribe') }}
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
