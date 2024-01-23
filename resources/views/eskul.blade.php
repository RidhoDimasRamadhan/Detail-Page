@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman eskul</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Eskul</th>
        <th scope="col">Nama Anggota</th>
      </tr>
    </thead>
    <tbody>
        
      {{-- <th scope="row">{{$loop->iteration}}</th> --}}
      @foreach ($data_eskul as $data_eskul)
      <tr>
        <td> {{$loop->iteration }}</td>
        <td>{{$data_eskul['nama_eskul']}}</td> 

        <td>
        @foreach ($data_eskul->student as $eskul_data)
            - {{$eskul_data['nama']}}
            <br>
            @endforeach
        </td> 
      </tr>
    @endforeach
   
    </tbody>
  </table>
  <button class="btn btn-primary"><a href="/" style="color: white;text-decoration:none;">Back</a></button>

@endsection