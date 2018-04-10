@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10">
                            <h1>Crear Usuario</h1>
                        </div>
                        <div class="col-2 ">
                            <a class="btn btn-outline-dark float-right" href="{{route('users.index')}}">Cancelar</a>
                        </div>
                    </div>
                    <hr>
                    @include('cpanel/users.fragment.info')

                    @include('cpanel/users.fragment.error')

                    <div class="row">
                        <div class="col-12">
                            {!! Form::open(['route'=>'users.store']) !!}
                            {{ csrf_field() }}

                            @include('cpanel/users.fragment.form')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection