@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Pagina con Dropdown</h1>

        <!-- Dropdown di Bootstrap -->
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Seleziona un'opzione
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Opzione 1</a>
                <a class="dropdown-item" href="#">Opzione 2</a>
                <a class="dropdown-item" href="#">Opzione 3</a>
            </div>
            <div class="alert alert-primary" role="alert">
                This is a primary alert—check it out!
            </div>
            <div class="alert alert-secondary" role="alert">
                This is a secondary alert—check it out!
            </div>
            <div class="alert alert-success" role="alert">
                This is a success alert—check it out!
            </div>
            <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
            </div>
            <div class="alert alert-warning" role="alert">
                This is a warning alert—check it out!
            </div>
            <div class="alert alert-info" role="alert">
                This is a info alert—check it out!
            </div>
            <div class="alert alert-light" role="alert">
                This is a light alert—check it out!
            </div>
            <div class="alert alert-dark" role="alert">
                This is a dark alert—check it out!
            </div>
        </div>
    </div>
@endsection
