@extends('layouts.header') 
@section('content')
<!-- Create todo section -->
<div class="row m-1 p-3">
    <div class="col col-11 mx-auto">
        <div
            class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
            @if ($errors->any())
            <div
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                role="alert">
                <strong>Whoops!</strong>
                Tem alguns problemas com seu cadastro<br>
                <br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br>
            @endif
            <hr>
            <div class="col px-1 m-1 d-flex align-items-center">
                <p
                    class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3">{{ $task->name }}</p>
                <p
                    class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3">{{ $task->description }}</p>
            </div>
            <hr>
            <form action="{{ route('edittask', ['task' => $task->id]) }}" method="POST" id="form">
                @csrf
                @method('PUT')
                <div class="col">
                    <input
                        class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded"
                        type="text"
                        name="name"
                        placeholder="Novo nome da tarefa: ">
                    <br>
                    <input
                        class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded"
                        type="text"
                        name="description"
                        placeholder="Nova descrição da tarefa: ">
                </div>
                <div class="col-auto px-0 mx-0 mr-2">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="p-2 mx-4 border-black-25 border-bottom"></div>
@endsection