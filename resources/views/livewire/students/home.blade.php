@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <nav class="navbar ">
                <div class="container-fluid">
                    <a class="navbar-brand">Navbar</a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <div class="container"></div>
                    </form>
                </div>
            </nav> --}}

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

            </div>
        </div>
    </div>
@endsection
