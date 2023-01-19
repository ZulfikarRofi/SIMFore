@extends('layout.master')
@section('page', 'Forecasting with Holt Winters')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <h5 class="card-title m-0 pb-0">Forecasting With Holt Winters Page</h5>
            <p class="passive-text" style="font-size:14px">please insert following command for using forecast system</p>
        </div>
        <!-- General Form Elements -->
        <form>
            <div class="row mb-3">
                <div class="px-4">
                    <label class="col-form-label fw-semibold" style="width: 100%;">Select product to forecast </label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this to select product</option>
                        <option value="1">Salbutamol 2mg</option>
                        <option value="2">Salbutamol 4mg</option>
                        <option value="3">Tremenza tablet</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="width:100%;">
                <div class="row mb-3" style="width: 100%;">
                    <label class="col-form-label fw-semibold" style="width: 100%;">Select period to forecast </label>
                    <div class="col-5">
                        <div class="period d-flex justify-content-between">
                            <input type="month" class="form-control" id="" name="">
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center">
                        <p>To</p>
                    </div>
                    <div class="col-5">
                        <div class="period d-flex justify-content-between">
                            <input type="month" class="form-control" id="" name="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between px-4 mb-5">
                <div>
                    <label for="" class="col-form-label fw-semibold">Select value for these variables</label>
                    <p class="passive-text" style="font-size: 12px;">rules : the value must be 0 > 1;</p>
                </div>
                <input type="number" min="0" max="1" class="form-control" id="alpha" name="alpha" placeholder="Alpha" style="width:30%">
                <input type="number" min="0" max="1" class="form-control" id="beta" name="beta" placeholder="Beta" style="width:30%">
                <input type="number" min="0" max="1" class="form-control" id="gamma" name="gamma" placeholder="Gamma" style="width:30%">
            </div>
            <div class="d-flex justify-content-end px-4">
                <button class="btn btn-primary" type="submit">Forecast</button>
            </div>
        </form><!-- End General Form Elements -->
    </div>
</div>
@endsection
