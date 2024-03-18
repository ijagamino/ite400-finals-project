<x-layout>
    <x-page-header>Log In</x-page-header>
    <section class="row mt-3 justify-content-center">
        <div class="col-6">
            <form action="/login" method="POST" class="shadow card">
                @csrf
                <div class="card-body">
                    <fieldset>
                        <legend class="col-form-label">
                            <h2>Account Information</h2>
                        </legend>
                        <x-form-input-floating name="username" />
                        <x-form-input-floating name="password" type="password" class="mt-3" />

                        <div class="row justify-content-center mt-5">
                            <div class="col-auto">
                                <button class="btn btn-primary btn-lg">Log In</button>
                            </div>
                            <a href="/register" class="text-center mt-3">No account yet? Register</a>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </section>
</x-layout>

