<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class PatientsTable extends DataTableComponent
{
    public string $defaultSortColumn = 'id';
    public bool $reorderEnabled = true;
    public bool $hideBulkActionsOnEmpty = true;
    public array $bulkActions = ['delete'   => 'Delete'];
    
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('DOB', 'dob')
                ->sortable(),
            Column::make('Name', 'name')
                    ->sortable()
                    ->searchable(),
            Column::make('Gender', 'gender')
                            ->sortable()
                            ->searchable(),
            Column::make('E-mail', 'email')
                    ->sortable()
                    ->searchable(),
            Column::make('Phone', 'phone')
                    ->sortable()
                    ->searchable()
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }
    
    public function delete()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            Patient::whereIn('id', $this->selectedKeys())->delete();
        }

        $this->selected = [];

        $this->resetBulk();
    }
}
