@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>CreatevNew Book List</h3>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
       <strong>Ups!</strong> there where some problem with your input.<br>
           <ul>
            @foreach ($errors as $errors)
               <li>{{$errors}}</li>
               @endforeach
           </ul> 
    </div>
    @endif

    <form action="{{ route('buku.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <strong>Judul Buku</strong>
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku">
            </div>
            <div class="col-md-12">
                    <strong>Penerbit</strong>
                    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
            </div>
            <div class="col-md-12">
                    <strong>Tahun Terbit</strong>
                    <input type="form-control" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit">
            </div>
            <div class="col-md-12">
                    <strong>Pengarang</strong>
                    <input type="text" name="pengarang" class="form-control" placeholder="Pengarang">
            </div>
            <div class="col-md-12">
                <a href="{{ route('buku.store')}}" class="btn btn-sm btn-success">Back</a>
                <button type="submit" class="btn btn-sm btn-primary"Save></button>
            </div>
        </div>
    </form>
</div>
@endsection
