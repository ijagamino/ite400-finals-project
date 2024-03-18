@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="shadow bg-primary text-white position-fixed bottom-0 end-0 mb-5 me-3 py-2 px-4 rounded">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('fail'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="shadow bg-danger text-white position-fixed bottom-0 end-0 mb-5 me-3 py-2 px-4 rounded">
        {{ session('fail') }}
    </div>
@endif

