<?php

namespace App\Exports;

use App\Models\Application;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersDataExport implements FromView , ShouldAutoSize
{
    use Exportable;

    private $application;

    public function __construct()
    {
        $this->application = Application::all();
    }

    public function view() : View
    {
        return view('secondpage',[
            'application' => $this->application
        ]);
    }

}
