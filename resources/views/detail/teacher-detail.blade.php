@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman teacher</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">List Mahasiswa</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        
      {{-- <th scope="row">{{$loop->iteration}}</th> --}}
      @foreach ($teacherDetail->student as $studentList)
      <tr>
        <td>{{$loop->iteration }}. {{$studentList['nama']}}</td> 
    </tr>
@endforeach
    </tbody>    
  </table>

  {{$teacherDetail}}
  <button class="btn btn-primary"><a href="/teacher" style="color: white;text-decoration:none;">Back</a></button>

@endsection