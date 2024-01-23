@extends('welcome')

@section('content')
    

<h1 class="mt-3">Halaman Detail Student</h1>

<p>Nama Siswa : {{$studentDetail['nama']}}</p>


<table class="table table-bordered">
    <tr class="text-center fw-bolder">
        <td>KELAS</td>
        <td>ESKUL</td>
        <td>WALI KELAS</td>
</tr>
<tbody>
    <tr>
    
            <td>{{$studentDetail->class->nama}}</td>
            <td>

            @foreach($studentDetail->student_eskul as $data)
            <ol>
                <li value="{{$loop->iteration}}">

                    @if ($data->nama_eskul == 0 )
                    bangke
                    @else
                    {{$data->nama_eskul}} 
                        
                    @endif
                </li>
            </ol>
            @endforeach
            </td>
            <td>{{$studentDetail->class->guru->nama_guru}}</td>
            
    </tr>
        </tbody>
</table>

<button type="button" class="bg-primary"><a href="/student" class="text-white text-decoration-none">Back</a></button>
@endsection