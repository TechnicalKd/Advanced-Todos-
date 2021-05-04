@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <x-alert/>

                    <form action="{{ route('avatar.store') }}" enctype="multipart/form-data" method="post">@csrf
                        <div class="form-group">
                        <input type="file" name="avatar" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
