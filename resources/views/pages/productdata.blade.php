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
                <th scope="col">Unit</th>
                <th scope="col">Farmasi</th>
                <th scope="col">Class</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Buying Price</th>
            </tr>
        </thead>
        @forelse($product as $value)
        @php($i = 1)
        <tbody>
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$value->med_name}}</td>
                <td>{{$value->unit}}</td>
                <td>{{$value->farmation}}</td>
                <td>{{$value->class}}</td>
                <td>{{$value->sell_price}}</td>
                <td>{{$value->buy_price}}</td>
            </tr>
            @empty
            <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/no-entry-data.png" alt="Empty" style="width: 50%;">
                </div>
            </div>
        </tbody>
        @endforelse
    </table>
    <!-- End Active Table -->

</div>

@endsection
