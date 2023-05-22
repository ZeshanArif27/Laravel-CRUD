@extends('layouts.app')
@section('content')
    @php
        $editStudents = false;
    @endphp
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="container-fluid">
                    <div class="col-lg-8">
                        <a class="navbar-brand">Navbar</a>
                    </div>


                </div>
            </div>
            <div class="card-body">
                @livewire('student-crud')

            </div>
        </div>
    </div>
@endsection
