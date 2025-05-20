@extends('layouts.app')

@section('content')
    <table>
        <h1>Tabla de TrainingCenters</h1>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trainingCenters as $trainingCenter)
            <tr>
                <td>{{ $trainingCenter['id'] }}</td>
                <td>{{ $trainingCenter['name'] }}</td>
                <td>{{ $trainingCenter['location'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
