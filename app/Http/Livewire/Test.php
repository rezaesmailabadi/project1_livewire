<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{


    public $name;
    public $newtask;
    public $task_arry = ["task1", "task2"];

    public function addnewtask()
    {
        array_push($this->task_arry, $this->newtask);
        $this->newtask = '';
    }

    
    public function mount($name)
    {
        $this->name = $name;
    }



    public function render()
    {
        return view('livewire.test');
    }
}
