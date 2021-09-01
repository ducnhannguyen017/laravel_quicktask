@extends('main') 

@section('main')

<div id="login">
    <h3 class="text-center text-white pt-5">Login</h3>
    <div class="container">
        <div
            id="login-row"
            class="row justify-content-center align-items-center"
        >
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form
                        id="login-form"
                        class="form"
                        method="post"
                        action="/login"
                    >
                        @csrf
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info"
                                >Username:</label
                            ><br />
                            <input
                                type="text"
                                name="username"
                                id="username"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info"
                                >Password:</label
                            ><br />
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                            />
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info">
                                <span>Rememberme</span>
                                <span>
                                    <input
                                        id="rememberme"
                                        name="rememberme"
                                        type="checkbox"
                                    />
                                </span>
                            </label>
                            <br />
                        </div>
                        <div class="form-group">
                            <input
                                type="submit"
                                name="submit"
                                class="btn btn-info btn-md"
                                value="Login"
                            />
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
