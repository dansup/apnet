@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                <h1 class="fw-bold text-center"><a href="https://{{ $instance->domain }}">{{ $instance->domain }}</a></h1>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="small">Software</div>
                                <div class="fw-bold"><a href="/?software={{ $instance->software }}">{{ $instance->software }}</a></div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="small">Software Version</div>
                                <div class="fw-bold">{{ $instance->version }}</div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="small">User Count</div>
                                <div class="fw-bold" data-count="{{ $instance->user_count }}">{{ $instance->user_count }}</div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="small">Status Count</div>
                                <div class="fw-bold" data-count="{{ $instance->status_count }}">{{ $instance->status_count }}</div>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="small">Last Seen</div>
                                <div class="fw-bold">{{ $instance->last_seen_at->diffForHumans() }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3">
                        <a class="btn btn-primary btn-lg flex-grow-1" href="{{ $instance->fedidbUrl() }}" target="_blank">View on <span class="fw-bold">FediDB</span></a>

                         <a class="btn btn-primary btn-lg flex-grow-1" href="https://the-federation.info/node/{{ $instance->domain }}" target="_blank">View on <span class="fw-bold">federation.info</span></a>

                         <a class="btn btn-primary btn-lg flex-grow-1" href="https://fediverse.observer/{{ $instance->domain }}" target="_blank">View on <span class="fw-bold">fediverse.observer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
