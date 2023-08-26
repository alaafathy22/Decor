<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CalcDist extends Component
{
    public $id_row;
    public $number_button_remove;
    public $reception;
    public $room;
    public $torqa;
    public $blqona;
    public $bathroom;
    public $kitchen;
    public $id_establishment_type;
    public $width;
    public $height;
    public $result_multi;
    public $collect = [1];


    public function render()
    {
        $this->result_multi = $this->height *  $this->width;
        return view('livewire.calc-dist');
    }
}
