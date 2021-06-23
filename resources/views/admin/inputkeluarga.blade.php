<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{(isset($keluarga))?route('keluarga.update', $keluarga->id):route('keluarga.store')}}" method="POST">
                    @csrf
                    @if (isset($keluarga))
                    @method('PUT')
                    @endif
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="nama" class="block text-sm font-medium text-gray-700">
                                        Nama
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="nama" value="{{(isset ($keluarga))?$keluarga->nama:old('keluarga')}}" id="keluarga" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Nama Keluarga">
                                    </div>
                                </div>
                               
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="no_kk" class="block text-sm font-medium text-gray-700">
                                        NO KK
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="no_kk" value="{{(isset ($keluarga))?$keluarga->no_kk:old('no_kk')}}" id="no_kk" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukan No KK">
                                    </div>
                                </div>

                                <div class="col-span-3 sm:col-span-2">
                                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                                        Alamat
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="alamat" value="{{(isset ($keluarga))?$keluarga->alamat:old('alamat')}}" id="alamat" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkaan Alamat">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="dusun" class="block text-sm font-medium text-gray-700">
                                        Dusun
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="dusun" value="{{(isset ($keluarga))?$keluarga->dusun:old('dusun')}}" id="dusun" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Dusun">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="RT" class="block text-sm font-medium text-gray-700">
                                        RT
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="RT" value="{{(isset ($keluarga))?$keluarga->RT:old('RT')}}" id="RT" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="RT">
                                    </div>
                                </div>
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="ekonomi" class="block text-sm font-medium text-gray-700">
                                        Ekonomi
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="ekonomi" value="{{(isset ($keluarga))?$keluarga->ekonomi:old('ekonomi')}}" id="ekonomi" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Ekonomi">
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