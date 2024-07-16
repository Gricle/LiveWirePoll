<div>
    @forelse ($polls as $poll)
      <div class="mb-4">
        <hr style="border: 1px solid black; width: 100%;"></hr>
        <h3 class="mb-4 text-xl">
          {{ $poll->title }}
        </h3>
        @foreach ($poll->options as $option)
          <div class="mb-2">
            <button class="btn" wire:click='vote({{ $option->id }})'>Vote</button>
            {{ $option->name }} ({{ $option->votes->count() }})

          </div>
        @endforeach
      </div>
    @empty
    0021
      <div class="text-gray-500">
        No polls available
      </div>
    @endforelse
  </div>