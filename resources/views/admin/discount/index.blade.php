@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-2 mt-5">
                <div class="card  mt-5">
                    <div class="card-header bg-info">
                        <strong>Discount</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 d-flex flex-row-reverse">
                                <a href="{{ route('admin.discount.create') }}" class="btn btn-primary btn-sm mb-2">Add
                                    Discount
                                </a>
                            </div>
                        </div>
                        @include('components.alert')
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>Percentage</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $n = 1;
                                    @endphp
                                    @forelse ($discounts as $discount)
                                        <tr>
                                            <td>{{ $n }}</td>
                                            <td>{{ $discount->name }}</td>
                                            <td>
                                                <span class="badge bg-success">{{ $discount->code }}</span>
                                            </td>
                                            <td>{{ $discount->description }}</td>
                                            <td>{{ $discount->percentage }} %</td>
                                            <td>
                                                <a href="{{ route('admin.discount.edit', $discount->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.discount.destroy', $discount->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                            $n++;
                                        @endphp
                                    @empty
                                        <tr>
                                            <td colspan="6">No discount created !</td>
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
