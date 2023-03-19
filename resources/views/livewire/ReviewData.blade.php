@if($currentStep != 4)
    <div style="display: none" class="row setup-content" id="step-4">
        @endif
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">
                        <div class="tab nav-border">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                       role="tab" aria-controls="home-02"
                                       aria-selected="true">Passport</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                       role="tab" aria-controls="profile-02"
                                       aria-selected="false">Companion</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                           aria-labelledby="home-02-tab">
                                    <table class="table table-striped table-hover" style="text-align:center">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Number Phone</th>
                                            <td>{{$Number . $Code}}</td>
                                            <th scope="row">First Name</th>
                                            <td>{{$FirstN}}</td>
                                            <th scope="row">Last Name</th>
                                            <td>{{$LastN}}</td>
                                            <th scope="row">Birth Date</th>
                                            <td>{{$BirthDate}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Gender</th>
                                            <td>{{$Gender}}</td>
                                            <th scope="row">Place Birth</th>
                                            <td>{{$PlaceBirth}}</td>
                                            <th scope="row">Country Residency</th>
                                            <td>{{$CountryResidency}}</td>
                                            <th scope="row">Passport No</th>
                                            <td>{{$PassportNo}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Issue Date</th>
                                            <td>{{$IssueDate}}</td>
                                            <th scope="row">Expiry Date</th>
                                            <td>{{$ExpiryDate}}</td>
                                            <th scope="row">Place Issue</th>
                                            <td>{{$PlaceIssue}}</td>
                                            <th scope="row">Arrival Issue</th>
                                            <td>{{$ArrivalIssue}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Duration</th>
                                            <td>{{$Duration}}</td>
                                            <th scope="row">VisaStatus</th>
                                            <td>{{$VisaStatus}}</td>
                                            <th scope="row">Profession</th>
                                            <td>{{$Profession}}</td>
                                            <th scope="row">Organization</th>
                                            <td>{{$Organization}}</td>
                                        </tr>

                                        <tr>
                                            <td colspan="8" class="text-warning">Companion Information</td>
                                        <tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <th scope="row">First Name</th>
                                            <td>{{$FirstN2}}</td>
                                            <th scope="row">Last Name</th>
                                            <td>{{$LastN2}}</td>
                                            <th scope="row">Birth Date</th>
                                            <td>{{$BirthDate2}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Gender</th>
                                            <td>{{$Gender2}}</td>
                                            <th scope="row">Place Birth</th>
                                            <td>{{$PlaceBirth2}}</td>
                                            <th scope="row">Country Residency</th>
                                            <td>{{$CountryResidency2}}</td>
                                            <th scope="row">Passport No</th>
                                            <td>{{$PassportNo2}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Issue Date</th>
                                            <td>{{$IssueDate2}}</td>
                                            <th scope="row">Expiry Date</th>
                                            <td>{{$ExpiryDate2}}</td>
                                            <th scope="row">Place Issue</th>
                                            <td>{{$PlaceIssue2}}</td>
                                            <th scope="row">Arrival Issue</th>
                                            <td>{{$ArrivalIssue2}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Duration</th>
                                            <td>{{$Duration2}}</td>
                                            <th scope="row">VisaStatus</th>
                                            <td>{{$VisaStatus2}}</td>
                                            <th scope="row">Profession</th>
                                            <td>{{$Profession2}}</td>
                                            <th scope="row">Organization</th>
                                            <td>{{$Organization2}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="profile-02" role="tabpanel"
                                           aria-labelledby="profile-02-tab">

                                    <div class="card card-statistics">
                                        <div class="card-body">
                                    <table class="table table-striped table-hover" style="text-align:center">
                                        <tbody>
                                        <tr>
                                            <th scope="row"> Check In Date</th>
                                            <td>{{$CheckInDate}}</td>
                                            <th scope="row">Check Out Date </th>
                                            <td>{{$CheckOutDate}}</td>
                                            <th scope="row"> Room Type</th>
                                            <td>{{$Rome_type}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Check In Date Extra </th>
                                            <td>{{$CheckInDateExtra}}</td>
                                            <th scope="row">Check Out Date Extra </th>
                                            <td>{{$CheckOutDateExtra}}</td>
                                            <th scope="row">Room Type Extra </th>
                                            <td>{{$Rome_type_Extra}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                        </div>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


                            <div class="col-xs-12">
                                <div class="col-md-12"><br>
                                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                                            wire:click="back(3)">Back</button>

                                    <button  class="btn btn-success btn-lg pull-right" wire:click="SubmitSave"
                                       type="button" >Confirm</button>

                                </div>





                </div>

            </div>
        </div>
    </div>


