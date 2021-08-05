<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Observation;
use App\Exports\StaffExport;
use App\Exports\ObservationsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class ObservationsTable extends DataTableComponent
{
    public string $defaultSortColumn = 'id';
    public bool $reorderEnabled = true;
    public bool $hideBulkActionsOnEmpty = true;
    public array $bulkActions = [];

    public function mount()
    {
            $this->bulkActions = auth()->user()->role_id < 3  ? 
                                [
                                    'delete'   => 'Delete', 
                                    'exportSelected'   => 'Export'
                                ] 
                                :
                                ['delete' => 'Delete'];
    }

    
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Date', 'date')
                ->sortable()
                ->searchable(),
            Column::make('Patient', 'patient.name')
                ->sortable()
                ->searchable(),
            Column::make('Created By', 'user.name')
                ->sortable()
                ->searchable(),
            Column::make('Category', 'category')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Observation::query();
    }

    public function exportSelected()
    {
        return Excel::download(new ObservationsExport($this->selectedKeys), 'observations.csv');
    }
    
    public function delete()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            Observation::whereIn('id', $this->selectedKeys())->delete();
        }

        $this->selected = [];

        $this->resetBulk();
    }
}
