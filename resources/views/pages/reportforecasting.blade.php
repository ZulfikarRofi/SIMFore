@extends('layout.master')
@section('page', 'Report Forcasting')
@section('content')

<!-- Reports -->
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Reports <span>/Today</span></h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                            name: 'Sales',
                            data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                            name: 'Revenue',
                            data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                            name: 'Customers',
                            data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                                show: false
                            },
                        },
                        markers: {
                            size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100]
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2
                        },
                        xaxis: {
                            type: 'datetime',
                            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                            x: {
                                format: 'dd/MM/yy HH:mm'
                            },
                        }
                    }).render();
                });
            </script>
            <!-- End Line Chart -->


            <div class="row my-3">
                <div>
                    <h5 class="card-title">Result Last Forecasting</h5>
                </div>
                <!-- Active Table -->
                @forelse($report as $value)
                @php($i = 1)
                <table class="table" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$value->username}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->level}}</td>
                        </tr>
                    </tbody>
                </table>
                @empty
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <img src="assets/img/no-entry-data.png" alt="Empty" style="width: 50%;">
                    </div>
                </div>
                @endforelse
                <!-- End Active Table -->
            </div>
        </div>
    </div>
</div><!-- End Reports -->


@endsection
