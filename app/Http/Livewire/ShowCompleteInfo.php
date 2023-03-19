<?php

namespace App\Http\Livewire;

use App\CodeCountrie;
use App\informationAccompanying;
use App\informationPassenger;
use App\Mail\DoneOparetionMail;
use App\RoomStay;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowCompleteInfo extends Component
{
    use WithFileUploads;
    public $catchError = '', $successMessage = '';
    public $currentStep = 1 , $currentNumber = 1 , $display = false;

    //Page Number verification
    public $Number,$Code,$codeVerification;

    //Page Information Travel
    public $FirstN,$LastN, $BirthDate, $Gender, $PlaceBirth, $CountryResidency, $PassportNo, $IssueDate, $ExpiryDate, $PlaceIssue, $ArrivalIssue, $Duration, $VisaStatus, $Profession, $Organization, $ImagePersonal, $ImagePassport;

    //Page Information Friend Travel
    public $FirstN2,$LastN2, $BirthDate2, $Gender2, $PlaceBirth2, $CountryResidency2, $PassportNo2, $IssueDate2, $ExpiryDate2, $PlaceIssue2, $ArrivalIssue2, $Duration2, $VisaStatus2, $Profession2, $Organization2, $ImagePersonal2, $ImagePassport2;


    public $CheckInDate ,$CheckOutDate ,$Rome_type ,$CheckInDateExtra ,$CheckOutDateExtra ,$Rome_type_Extra;



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'Number' => 'required|max:10|min:10',
            'Code' => 'required',
            'codeVerification' => 'required|max:4|min:4|regex:/^[a-zA-Z 0-9]+$/',


            'FirstN'=>'required|regex:/^[a-zA-Z]+$/u',
            'LastN'=>'required|regex:/^[a-zA-Z]+$/u',
            'BirthDate'=>'required|before:today|date',
            'IssueDate'=>'required|before:today|date',
            'ExpiryDate'=>'required|before:today|date',
            'ArrivalIssue'=>'required|before:today|date',
            'PassportNo'=>'required|min:6|regex:/^[a-zA-Z 0-9]+$/',
            'Duration'=>'required',
            'VisaStatus'=>'required',




            'CheckInDate' => 'required|date|after_or_equal:today',
            'CheckOutDate' => [
                'required',
                'date',
                'after_or_equal:CheckInDate',
                function ($attribute, $value, $fail) {
                    $checkInDate = Carbon::parse($this->CheckInDate);
                    $checkOutDate = Carbon::parse($value);
                    $maxDate = $checkInDate->copy()->addDays(5);
                    if ($checkOutDate->greaterThan($maxDate)) {
                        $fail('The check out date must be 5 days after Check Out.');
                    }
                },
            ],
            'Rome_type' => 'required',


            'CheckInDateExtra' => 'date|after_or_equal:today',
            'CheckOutDateExtra' => [
                'date',
                'after_or_equal:CheckInDateExtra',
                function ($attribute, $value, $fail) {
                    $checkInDate = Carbon::parse($this->CheckInDateExtra);
                    $checkOutDate = Carbon::parse($value);
                    $maxDate = $checkInDate->copy()->addDays(5);
                    if ($checkOutDate->greaterThan($maxDate)) {
                        $fail('The check out date must be 5 days after Check Out.');
                    }
                },
            ],

            'Rome_type_Extra' => 'required',


        ]);
    }
    public function render()
    {
        $codes  = CodeCountrie::all();
        return view('livewire.show-complete-info' , compact('codes'));
    }

    public function firstStepSubmit()
    {
        $this->validate([
            'Number' => 'required|max:10|min:10',
            'codeVerification' => 'required|max:4|min:4|regex:/^[a-zA-Z 0-9]+$/',
        ]);
        $this->currentStep = 2;
    }

    public function ToCode()
    {
        $this->validate([
            'Number' => 'required|max:10|min:10',
        ]);
        $this->currentNumber = 2;
    }

    public function ToVerification()
    {
        $this->validate([
            'codeVerification' => 'required|max:4|min:4|regex:/^[a-zA-Z 0-9]+$/',
        ]);
        $this->currentNumber = 3;
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'FirstN'=>'required|regex:/^[a-zA-Z]+$/u',
            'LastN'=>'required|regex:/^[a-zA-Z]+$/u',
            'BirthDate'=>'required|before:today|date',
            'IssueDate'=>'required|before:today|date',
            'ExpiryDate'=>'required|before:today|date',
            'ArrivalIssue'=>'required|before:today|date',
            'PassportNo'=>'required|min:6|regex:/^[a-zA-Z 0-9]+$/',
            'Duration'=>'required',
            'VisaStatus'=>'required',
            'ImagePersonal'=>'required',
            'ImagePassport'=>'required',
            'PlaceIssue'=>'required',
            'CountryResidency'=>'required',
            'Gender'=>'required',


        ]);
        if ($this->display)
        {
            $this->validate([
                'FirstN2' => 'required|regex:/^[a-zA-Z]+$/u',
                'LastN2' => 'required|regex:/^[a-zA-Z]+$/u',
                'BirthDate2' => 'required|before:today|date',
                'IssueDate2' => 'required|before:today|date',
                'ExpiryDate2' => 'required|before:today|date',
                'ArrivalIssue2' => 'required|before:today|date',
                'PassportNo2' => 'required|min:6|regex:/^[a-zA-Z 0-9]+$/',
            ]);
        }
        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'CheckInDate' => 'required|date|after_or_equal:today',
            'CheckOutDate' => [
                'required',
                'date',
                'after_or_equal:CheckInDate',
                function ($attribute, $value, $fail) {
                    $checkInDate = Carbon::parse($this->CheckInDate);
                    $checkOutDate = Carbon::parse($value);
                    $maxDate = $checkInDate->copy()->addDays(5);
                    if ($checkOutDate->greaterThan($maxDate)) {
                        $fail('The check out date must be 5 days after Check Out.');
                    }
                },
            ],
            'Rome_type' => 'required',

            'CheckInDateExtra' => 'date|after_or_equal:today',
            'CheckOutDateExtra' => [
                'date',
                'after_or_equal:CheckInDateExtra',
                function ($attribute, $value, $fail) {
                    $checkInDate = Carbon::parse($this->CheckInDateExtra);
                    $checkOutDate = Carbon::parse($value);
                    $maxDate = $checkInDate->copy()->addDays(5);
                    if ($checkOutDate->greaterThan($maxDate)) {
                        $fail('The check out date must be 5 days after Check Out.');
                    }
                },
            ],

            'Rome_type_Extra' => 'required',
        ]);

        $this->currentStep = 4;
    }


    public function back($step)
    {
        $this->currentStep = $step;
    }


    public function display($value)
    {
        $this->display = $value;
    }


    public function SubmitSave()
    {
        try {
                //Image Upload
                if (!empty($this->ImagePersonal))
                {
                    $this->ImagePersonal->storeAs($this->PassportNo, $this->ImagePersonal->getClientOriginalName(), $disk = 'Personal_attachments');
                    $UploadPersonal = $this->ImagePersonal->getClientOriginalName();
                }

                if (!empty($this->ImagePassport))
                {
                    $this->ImagePassport->storeAs($this->PassportNo, $this->ImagePassport->getClientOriginalName(), $disk = 'Passport_attachments');
                    $UploadPassport = $this->ImagePassport->getClientOriginalName();
                }

                if (!empty($this->ImagePersonal2))
                {
                    $this->ImagePersonal2->storeAs($this->PassportNo2, $this->ImagePersonal2->getClientOriginalName(), $disk = 'Personal_attachments');
                    $UploadPersonal2 = $this->ImagePersonal2->getClientOriginalName();
                }

                if (!empty($this->ImagePassport2))
                {
                    $this->ImagePassport2->storeAs($this->PassportNo2, $this->ImagePassport2->getClientOriginalName(), $disk = 'Passport_attachments');
                    $UploadPassport2 = $this->ImagePassport2->getClientOriginalName();
                }

                if($this->display)
                {
                    $IsCompanion = 1;
                }
            DB::beginTransaction();
            // Passport Passenger
            $Passenger = new informationPassenger();
            $Passenger->NumberPhone = $this->Number;
            $Passenger->code_id  = $this->Code??2;
            $Passenger->FirstN = $this->FirstN;
            $Passenger->LastN = $this->LastN;
            $Passenger->DateBirth = $this->BirthDate;
            $Passenger->Gender = $this->Gender;
            $Passenger->PlaceBirth_id  = $this->PlaceBirth;
            $Passenger->CountryResidency_id  = $this->CountryResidency;
            $Passenger->PassportNo = $this->PassportNo;
            $Passenger->IssueDate = $this->IssueDate;
            $Passenger->ExpiryDate = $this->ExpiryDate;
            $Passenger->PlaceIssue_id  = $this->PlaceIssue;
            $Passenger->ArrivalDate = $this->ArrivalIssue;
            $Passenger->VisaDuration = $this->Duration;
            $Passenger->VisaStatus = $this->VisaStatus;
            $Passenger->Profession = $this->Profession??null;
            $Passenger->Organization = $this->Organization??null;
            $Passenger->ImagePersonal2 = $UploadPersonal??null;
            $Passenger->ImagePassport2 = $UploadPassport??null;
            $Passenger->IsCompanion = $IsCompanion??null;
            $Passenger->save();

            if($this->display)
            {
                // Companion Information
                $Accompanying = new informationAccompanying();
                $Accompanying->CFirstN = $this->FirstN2;
                $Accompanying->CLastN = $this->LastN2;
                $Accompanying->CDateBirth = $this->BirthDate2;
                $Accompanying->CGender = $this->Gender2;
                $Accompanying->CPlaceBirth_id  = $this->PlaceBirth2;
                $Accompanying->CCountryResidency_id  = $this->CountryResidency2;
                $Accompanying->CPassportNo = $this->PassportNo2;
                $Accompanying->CIssueDate = $this->IssueDate2;
                $Accompanying->CExpiryDate = $this->ExpiryDate2;
                $Accompanying->CPlaceIssue_id  = $this->PlaceIssue2;
                $Accompanying->CArrivalDate = $this->ArrivalIssue2;
                $Accompanying->CVisaDuration = $this->Duration2;
                $Accompanying->CVisaStatus = $this->VisaStatus2;
                $Accompanying->CProfession = $this->Profession2??null;
                $Accompanying->COrganization = $this->Organization2??null;
                $Accompanying->CImagePersonal = $UploadPersonal2??null;
                $Accompanying->CImagePassport = $UploadPassport2??null;
                $Accompanying->Passenger_id  = informationPassenger::latest()->first()->id;
                $Accompanying->save();
            }


            //Room Stay
             $room= new RoomStay();
             $room->CheckIn = $this->CheckInDate;
             $room->CheckOut = $this->CheckOutDate;
             $room->TypeRoom = $this->Rome_type;
             $room->CheckInExtra = $this->CheckInDateExtra??null;
             $room->CheckOutExtra = $this->CheckOutDateExtra??null;
             $room->TypeRoomExtra = $this->Rome_type_Extra??null;
             $room->Passenger_id  = informationPassenger::latest()->first()->id;
             $room->save();

             //Send Email Complete
            Mail::to(Auth::user()->email)->send(new DoneOparetionMail());

            //Update User Complete
            $user = User::where('email',Auth::User()->email )->first();
            $user->update([
                'IsCompleted' => 1,
            ]);


            //push data
            DB::commit();
             return redirect()->route('home');
        }

        catch (\Exception $e) {
            DB::rollback();
            $this->catchError = $e->getMessage();
        };

    }
}
