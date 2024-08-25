
<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="subscribe">
        <input type="email" wire:model="email" placeholder="Enter your email">
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <button type="submit"><i class="lni lni-telegram-original"></i></button>
    </form>
</div>
