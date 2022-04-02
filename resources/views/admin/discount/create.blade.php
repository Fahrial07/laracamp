@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-2 mt-3">
                <div class="card  mt-5">
                    <div class="card-header bg-info">
                        <strong>Insert a new discount</strong>
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <div class="table-responsive">
                            <form action="{{ route('admin.discount.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" name="name"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                                <div class="form-group mb-4">
                                    <label for="" class="form-label">Code</label>
                                    <input type="text" name="code"
                                        class="form-control  {{ $errors->has('code') ? 'is-invalid' : '' }}"
                                        value="{{ old('code') }}">
                                </div>
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                                <div class="form-group mb-4">
                                    <label for="" class="form-label">Description</label>
                                    <textarea name="description"
                                        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id=""
                                        cols="0" rows="2">{{ old('description') }}</textarea>
                                </div>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                                <div class="form-group mb-4">
                                    <label for="" class="form-label">Discount Percentage</label>
                                    <input type="number" name="percentage"
                                        class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }}"
                                        value="{{ old('percentage') }}">
                                </div>
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('percentage') }}</p>
                                @endif
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
