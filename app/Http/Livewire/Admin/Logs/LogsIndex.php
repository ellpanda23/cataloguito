<?php

namespace App\Http\Livewire\Admin\Logs;

use Livewire\Component;

use Spatie\Activitylog\Models\Activity;

use Livewire\WithPagination;

class LogsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        $logs = Activity::where('log_name', 'LIKE', '%'.$this->search.'%')
                        ->orwhere('event', 'LIKE', '%'.$this->search.'%')
                        ->orwhere('batch_uuid', 'LIKE', '%'.$this->search.'%')
                        ->orwhere('created_at', 'LIKE', '%'.$this->search.'%')
                        ->paginate(8);

        return view('livewire.admin.logs.logs-index', compact('logs'));
    }
}
