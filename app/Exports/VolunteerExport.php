<?php

namespace App\Exports;

use App\Models\VolunteerRegistration;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class VolunteerExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $volunteers=VolunteerRegistration::all();
        return view('admin.export.volunteer', [
            'volunteers' => $volunteers,
        ]);
    }
}
