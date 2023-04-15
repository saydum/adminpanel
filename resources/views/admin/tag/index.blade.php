@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4>Теги</h3>
                <a href="{{ route('tag.create') }}" class="btn btn-success">Добавить</a>
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td><b>#</b> {{ $tag->name }}</td>
                            <td>
                                <form style="display: inline-block" action="{{ route('tag.destroy', $tag->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn text-danger" type="submit" onclick="alert('Подтвердите действие'); return true;">
                                        <i class="text-red fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>
@endsection
