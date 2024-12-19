<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('images/AudiTho-Logo.png') }}" alt="AudiTho" style="width: 50%; height:auto; display:block; margin: auto;">
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" style="margin: 0 20px; font-family: 'Baskerville';">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" style="font-size: 18px; padding-bottom: 2px;"/>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="margin-bottom: 5px; font-weight: 400;"/>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" style="font-size: 18px; padding-bottom: 2px;"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" style="margin-bottom: 5px; font-weight: 400;"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" style="font-size: 18px; padding-bottom: 2px;"/>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" style="margin-bottom: 5px; font-weight: 400;"/>
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" style="font-size: 18px; padding-bottom: 2px;"/>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" style="margin-bottom: 5px; font-weight: 400;"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4" style="font-size: 14px;">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
