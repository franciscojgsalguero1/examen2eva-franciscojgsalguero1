@extends('layout')

@section('title', 'Form')

@section('content')
    <h1>@lang('Form')</h1>
    @auth
        {{ auth()->user() }}
        {{ auth()->user()->name }}
    @endauth
    
        @if($errors->any())
        @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
    @endif

    <form>
        @csrf
        <label>
            @lang('Bussines') <br>
            <input type="text" name="bussines" value="{{ old('bussines') }}" required>
            @if ($errors->has('bussines'))
                <span class="error-message">{{ $errors->first('bussines') }}</span>
            @endif
        </label>
        <br>
        <label>
            @lang('Name') <br>
            <input type="text" name="name" value="{{ old('name') }}"  required>
            @if ($errors->has('name'))
                <span class="error-message">{{ $errors->first('name') }}</span>
            @endif
        </label>
        <br>
        <label>
            @lang('First Name') <br>
            <input name="firstname" value="{{ old( 'firstname') }}"  required>
            @if ($errors->has('firstname'))
                <span class="error-message">{{ $errors->first('firstname') }}</span>
            @endif
        </label>
        <br>
        <label>
            @lang('Second Name') <br>
            <input name="secondname" value="{{ old( 'secondname') }}"  required>
            @if ($errors->has('secondname'))
                <span class="error-message">{{ $errors->first('secondname') }}</span>
            @endif
        </label>
        <br>

        <label>
            @lang('Country') <br>
            <input name="country" value="{{ old( 'country') }}">
        </label>
        <br>

        <label>
            @lang('Municipi') <br>
            <input name="municipi" value="{{ old( 'municipi') }}">
        </label>
        <br>

        <label>
            @lang('province') <br>
            <input name="province" value="{{ old( 'province') }}">
        </label>
        <br>

        <label>
            @lang('Status') <br>
            <input name="status" value="{{ old( 'status') }}"  required>
            @if ($errors->has('status'))
                <span class="error-message">{{ $errors->first('status') }}</span>
            @endif
        </label>
        <br>

        <label>
            @lang('Telephone') <br>
            <input name="telephone" value="{{ old( 'telephone') }}" required>
            @if ($errors->has('telephone'))
                <span class="error-message">{{ $errors->first('telephone') }}</span>
            @endif
        </label>
        <br>

        <label>
            @lang('email') <br>
            <input name="email" value="{{ old( 'email') }}" required>
            @if ($errors->has('email'))
                <span class="error-message">{{ $errors->first('email') }}</span>
            @endif
        </label>
        <br>
        <button> {{ 'Send' }}</button>
    </form>
@endsection