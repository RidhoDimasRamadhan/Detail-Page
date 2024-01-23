@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman Kelas</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kelas</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        
      {{-- <th scope="row">{{$loop->iteration}}</th> --}}
      @foreach ($kelas_data as $kelas_data_student)
      <tr>
        <td> {{$loop->iteration }}</td>
        <td>{{$kelas_data_student['nama']}}</td> 
        <td><a href="/kelas-detail/{{$kelas_data_student->id}}">Detail</a></td>
    </tr>
@endforeach
    </tbody>
  </table>

  <button class="btn btn-primary"><a href="/" style="color: white;text-decoration:none;">Back</a></button>

@endsection