<head>
    <title>Lamp Configuration</title>
</head>

@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm ratio-1-5">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="ri-lightbulb-line mr-2"></i>
                        <h5 class="mb-0">Lamp Configuration</h5>
                    </div>
                    <div class="custom-control custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="lampModeSwitch">
                        <label class="custom-control-label" for="lampModeSwitch" id="lampModeLabel">Automatic</label>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="brightness" class="form-label">Brightness <span id="brightnessValue">50%</span></label>
                            <input type="range" class="form-control-range" id="brightness" min="0" max="100" value="50">
                            <div class="d-flex justify-content-between mt-2">
                                <span>0%</span>
                                <span>100%</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="timeOn" class="form-label">Time On</label>
                            <input type="time" class="form-control" id="timeOn">
                        </div>
                        <div class="form-group mb-3">
                            <label for="timeOff" class="form-label">Time Off</label>
                            <input type="time" class="form-control" id="timeOff">
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="lampSwitch" disabled>
                                <label class="custom-control-label" for="lampSwitch" id="lampLabel">Lamp Off</label>
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
        var lampModeSwitch = document.getElementById('lampModeSwitch');
        var lampModeLabel = document.getElementById('lampModeLabel');
        var brightnessSlider = document.getElementById('brightness');
        var brightnessValue = document.getElementById('brightnessValue');
        var timeOnInput = document.getElementById('timeOn');
        var timeOffInput = document.getElementById('timeOff');
        var lampSwitch = document.getElementById('lampSwitch');
        var lampLabel = document.getElementById('lampLabel');

        lampModeSwitch.addEventListener('change', function() {
            if (lampModeSwitch.checked) {
                lampModeLabel.textContent = 'Manual';
                lampSwitch.disabled = false;
            } else {
                lampModeLabel.textContent = 'Automatic';
                lampSwitch.disabled = true;
                lampSwitch.checked = false; // Turn off the lamp when switching to automatic mode
                lampLabel.textContent = 'Lamp Off';
            }
        });

        brightnessSlider.addEventListener('input', function() {
            brightnessValue.textContent = brightnessSlider.value + '%';
        });

        lampSwitch.addEventListener('change', function() {
            if (lampSwitch.checked) {
                lampLabel.textContent = 'Lamp On';
            } else {
                lampLabel.textContent = 'Lamp Off';
            }
        });
    });
</script>
@endpush
