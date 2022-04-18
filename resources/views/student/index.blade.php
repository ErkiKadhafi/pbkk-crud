<x-layout titlePage="Student List">
    @if (Session::has('success'))
        <x-toast :message="Session::get('success')" type="success"></x-toast>
    @endif
    @if (Session::has('danger'))
        <x-toast :message="Session::get('danger')" type="danger"></x-toast>
    @endif

    <div class="container">
        <div class="my-4 d-flex justify-content-between align-items-center">
            <h1>List of Students</h1>
            <a href="{{ route('student.create') }}" class="btn btn-primary fw-bolder">Add Student</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">NISN</th>
                    <th class="text-center" scope="col">School Origin</th>
                    <th class="text-center" scope="col">Major</th>
                    <th class="text-center" scope="col">Birth Date</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td class="text-center">{{ $student->name }}</td>
                        <td class="text-center">{{ $student->nisn }}</td>
                        <td class="">{{ $student->school_origin }}</td>
                        <td class="text-center">{{ $student->major }}</td>
                        <td class="text-center">{{ $student->date_of_birth }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('student.show', $student) }}"
                                class="fw-bolder btn btn-sm btn-primary">Detail</a>
                            <a href="{{ route('student.edit', $student) }}"
                                class="fw-bolder mx-2 btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('student.destroy', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" type="submit"
                                    class="fw-bolder btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-slot name="script">
        <script>
            // for toast 
            const toastLiveExample = document.getElementById('liveToast')
            if (toastLiveExample) {
                const toast = new bootstrap.Toast(toastLiveExample)
                toast.show()
            }
        </script>
    </x-slot>
</x-layout>
