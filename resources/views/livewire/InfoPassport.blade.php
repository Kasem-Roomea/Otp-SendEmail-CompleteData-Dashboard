@if($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">
                    <div class="col-3">
                        <label for="title">First Name</label>
                        <input type="text"  class="form-control" wire:model="FirstN">
                        @error('FirstN')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="title">Last Name</label>
                        <input type="text"  class="form-control" wire:model="LastN">
                        @error('LastN')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-3">
                        <label for="title">Date Of Birth</label>
                        <input type="date"  class="form-control" wire:model="BirthDate">
                        @error('BirthDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-3">
                        <label for="title">Gender</label>
                        <select type="text" class="form-control p-3" wire:model="Gender">
                            <option value="FMale" selected>FMale</option>
                            <option value="Male">Male</option>
                        </select>
                        @error('Gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row mb-2">
                    <div class="col-md-3">
                        <label for="title">Place Of Birth</label>
                        <select class="form-control"  style="height: 50px" wire:model="PlaceBirth">
                            <option selected>Choose Country </option>
                            @foreach($codes as $code)
                                <option value="{{$code->id}}">{{$code->Name}}</option>
                            @endforeach
                        </select>
                        @error('PlaceBirth')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="title">Country Of Residency</label>
                        <select class="form-control"  style="height: 50px;" wire:model="CountryResidency">
                            <option selected>Choose Country </option>
                            @foreach($codes as $code)
                                <option value="{{$code->id}}">{{$code->Name}}</option>
                            @endforeach
                        </select>
                        @error('Residency')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="title">Passport No</label>
                        <input type="text"  class="form-control" wire:model="PassportNo">
                        @error('PassportNo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="title">Issue Date</label>
                        <input type="date"  class="form-control" wire:model="IssueDate">
                        @error('IssueDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="form-row mb-2">
                    <div class="col-3">
                        <label for="title">Expiry Date</label>
                        <input type="date"  class="form-control" wire:model="ExpiryDate">
                        @error('ExpiryDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="title">Place Of Issue</label>
                        <select class="form-control"  wire:model="PlaceIssue" style="height: 50px;">
                            <option selected>Choose Country </option>
                            @foreach($codes as $code)
                                <option value="{{$code->id}}">{{$code->Name}}</option>
                            @endforeach
                        </select>
                        @error('PlaceIssue')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="title">Arrival Date</label>
                        <input type="date"  class="form-control" wire:model="ArrivalIssue">
                        @error('ArrivalIssue')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-1">
                        <label for="title">Visa Duration</label>
                        <select class="form-control" wire:model="Duration" style="height: 50px;">
                            <option selected>Choose Number </option>
                            @php
                                for ($i=1;$i<=90;$i++)
                                {
                                    echo "<option value=".$i.">".$i."</option>";
                                }
                              @endphp

                        </select>
                        @error('Duration')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-2">
                        <label for="title">Visa Status</label>
                        <select class="form-control" wire:model="VisaStatus"  style="height: 50px;">
                                <option value="Single" selected>Single</option>
                                <option value="Multi">Multi</option>
                        </select>
                        @error('VisaStatus')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row mb-2">
                    <div class="col-3">
                        <label for="title">Profession</label>
                        <input type="text"  class="form-control" wire:model="Profession">
                        @error('Profession')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="title">Organization</label>
                        <input type="text"  class="form-control" wire:model="Organization">
                        @error('Organization')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="title">Passport Picture </label>
                        <input type="file"  class="form-control" wire:model="ImagePassport">
                        @error('ImagVisa')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="title">Personal Picture </label>
                        <input type="file"  class="form-control" wire:model="ImagePersonal">
                        @error('ImagePersonal')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row mt-4 justify-content-center d-flex">
                    <div class="col-3">

                            @if($display)
                            <button class="btn btn-warning me-4" type="button" wire:click="display(false)">No</button>
                                @else
                            <button class="btn btn-warning me-4" type="button" wire:click="display(true)">Yes</button>
                            @endif
                        ?Are you Traveling With Companion (Plus One)

                    </div>
                </div>

                     @if($display)
                    <div class="form-row mt-4 justify-content-center d-flex">
                        <h4 class="col-12 justify-content-center d-flex mb-5 mt-5">Information Companion</h4>
                    </div>
                    @include('livewire.CompanionTraveling')
                    @endif




                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
                    Back
                </button>

                    <button class="btn btn-success  nextBtn btn-lg pull-right" type="button"
                            wire:click="secondStepSubmit">Next</button>

            </div>
        </div>
    </div>

