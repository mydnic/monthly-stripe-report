@extends('layout')

@section('meta-title', 'Login')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-6">
                <div class="columns is-vcentered">
                    <div class="column">
                        <h1 class="title">
                            @lang('auth.login')
                        </h1>
                    </div>
                    <div class="column has-text-right">
                        Don't have an account yet? <a href="{{ route('register') }}">Register</a>
                    </div>
                </div>
                <div class="box">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <label for="email" class="label">
                                @lang('fields.email')
                            </label>

                            <div class="control {{ $errors->has('email') ? 'has-icons-right' : '' }}">
                                <input id="email"
                                    type="email"
                                    class="input is-large {{ $errors->has('email') ? 'is-danger' : '' }}"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email"
                                    required
                                    autofocus>

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
                            <label for="password" class="label">@lang('fields.password')</label>

                            <div class="control {{ $errors->has('password') ? 'has-icons-right' : '' }}">
                                <input id="password"
                                    type="password"
                                    class="input is-large {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    name="password"
                                    placeholder="@lang('fields.password')"
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
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    @lang('auth.remember_me')
                                </label>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-large is-primary">
                                    @lang('auth.login')
                                </button>
                            </div>
                            <div class="control">
                                <a class="button is-large is-white" href="{{ route('password.request') }}">
                                    @lang('auth.forgot_password')
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
