<?php

namespace App\Livewire\Dashboard;

use App\Models\SensorData;
use Livewire\Component;

class Parameter extends Component
{
    public string $unit = '';
    public string $parameter;
    public SensorData|null $sensorData;

    public function refresh()
    {
        $sensorData = SensorData::where('parameter', $this->parameter)->latest('time')->first();
        $this->sensorData = $sensorData;
    }

    public function mount(string $parameter, string $unit = '')
    {
        $this->unit = $unit;
        $this->parameter = $parameter;
        $this->refresh($parameter);
    }

    public function render()
    {
        return view('livewire.dashboard.parameter');
    }
}
