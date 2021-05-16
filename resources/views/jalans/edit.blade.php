<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Data') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('jalan.update', $jalan->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="no_ruas" class="block font-medium text-sm text-gray-700">No Ruas</label>
                            <input type="text" name="no_ruas" id="no_ruas" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('no_ruas', $jalan->no_ruas) }}" />
                            @error('no_ruas')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nama" class="block font-medium text-sm text-gray-700">Nama Jalan</label>
                            <input type="text" name="nama" id="nama" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('nama', $jalan->nama) }}" />
                            @error('nama')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="kecamatan" class="block font-medium text-sm text-gray-700">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('kecamatan', $jalan->kecamatan) }}" />
                            @error('kecamatan')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="panjang_jalan" class="block font-medium text-sm text-gray-700">Panjang
                                Jalan</label>
                            <input type="text" name="panjang_jalan" id="panjang_jalan" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('panjang_jalan', $jalan->panjang_jalan) }}" />
                            @error('panjang_jalan')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
