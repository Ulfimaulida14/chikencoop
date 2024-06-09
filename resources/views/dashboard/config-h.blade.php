<head>
    <title>Heater Configuration</title>
</head>


@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm ratio-1-5">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="ri-fire-line mr-2"></i>
                        <h5 class="mb-0">Heater Configuration</h5>
                    </div>
                    <div class="custom-control custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="modeSwitch">
                        <label class="custom-control-label" for="modeSwitch" id="modeLabel">Automatic</label>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="min_temp" class="form-label">Minimum Temperature <span id="minTempValue">20°C</span></label>
                            <input type="range" class="form-control-range" id="min_temp" min="0" max="100" value="20">
                            <div class="d-flex justify-content-between mt-2">
                                <span>0°C</span>
                                <span>100°C</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="max_temp" class="form-label">Maximum Temperature <span id="maxTempValue">80°C</span></label>
                            <input type="range" class="form-control-range" id="max_temp" min="0" max="100" value="80">
                            <div class="d-flex justify-content-between mt-2">
                                <span>0°C</span>
                                <span>100°C</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="heaterSwitch" disabled>
                                <label class="custom-control-label" for="heaterSwitch" id="heaterLabel">Heater Off</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        border-radius: 12px;
        height: 500px;
    }

    .card-header {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-control-range {
        width: 100%;
    }

    .ratio-1-5 {
        height: 100px; /* adjust height for aspect ratio */
    }

    .pt-5 {
        padding-top: 3rem !important;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modeSwitch = document.getElementById('modeSwitch');
        var modeLabel = document.getElementById('modeLabel');
        var minTempSlider = document.getElementById('min_temp');
        var maxTempSlider = document.getElementById('max_temp');
        var minTempValue = document.getElementById('minTempValue');
        var maxTempValue = document.getElementById('maxTempValue');
        var heaterSwitch = document.getElementById('heaterSwitch');
        var heaterLabel = document.getElementById('heaterLabel');

        modeSwitch.addEventListener('change', function() {
            if (modeSwitch.checked) {
                modeLabel.textContent = 'Manual';
                heaterSwitch.disabled = false;
            } else {
                modeLabel.textContent = 'Automatic';
                heaterSwitch.disabled = true;
                heaterSwitch.checked = false; // Turn off the heater when switching to automatic mode
                heaterLabel.textContent = 'Heater Off';
            }
        });

        minTempSlider.addEventListener('input', function() {
            minTempValue.textContent = minTempSlider.value + '°C';
        });

        maxTempSlider.addEventListener('input', function() {
            maxTempValue.textContent = maxTempSlider.value + '°C';
        });

        heaterSwitch.addEventListener('change', function() {
            if (heaterSwitch.checked) {
                heaterLabel.textContent = 'Heater On';
            } else {
                heaterLabel.textContent = 'Heater Off';
            }
        });
    });
</script>
@endpush
