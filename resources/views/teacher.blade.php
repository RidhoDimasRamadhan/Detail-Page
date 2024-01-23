@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman Teacher</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Guru</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        
      {{-- <th scope="row">{{$loop->iteration}}</th> --}}
      @foreach ($guru as $nama)
      <tr>
        {{-- {{$nama}} --}}
        <td> {{$loop->iteration }}</td>
        <td>{{$nama['nama_guru']}}</td> 
      <td><a href="teacher-detail/{{$nama->id}}" class="text-decoration-noneπ">Detail</a></td>

        @endforeach
      </tr>
    </tbody>
  </table>
{{$guru}}
  <button class="btn btn-primary"><a href="/" style="color: white;text-decoration:none;">Back</a></button>

@endsection