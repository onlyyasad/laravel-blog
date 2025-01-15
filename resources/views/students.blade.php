<div>
    <h1>All Students</h1>
    <form method="get" action="/student/search">
        @csrf
        <input type="text" name="search" placeholder="Search" value="{{ @$search }}">
        <button type="submit">Search</button>
    </form>
    <form method="post" action="/student/delete-multiple">
        @csrf
        <button type="submit">Delete Selected</button>
    <br/>
    <br/>
    <table border="1" style="border-collapse: collapse">
        <tr >
            <th style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">Select</th>
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
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">
                    <input type="checkbox" style="width: 16px; height: 16px;" name="ids[]" value="{{ $student->id }}">
                </td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->id }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->name }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->email }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->phone }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->batch }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">{{ $student->created_at }}</td>
                <td style="padding-left: 10px; padding-right: 10px; padding-top: 4px; padding-bottom: 4px">
                    <a href="{{ url('student/delete/'.$student->id) }}">Delete</a>
                    <a href="{{ url('student/edit/'.$student->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    </form>
    <br>
    <a href="{{ url('student/add') }}">Add New Student</a>
    <br>
    <br>
    {{$students->links()}}
</div>

<style>
    .w-5.h-5{
        width: 20px;
        height: 20px;
    }
</style>
