<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex  justify-center">

        <h2 class="text-lg px-2 mx-2 "> Add Steps if required</h2>
        <span wire:click="increment">&plus;</span>
    </div>
    @for($i = 0; $i < $steps; $i++)
    <div class="flex justify-center py-2">
        <input type="text" name="step" class="py-1 px-2 border rounded" placeholder="{{'Describe Steps '.($i+1)}}">
        <span class="p-2" wire:click="remove({{$i}})">&times;</span>
    </div>
    @endfor
</div>
