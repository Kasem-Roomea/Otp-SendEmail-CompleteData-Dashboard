<div>
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif

        @if (!empty($catchError))
            <div class="alert alert-danger" id="success-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ $catchError }}
            </div>
        @endif

            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button"
                           class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                        <p>Mobile Verification</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button"
                           class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                        <p>Information Passport</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button"
                           class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                           disabled="disabled">3</a>
                        <p>Eligible Stay</p>
                    </div>

                    <div class="stepwizard-step">
                        <a href="#step-4" type="button"
                           class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-success' }}"
                           disabled="disabled">4</a>
                        <p>Review All Guest Data</p>
                    </div>
                </div>
            </div>

    @include('livewire.OtpNumber')

    @include('livewire.InfoPassport')

    @include('livewire.EligibleStay')

    @include('livewire.ReviewData')




