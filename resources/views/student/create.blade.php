<x-layout titlePage="Add Student">
    <div class="container">
        <h1 class="my-4 text-center">Add New Student</h1>
        <form action="{{ route('student.post') }}" method="POST" class="border rounded-3 p-3 mx-auto"
            style="width: 80%">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input value="{{ old('name') ? old('name') : '' }}" name="name" type="text" class="form-control"
                    id="name">
                @error('name')
                    <p style="color: red; font-size: 0.8rem" class="mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input value="{{ old('nisn') ? old('nisn') : '' }}" name="nisn" type="text" class="form-control"
                    id="nisn">
                @error('nisn')
                    <p style="color: red; font-size: 0.8rem" class="mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="school_origin" class="form-label">School Origin</label>
                <input value="{{ old('school_origin') ? old('school_origin') : '' }}" name="school_origin" type="text"
                    class="form-control" id="school_origin">
                @error('school_origin')
                    <p style="color: red; font-size: 0.8rem" class="mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 row">
                <div class="col-12 col-sm-6">
                    <label for="major" class="form-label">Select Your Last Major</label>
                    <select name="major" class="form-select">
                        <option value="science">Science</option>
                        <option value="social">Social</option>
                    </select>
                    @error('major')
                        <p style="color: red; font-size: 0.8rem" class="mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12 col-sm-6">
                    <label for="date_of_birth" class="form-label">Birth Date</label>
                    <input value="{{ old('date_of_birth') ? old('date_of_birth') : '' }}" name="date_of_birth"
                        type="date" class="form-control" id="date_of_birth">
                    @error('date_of_birth')
                        <p style="color: red; font-size: 0.8rem" class="mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
