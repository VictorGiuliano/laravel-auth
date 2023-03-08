@extends('layouts.app')
@section('title','Create')

@section('content')
<h2 class="pt-4">New Project</h2>
<div class="form-create mt-5 bg-light p-5 rounded-3">
    <form method="POST" action="{{ route('admin.projects.store') }}">
        @csrf
        <div class="row">
            
            {{-- Titolo --}}
            <div class="col-6">
                <div class="mb-3 ">
                    <label for="title" class="form-label d-block">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo"
                        name="title" required>
                </div>
            </div>
            {{-- Image --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="img" class="form-label">Image:</label>
                    <input type="url" class="form-control" id="image"
                        placeholder="Inserisci url image" name="image">
                </div>
            </div>
            {{-- Link github --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="github" class="form-label">Link Project:</label>
                    <input type="url" class="form-control" id="github"
                        placeholder="Inserisci url github" name="github">
                </div>
            </div>
            {{-- Slug --}}
            <div class="col-4">
                <div class="mb-3">
                    <label for="github" class="form-label">Slug:</label>
                    <input type="text" class="form-control" id="slug"
                        placeholder="Inserisci slug" name="slug" >
                </div>
            </div>
            {{-- Description --}}
            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" class="form-control" id="description"
                        placeholder="Inserisci descrizione" name="description"></textarea>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end p-5">
            <button type="submit" class="btn px-5 border-white btn-primary">Salva</button>
        </div>

        <a href="{{ route('admin.home') }}" class="btn mx-1 small btn-secondary">Indietro</a>
    </form>
</div>
@endsection