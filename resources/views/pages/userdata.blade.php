@extends('layout.master')
@section('page', 'User Dashboard')
@section('content')

<div class="card p-5">
    <!-- Active Table -->
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
                <th scope="row">1</th>
                <td>Christhoper Colombus</td>
                <td>christhoper@mail.com</td>
                <td>Super Admin</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Napoleon Bonaparte</td>
                <td>napoleon@mail.com</td>
                <td>Admin Farmasi</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Winston Churchill</td>
                <td>Churchill@mail.com</td>
                <td>Owner</td>
            </tr>
        </tbody>
    </table>
    <!-- End Active Table -->
</div>


@endsection
