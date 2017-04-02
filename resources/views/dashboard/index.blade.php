@extends('layouts.sysinfo')
@section('content')
<div class="container">
@foreach($sites as $site)
	<div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">{{ $site->name }}</p>
          <p class="subtitle">Top tile</p>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">...tiles</p>
          <p class="subtitle">Bottom tile</p>
        </article>
      </div>

@endforeach


</div>
@stop