<x-layout>
    <x-slot name="title">
        Add Student
    </x-slot>
    <x-slot name="main">
        <div>
            <h1>Add New Student</h1>
            <form action="add" method="POST">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <br>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <br>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone">
                </div>
                <br>
                <div>
                    <label for="batch">Batch</label>
                    <input type="text" name="batch" id="batch">
                </div>
                <br>
                <div>
                    <button type="submit">Add Student</button>
                </div>
        </div>
    </x-slot>
</x-layout>


