@extends('layouts.main_layout')

@section('title', 'Сотрудники')

@section('content')
    <div class="row"><div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Руководитель</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Должность</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Дата приема на работу</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Размер ЗП</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ФИО сотрудника</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($workers as $worker)
                    @php
                        $subordinates = $worker->subordinates->sortByDesc('employment_date')->first();
                    @endphp
                    <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0">{{ $worker->id }}</td>
                        <td>{{ $worker->first_name }} {{ $worker->last_name }} {{ $worker->middle_name }}</td>
                        <td>{{ $worker->position->name }}</td>
                        <td>{{ $worker->employment_date }}</td>
                        <td>{{ $worker->position->salary }}</td>
                        <td>{{ $subordinates->first_name }} {{ $subordinates->last_name }} {{ $subordinates->middle_name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
