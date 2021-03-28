@extends('layout')

@section('title', 'Form')

@section('content')

    <h1> @lang('Form') </h1>
    
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif
    
    <form method="GET" action="{{ route('formulario.store') }}">
        @csrf
        <label for="bussines">@lang('Bussines')</label><br>
        <input name="bussines" placeholder=@lang('Bussines...') value="{{old('bussines')}}" required><br>
        {!! $errors->first('bussines', '<small>:message</small><br>') !!}
        <label for="typedocument">@lang('Document type')</label><br>
        <select name="typedocument" id="typedocument" required>
            <option value="dni" @if (old('typedocument') === 'dni') selected @endif>@lang('DNI')</option>
            <option value="nie" @if (old('typedocument') === 'nie') selected @endif>@lang('NIE')</option>            
            <option value="passport" @if (old('typedocument') === 'passport') selected @endif>@lang('PASSPORT')</option>            
            <option value="others" @if (old('typedocument') === 'others') selected @endif>@lang('Others')</option>            
        </select>
        {!! $errors->first('typedocument', '<small>:message</small><br>') !!}
        <input name="identity" placeholder=@lang('Identity document...') value="{{old('identity')}}" required><br>
        {!! $errors->first('identity', '<small>:message</small><br>') !!}
        <label for="name">@lang('Name')</label><br>
        <input name="name" placeholder=@lang("Name...") value="{{old('name')}}" required><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <label for="firstname">@lang('First Name')</label><br>
        <input name="firstname" placeholder=@lang('First Name...') value="{{old('firstname')}}" required><br>
        {!! $errors->first('firstname', '<small>:message</small><br>') !!}
        <label for="secondname">@lang('Second Name')</label><br>
        <input name="secondname" placeholder=@lang("Second Name...") value="{{old('secondname')}}"><br>
        {!! $errors->first('secondname', '<small>:message</small><br>') !!}
        <label for="country" id="countrylabel">@lang('Country of identity')</label><br>
        <select name="country" id="country" required>
            <option value="spain" @if (old('country') === 'spain') selected @endif>@lang('Spain')</option>
            <option value="italy" @if (old('country') === 'italy') selected @endif>@lang('Italy') </option>
        </select><br>
        {!! $errors->first('country', '<small>:message</small><br>') !!}
        <label for="province">@lang('Province')</label><br>
        <input name="province" placeholder=@lang("Province...") value="{{old('province')}}"><br>
        {!! $errors->first('province', '<small>:message</small><br>') !!}
        <label for="municipality">@lang('Municipality')</label><br>
        <input name="municipality" placeholder=@lang("Municipality...") value="{{old('municipality')}}"><br>
        {!! $errors->first('municipality', '<small>:message</small><br>') !!}
        <label for="state">@lang('State')</label><br>
        <select name="state" id="state" required>
            <option value="active" @if (old('state') === 'active') selected @endif>@lang('Tutor active')</option>
            <option value="notactive" @if (old('state') === 'notactive') selected @endif>@lang('Tutor not active')</option>            
        </select><br>
        {!! $errors->first('state', '<small>:message</small><br>') !!}
        <label for="telephone">@lang('Telephone')</label><br>
        <input type="tel" name="telephone" placeholder="Telefono..." value="{{old('telephone')}}" required><br>
        {!! $errors->first('telephone', '<small>:message</small><br>') !!}
        <label for="email">@lang('Email')</label><br>
        <input type="email" name="email" placeholder=@lang("Email...") value="{{old('email')}}" required><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <button> @lang('Send')</button>
    </form>

@endsection