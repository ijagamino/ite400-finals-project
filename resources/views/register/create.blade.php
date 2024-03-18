<x-layout>
    <x-page-header>Register</x-page-header>
    <section class="row mt-3 justify-content-center">
        <div class="col-6">
            <form action="/register" method="POST" class="shadow card">
                @csrf
                <div class="card-body">
                    <fieldset>
                        <legend class="col-form-label">
                            <h2>Account Information</h2>
                        </legend>
                        <x-form-input-floating name="username" />
                        <x-form-input-floating name="password" type="password" class="mt-3" />
                    </fieldset>

                    <fieldset>
                        <legend class="col-form-label">
                            <h2>Personal Information</h2>
                        </legend>
                        <div class="row">
                            <div class="col">
                                <x-form-input-floating name="first_name" />
                            </div>
                            <div class="col">
                                <x-form-input-floating name="middle_name" />
                            </div>
                            <div class="col">
                                <x-form-input-floating name="last_name" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <x-form-input-floating name="street" />
                            </div>
                            <div class="col">
                                <x-form-input-floating name="barangay" />
                            </div>
                            <div class="col">
                                <x-form-input-floating name="city" />
                            </div>
                        </div>

                        <legend class="col-form-label">
                            <h2>Contact Information</h2>
                        </legend>
                        <div class="row">
                            <div class="col">
                                <x-form-input-floating name="email" type="email" />
                            </div>
                            <div class="col">
                                <x-form-input-floating name="mobile_number" />
                            </div>
                        </div>
                    </fieldset>
                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg">Register</button>
                        </div>
                        <a href="/login" class="text-center mt-3">Already have an account? Log in</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-layout>

