@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-dark">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="name" autofocus>

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">DNI</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Domicilio</label>

                            <div class="col-md-6">
                                <input id="domicilio" type="domicilio" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autocomplete="email">

                                @error('domicilio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="localidad" class="col-md-4 col-form-label text-md-right">Localidad</label>
                            <div class="col-md-6">
                                <select id="localidad" name='localidad' class="form-control" value="{{old('localidad')}}" selected="{{old('localidad')}}">
                                    <option @if(old('localidad') == '') selected @endif value=''></option>
                                    <option @if(old('localidad') == "28 de Julio") selected @endif value='28 de Julio'>28 de Julio</option>
                                    <option @if(old('localidad') == 'Aldea Beleiro') selected @endif value='Aldea Beleiro'>Aldea Beleiro</option>
                                    <option @if(old('localidad') == 'Aldea Epulef') selected @endif value='Aldea Epulef'>Aldea Epulef</option>
                                    <option @if(old('localidad') == 'Aldea Apeleg') selected @endif  value='Aldea Apeleg'>Aldea Apeleg</option>
                                    <option @if(old('localidad') == 'Aldea Escolar (Losrápidos)') selected @endif  value='Aldea Escolar (Losrápidos)'>Aldea Escolar (Losrápidos)</option>
                                    <option @if(old('localidad') == 'Alto Río Senguer') selected @endif  value='Alto Río Senguer'>Alto Río Senguer</option>
                                    <option @if(old('localidad') == 'Arroyo Verde') selected @endif  value='Arroyo Verde'>Arroyo Verde</option>
                                    <option @if(old('localidad') == 'Astra') selected @endif  value='Astra'>Astra</option>
                                    <option @if(old('localidad') == 'Bahía Bustamante') selected @endif  value='Bahía Bustamante'>Bahía Bustamante</option>
                                    <option @if(old('localidad') == 'Blancuntre') selected @endif  value='Blancuntre'>Blancuntre</option>
                                    <option @if(old('localidad') == 'Buenos Aires Chico') selected @endif  value='Buenos Aires Chico'>Buenos Aires Chico</option>
                                    <option @if(old('localidad') == 'Buen Pasto') selected @endif  value='Buen Pasto'>Buen Pasto</option>
                                    <option @if(old('localidad') == 'Camarones') selected @endif  value='Camarones'>Camarones</option>
                                    <option @if(old('localidad') == 'Carrenleufú') selected @endif  value='Carrenleufú'>Carrenleufú</option>
                                    <option @if(old('localidad') == 'Cerro Cóndor') selected @endif  value='Cerro Cóndor'>Cerro Cóndor</option>
                                    <option @if(old('localidad') == 'Cholila') selected @endif  value='Cholila'>Cholila</option>
                                    <option @if(old('localidad') == 'Colan Conhué') selected @endif  value='Colan Conhué'>Colan Conhué</option>
                                    <option @if(old('localidad') == 'Comodoro Rivadavia') selected @endif  value='Comodoro Rivadavia'>Comodoro Rivadavia</option>
                                    <option @if(old('localidad') == 'Corcovado') selected @endif  value='Corcovado'>Corcovado</option>
                                    <option @if(old('localidad') == 'Costa del Chubut') selected @endif  value='Costa del Chubut'>Costa del Chubut</option>
                                    <option @if(old('localidad') == 'Cushamen Centro') selected @endif  value='Cushamen Centro'>Cushamen Centro</option>
                                    <option @if(old('localidad') == 'Diadema Argentina') selected @endif  value='Diadema Argentina'>Diadema Argentina</option>
                                    <option @if(old('localidad') == 'Dique Florentino Ameghino') selected @endif  value='Dique Florentino Ameghino'>Dique Florentino Ameghino</option>
                                    <option @if(old('localidad') == 'Doctor Oscar Atilio Viglione (Frontera de Río Pico)') selected @endif  value='Doctor Oscar Atilio Viglione (Frontera de Río Pico)'>Doctor Oscar Atilio Viglione (Frontera de Río Pico)</option>
                                    <option @if(old('localidad') == 'Doctor Ricardo Rojas') selected @endif  value='Doctor Ricardo Rojas'>Doctor Ricardo Rojas</option>
                                    <option @if(old('localidad') == 'Dolavon') selected @endif  value='Dolavon'>Dolavon</option>
                                    <option @if(old('localidad') == 'El Escorial') selected @endif  value='El Escorial'>El Escorial</option>
                                    <option @if(old('localidad') == 'El Hoyo') selected @endif  value='El Hoyo'>El Hoyo</option>
                                    <option @if(old('localidad') == 'El Maitén') selected @endif  value='El Maitén'>El Maitén</option>
                                    <option @if(old('localidad') == 'El Mirasol') selected @endif  value='El Mirasol'>El Mirasol</option>
                                    <option @if(old('localidad') == 'Epuyén') selected @endif  value='Epuyén'>Epuyén</option>
                                    <option @if(old('localidad') == 'Esquel') selected @endif  value='Esquel'>Esquel</option>
                                    <option @if(old('localidad') == 'Facundo') selected @endif  value='Facundo'>Facundo</option>
                                    <option @if(old('localidad') == 'Fofo Cahuel') selected @endif  value='Fofo Cahuel'>Fofo Cahuel</option>
                                    <option @if(old('localidad') == 'Gaiman') selected @endif  value='Gaiman'>Gaiman</option>
                                    <option @if(old('localidad') == 'Gan Gan') selected @endif  value='Gan Gan'>Gan Gan</option>
                                    <option @if(old('localidad') == 'Garayalde') selected @endif  value='Garayalde'>Garayalde</option>
                                    <option @if(old('localidad') == 'Gastre') selected @endif  value='Gastre'>Gastre</option>
                                    <option @if(old('localidad') == 'Gobernador Costa') selected @endif  value='Gobernador Costa'>Gobernador Costa</option>
                                    <option @if(old('localidad') == 'Gualjaina') selected @endif  value='Gualjaina'>Gualjaina</option>
                                    <option @if(old('localidad') == 'José de San Martín') selected @endif  value='José de San Martín'>José de San Martín</option>
                                    <option @if(old('localidad') == 'Lago Blanco') selected @endif  value='Lago Blanco'>Lago Blanco</option>
                                    <option @if(old('localidad') == 'Lago Epuyén') selected @endif  value='Lago Epuyén'>Lago Epuyén</option>
                                    <option @if(old('localidad') == 'Lago Puelo') selected @endif  value='Lago Puelo'>Lago Puelo</option>
                                    <option @if(old('localidad') == 'Lago Rosario') selected @endif  value='Lago Rosario'>Lago Rosario</option>
                                    <option @if(old('localidad') == 'Lagunita Salada') selected @endif  value='Lagunita Salada'>Lagunita Salada</option>
                                    <option @if(old('localidad') == 'Las Plumas') selected @endif  value='Las Plumas'>Las Plumas</option>
                                    <option @if(old('localidad') == 'Leleque') selected @endif  value='Leleque'>Leleque</option>
                                    <option @if(old('localidad') == 'Los Altares') selected @endif  value='Los Altares'>Los Altares</option>
                                    <option @if(old('localidad') == 'Los Cipreses') selected @endif  value='Los Cipreses'>Los Cipreses</option>
                                    <option @if(old('localidad') == 'Paso de Indios') selected @endif  value='Paso de Indios'>Paso de Indios</option>
                                    <option @if(old('localidad') == 'Paso del Sapo') selected @endif  value='Paso del Sapo'>Paso del Sapo</option>
                                    <option @if(old('localidad') == 'Playa Magagna') selected @endif  value='Playa Magagna'>Playa Magagna</option>
                                    <option @if(old('localidad') == 'Playa Unión') selected @endif  value='Playa Unión'>Playa Unión</option>
                                    <option @if(old('localidad') == 'Puerto Madryn') selected @endif  value='Puerto Madryn'>Puerto Madryn</option>
                                    <option @if(old('localidad') == 'Puerto Pirámides') selected @endif  value='Puerto Pirámides'>Puerto Pirámides</option>
                                    <option @if(old('localidad') == 'Quinta El Mirador') selected @endif  value='Quinta El Mirador'>Quinta El Mirador</option>
                                    <option @if(old('localidad') == 'Rada Tilly') selected @endif  value='Rada Tilly'>Rada Tilly</option>
                                    <option @if(old('localidad') == 'Rawson') selected @endif  value='Rawson'>Rawson</option>
                                    <option @if(old('localidad') == 'Reserva Area Protegida El Doradillo') selected @endif  value='Reserva Area Protegida El Doradillo'>Reserva Area Protegida El Doradillo</option>
                                    <option @if(old('localidad') == 'Río Mayo') selected @endif  value='Río Mayo'>Río Mayo</option>
                                    <option @if(old('localidad') == 'Río Pico') selected @endif  value='Río Pico'>Río Pico</option>
                                    <option @if(old('localidad') == 'Sarmiento') selected @endif  value='Sarmiento'>Sarmiento</option>
                                    <option @if(old('localidad') == 'Tecka') selected @endif  value='Tecka'>Tecka</option>
                                    <option @if(old('localidad') == 'Telsen') selected @endif  value='Telsen'>Telsen</option>
                                    <option @if(old('localidad') == 'Trelew') selected @endif  value='Trelew'>Trelew</option>
                                    <option @if(old('localidad') == 'Trevelin') selected @endif  value='Trevelin'>Trevelin</option>
                                    <option @if(old('localidad') == 'Villa Futalaufquen') selected @endif  value='Villa Futalaufquen'>Villa Futalaufquen</option>
                                    <option @if(old('localidad') == 'Yala Laubat') selected @endif  value='Yala Laubat'>Yala Laubat</option>
                            
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Emision CLU</label>

                            <div class="col-md-6">
                                <input id="emision_clu" type="date" class="form-control @error('password') is-invalid @enderror"  value="{{ old('emision_clu') }}" name="emision_clu" required autocomplete="new-password">

                                @error('emision_clu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Vencimiento CLU</label>

                            <div class="col-md-6">
                                <input id="vencimiento_clu" type="date" class="form-control @error('vencimiento_clu') is-invalid @enderror" name="vencimiento_clu" value="{{ old('vencimiento_clu') }}" required autocomplete="new-password">

                                @error('vencimiento_clu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
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