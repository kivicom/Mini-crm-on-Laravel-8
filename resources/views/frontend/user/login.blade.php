@extends('layouts.layout')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Авторизация</div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Имя">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Пароль</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Пароль">
                            </div>

                            <div class="mb-3">
                                <div class="col-12">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">
                                            Запомнить меня
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->

                            </div>

                            <div class="mb-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                </div>
                                <!-- /.col -->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
