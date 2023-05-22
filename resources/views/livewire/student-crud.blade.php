<div>
    @if ($updateStudent)
        @include('livewire.students.student_update');
    @else
        @include('livewire.students.student_create');
    @endif


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
            @foreach ($studentData as $student)
                <tr>
                    <th>{{ $student->id }}</th>
                    <td>{{ $student->firstname }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->phone_no }}</td>
                    <td>
                        @if ($student->gender == 0)
                            Male
                        @else
                            Female
                        @endif
                    </td>
                    <td>{{ $student->created_at->diffForHumans() }}</td>
                    <td>{{ $student->updated_at->diffForHumans() }}</td>
                    <td><button class="btn btn-sm btn-warning" wire:click='Edit({{ $student->id }})'>Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
