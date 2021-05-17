<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Data Jalan STA') }}
            {{-- {{ $jalans['nama_ruas'] }} --}}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('sta.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_jalan" class="block font-medium text-sm text-gray-700">ID Jalan</label>
                            {{-- @foreach ($jalansta as $jalan)
                            @if ($jalan['id'] == $id) { --}}
                            <input type="text" name="id_jalan" id="id_jalan" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ $idsusah }}" readonly/>
                            @error('id_jalan')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            {{-- @endif
                            @endforeach --}}
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="sta" class="block font-medium text-sm text-gray-700">STA</label>
                            <input type="text" name="sta" id="sta" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('sta') }}" />
                            @error('sta')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dms_start" class="block font-medium text-sm text-gray-700">DMS Start</label>
                            <input type="text" name="dms_start" id="dms_start" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('dms_start') }}" />
                            @error('dms_start')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dms_end" class="block font-medium text-sm text-gray-700">DMS End</label>
                            <input type="text" name="dms_end" id="dms_end" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('dms_end') }}" />
                            @error('dms_end')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lat" class="block font-medium text-sm text-gray-700">Lat</label>
                            <input type="text" name="lat" id="lat" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('lat') }}" />
                            @error('lat')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lon" class="block font-medium text-sm text-gray-700">Lon</label>
                            <input type="text" name="lon" id="lon" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('lon') }}" />
                            @error('lon')
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

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="klasifikasi_status" class="block font-medium text-sm text-gray-700">Klasifikasi Status</label>
                            <input type="radio" name="klasifikasi_status" value="0">
                            <label for="0">Jalan Kota</label>
                            <input type="radio" name="klasifikasi_status" value="1">
                            <label for="0">Jalan Kabupaten</label>
                            <input type="radio" name="klasifikasi_status" value="2">
                            <label for="0">Jalan Arteri</label>
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="klasifikasi_fungsi" class="block font-medium text-sm text-gray-700">Klasifikasi Fungsi</label>
                            <input type="radio" name="klasifikasi_fungsi" value="0">
                            <label for="0">Primer</label>
                            <input type="radio" name="klasifikasi_fungsi" value="1">
                            <label for="0">Sekunder</label>
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
