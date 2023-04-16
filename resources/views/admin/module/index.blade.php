@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Модули</h3>
                        <a href="{{ route('tag.create') }}" class="btn btn-success">Добавить</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach (Module::all() as $module)
                                <tr>
                                    <td>{{ $module->getName() }}</td>
                                    <td>
                                        <a class="collapse-item" href="/{{ strtolower($module->getName()) }}/">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
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
