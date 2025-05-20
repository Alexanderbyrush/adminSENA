@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de Computers</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Cell number</th>
            <th>Course_ID</th>
            <th>Computer_ID</th>
        </tr>
        </thead>
        <tbody>
        @foreach($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice['id'] }}</td>
                <td>{{ $apprentice['name'] }}</td>
                <td>{{ $apprentice['email'] }}</td>
                <td>{{ $apprentice['cellnumber'] }}</td>
                <td>{{ $apprentice['course_id'] }}</td>
                <td>{{ $apprentice['computer_id'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
