@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(request()->has('software'))
            <p class="lead d-flex gap-2">Software: <span class="fst-italic">{{ request()->software }}</span> <a href="/" class="small text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/></svg></a></p>
            @endif
            @if(request()->has('q'))
            <p class="lead d-flex gap-2">Search: <span class="fst-italic">{{ request()->q }}</span> <a href="/" class="small text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/></svg></a></p>
            @endif
            <div class="table-responsive">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Domain</th>
                      <th scope="col">Software</th>
                      <th scope="col">Users</th>
                      <th scope="col">Statuses</th>
                      <th scope="col">Last Seen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($instances as $instance)
                    <tr>
                      <th scope="row" class="fw-bold"><a href="https://{{ $instance->domain }}" rel="nofollow">{{ $instance->domain }}</a></th>
                      @if($instance->software)
                      <td class="small"><a href="?software={{ $instance->software }}">{{$instance->software}}</a></td>
                      @else
                      <td class="small">{{ $instance->software }}</td>
                      @endif
                      <td class="small">{{ $instance->user_count }}</td>
                      <td class="small">{{ $instance->status_count }}</td>
                      <td class="small">{{ $instance->last_seen_at }}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
            {!! $instances->links() !!}
        </div>
    </div>
</div>
@endsection
