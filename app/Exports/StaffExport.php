<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StaffExport implements FromCollection, WithHeadings, WithMapping
{
    private $staff_ids;

    public function __construct($staff_ids)
    {
        $this->staff_ids = $staff_ids;
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Date',
        ];
    }

        /**
    * @var User $user
    */
    public function map($user): array
    {
        return [
            $user->name,
            $user->email,
            Carbon::parse($user->created_at)->format('Y/m/d'),
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::find($this->staff_ids);
    }

}
