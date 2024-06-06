@extends('layouts.app')

@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Profile Picture</span>
                <span class="text-black-50">Upload your profile picture</span>
                <span> </span>
            </div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Create Profile</h4>
                </div>
                
                <form action="{{ route($action,['konsuman'=> $konsumen] ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="Name" name="nama_user"></div>
                        <div class="col-md-6"><label class="labels">Email</label><input type="email" class="form-control" placeholder="Enter email id" name="email"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">No. HP</label><input type="text" class="form-control" placeholder="Enter phone number" name="telpon"></div>
                        <div class="col-md-6"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="Enter address" name="alamat"></div>
                        <div class="col-md-6"><label class="labels">Kota</label>
                            <select class="form-control" name="id_kota">
                                @foreach($kotas as $kota)
                                    <option value="{{ $kota->id }}">{{ $kota->nama_kota }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6"><label class="labels">Kota Asal</label><input type="text" class="form-control" placeholder="Enter city of origin" name="kota_asal"></div>
                        <div class="col-md-6"><label class="labels">Kode Pos</label><input type="text" class="form-control" placeholder="Enter postcode" name="kodepos"></div>
                        <div class="col-md-12"><label class="labels">Foto Profile</label><input type="file" class="form-control" name="foto"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Simpan Profile</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
