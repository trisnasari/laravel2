<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{(isset($pegawai))?route('pegawai.update', $pegawai->id):route('pegawai.store')}}" method="POST">
                    @csrf
                    @if (isset($pegawai))
                    @method('PUT')
                    @endif
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="nama_pegawai" class="block text-sm font-medium text-gray-700">
                                        Nama
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="nama_pegawai" value="{{(isset ($pegawai))?$pegawai->nama_pegawai:old('nama_pegawai')}}" id="nama_pegawai" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Nama Pegawai">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                                        Alamat
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="alamat" value="{{(isset ($pegawai))?$pegawai->alamat:old('alamat')}}" id="NIAP" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="NIP" class="block text-sm font-medium text-gray-700">
                                        NIP
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="NIP" value="{{(isset ($pegawai))?$pegawai->NIP:old('NIP')}}" id="NIP" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="NIP">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="Jabatan" class="block text-sm font-medium text-gray-700">
                                        Jabatan
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="Jabatan" value="{{(isset ($pegawai))?$pegawai->Jabatan:old('Jabatan')}}" id="Jabatan" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Jabatan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-template-layout>