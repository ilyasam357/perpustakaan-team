@extends('layout.main')

@section('content')
<div class="content">
 <div class="d-flex">

    <h2 class="my-4 mx-4 fw-bold">Daftar Peminjaman Buku</h2>
    <a href="#" style="height:44px; margin-left:auto; margin-right:21px; margin-top:19px;">
        <button class="btn btn-primary  " > Tambah 
        </button>
      </a>
 </div>
 
    <div class=" mx-4 my-4" >
      <table class=" my-3  table table-bordered"  >
        <thead>
          <tr>
            <th scope="col"  >No</th>
            <th scope="col">Nama Peminjam </th>
            <th scope="col">Alamat Peminjam</th>
            <th scope="col">Email Peminjam</th>
            <th scope="col">NIK Peminjam </th>
            <th scope="col">No Hp Peminjam</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          {{-- @dd($table) --}}
          @foreach ($tablePeminjam as $table)

          <tr>
            <th scope="row">{{ $table['tbodyNo'] }}</th>
            <td>{{ $table['tbodyNama'] }}</td>
            <td>{{ $table['tbodyAlamat'] }}</td>
            <td>{{ $table['tbodyEmail'] }}</td>
            <td>{{ $table['tbodyNIK'] }}</td>
            <td>{{ $table['tbodyHp'] }}</td>
            
            
            <td class="d-flex">
              <a href=""> <button class="btn btn-primary my-2 mx-2" style="height:40px;">Edit</button></a>
              <a href=""> <button class="btn btn-danger my-2" style="height:40px;">Hapus</button></a>
            </td>
          </tr>
          @endforeach

          
        </tbody>
      </table>
    </div>
</div>
@endsection