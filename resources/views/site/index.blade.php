@extends('layouts.sysinfo') @section('content')
<div class="container">
    <h1 style="margin-top:50px;" class="title">All Sites</h1>
    <table class="table">
        <thead>
            <tr>

               <th>
                    <abbr>Site Name</abbr>
                </th>

                <th>
                    <abbr>Address</abbr>
                </th>
                <th>
                    <abbr>Email</abbr>
                </th>
                <th>
                    <abbr>Action</abbr>
                </th>
            </tr>
        </thead>
        @foreach($sites as $site)
        <tr>
            <td>{{ $site->name}}</td>
            <td>{{ $site->address}}</td>
            <td>{{ $site->email}}</td>
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
