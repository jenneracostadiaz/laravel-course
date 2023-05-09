<div>
    <input type="text" wire:model='note'>
    <button wire:click='store'>Save Note</button>
    <p style="color: red">{{ $feedback }}</p>

    <ul class="notes">
        @foreach ($notes as $note)
        <li>
            {{ $note->content }} - Created: {{ $note->updated_at }}
            <button wire:click="update(' {{ $note->id }} ')">Update</button>
            <button wire:click="destroy(' {{ $note->id }} ')">Delete</button>
        </li>
    @endforeach
    </ul>
</div>