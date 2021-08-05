<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Observation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ObservationsExport implements FromCollection, WithHeadings, WithMapping
{
    private $observation_ids;

    public function __construct($observation_ids)
    {
        $this->observation_ids = $observation_ids;
    }

    public function headings(): array
    {
        return [
            'Patient',
            'Systolic',
            'Diastolic',
            'Category',
            'Date',
            'Created By'
        ];
    }

        /**
    * @var Observation $observation
    */
    public function map($observation): array
    {
        return [
            $observation->patient?->name,
            $observation->systolic,
            $observation->diastolic,
            $observation->category,
            Carbon::parse($observation->date)->format('Y/m/d'),
            $observation->user->name,
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Observation::find($this->observation_ids);
    }

}
