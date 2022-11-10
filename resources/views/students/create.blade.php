@extends('template.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/students" class="" method="post">
            @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" name="example-text-input" 
            placeholder="Input placeholder">
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" name="example-text-input" 
            placeholder="Input placeholder">
          </div>
          <div class="mb-3">
            <label class="form-label">Nomor hp</label>
            <input type="text" name="phone_number" class="form-control" name="example-text-input" 
            placeholder="Input placeholder">
          </div>
          <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="class" class="form-control" name="example-text-input" 
            placeholder="Input placeholder">
        </div>
            <div class="mb-3">
            <input type="submit" value="simpan" class="btn btn-primary">
          </div>
    </div>
</div>
@endsection