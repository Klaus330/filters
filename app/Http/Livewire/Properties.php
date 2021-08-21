<?php

namespace App\Http\Livewire;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class Properties extends Component
{
    use WithPagination;

    protected $properties;
    protected $listeners = ['updated_filters'];
    protected $payload;

    public function render()
    {
        $table = null;
        $properties = Property::paginate(5);
        if($this->payload){
            [$filters, $rules] = $this->payload;
            $table = DB::table('properties');

            foreach($filters as $filterKey => $filterValue)
            {
                if($filterValue === null){
                    continue;
                }
            
                if(is_array($filterValue) && count($filterValue) === 0){
                    continue;
                }

                if($rules[$filterKey] === 'in'){
                    $table = $table->whereIn($filterKey, $filterValue);                
                }else{
                    $table = $table->where($filterKey, $rules[$filterKey], $filterValue);                
                }
            }
        }
        
        return view('livewire.properties', ['properties' => $table?->paginate(5) ??  ]);
    }


    public function updated_filters($payload)
    {
       $this->payload = $payload;
    }
}
