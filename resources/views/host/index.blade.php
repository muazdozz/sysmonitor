@extends('layouts.sysinfo') @section('content')
<div class="container">
    <h1 style="margin-top:50px;" class="title">All Hosts</h1>
    <table class="table">
        <thead>
            <tr>
                 <th>
                    <abbr>Host Site</abbr>
                </th>
                <th>
                    <abbr>Host Name</th>

                <th>
                    <abbr>Host IP</th>
                <th>
                    <abbr>OS Distro</abbr>
                </th>

                <th>
                    <abbr>Uptime</abbr>
                </th>

                <th>
                    <abbr>Status</abbr>
                </th>
                <th>
                    <abbr>Action</abbr>
                </th>
            </tr>
        </thead>
        @foreach($hosts as $host)
        <tr>
            <td style="text-transform: uppercase;">{{ $host->site->slug}}</td>
            <td>{{ $host->os_hostname}}</td>
            <td><a href="{{ route('hosts.view', [$host->id]) }}">{{ $host->ipaddress}}</a></td>
            <td>{{ $host->os_distro}}</td>
            <td>{{ $host->uptime}}</td>
            <td>{{ $host->status}}</td>
            <td>
                <p class="field">
                    <a class="button is-primary is-small">
                        <span class="icon is-small">
                          <i class="fa fa-pencil"></i>
                        </span>
                        <span>Edit</span>
                      </a>

                      <a class="button is-info is-small">
                        <span class="icon is-small">
                          <i class="fa fa-eye"></i>
                        </span>
                        <span>View</span>
                      </a>

                      <a class="button is-danger is-small">
                        <span class="icon is-small">
                          <i class="fa fa-trash"></i>
                        </span>
                        <span>Delete</span>
                      </a>
                </p>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop
