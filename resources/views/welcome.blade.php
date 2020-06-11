@extends('adminlte::page')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Modifications</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{$user->id}}.</th>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th>
                                @if (Auth::user()->id == $user->id)
                                    <a href="{{route('welcome.edit',$user->id)}}">
                                        <button class="btn bg-danger">Edit {{$user->id}}</button>
                                    </a>
                                @endif
                            </th>
                        </tr>
                    @endforeach
                    {{-- Recup donnée lors d'une authentification d'UN seul user --}}
                    {{-- <tr>
                        <td>{{Auth::user()->id}}.</td>
                        <td>{{Auth::user()->name}}</td>
                        <td>{{Auth::user()->email}}</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection