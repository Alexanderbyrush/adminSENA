@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de Courses</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>CourseNumber</th>
            <th>Day</th>
            <th>Area_ID</th>
            <th>TrainingCenter_ID</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['courseNumber'] }}</td>
                <td>{{ $course['day'] }}</td>
                <td>{{ $course['area_id'] }}</td>
                <td>{{ $course['training_center_id'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
