@extends('csv.csv_file')

@section('csv_data')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br/>
    {!! $data->links() !!}
@endsection