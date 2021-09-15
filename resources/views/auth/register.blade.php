<x-guest-layout>
    @section('title') {{__('Register') }} @endsection
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{--<x-jet-authentication-card-logo />--}}
        </x-slot>

        {{--<x-jet-validation-errors class="mb-4" />--}}

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-forms.tool-tip :message="'El nombre de la empresa que utilizaras para tu aplicación'" />
                <x-jet-label for="company" value="{{ __('Company') }}"/>
                <x-jet-input id="company" class="block mt-1 w-full" type="text" name="tenancy_company" :value="old('tenancy_company')" autofocus autocomplete="company"/>
                @error('tenancy_company') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>
            <div class="mt-4">
                {{--TOOL TIP--}}
                <x-forms.tool-tip :message="'Slug del dominio: esta será la URL de su aplicación, utilice nombres abreviados. este URL no podrá ser cambiado después'" />
                <x-jet-label for="tenancy_domain" value="{{ __('Domain')}} "/>
                <x-jet-input id="tenancy_domain" class="block mt-1 w-full" type="text" name="tenancy_domain" :value="old('tenancy_domain')" autofocus autocomplete="tenancy_domain"/>
                {{--SLUGG--}}
                <x-jet-input id="tenancy_domain_slug" class="block mt-1 w-full bg-gray-100 text-gray-400 border-gray-200" type="text" :value="old('tenancy_domain_slug')" name="tenancy_domain_slug" autofocus autocomplete="tenancy_domain_slug" readonly="readonly"/>
                @error('tenancy_domain') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('User Name') }}"/>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                @error('name') <small class="text-indigo-300">{{ $message }}</small> @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
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
                <div class="mt-4 bg-indigo-300 p-2 rounded">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>
                            <small class="ml-2 text-gray-50">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="bold text-white hover:text-gray-700">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class=" bold text-white hover:text-gray-700">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </small>
                        </div>
                        @error('terms') <small class="text-indigo-300">{{ $message }}</small> @enderror
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
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

            /*SLUG*/
            document.getElementById("tenancy_domain").addEventListener("input", function () {
                let theSlug = string_to_slug(this.value);
                document.getElementById("tenancy_domain_slug").value = theSlug;
            });

            function string_to_slug(str) {
                str = str.replace(/^\s+|\s+$/g, ""); // trim
                str = str.toLowerCase();

                // remove accents, swap ñ for n, etc
                var from = "àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;";
                var to = "aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------";
                for (var i = 0, l = from.length; i < l; i++) {
                    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
                }

                str = str
                    .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
                    .replace(/\s+/g, "-") // collapse whitespace and replace by -
                    .replace(/-+/g, "-"); // collapse dashes

                return str + '.' + "{{env('APP_TENANT_URL')}}";
            }

            /*TOOL TIPS*/
            tippy('.tool-tip', {
                role: 'tooltip',
                duration: 1,
                theme: 'translucent',
                trigger: 'mouseenter click',
            });
        </script>
    @endpush
</x-guest-layout>
