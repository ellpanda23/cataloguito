<div>
    <div class="card">

        <div class="card-header">
            <input class="form-control" placeholder="Search by name, event, batch_uuid or Login date" wire:model="search">
        </div>
        @if ($logs->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Event</th>
                            <th>SubjectID</th>
                            <th>Subject type</th>
                            <th>CauserID</th>
                            <th>Causer Type</th>
                            <th>Batch_uuid</th>
                            <th>Logged_at</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{$log->id}}</td>
                                <td>{{$log->log_name}}</td>
                                <td>{{$log->event}}</td>
                                <td>{{$log->subject_id}}</td>
                                <td>{{$log->causer_id}}</td>
                                <td>{{$log->subject_type}}</td>
                                <td>{{$log->causer_type}}</td>
                                <td>{{$log->batch_uuid}}</td>
                                <td>{{date($log->created_at)}}</td>
                                <td width="10px">
                                    <a href="{{route('admin.logs.show', $log)}}" class="btn btn-primary">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="card-footer">{{$logs->links()}}</div>

        @else

            <div class="card-body">
                <strong>No hay ningun registro</strong>
            </div>

        @endif

    </div>
</div>
