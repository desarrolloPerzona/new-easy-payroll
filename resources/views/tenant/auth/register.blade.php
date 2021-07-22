<x-app-tenant>
    @section('title'){{__('Tenant Register')}}@endsection
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{--<x-jet-authentication-card-logo/>--}}
        </x-slot>
        {{-- <x-jet-validation-errors class="mb-4" />--}}
        <form method="POST" action="{{ route('tenant.register') }}">
            @csrf
            <div>
                <x-jet-label for="company" value="{{ __('Company') }}"/>
                <x-jet-input id="company" class="block mt-1 w-full" type="text" name="tenancy_company" :value="old('tenancy_company')" autofocus autocomplete="company"/>
                @error('tenancy_company') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}"/>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name"/>
                @error('name') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Last name') }}"/>
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" autofocus autocomplete="last_name"/>
                @error('last_name') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="middle_name" value="{{ __('Middle name') }}"/>
                <x-jet-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')" autofocus autocomplete="middle_name"/>
                @error('middle_name') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="tenancy_domain" value="{{ __('Domain')}} "/>
                <x-jet-input id="tenancy_domain" class="block mt-1 w-full" type="text" name="tenancy_domain" :value="old('tenancy_domain')" autofocus autocomplete="tenancy_domain"/>
              {{--  <x-jet-input id="tenancy_domain" class="block mt-1 w-full bg-blue-100 text-blue-400 border-blue-200" type="text" :value="old('tenancy_domain')" name="tenancy_domain" autofocus autocomplete="tenancy_domain" readonly="readonly"/>
                <p class="text-sm text-gray-500 text-right">{{'.' .env('APP_TENANT_URL')}}</p>--}}
                @error('tenancy_domain') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="email"/>
                @error('email') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"/>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"/>
                @error('password') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center bg-perzona1-100 p-2 rounded">
                            <x-jet-checkbox name="terms" id="terms" />
                            <small class="ml-2 text-white">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_self" href="'.route('terms.show').'" class="text-white font-bold hover:font-bold">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_self" href="'.route('policy.show').'" class="text-white font-bold hover:font-gold">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </small>
                        </div>
                        @error('terms') <small class="text-indigo-300">{{ $message }}</small> @enderror
                    </x-jet-label>

                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="btn btn-success" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    @push('in_page_scripts')
        <script>

            let theSlug = $('#slug');
            let theDomain = $('#tenancy_domain');

            theSlug.keyup(function () {
                //   console.log($(this).val());
                let slug = slugify($(this).val());
                theDomain.val(slug);
            })

            function slugify(string) {
                const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
                const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
                const p = new RegExp(a.split('').join('|'), 'g')

                return string.toString().toLowerCase()
                    .replace(/\s+/g, '-') // Replace spaces with -
                    .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
                    .replace(/&/g, '-and-') // Replace & with 'and'
                    .replace(/[^\w\-]+/g, '') // Remove all non-word characters
                    .replace(/\-\-+/g, '-') // Replace multiple - with single -
                    .replace(/^-+/, '') // Trim - from start of text
                    .replace(/-+$/, '') // Trim - from end of text
            }
        </script>
    @endpush
</x-app-tenant>
