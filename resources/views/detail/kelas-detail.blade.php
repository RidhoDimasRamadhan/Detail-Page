@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman Detail Kelas</h1>
<p>Anda ada di halaman kelas {{$detailKelas->nama}}</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Siswa</th>
            <th>Guru</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th>
                @foreach($detailKelas->student as $nama)
                {{$loop->iteration}}. {{$nama->nama}} <br>
                @endforeach
            </th>
            <th>
                {{$detailKelas->guru->nama_guru}}
            </th>
        </tr>
    </tbody>
</table>

<button type="button" class="bg-primary"><a href="/kelas" class="text-white text-decoration-none">Back</a></button>
@endsection