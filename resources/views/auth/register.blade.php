@extends('layouts.app')
@section('titleLogin', 'Formulario de Registro')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: pink;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4>Datos del usuario</h4>
                        <hr>
                        
                        <div class="form-group row">
                            <label for="sistema" class="col-md-4 col-form-label text-md-right">{{ __('Sistema') }}</label>

                            <div class="col-md-6">
                                <select name="sistema" id="sistema" class="form-control {{ $errors->has('sistema') ? ' is-invalid' : '' }}" value="{{ old('sistema') }}" required autofocus>
                                    <option selected disabled>Seleccione el tipo de sistema</option>
                                    <option value="CAMA">CAMA</option>
                                </select>

                                @if ($errors->has('sistema'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sistema') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipoPerfil" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>

                            <div class="col-md-6">
                                <select name="role" id="tipoPerfil" class="form-control {{ $errors->has('tipoPerfil') ? ' is-invalid' : '' }}" value="{{ old('tipoPerfil') }}" required autofocus>
                                    <option selected disabled>Seleccione el tipo de perfil</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                    
                                </select>

                                @if ($errors->has('tipoPerfil'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipoPerfil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institucion" class="col-md-4 col-form-label text-md-right">{{ __('Institución') }}</label>

                            <div class="col-md-6">
                                <select name="institucion" id="institucion" class="form-control {{ $errors->has('institucion') ? ' is-invalid' : '' }}" value="{{ old('institucion') }}" required autofocus>
                                    <option selected disabled>Seleccione la institución a la que pertenece</option>
                                    @foreach ($instituciones as $inst)
                                        <option value="{{$inst->nombre_institucion}}">{{$inst->nombre_institucion}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('institucion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institucion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        


                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Entidad') }}</label>

                            <div class="col-md-6">
                                <select name="entidad" id="entidad" class="form-control {{ $errors->has('entidad') ? ' is-invalid' : '' }}" value="{{ old('entidad') }}" required autofocus>
                                    <option value="0" selected="true" disabled>Seleccione una opción</option>
                                    @foreach ($estados as $key => $value)
                                        <option value="{{$value->id}}">{{$value->nombre_estado}}</option>
                                    @endforeach
                                    
                                </select>

                                @if ($errors->has('entidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('entidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurisdiccion" class="col-md-4 col-form-label text-md-right">{{ __('Jurisdiccion') }}</label>

                            <div class="col-md-6">
                                <select name="jurisdiccion" id="jurisdiccion" class="form-control {{ $errors->has('jurisdiccion') ? ' is-invalid' : '' }}" value="{{ old('jurisdiccion') }}" required autofocus>
                                    <option value="0" selected="true" disabled>Seleccione una jurisdicción</option>
                                </select>

                                @if ($errors->has('jurisdiccion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurisdiccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="municipio" class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>

                            <div class="col-md-6">
                                <select name="municipio" id="municipio" class="form-control {{ $errors->has('municipio') ? ' is-invalid' : '' }}" value="{{ old('municipio') }}" required autofocus>
                                    <option value="0" selected="true" disabled>Seleccione un municipio</option>
                                </select>

                                @if ($errors->has('municipio'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('municipio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="localidad" class="col-md-4 col-form-label text-md-right">{{ __('Localidad') }}</label>

                            <div class="col-md-6">
                                <select name="localidad" id="localidad" class="form-control {{ $errors->has('localidad') ? ' is-invalid' : '' }}" value="{{ old('localidad') }}" required autofocus>
                                    <option value="0" selected="true" disabled>Seleccione una localidad</option>
                                </select>

                                @if ($errors->has('localidad'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('localidad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unidadMedica" class="col-md-4 col-form-label text-md-right">{{ __('Unidad Médica') }}</label>

                            <div class="col-md-6">
                                <select name="unidadMedica" id="unidadMedica" class="form-control {{ $errors->has('unidadMedica') ? ' is-invalid' : '' }}" value="{{ old('unidadMedica') }}" required autofocus>
                                    <option value="0" selected="true" disabled>Seleccione una unidad médica</option>
                                </select>

                                @if ($errors->has('unidadMedica'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('unidadMedica') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <h4>Datos de registro</h4>
                        <hr>



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:pink; border:none;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('registro-js')
    <script src="{{asset('js/registro.js')}}"></script>
@endsection
