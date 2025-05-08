@extends('admin.admin_dashboard')
@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Market Price</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('market-price.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="item_name" class="col-md-4 col-form-label text-md-right">Item Name</label>

                            <div class="col-md-6">
                                <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') }}" required autocomplete="item_name" autofocus>

                                @error('item_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="market_location" class="col-md-4 col-form-label text-md-right">Market Location</label>

                            <div class="col-md-6">
                                <input id="market_location" type="text" class="form-control @error('market_location') is-invalid @enderror" name="market_location" value="{{ old('market_location') }}" required autocomplete="market_location">

                                @error('market_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_recorded" class="col-md-4 col-form-label text-md-right">Date Recorded</label>

                            <div class="col-md-6">
                                <input id="date_recorded" type="date" class="form-control @error('date_recorded') is-invalid @enderror" name="date_recorded" value="{{ old('date_recorded', date('Y-m-d')) }}" required>

                                @error('date_recorded')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Market Price
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection