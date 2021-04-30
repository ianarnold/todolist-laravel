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
            <form action="{{route('storetask')}}" method="POST" id="form">
                @csrf
                <div class="col">
                    <input
                        class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded"
                        type="text"
                        name="name"
                        placeholder="Nome da tarefa: ">
                    <br>
                    <input
                        class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded"
                        type="text"
                        name="description"
                        placeholder="Descrição da tarefa: ">
                </div>
                <div class="col-auto px-0 mx-0 mr-2">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="p-2 mx-4 border-black-25 border-bottom"></div>
<!-- View options section -->
<div class="row m-1 p-3 px-5 justify-content-end">
    <div class="col-auto d-flex align-items-center">
        <label class="text-secondary my-2 pr-2 view-opt-label">Filter</label>
        <select class="custom-select custom-select-sm btn my-2">
            <option value="all" selected="selected">All</option>
            <option value="completed">Completed</option>
            <option value="active">Active</option>
            <option value="has-due-date">Has due date</option>
        </select>
    </div>
    <div class="col-auto d-flex align-items-center px-1 pr-3">
        <label class="text-secondary my-2 pr-2 view-opt-label">Sort</label>
        <select class="custom-select custom-select-sm btn my-2">
            <option value="added-date-asc" selected="selected">Added date</option>
            <option value="due-date-desc">Due date</option>
        </select>
        <i
            class="fa fa fa-sort-amount-asc text-info btn mx-0 px-0 pl-1"
            data-toggle="tooltip"
            data-placement="bottom"
            title="Ascending"></i>
        <i
            class="fa fa fa-sort-amount-desc text-info btn mx-0 px-0 pl-1 d-none"
            data-toggle="tooltip"
            data-placement="bottom"
            title="Descending"></i>
    </div>
</div>
<!-- Todo list section -->
<div class="row mx-1 px-5 pb-3 w-80">
    <div class="col mx-auto">
        <!-- Todo Item 1 -->
        @foreach ($tasks as $task)
        <div class="row px-3 align-items-center todo-item rounded">
            <div class="col px-1 m-1 d-flex align-items-center">
                <p
                    class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3">{{ $task->name }}</p>
                <p
                    class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3">{{ $task->description }}</p>
            </div>
            <div class="col-auto m-1 p-0 todo-actions">
                <div class="row d-flex align-items-center justify-content-end">
                    <h5 class="m-0 p-0 px-2">
                        <a href="{{ route('edittaskview', ['task' => $task->id]) }}">
                            <i
                                class="fa fa-pencil text-info btn m-0 p-0"
                                data-toggle="tooltip"
                                data-placement="bottom"
                                title="Edit todo">EDITAR</i>
                            <a></h5>
                            <h5 class="m-0 p-0 px-2">
                                <a href="{{ route('deletetask', ['task' => $task->id]) }}">
                                    <i
                                        class="fa fa-trash-o text-danger btn m-0 p-0"
                                        data-toggle="tooltip"
                                        data-placement="bottom"
                                        title="Delete todo">APAGAR</i>
                                    <a></h5>
                                </div>
                                <div class="row todo-created-info">
                                    <div class="col-auto d-flex align-items-center pr-2">
                                        <i
                                            class="fa fa-info-circle my-2 px-2 text-black-50 btn"
                                            data-toggle="tooltip"
                                            data-placement="bottom"
                                            title=""
                                            data-original-title="Created date"></i>
                                        <label class="date-label my-2 text-black-50">{{ $task->created_at }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        {{$tasks->links()}}
                    </div>
@endsection