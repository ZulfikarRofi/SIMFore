@extends('layout.master')
@section('page', 'Product Transaction Data')
@section('content')

<div class="container py-3">
    <!-- Active Table -->
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
            </tr>
        </tbody>
    </table>
    <!-- End Active Table -->

</div>

@endsection
