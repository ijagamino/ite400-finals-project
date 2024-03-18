<x-layout>
    <div class="row">
        <x-aside />
        <section class="col-8">
            <form action="">
                <x-page-header>Profile Information</x-page-header>
                <fieldset disabled>
                    <div class="row">
                        <div class="col">
                            <x-form-input name="first_name" />
                        </div>
                        <div class="col">
                            <x-form-input name="middle_name" />
                        </div>
                        <div class="col">
                            <x-form-input name="last_name" />
                        </div>
                    </div>
                    <x-form-input name="email" />
                </fieldset>
                <div class="row">
                    <div class="col">
                        <x-form-input name="street" />
                    </div>
                    <div class="col">
                        <x-form-input name="barangay" />
                    </div>
                    <div class="col">
                        <x-form-input name="city" />
                    </div>
                </div>
                <x-form-input name="mobile_number" />
            </form>
            <button class="btn btn-primary btn-lg mt-3">Save changes</button>
        </section>
    </div>
</x-layout>

