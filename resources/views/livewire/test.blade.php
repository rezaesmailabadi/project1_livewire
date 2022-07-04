<div>




    <h1>whtas up {{$name}}</h1>


    <div>

        <!-- $newtask -->

        <button wire:click="addnewtask">add</button>
        <input type="text" wire:model='newtask'>

        @foreach ($task_arry as $task)

        {{$task}}

        @endforeach

    </div>














</div>