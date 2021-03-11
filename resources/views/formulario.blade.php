@section('title', 'Form')

<h1>@lang('Form')</h1>


    @if(session('status'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if($errors->any())
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif

<form method="POST" action="{{ route('formulario.store') }}">
    @csrf
    <label>
        @lang('Bussines') <br>
        <input type="text" name="denominacion" value="{{ old('denominacion') }}" placeholder="{{__('Bussines') }}" required>
        @if ($errors->has('denominacion'))
            <span class="error-message">{{ $errors->first('denominacion') }}</span>
        @endif
    </label>
    <br>

    <label>
        @lang('Codes') <br>
        <input name="codigos" value="{{ old( 'codigos') }}" placeholder="{{__('Codes') }}">
    </label>
    <br>

    <label for="titularidad">@lang('Titularity')</label><br>
    <select name="titularidad" id="titularidad" required>
        <option value="public" @if (old('titularidad') === 'public') selected @endif>@lang('Public')</option>
        <option value="private" @if (old('titularidad') === 'private') selected @endif>@lang('Private')</option>          
    </select><br>
    
    <label for="tipo_identificable">@lang('Identification type')</label><br>
    <select name="tipo_identificable" id="tipo_identificable" required>
        <option value="dni" @if (old('tipo_identificable') === 'dni') selected @endif>@lang('DNI')</option>
        <option value="nie" @if (old('tipo_identificable') === 'nie') selected @endif>@lang('NIE')</option>            
        <option value="passport" @if (old('tipo_identificable') === 'passport') selected @endif>@lang('PASSPORT')</option>            
        <option value="others" @if (old('tipo_identificable') === 'others') selected @endif>@lang('Others')</option>            
    </select><br>
    
    <label>
        @lang('Identification') <br>
        <input name="identificador" value="{{ old( 'identificador') }}" placeholder="{{__('Identificador') }}" required>
    </label>
    <br>
    
    <label>
        @lang('CIF') <br>
        <input name="cif" value="{{ old( 'cif') }}" placeholder="{{__('CIF') }}" required>
    </label>
    <br>
    
    <label>
        @lang('CP') <br>
        <input name="cp" value="{{ old( 'cp') }}" placeholder="{{__('CP') }}" required>
    </label>
    <br>

    <label>
        @lang('Name') <br>
        <input type="text" name="director_nom" value="{{ old('director_nom') }}" placeholder="{{__('Name') }}"  required>
        @if ($errors->has('director_nom'))
            <span class="error-message">{{ $errors->first('director_nom') }}</span>
        @endif
    </label>
    <br>
    <label>
        @lang('First Name') <br>
        <input name="director_apell1" value="{{ old( 'director_apell1') }}" placeholder="{{__('First Name') }}" required>
        @if ($errors->has('director_apell1'))
            <span class="error-message">{{ $errors->first('director_apell1') }}</span>
        @endif
    </label>
    <br>
    <label>
        @lang('Second Name') <br>
        <input name="director_apell2" value="{{ old( 'director_apell2') }}" placeholder="{{__('Second Name') }}">
        @if ($errors->has('director_apell2'))
            <span class="error-message">{{ $errors->first('director_apell2') }}</span>
        @endif
    </label>
    <br>

    <label>
        @lang('Postal Direction') <br>
        <input name="dir_postal" value="{{ old( 'dir_postal') }}" placeholder="{{__('Postal Direction') }}">
    </label>
    <br>
    <button> {{ __('Send') }}</button>
</form>