@extends('layouts.sysinfo')
@section('content')
<div class="container">
@foreach($sites as $site)
{{-- 	<div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">{{ $site->name }}</p>
          <p class="">{{ $site->address }}</p>

        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">{{ $site->name }}</p>
          <p class="">{{ $site->address }}</p>
        </article>
      </div> --}}
  <div class="card tile is-parent is-vertical">
    <div class="card-image tile is-child notification is-primary""> 
        <p class="title">{{ $site->name }}</p>
        <p class="">{{ $site->address }}</p> 
    </div>
</div>

@endforeach


</div>
@stop