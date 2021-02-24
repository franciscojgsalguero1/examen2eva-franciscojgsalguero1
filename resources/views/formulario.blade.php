@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>@lang('Home')</h1>
    @auth
        {{ auth()->user() }}
        {{ auth()->user()->name }}
    @endauth
    <form>
    @csrf
<label>
    @lang('Bussines') <br>
    <input type="text" name="bussines" value="{{ old('bussines') }}">
</label>
<br>
<label>
    @lang('Name') <br>
    <input type="text" name="name" value="{{ old('name') }}">
</label>
<br>
<label>
    @lang('First Name') <br>
    <input name="firstname" value="{{ old( 'firstname') }}">
</label>
<br>
<label>
    @lang('Second Name') <br>
    <input name="secondname" value="{{ old( 'secondname') }}">
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
    @lang('Status') <br>
    <input name="status" value="{{ old( 'status') }}">
</label>
<br>

<label>
    @lang('Telephone') <br>
    <input name="telephone" value="{{ old( 'telephone') }}">
</label>
<br>

<label>
    @lang('email') <br>
    <input name="email" value="{{ old( 'email') }}">
</label>
<br>
<button> {{ 'Send' }}</button>
</form>
@endsection