@include('livewire.students.student_create')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone No</th>
            <th scope="col">Gender</th>
            <th scope="col">Created At</th>
            <th scope="col">Modified At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentData as $key => $student)
            <tr>
                <th scope="row">1</th>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->phone_no }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->created_at }}</td>
                <td>{{ $student->updated_at }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
