<x-layout>
    <x-slot name="title">
        Edit Student
    </x-slot>
    <x-slot name="main">
        <div>
            <h1>Update Student</h1>
            <form action="/student/edit-student/{{$student->id}}" method="POST" class="row g-3">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{$student->name}}" id="name" class="form-control">
                </div>
                
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{$student->email}}" id="email" class="form-control">
                </div>
                
                <div class="col-12">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{$student->phone}}" id="phone" class="form-control">
                </div>
                
                <div class="col-12">
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" name="batch" value="{{$student->batch}}" id="batch" class="form-control">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <a href="student/list"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        
    </x-slot>
</x-layout>

