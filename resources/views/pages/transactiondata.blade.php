@extends('layout.master')
@section('page', 'Product Transaction Data')
@section('content')

<div class="card p-5">
    <div class="new-data d-flex justify-content-end mb-3">
        <a href="/createtransaction" class="btn btn-primary">New Data</a>
    </div>
    <table class="table" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name Product</th>
                <th scope="col">Product's ID</th>
                <th scope="col">Buying</th>
                <th scope="col">Using</th>
                <th scope="col">Return</th>
                <th scope="col">Netto Using</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Salbutamol 2mg</td>
                <td>22702</td>
                <td>200</td>
                <td>150</td>
                <td>0</td>
                <td>50</td>
                <td>
                    <div class="row">
                        <div class="d-flex">
                            <a href="" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                            <a href="" class="btn btn-danger ms-2"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- End Active Table -->

</div>

@endsection
