@extends('layout.master')
@section('page', 'Add New Transaction')
@section('content')

<div class="card p-2">
    <div class="card-body">
        <h5 class="card-title">Add New Transaction</h5>
        <form action="">
            <div class="row mb-3 px-3">
                <label for="" class="col-form-label">Product</label>
                <select name="" id="" class="form-select">
                    <option selected>Select Product</option>
                    <option value="ampuls">Salbutamol 2mg</option>
                    <option value="fls">Salbutamol 4mg</option>
                    <option value="pcs">Tremenza</option>
                </select>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="" class="col-form-label">Buying</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-3">
                    <label for="" class="col-form-label">Selling</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-3">
                    <label for="" class="col-form-label">Netto Using</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-3">
                    <label for="" class="col-form-label">Return</label>
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
