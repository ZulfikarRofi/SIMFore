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
                <th scope="col">Selling</th>
                <th scope="col">Adjust</th>
                <th scope="col">First Balance</th>
                <th scope="col">Last Balance</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1)
            @forelse($transaction as $value)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$value->product['med_name']}}</td>
                <td>{{$value->product['med_id']}}</td>
                <td>{{$value->buy}}</td>
                <td>{{$value->sell}}</td>
                <td>{{$value->total_adjust}}</td>
                <td>{{$value->first_balance}}</td>
                <td>{{$value->last_balance}}</td>
                <td>{{$value->transaction_date}}</td>
                <td>
                    <div class="d-flex">
                        <a href="" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        <a href="" class="btn btn-danger ms-2"><i class="bi bi-trash"></i></a>
                    </div>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                A simple danger alert—check it out!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforelse
        </tbody>
    </table>
    <!-- End Active Table -->

</div>

@endsection
