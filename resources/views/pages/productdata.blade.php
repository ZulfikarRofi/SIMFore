@extends('layout.master')
@section('page', 'Product Dashboard')
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        @php($i = 1)
        @forelse($product as $value)
        <tbody>
            <tr>
                <td>{{$i++}}</td>
                <td>{{$value->med_name}} {{$value->med_id}}</td>
                <td>{{$value->unit}}</td>
                <td>{{$value->farmation}}</td>
                <td>{{$value->class}}</td>
                <td>{{$value->sell_price}}</td>
                <td>{{$value->buy_price}}</td>
                <td>
                    <div class="d-flex">
                        <a href="/editproduct/{{$value->id}}" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                        <!-- Vertically centered Delete Modal -->
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#Product-{{$value->id}}">
                            <i class="bi bi-trash"></i>
                        </button>
                        <div class="modal fade" id="Product-{{$value->id}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="/deleteproduct/{{$value->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Confirm Delete this product : <span class="fw-bold">{{$value->med_name}} {{$value->med_id}}</span>
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
        </tbody>
        @endforelse
    </table>
    <!-- End Active Table -->

</div>

@endsection
