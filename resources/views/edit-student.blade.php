<x-layout>
    <x-slot name="title">
        Edit Student
    </x-slot>
    <x-slot name="main">
        <div>
            <h1>Update Student</h1>
            <form action="/student/edit-student/{{$student->id}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$student->name}}" id="name">
                </div>
                <br>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{$student->email}}" id="email">
                </div>
                <br>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" value="{{$student->phone}}" id="phone">
                </div>
                <br>
                <div>
                    <label for="batch">Batch</label>
                    <input type="text" name="batch" value="{{$student->batch}}" id="batch">
                </div>
                <br>
                <div>
                    <button type="submit">Update Student</button>
                    <a href="student/list"><button type="button">Cancel</button></a>
                </div>
        </div>
        
    </x-slot>
</x-layout>

