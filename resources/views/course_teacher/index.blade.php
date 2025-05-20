@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de Course_Teacher</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>Course_ID</th>
            <th>Teacher_ID</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courseTeachers as $courseTeacher)
            <tr>
                <td>{{ $courseTeacher['id'] }}</td>
                <td>{{ $courseTeacher['course_id'] }}</td>
                <td>{{ $courseTeacher['teacher_id'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
