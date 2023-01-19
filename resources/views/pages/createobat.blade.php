@extends('layout.master')
@section('page', 'Add New Data')
@section('content')

<div class="card p-2">
    <div class="card-body">
        <h5 class="card-title">Add New Data</h5>
        <form action="">
            <div class="row mb-3 px-3">
                <label for="" class="col-form-label">Product Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <label for="" class="col-form-label">Farmasi</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-4">
                    <label for="" class="col-form-label">Golongan</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-4">
                    <label for="" class="col-form-label">Satuan</label>
                    <select name="" id="" class="form-select">
                        <option selected>Satuan</option>
                        <option value="ampuls">Ampuls</option>
                        <option value="fls">FLS</option>
                        <option value="pcs">Pcs</option>
                        <option value="vial">Vial</option>
                        <option value="tablet">Tablet</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="" class="col-form-label">Harga Jual</label>
                    <input type="text" class="form-control" placeholder="" value="">
                </div>
                <div class="col-6">
                    <label for="" class="col-form-label">Harga Beli</label>
                    <input type="text" class="form-control" placeholder="" value="">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
