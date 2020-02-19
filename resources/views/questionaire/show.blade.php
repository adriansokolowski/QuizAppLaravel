@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $questionaire->title }}</div>

                <div class="card-body">
                    <a class="btn btn-dark" href="/questionaires/{{ $questionaire->id }}/questions/create">Create new question</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
