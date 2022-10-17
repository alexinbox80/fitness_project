@extends('layouts.admin')
@section('content')
    <div class="offset-2 col-8">
        <h2>Добавление новости</h2>

        @include('inc.message')

        <form method="post" action="{{ route('account.profiles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">Имя</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
                @error('first_name') <span style="color: red">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
                @error('last_name') <span style="color: red">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="father_name">Отчество</label>
                <input type="text" class="form-control" name="father_name" id="father_name" value="{{ old('father_name') }}">
                @error('father_name') <span style="color: red">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="author">Автор</label>
                <input type="number" class="form-control" name="author" id="author" value="{{ old('author') }}">
                @error('author') <span style="color: red">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="author">Пол</label>
                <input type="text" class="form-control" name="gender" id="gender" value="{{ old('gender') }}">
                @error('gender') <span style="color: red">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="image">Изображение</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ), {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            })
            .catch( error => {
                console.log( error );
            });
    </script>
@endpush
