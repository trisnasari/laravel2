<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{(isset($kegiatan))?route('kegiatan.update', $kegiatan->id):route('kegiatan.store')}}" method="POST">
                    @csrf
                    @if (isset($kegiatan))
                    @method('PUT')
                    @endif
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="hari" class="block text-sm font-medium text-gray-700">
                                        Hari
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="hari" value="{{(isset ($kegiatan))?$kegiatan->hari:old('kegiatan')}}" id="kegiatan" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan hari Kegiatan">
                                    </div>
                                </div>
                               
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="tanggal" class="block text-sm font-medium text-gray-700">
                                        Tanggal
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="date" name="tanggal" value="{{(isset ($kegiatan))?$kegiatan->tanggal:old('tanggal')}}" id="tanggal" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukan No KK">
                                    </div>
                                </div>

                                <div class="col-span-3 sm:col-span-2">
                                    <label for="nama" class="block text-sm font-medium text-gray-700">
                                        Nama Kegiatan
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="nama" value="{{(isset ($kegiatan))?$kegiatan->nama:old('nama')}}" id="nama" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkaan nama">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="jam" class="block text-sm font-medium text-gray-700">
                                        Jam
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="jam" value="{{(isset ($kegiatan))?$kegiatan->jam:old('jam')}}" id="jam" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="jam">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="tempat" class="block text-sm font-medium text-gray-700">
                                        tempat
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="tempat" value="{{(isset ($kegiatan))?$kegiatan->tempat:old('tempat')}}" id="tempat" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="tempat">
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