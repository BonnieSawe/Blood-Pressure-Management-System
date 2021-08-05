<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Exports\StaffExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class StaffTable extends DataTableComponent
{
    public string $defaultSortColumn = 'id';
    public bool $reorderEnabled = true;
    public bool $hideBulkActionsOnEmpty = true;
    public array $bulkActions = [];

    public function __construct()
    {
        $this->bulkActions = $this->actions();
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
            Column::make('Verified', 'email_verified_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }

    public function actions() {
        return (auth()->user()->role_id == 1) ? 
            ['delete'   => 'Delete', 'exportSelected'   => 'Export'] 
        :
            ['delete'   => 'Delete'] ;
    }

    public function exportSelected()
    {
        return Excel::download(new StaffExport($this->selectedKeys), 'staff.csv');
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
