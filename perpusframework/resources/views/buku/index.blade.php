@extends('layout.main')
@section('title', 'Buku')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
        <h1 class="mt-3">Daftar mahasiswa</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lukman Hakim</td>
                    <td>1010651098</td>
                    <td>lukman@gmail.com</td>
                    <td>Teknik Informatika</td>
                    <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection