<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Data Jalan') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('jalan.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="no_ruas" class="block font-medium text-sm text-gray-700">No Ruas</label>
                            <input type="text" name="no_ruas" id="no_ruas" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('no_ruas') }}" />
                            @error('no_ruas')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nama_ruas" class="block font-medium text-sm text-gray-700">Nama Ruas</label>
                            <input type="text" name="nama_ruas" id="nama_ruas" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('nama_ruas') }}" />
                            @error('nama_ruas')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="patok_sta" class="block font-medium text-sm text-gray-700">patok sta</label>
                            <input type="text" name="patok_sta" id="patok_sta" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('patok_sta') }}" />
                            @error('patok_sta')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="geo_dms" class="block font-medium text-sm text-gray-700">geo dms</label>
                            <input type="text" name="geo_dms" id="geo_dms" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('geo_dms') }}" />
                            @error('geo_dms')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="geo_decimal" class="block font-medium text-sm text-gray-700">geo decimal</label>
                            <input type="text" name="geo_decimal" id="geo_decimal" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('geo_decimal') }}" />
                            @error('geo_decimal')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="panjang_jalan" class="block font-medium text-sm text-gray-700">Panjang
                                Jalan</label>
                            <input type="text" name="panjang_jalan" id="panjang_jalan" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('panjang_jalan') }}" />
                            @error('panjang_jalan')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lebar_jalan" class="block font-medium text-sm text-gray-700">Lebar
                                Jalan</label>
                            <input type="text" name="lebar_jalan" id="lebar_jalan" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('lebar_jalan') }}" />
                            @error('lebar_jalan')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
