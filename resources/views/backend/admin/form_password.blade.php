<div class="form-group">
    <label for="old_password">Old Password</label>
    <input type="text" class="form-control" name="old_password" id="old_password">
    @error('old_password')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="password">New Password</label>
    <input type="text" class="form-control" name="password" id="password">
    @error('password')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="text" class="form-control" name="password_confirmation" id="password_confirmation">
    @error('password_confirmation')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
