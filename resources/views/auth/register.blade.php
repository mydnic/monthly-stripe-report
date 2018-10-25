@extends('layout')

@section('meta-title', 'Register')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-6">
                <div class="columns is-vcentered">
                    <div class="column">
                        <h1 class="title">
                            @lang('auth.register')
                        </h1>
                    </div>
                    <div class="column has-text-right">
                        Already have an account ? <a href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
                <div class="box">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="field">
                            <label class="label" for="name">
                                @lang('fields.name')
                            </label>

                            <div class="control {{ $errors->has('name') ? 'has-icons-right' : '' }}">
                                <input id="name"
                                    type="text"
                                    class="input is-large {{ $errors->has('name') ? 'is-danger' : '' }}"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="John Doe"
                                    required
                                    autofocus>

                                @if ($errors->has('name'))
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="help is-danger">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="email">@lang('fields.email')</label>

                            <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                <input id="email"
                                    type="email"
                                    class="input is-large {{ $errors->has('email') ? 'is-danger' : '' }}"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="webmaster@radio.fm"
                                    required>

                                @if ($errors->has('email'))
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="help is-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="password">
                                @lang('fields.password')
                            </label>

                            <div class="control {{ $errors->has('password') ? 'has-icons-right' : '' }}">
                                <input id="password"
                                    type="password"
                                    class="input is-large {{ $errors->has('password') ? 'is-danger' : '' }}"
                                    name="password"
                                    placeholder="●●●●●●●"
                                    required>

                                @if ($errors->has('password'))
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="help is-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="password-confirm">
                                Confirm Password
                            </label>

                            <div class="control">
                                <input id="password-confirm"
                                    type="password"
                                    class="input is-large"
                                    name="password_confirmation"
                                    placeholder="●●●●●●●"
                                    required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-primary is-large">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
