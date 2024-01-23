@extends('welcome')

<style>
.link{
    position: relative;
    display: flex;
    justify-content: center;
    align-content: center;
    background-color: chartreuse;
    margin-top: 5rem;
}
.link a{
    padding: 4rem;
    text-decoration: none;
    font-size: 3rem;
    color: black;
    font-weight: bolder;

}
.laravel{
    text-align: center;
    font-weight: bolder;
    font-size: 5.5rem;
}

</style>

@section('content')
<h1 class="mb-5 mt-4 laravel">Coba Laravel</h1>
<div class="link">
    <a href="student">Student</a>
    <a href="kelas">Kelas</a>
    <a href="teacher">Teacher</a>
    <a href="eskul">Eskul</a>

</div>
@endsection