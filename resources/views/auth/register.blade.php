<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Nomor Handphone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="number" name="phone" :value="old('phone')" required/>
            </div>

            <div class="mt-4">
            <x-jet-label for="idtype" value="{{ __('Tipe Identitas') }}" />
            <select name="idtype" id="idtype" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('idtype')" required>
                <option value="KTP">KTP</option>
                <option value="PASSPORT">PASSPORT</option>
            </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="noid" value="{{ __('Nomor Identitas') }}" />
                <x-jet-input id="noid" class="block mt-1 w-full" type="text" name="noid" :value="old('noid')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="alamat" value="{{ __('Alamat Sesuai Identitas') }}" />
                <textarea rows="4" cols="50" name="alamat" id="alamat" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('alamat')" required></textarea>
            </div>

            <div class="mt-4">
                <x-jet-label for="dob" value="{{ __('Tanggal Lahir') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
            </div>

            <div class="mt-4">
            <x-jet-label for="jk" value="{{ __('Jenis Kelamin') }}" />
            <select name="jk" id="jk" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('jk')" required>
                <option value="pria">Laki - Laki</option>
                <option value="wanita">Perempuan</option>
            </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('Saya setuju dengan :terms_of_service :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('peraturan').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('pengunna').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Masuk') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Daftar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
