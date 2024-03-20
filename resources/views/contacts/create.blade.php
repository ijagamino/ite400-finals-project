<x-layout>
    <x-page-header>Contact Us</x-page-header>
    <p class="lead text-center">Do you have any feedback? Send a message below!</p>
    <section class="row justify-content-center">
        <div class="col-6">
            <x-form.card action="/contact">
                <div class="card-body">
                    <x-form.input name="name" label="Name (optional)" placeholder="John Doe" />
                    <div class="mt-3">
                        <x-form.input name="email" type="email" placeholder="johndoe@email.com" />
                    </div>
                    <div class="mt-3">
                        <x-form.textarea name="message" placeholder="Send us your thoughts!" required />
                    </div>
                    <x-form.button>Submit message</x-form.button>
                </div>
            </x-form.card>
        </div>
    </section>
</x-layout>

