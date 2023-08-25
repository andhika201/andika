@extends('layout.main')

@section('container')

  <body>

    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Filter</span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    Jenis kelamin
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="dropdown-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Men
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Woman
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Kids
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Unisex
                            </label>
                        </li>
                    </ul>         
                </li>
                <hr>
                <li class="nav-item">
                    Brand
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="dropdown-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Adidas
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Nike
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Sneaker
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Puma
                            </label>
                        </li>
                    </ul>         
                </li>
                <hr>
                <li class="nav-item">
                    Sepatu
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="dropdown-item">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Soccer
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Basketball
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Casual
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                Work
                            </label>
                        </li>
                    </ul>         
                </li>
            
            </ul>
            {{-- <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            </div> --}}
        </div>

    </main>
@endsection