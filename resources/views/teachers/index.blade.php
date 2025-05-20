@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de Teachers</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Area_ID</th>
            <th>TrainingCenter_ID</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher['id'] }}</td>
                <td>{{ $teacher['name'] }}</td>
                <td>{{ $teacher['area_id'] }}</td>
                <td>{{ $teacher['training_center_id'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

