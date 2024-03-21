<x-layout>
    <x-page-header>Contacts</x-page-header>
    @if (!$contacts->count())
        <p class="lead text-center">There are no messages.</p>
    @else
        <p class="lead text-center">Here is a list of messages that our user sent us.</p>
        <section>
            @foreach ($contacts as $contact)
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $contact->name }}</h2>
                        <p class="card-text">{{ $contact->message }}</p>
                    </div>
                </div>
            @endforeach
        </section>
    @endif
</x-layout>

