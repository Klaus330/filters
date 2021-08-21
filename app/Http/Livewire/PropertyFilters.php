<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PropertyFilters extends Component
{

    public $filters = [
        'beds' => null,
        'baths' =>  null,
        'purpose' => null,
        'type' => [],
        'price' => null,
    ];

    public $filtersRules = [
        'beds' => '=',
        'baths' => '=',
        'price' => '>',
        'type' => 'in',
        'purpose' => '=',
    ];

    protected $queryString = ['filters'];


    public function mount()
    {
     
        
    }



    public function updatedFilters()
    {
        $this->emit("updated_filters", [$this->filters, $this->filtersRules]);
    }

    public function render()
    {
        return view('livewire.property-filters');
    }


    public function updatePrice($price)
    {
        $this->filters['price'] = $price;
        $this->updatedFilters();
    }


    public function updateBeds($nrOfBeds)
    {
        $this->filters['beds'] = $nrOfBeds;
        $this->updatedFilters();
    }

    public function updateType($typeId)
    {
        if(in_array($typeId, $this->filters['type'])){

        }else{
            $this->filters['type'][] = $typeId;
        }

        $this->updatedFilters();
    }

    public function updateBaths($nrOfBaths)
    {
        $this->filters['beds'] = $nrOfBaths;
        $this->updatedFilters();
    }
}
