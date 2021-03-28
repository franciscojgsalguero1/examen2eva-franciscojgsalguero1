@section('title', 'Form')

<h1>@lang('Form')</h1>

    @if($errors->any())
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif

<form method="POST" action="{{ route('formulario.store') }}">
    @csrf
    <label for="bussines">@lang('Bussines')</label><br>
    <input type="text" name="denominacion" value="{{ old('denominacion') }}" placeholder="{{__('Bussines') }}" required>
    @if ($errors->has('denominacion'))
        <span class="error-message">{{ $errors->first('denominacion') }}</span>
    @endif
    <br>

    <label for="codigo">@lang('Code')</label><br>
    <input name="codigo" value="{{ old( 'codigos') }}" placeholder="{{__('Codes') }}">
    @if ($errors->has('codigo'))
        <span class="error-message">{{ $errors->first('codigo') }}</span>
    @endif
    <br>

    <label for="titularidad">@lang('Titularity')</label><br>
    <select name="titularidad" id="titularidad" required>
        <option value="public" @if (old('titularidad') === 'public') selected @endif>@lang('Public')</option>
        <option value="private" @if (old('titularidad') === 'private') selected @endif>@lang('Private')</option>          
    </select>
    @if ($errors->has('titularidad'))
        <span class="error-message">{{ $errors->first('titularidad') }}</span>
    @endif
    <br>
    
    <label for="tipo_identificable">@lang('Identification type')</label><br>
    <select name="tipo_identificable" id="tipo_identificable" required>
        <option value="dni" @if (old('tipo_identificable') === 'dni') selected @endif>@lang('DNI')</option>
        <option value="nie" @if (old('tipo_identificable') === 'nie') selected @endif>@lang('NIE')</option>            
        <option value="passport" @if (old('tipo_identificable') === 'passport') selected @endif>@lang('PASSPORT')</option>            
        <option value="others" @if (old('tipo_identificable') === 'others') selected @endif>@lang('Others')</option>            
    </select>
    @if ($errors->has('tipo_identificable'))
        <span class="error-message">{{ $errors->first('tipo_identificable') }}</span>
    @endif
    <br>
    
    <label for="identificable">@lang('Identification')</label><br>
    <input name="identificable" value="{{ old( 'identificable') }}" placeholder="{{__('Identification') }}" required>
    @if ($errors->has('identificable'))
        <span class="error-message">{{ $errors->first('') }}</span>
    @endif
    <br>

    <label for="director_nom">@lang('Name')</label><br>
    <input type="text" name="director_nom" value="{{ old('director_nom') }}" placeholder="{{__('Name') }}"  required>
    @if ($errors->has('director_nom'))
        <span class="error-message">{{ $errors->first('director_nom') }}</span>
    @endif
    <br>
    <label for="director_apell1">@lang('First Name')</label><br>
    <input name="director_apell1" value="{{ old( 'director_apell1') }}" placeholder="{{__('First Name') }}" required>
    @if ($errors->has('director_apell1'))
        <span class="error-message">{{ $errors->first('director_apell1') }}</span>
    @endif
    <br>
    <label for="director_apell2">@lang('Second Name')</label><br>
    <input name="director_apell2" value="{{ old( 'director_apell2') }}" placeholder="{{__('Second Name') }}">
    @if ($errors->has('director_apell2'))
        <span class="error-message">{{ $errors->first('director_apell2') }}</span>
    @endif
    <br>

    <label for="dir_postal">@lang('Postal Direction')</label><br>
        <input name="dir_postal" value="{{ old( 'dir_postal') }}" placeholder="{{__('Postal Direction') }}">
    <br>
    <button> {{ __('Send') }}</button>
</form>