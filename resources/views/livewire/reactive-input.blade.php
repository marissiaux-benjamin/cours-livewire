<div class="mt-3">
    <input type="text"
           wire:model="name"
           wire:model.live.debounce.300ms="name"
           class="rounded">
    <span>{{ $name }}</span>
    <div>
        {{  $user->name }}
    </div>
</div>
