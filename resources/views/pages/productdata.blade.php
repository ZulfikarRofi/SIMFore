@extends('layout.master')
@section('page', 'Product Dashboard')
@section('content')

<div class="card p-5">
    <!-- Active Table -->
    <div class="new-data d-flex justify-content-end mb-3">
        <a href="/createproduct" class="btn btn-primary">New Data</a>
    </div>
    <table class="table" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name Product</th>
                <th scope="col">Farmasi</th>
                <th scope="col">Unit</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Buying Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Salbutamol 2mg</td>
                <td>Kimia Farma</td>
                <td>Tablet</td>
                <td>Rp. 21.000,-</td>
                <td>Rp. 19.000,-</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Salbutamol 2mg</td>
                <td>Kimia Farma</td>
                <td>Tablet</td>
                <td>Rp. 21.000,-</td>
                <td>Rp. 19.000,-</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Salbutamol 2mg</td>
                <td>Kimia Farma</td>
                <td>Tablet</td>
                <td>Rp. 21.000,-</td>
                <td>Rp. 19.000,-</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Salbutamol 2mg</td>
                <td>Kimia Farma</td>
                <td>Tablet</td>
                <td>Rp. 21.000,-</td>
                <td>Rp. 19.000,-</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Salbutamol 2mg</td>
                <td>Kimia Farma</td>
                <td>Tablet</td>
                <td>Rp. 21.000,-</td>
                <td>Rp. 19.000,-</td>
            </tr>
        </tbody>
    </table>
    <!-- End Active Table -->

</div>

@endsection
