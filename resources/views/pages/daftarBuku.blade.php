@extends('layout.main')

@section('content')
<div class="content">

    <h2 class="my-4 mx-4 fw-bold">Daftar Buku</h2>
    <div class=" mx-4 my-4" style="width:50rem;">
        <table class=" my-3  table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
             
             
            </tbody>
          </table>
   

    
    </div>
</div>
@endsection