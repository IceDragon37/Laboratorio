@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Aviso</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('nuevaAlerta') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="titulo" class="col-md-2 col-form-label text-md-right">Titulo del Aviso</label>

                            <div class="col-md-8">
                                <input id="titulo" type="titulo" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="razon" id="problema" {{ old('problema') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="problema">
                                        Problema
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="razon" id="ayuda" {{ old('ayuda') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="ayuda">
                                        Notificación de ayuda
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="razon" id="recordatorio" {{ old('recordatorio') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="recordatorio">
                                        Recordatorio
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-2 col-form-label text-md-right">Descripción</label>

                            <div class="col-md-8">
                                <textarea class="form-control" id="descripcion" rows="3"></textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Crear Nueva Notificación
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
