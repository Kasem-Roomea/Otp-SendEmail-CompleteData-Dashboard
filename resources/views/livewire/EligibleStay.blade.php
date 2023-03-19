@if($currentStep != 3)
    <div style="display: none" class="row setup-content" id="step-3">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>
                <div class="form-row">

                    <div class="col-4">
                        <label>CheckIn Date </label>
                        <input type="date"  class="form-control" wire:model="CheckInDate">
                        @error('CheckInDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-4">
                        <label >CheckOut Date</label>
                        <input type="date"  class="form-control" wire:model="CheckOutDate">
                        @error('CheckOutDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-4">
                        <label >Room Type</label>
                        <select type="text" class="form-control" style="height: 50px" wire:model="Rome_type">
                            <option value="#">Choose Type Room</option>
                            <option value="kingBed" selected>King Bed</option>
                            <option value="TwinBed">Twin Bed</option>
                        </select>
                        @error('Rome_type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row justify-content-center d-flex mt-5 mb-3">
                    <h4>Extra Night</h4>
                </div>

                <div class="form-row">

                    <div class="col-4">
                        <label>CheckIn Date </label>
                        <input type="date"  class="form-control" wire:model="CheckInDateExtra">
                        @error('CheckInDateExtra')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-4">
                        <label >CheckOut Date</label>
                        <input type="date"  class="form-control" wire:model="CheckOutDateExtra">
                        @error('CheckOutDateExtra')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="col-4">
                        <label >Room Type</label>
                        <select type="text" class="form-control" style="height: 50px" wire:model="Rome_type_Extra">
                            <option value="#">Choose Type Room</option>
                            <option value="kingBed" selected>King Bed</option>
                            <option value="TwinBed">Twin Bed</option>
                        </select>
                        @error('Rome_type_Extra')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">
                    Back
                </button>

                <button class="btn btn-success  nextBtn btn-lg pull-right" type="button"
                        wire:click="thirdStepSubmit">Next</button>
            </div>
        </div>
    </div>
