<x-layout>
    <x-slot name="title">
        Students
    </x-slot>
    <x-slot name="main">
        <div>
            <h1>All Students</h1>
            <form method="get" action="/student/search">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" value="{{ @$search }}">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                  </div>
            </form>
            <form method="post" action="/student/delete-multiple">
                @csrf
                <button type="submit" class="btn btn-danger">Delete Selected</button>
            <br/>
            <br/>
            <table border="1" class="table">
                <tr >
                    <th scope="col">Select</th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Created</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">
                            <input type="checkbox" class="form-check-input"  name="ids[]" value="{{ $student->id }}">
                        </th>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->batch }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>
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
    </x-slot>
</x-layout>


<style>
    .w-5.h-5{
        width: 20px;
        height: 20px;
    }
</style>
