<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Exports\StaffExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class StaffTable extends DataTableComponent
{
    public string $defaultSortColumn = 'id';
    public bool $reorderEnabled = true;
    public bool $hideBulkActionsOnEmpty = true;
    public array $bulkActions = [];

    public function mount()
    {
        if (auth()->user()->role_id == 1) {
            $this->bulkActions = [
                                    'delete'   => 'Delete', 
                                    'exportSelected'   => 'Export'
                                ];
        }
    }

    
    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Joined', 'created_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }

    public function exportSelected()
    {
        return Excel::download(new StaffExport($this->selectedKeys), 'staff.csv');
    }
    
    public function delete()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            User::whereIn('id', $this->selectedKeys())->delete();
        }

        $this->selected = [];

        $this->resetBulk();
    }
}
