<x-layout>
    <x-page-header>Log In</x-page-header>
    <p class="lead text-center">Log in, it's easy!</p>
    <section class="row mt-3 justify-content-center">
        <div class="col-lg-8">
            <x-form.card action="/login">
                <div class="card-body">
                    <x-form.input-floating name="username" />
                    <x-form.input-floating name="password" type="password" class="mt-3" />
                    <div class="mt-3">
                        <input class="btn-check" type="checkbox" id="checkbox">
                        <label class="btn btn-outline-primary" for="checkbox"

                            onclick="{
  var x = document.getElementById('password');
  if (x.type === 'password')
  {
  x.type = 'text';
  }
  else
  {
  x.type = 'password';
  } }">
                            Show password</label>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg">Log In</button>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-auto">
                            <a class="btn btn-success btn-lg" href="/register" class="text-center mt-3">No account yet?
                                Register</a>
                        </div>
                    </div>
                </div>
            </x-form.card>
        </div>
    </section>
</x-layout>

