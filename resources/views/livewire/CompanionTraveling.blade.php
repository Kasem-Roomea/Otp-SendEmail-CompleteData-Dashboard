<div class="form-row">
    <div class="col-3">
        <label for="title">First Name</label>
        <input type="text"  class="form-control" wire:model="FirstN2">
        @error('FirstN2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="title">Last Name</label>
        <input type="text"  class="form-control" wire:model="LastN2">
        @error('LastN2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-3">
        <label for="title">Date Of Birth</label>
        <input type="date"  class="form-control" wire:model="BirthDate2">
        @error('BirthDate2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-3">
        <label for="title">Gender</label>
        <select type="text" class="form-control p-3" wire:model="Gender2">
            <option value="FMale" selected>FMale</option>
            <option value="Male">Male</option>
        </select>
        @error('Gender2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-row mb-2">
    <div class="col-md-3">
        <label for="title">Place Of Birth</label>
        <select class="form-control" wire:model="PlaceBirth2" style="height: 50px">
            <option selected>Choose Country </option>
            @foreach($codes as $code)
                <option value="{{$code->id}}">{{$code->Name}}</option>
            @endforeach
        </select>
        @error('PlaceBirth2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-3">
        <label for="title">Country Of Residency</label>
        <select class="form-control"  style="height: 50px;" wire:model="CountryResidency2">
            <option selected>Choose Country </option>
            @foreach($codes as $code)
                <option value="{{$code->id}}">{{$code->Name}}</option>
            @endforeach
        </select>
        @error('CountryResidency2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-3">
        <label for="title">Passport No</label>
        <input type="text"  class="form-control" wire:model="PassportNo2">
        @error('PassportNo2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="title">Issue Date</label>
        <input type="date"  class="form-control" wire:model="IssueDate2">
        @error('IssueDate2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

</div>


<div class="form-row mb-2">
    <div class="col-3">
        <label for="title">Expiry Date</label>
        <input type="date"  class="form-control" wire:model="ExpiryDate2">
        @error('ExpiryDate2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-3">
        <label for="title">Place Of Issue</label>
        <option selected>Choose Country </option>
        <select class="form-control"  wire:model="PlaceIssue2" style="height: 50px;">
            @foreach($codes as $code)
                <option value="{{$code->id}}">{{$code->Name}}</option>
            @endforeach
        </select>
        @error('PlaceIssue2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="title">Arrival Date</label>
        <input type="date"  class="form-control" wire:model="ArrivalIssue2">
        @error('ArrivalIssue2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-md-1">
        <label for="title">Visa Duration</label>
        <select class="form-control"  style="height: 50px;" wire:model="Duration2">
            <option selected>Choose Number </option>
            @php
                for ($i=1;$i<=90;$i++)
                {
                    echo "<option value=".$i.">".$i."</option>";
                }
            @endphp

        </select>
        @error('Duration2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-2">
        <label for="title">Visa Status</label>
        <select class="form-control"  style="height: 50px;" wire:model="VisaStatus2">
            <option value="Single" selected>Single</option>
            <option value="Multi">Multi</option>
        </select>
        @error('VisaStatus2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

</div>

<div class="form-row mb-2">
    <div class="col-3">
        <label for="title">Profession</label>
        <input type="text"  class="form-control" wire:model="Profession2">
        @error('Profession2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="title">Organization</label>
        <input type="text"  class="form-control" wire:model="Organization2">
        @error('Organization2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="title">Passport Picture </label>
        <input type="file"  class="form-control" wire:model="ImagePassport2">
        @error('ImagePassport2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="title">Personal Picture </label>
        <input type="file"  class="form-control" wire:model="ImagePersonal2">
        @error('ImagePersonal2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

</div>
