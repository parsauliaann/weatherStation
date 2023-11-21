
<div>
    <h3 class="font-weight-bolder d-inline" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="{{ $sensorData?->time ?? 'No Data' }}" wire:poll.1000ms='refresh'>{{ $sensorData?->value ?? '-' }}{{ $unit }}</h3>
</div>