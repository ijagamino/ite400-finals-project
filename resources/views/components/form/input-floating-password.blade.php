<div class="form-floating mt-3 position-relative">
    <input class="form-control" type="password" name="password" id="password" placeholder="" value="" required>
    <label class="form-label" for="password">Password</label>
    <div class="position-absolute top-50 end-0 me-3 translate-middle-y">
        <input class="btn-check" type="checkbox" id="checkbox">
        <label class="btn btn-outline-primary border-0 pt-1" for="checkbox" id="checkboxlabel"

            onclick="{
  var x = document.getElementById('password');
  var checkbox = document.getElementById('checkboxlabel');
  if (x.type === 'password')
  {
  x.type = 'text';
  }
  else
  {
  x.type = 'password';
  } }">
            <x-icon.eye-fill size="32" /></label>
    </div>
</div>

@error('password')
    <p class="text-danger">{{ $message }}</p>
@enderror

