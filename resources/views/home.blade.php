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
                    <div class="col-lg-4">
                        <form role="search" class="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="card-body">
                {{-- @livewire('student-crud') --}}
                @livewire('student_create')
                @livewire('student_update')
                @livewire('students')

            </div>
        </div>
    </div>
@endsection
