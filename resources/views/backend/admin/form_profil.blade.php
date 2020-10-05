<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="{{ old('username') ?? Auth()->user()->username }}" class="form-control" required>
    @error('username')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') ?? Auth()->user()->name }}" class="form-control" required>
    @error('name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') ?? Auth()->user()->email }}" class="form-control" required>
    @error('email')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<button type="submit" class="float-right btn btn-success">Update</button>
