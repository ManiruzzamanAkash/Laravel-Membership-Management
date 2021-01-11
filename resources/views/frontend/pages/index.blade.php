<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                <div>
                    Welcome to Laravel Membership Management Project
                </div>

                <div class="mt-3">
                    @if (Auth::check())
                        <a class="btn btn-info" href="{{ url('/dashboard') }}">Go to Dashboard</a>
                    @else
                        <a class="btn btn-info" href="{{ url('/login') }}">Login</a>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
