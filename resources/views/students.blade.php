<div>
    <h1>All Students</h1>
    <table border="1" style="border-collapse: collapse">
        <tr >
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Id</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Name</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Email</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Phone</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Batch</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Created</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Action</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->id }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->name }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->email }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->phone }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->batch }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->created_at }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">
                    {{-- <a href="{{ url('student/edit/'.$student->id) }}">Edit</a> --}}
                    <a href="{{ url('student/delete/'.$student->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('student/add') }}">Add New Student</a>
</div>
