@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12b">
        <div class="container">
            <div class="welcome">
                <img src="../img/dsh.jpg" height="305px">
            </div>
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Penerbit</h5>
                            <a href="{{ url('publishers') }}" class="btn btn-primary">Data Penerbit</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Rayon</h5>
                            <a href="{{ url('rayons') }}" class="btn btn-primary">Data Rayon</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Rombel</h5>
                            <a href="{{ url('studentGroups') }}" class="btn btn-primary">Data Rombel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Siswa</h5>
                            <a href="{{ url('students') }}" class="btn btn-primary">Data Siswa</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Buku</h5>
                            <a href="{{ url('books') }}" class="btn btn-primary">Data Buku</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Peminjaman</h5>
                            <a href="{{ url('borrowings') }}" class="btn btn-primary">Data Peminjaman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    @endsection