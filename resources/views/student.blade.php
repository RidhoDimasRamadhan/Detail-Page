@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman Student</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIS</th>
        {{-- <th scope="col">KELAS</th>
        <th scope="col">Eskul</th>
        <th scope="col">Wali Kelas</th> --}}
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        
      {{-- <th scope="row">{{$loop->iteration}}</th> --}}
      @foreach ($data as $nama)
      <tr>
        <td> {{$loop->iteration }}</td>
        <td>{{$nama['nama']}}</td> 
        <td>{{$nama['nis']}}</td>
        {{-- <td>{{$nama->class['nama']}}</td>
        <td>
        @foreach ($nama->student_eskul as $daftar_Eskul)
          - {{$daftar_Eskul['nama_eskul']}}
          <br>
        @endforeach
      </td>
      <td>
        {{$nama->class->guru->nama_guru}}
      </td> --}}
      <td><a href="student-detail/{{$nama->id}}" class="text-decoration-noneπ">Detail</a></td>
        @endforeach

      </tr>
    </tbody>
  </table>

  <button class="btn btn-primary"><a href="/" style="color: white;text-decoration:none;">Back</a></button>
@endsection