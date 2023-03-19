@if($currentStep != 1)
    <div style="display: none" class="row setup-content" id="step-1">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>
                @if($currentNumber==1)
                        <div class="text-center justify-content-center d-flex col">
                            <h4>Please enter your mobile number</h4>
                        </div>
                        <div class="form-group">
                            <div class="input-group justify-content-center d-flex">

                                <input class="btn btn-success col-1 text-center"   style="height: 50px;"
                                       type="button" value="Send Code" wire:click="ToCode()">

                                <input class="form-control col-3 " wire:model="Number" style="height: 50px;direction:ltr;
                                border:rgba(0,0,0,0.4) 1px solid;font-size: 20px"
                                       type="number">

                                <select class="form-control col-1" wire:model="Code"
                                        style="height: 50px;border:rgba(0,0,0,0.4) 1px solid;font-size: 15px">
                                    @foreach($codes as $code)
                                        <option value="{{$code->id}}">{{$code->dial_code}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+</span>
                                </div>
                            </div>
                        </div>
                            @error('Number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                    @elseif($currentNumber==2)
                    <div class="text-center justify-content-center d-flex col">
                        <h4>Please enter code </h4>
                    </div>
                    <div class="form-group">
                        <div class="input-group justify-content-center d-flex">
                            <input class="btn btn-success col-1 text-center"  style="height:50px;" type="button" value="verification"  wire:click="ToVerification()">

                            <input class="form-control col-1 ml-1"  wire:model="codeVerification"
                                   style="height: 50px;direction:ltr;border:rgba(0,0,0,0.4) 1px solid;font-size: 30px"
                                   type="text">
                        </div>
                    </div>

                @error('codeVerification')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                    @else
            <div class="justify-content-center d-flex text-center"><img src="{{ URL::asset('assets/images/accept.png')}}" class="justify-content-center d-flex text-center  col-1" style="height: 70px;width: 70px">
            </div>

                        @endif

                    <button class="btn btn-success nextBtn btn-lg pull-right" wire:click="firstStepSubmit()" type="button">Next</button>


            </div>
        </div>
    </div>
