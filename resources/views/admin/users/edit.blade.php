@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <br>
        <h2>Редактировать пользователя</h2>

        @include('inc.message')

        <form method="post" action="{{ route('admin.users.update', ['user' => $user]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- <div class="form-group"> --}}
            {{-- @if (isset($user->profile->last_name)) --}}
            {{-- <label for="last_name">Фамилия</label> --}}
            {{-- <input type="text" class="form-control" readonly name="last_name" id="last_name" --}}
            {{-- value="{{ $user->profile->last_name }}"> --}}
            {{-- @endif --}}
            {{-- </div> --}}
            {{-- <div class="form-group"> --}}
            {{-- @if (isset($user->profile->first_name)) --}}
            {{-- <label for="first_name">Имя</label> --}}
            {{-- <input type="text" class="form-control" readonly name="first_name" id="first_name" --}}
            {{-- value="{{ $user->profile->first_name }}"> --}}
            {{-- @endif --}}
            {{-- </div> --}}
            {{-- <div class="form-group"> --}}
            {{-- @if (isset($user->profile->father_name)) --}}
            {{-- <label for="father_name">Отчество</label> --}}
            {{-- <input type="text" class="form-control" readonly name="father_name" id="father_name" --}}
            {{-- value="{{ $user->profile->father_name }}"> --}}
            {{-- @endif --}}
            {{-- </div> --}}
            <div class="form-group">
                <label for="name">Никнейм</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label for="role">Роль</label>
                <select class="form-control" name="role" id="role">
                    <option @if ($user->role === \App\Models\User::IS_ADMIN) selected @endif value="{{ \App\Models\User::IS_ADMIN }}">Админ
                    </option>
                    <option @if ($user->role === \App\Models\User::IS_CLIENT) selected @endif value="{{ \App\Models\User::IS_CLIENT }}">
                        Клиент</option>
                    <option @if ($user->role === \App\Models\User::IS_TRAINER) selected @endif value="{{ \App\Models\User::IS_TRAINER }}">
                        Тренер</option>
                    <option @if ($user->role === \App\Models\User::IS_GYM) selected @endif value="{{ \App\Models\User::IS_GYM }}">
                        Владелец зала</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Статус</label>
                <select class="form-control" name="status" id="status">
                    <option @if ($user->status === \App\Models\User::ACTIVE) selected @endif value="{{ \App\Models\User::ACTIVE }}">Active
                    </option>
                    <option @if ($user->status === \App\Models\User::DRAFT) selected @endif value="{{ \App\Models\User::DRAFT }}">
                        Draft</option>
                    <option @if ($user->status === \App\Models\User::BLOCKED) selected @endif value="{{ \App\Models\User::BLOCKED }}">
                        Blocked</option>
                </select>
            </div>
            <div class="form-group" hidden>
                <label for="password">Пароль</label>
                <input type="password" class="form-control" name="password" id="password" value="0987654321">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>
@endsection
@push('js')
@endpush
