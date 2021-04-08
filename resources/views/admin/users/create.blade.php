@extends('admin.layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Новый пользователь</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Добавить пользователя</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <input type="text" name="name"
                                               class="form-control" id="name"
                                               placeholder="Имя">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email"
                                               class="form-control" id="email"
                                               placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Телефон</label>
                                        <input type="text" name="phone"
                                               class="form-control" id="phone"
                                               placeholder="Телефон">
                                    </div>

                                    <div class="form-group">
                                        <label for="role">Роль</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="">Выберите роль</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Пароль</label>
                                        <input type="password" name="password"
                                               class="form-control" id="password"
                                               placeholder="Пароль">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Подтвердите пароль</label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control" id="password_confirmation"
                                               placeholder="Подтвердите пароль">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection

