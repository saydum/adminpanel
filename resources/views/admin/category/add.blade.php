@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card ">
            <div class="card-header">
                <h3 class="card-title">Добавить Категорию</h3>
            </div>


            <form action="{{ route('category.store') }}" method="POST">

                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label>Название</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Добавить</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection
