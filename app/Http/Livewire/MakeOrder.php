<?php

namespace App\Http\Livewire;

use Livewire\Component;
use function Symfony\Component\Translation\t;

class MakeOrder extends Component
{
    #open close filed
    public $dini = false;
    public $isoman = false;
    public $jalan = false;
    public $grubs = false;

    public function render()
    {
        return view('livewire.make-order');
    }

    public function openDini()
    {
        return $this->dini = true;
    }

    public function closeDini()
    {
        return $this->dini = false;
    }

    public function openIsoman()
    {
        return $this->isoman = true;
    }

    public function closeIsoman()
    {
        return $this->isoman = false;
    }

    public function openJalan()
    {
        return $this->jalan = true;
    }

    public function closeJalan()
    {
        return $this->jalan = false;
    }

    public function openGrubs()
    {
        return $this->grubs = true;
    }

    public function closeGrubs()
    {
        return $this->grubs = false;
    }
}
