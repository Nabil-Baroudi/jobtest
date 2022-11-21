<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Maatwebsite\Excel\Facades\Excel;

class formController extends Controller
{
    public function store(Request $request)
    {
        $application = new Application();
        $application->firstName = $request->firstName;
        $application->lastName = $request->lastName;
        $application->date = $request->date;
        $application->gender = $request->gender;
        $application->placeOfBirth = $request->placeOfBirth;
        $application->countryOfResidency = $request->countryOfResidency;
        $application->passportNo = $request->passportNo;
        $application->issueDate = $request->issueDate;
        $application->expiryDate = $request->expiryDate;
        $application->countryOfIssue = $request->countryOfIssue;
        $application->arrivalDate = $request->arrivalDate;
        $application->profession = $request->profession;
        $application->organization = $request->organization;
        $application->visaDuration = $request->visaDuration;
        $application->visaType = $request->visaType;
        $application->peopleCount = $request->peopleCount;
        //
        $application->companionFirstName = $request->companionFirstName;
        $application->companionLastName = $request->companionLastName;
        $application->companionDateOfBirth = $request->companionDateOfBirth;
        $application->companionGender = $request->companionGender;
        $application->companionPlaceOfBirth = $request->companionPlaceOfBirth;
        $application->companionCountryOfResidency = $request->companionCountryOfResidency;
        $application->companionPassportNo = $request->companionPassportNo;
        $application->companionIssueDate = $request->companionIssueDate;
        $application->companionExpiryDate = $request->companionExpiryDate;
        $application->companionCountryOfIssue = $request->companionCountryOfIssue;
        $application->companionArrivalDate = $request->companionArrivalDate;
        $application->companionProfession = $request->profession;
        $application->companionOrganization = $request->companionOrganization;
        $application->companionVisaDuration = $request->companionVisaDuration;
        $application->companionVisaType = $request->companionVisaType;
        if($request->file('passportPicture')){
            $file= $request->file('passportPicture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/passport'), $filename);
            $application['passportPicture']= $filename;
        }
        if($request->file('personalPicture')){
            $file= $request->file('personalPicture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/passport'), $filename);
            $application['personalPicture']= $filename;
        }
        if($request->file('companionPassportPicture')){
            $file= $request->file('companionPassportPicture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/passport'), $filename);
            $application['companionPassportPicture']= $filename;
        }
        if($request->file('companionPersonalPicture')){
            $file= $request->file('companionPersonalPicture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image/passport'), $filename);
            $application['companionPersonalPicture']= $filename;
        }
        $application->save();

        return view('secondpage')->with('successMsg','New Appointment Added .');
    }

    public function exportExcel()
    {
        return Excel::download();
    }
}
