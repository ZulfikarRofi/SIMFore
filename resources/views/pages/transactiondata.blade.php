@extends('layout.master')
@section('page', 'Product Transaction Data')
@section('content')

<div class="card p-5">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    @if(session('delete'))
    <div class="alert alert-warning" role="alert">
        {{ session('delete') }}
    </div>
    @endif
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
                        <a href="/edittransaction/{{$value->id}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        <!-- Vertically centered Delete Modal -->
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#Transaction-{{$value->id}}">
                            <i class="bi bi-trash"></i>
                        </button>
                        <div class="modal fade" id="Transaction-{{$value->id}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="/deletetransaction/{{$value->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Transaction</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Confirm Delete this Transaction : <span class="fw-bold">{{$value->product['med_name']}} {{$value->transaction_date}}</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- End Vertically centered Delete Modal-->
                    </div>
                </td>
            </tr>
            @empty
            <div class="row">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/no-entry-data.png" alt="Empty" style="width: 50%;">
                </div>
            </div>
            @endforelse
        </tbody>
    </table>
    <!-- End Active Table -->

</div>

@endsection
