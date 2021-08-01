@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>send</h1>
                        <a href="{{ route('send') }}"> <button class="btn btn-danger">
                                Notification <span class="badge badge-primary"></span>
                            </button></a>

                        {{-- <example-component></example-component> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
