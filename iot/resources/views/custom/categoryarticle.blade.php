@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center">Tambah Tipe Artikel</h1>

            <!-- Form untuk menambahkan tipe artikel -->
            <form action="{{ route('addarticletype') }}" method="POST" class="mt-4">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Nama Tipe Artikel:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <!-- Tombol untuk submit form -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Tambah Tipe Artikel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CSS yang di-include langsung di HTML -->
<style>
    .container {
        margin-top: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn-success {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
    }

    .btn-success:hover {
        background-color: #218838;
    }
</style>
@endsection
