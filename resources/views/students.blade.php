<div>
    <h1>All Students</h1>
    <table border="1" style="border-collapse: collapse">
        <tr >
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Id</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Name</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Email</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Phone</th>
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Batch</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->id }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->name }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->email }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->phone }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->batch }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('student/add') }}">Add New Student</a>
</div>
