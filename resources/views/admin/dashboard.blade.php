@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <strong>My Camps | Data Camps Paid Users</strong>
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Camp</th>
                                        <th>Price</th>
                                        <th>Register Date</th>
                                        <th>Paid Status</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $n = 1;
                                    @endphp
                                    @forelse($checkouts as $checkout)
                                        <tr>
                                            <td>{{ $n }}</td>
                                            <td>{{ $checkout->user->name }}</td>
                                            <td>{{ $checkout->Camp->title }}</td>
                                            <td>${{ $checkout->Camp->price }}K</td>
                                            <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                            <td>
                                                <strong>{{ $checkout->payment_status }}</strong>
                                                {{-- @if ($checkout->is_paid)
                                                    <span class="badge bg-success">Paid</span>
                                                @else
                                                    <span class="badge bg-warning">Waiting</span>
                                                @endif --}}
                                            </td>
                                            {{-- <td>
                                                @if (!$checkout->is_paid)
                                                    <form action="{{ route('admin.checkout.update', $checkout->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button class="btn btn-primary btn-sm">Set to Paid</button>
                                                    </form>
                                                @endif
                                            </td> --}}
                                        </tr>
                                        @php
                                            $n++;
                                        @endphp
                                    @empty $n++;
                                        <tr>
                                            <td colspan="3">No Camps Registred</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
