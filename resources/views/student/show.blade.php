<x-layout titlePage="Edit Student">
    <div class="container">
        <h1 class="my-4 text-center">Edit Student</h1>
        <div class="border rounded-3 p-3 mx-auto" style="width: 80%">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input disabled value="{{ $student->name }}" name="name" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input disabled value="{{ $student->nisn }}" name="nisn" type="text" class="form-control" id="nisn">

            </div>
            <div class="mb-3">
                <label for="school_origin" class="form-label">School Origin</label>
                <input disabled value="{{ $student->school_origin }}" name="school_origin" type="text"
                    class="form-control" id="school_origin">
            </div>
            <div class="mb-3 row">
                <div class="col-12 col-sm-6">
                    <label for="major" class="form-label">Select Your Last Major</label>
                    <select disabled name="major" class="form-select">
                        <option {{ $student->major === 'science' ? 'selected' : '' }} value="science">Science
                        </option>
                        <option {{ $student->major === 'social' ? 'selected' : '' }} value="social">Social
                        </option>
                    </select>
                </div>
                <div class="col-12 col-sm-6">
                    <label for="date_of_birth" class="form-label">Birth Date</label>
                    <input disabled value="{{ $student->date_of_birth }}" name="date_of_birth" type="date"
                        class="form-control" id="date_of_birth">
                </div>
            </div>
            <button disabled type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</x-layout>
