@extends('layout.main')

@section('content')
<div class="content">
    <div class=" mx-4 my-4">
     <h2>Tambah Anggota</h2>

<div class="card" style="width:38rem;">
    <form action="" method="">
       
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama"  class="form-control"  placeholder="nama">
          
            <label for="nik" class="my-1">NIK</label>
            <input type="text" class="form-control"   placeholder="NIK">

            <label for="email" class="my-1">Email</label>
            <input type="email" class="form-control"   placeholder="email">

            <label for="alamat	" class="my-1">Alamat	</label>
            <input type="text" class="form-control"   placeholder="Alamat">

            <label for="NoHp	" class="my-1">No Hp	</label>
            <input type="text" class="form-control"   placeholder="No Hp">
            
            <button type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
        </div>
     </form>
</div>
     

    
    </div>
</div>
@endsection