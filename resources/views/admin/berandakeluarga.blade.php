<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$title}}
        </h2><br>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-2 sm:py-1 sm:br-gray-100">
          <div class="grid grid-cols-12">
            <div class="col-span-6 p-4">
              <a href="{{route('keluarga.create')}}"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200
              hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah<button></a>
           </div>
          </div>
        <div class="shadow overflow-hidden border-b boorder-gray-200 sm:rounded-lg m-1">
        <table class="min-w-full divide-y divide-gray-200 p-3">
          <thead class="bg-gray-50">
              <tr class="text-lg " >
              <th>No</th>
                  <th>Nama Keluarga</th>
                  <th>No KK</th>
                  <th>Alamat</th>
                  <th>Dusun</th>
                  <th>RT</th>
                  <th>Ekonomi</th>
                  <th>AKSI</th>
              </tr>
          </thead>
          <tbody class="text-center bg-white divide-y divide-gray-200">
            <?php $no=1;?>
            @Foreach ($keluarga as $item)
            <tr>
              
                <td>{{$no}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->no_kk}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->dusun}}</td> 
                <td>{{$item->RT}}</td>
                <td>{{$item->ekonomi}}</td> 
                <td>

                                       <form action="{{ route('keluarga.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('keluarga.edit', $item->id) }}"
                                                    class="px-4 py-1 mr-1 text-sm rounded text-green-600 border border-yellow-500 hover:text-white hover:bg-yellow-600">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button
                                                    class="px-4 py-1 text-sm rounded text-red-600 border border-yellow-500 hover:text-white hover:bg-red-600">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                    </td>
              </tr>
                <?php $no++; ?>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</x-template-layout>