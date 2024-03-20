<x-layout>
    <div class="row">
        <x-aside />
        <section class="col-8">
            <x-page-header>Profile Information</x-page-header>
            <form method="POST" action="/profile">
                @csrf
                @method('PATCH')

                <fieldset disabled>
                    <legend>Account Information</legend>
                    <div class="row">
                        <div class="col">
                            <x-form-input name="username" />
                        </div>
                        <div class="col">
                            <x-form-input name="email" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class="mt-3" disabled>
                    <legend>Personal Information</legend>
                    <div class="row">
                        <div class="col">
                            <x-form-input name="first_name" label="First Name" />
                        </div>
                        <div class="col">
                            <x-form-input name="last_name" label="Last Name" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class="mt-3">
                    <legend>Address Information</legend>
                    <div class="row">
                        <div class="col-4">
                            <x-form-input name="street" />
                        </div>
                        <div class="col-4">
                            <x-form-input name="barangay" />
                        </div>
                        <div class="col-4">
                            <x-form-input name="city" />
                        </div>
                        <div class="col">
                            <x-form-input name="landmark" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class="mt-3">
                    <legend>Contact Information</legend>
                    <x-form-input name="mobile_number" label="Mobile Number" />
                </fieldset>
                <button class="btn btn-primary btn-lg mt-3">Save changes</button>
            </form>
        </section>
    </div>
</x-layout>

