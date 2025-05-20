@extends('layouts.app')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        thead {
            background-color: #2c7be5;
            color: white;
        }
        thead th {
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
        }
        tbody tr {
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }
        tbody tr:hover {
            background-color: #e3f2fd;
        }
        tbody td {
            padding: 12px 15px;
            color: #444;
        }
    </style>

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
