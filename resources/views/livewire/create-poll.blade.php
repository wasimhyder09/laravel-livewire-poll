<div>
  <form wire:submit.prevent="createPoll">
    <label for="">Poll title</label>
    <input type="text" wire:model.live="title" />

    <div class="mt-4 mb-4">
      <button class="btn" wire:click.prevent="addOption">Add option</button>
    </div>
    <div>
      @foreach($options as $index => $option)
        <div class="mb-2 mt-4">
          <label>Option {{$index + 1}}</label>
        </div>
        <div class="flex gap-2">
          <input type="text" wire:model="options.{{$index}}" />
          <button class="btn" wire:click.prevent="removeOption({{$index}})">Remove</button>
        </div>
      @endforeach
    </div>
    <button type="submit" class="btn mt-4">Create Poll</button>
  </form>
</div>
