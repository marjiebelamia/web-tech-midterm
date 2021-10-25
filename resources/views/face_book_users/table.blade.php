<div class="table-responsive">
    <table class="table" id="faceBookUsers-table">
        <thead>
            <tr>
                <th>Country</th>
        <th>Number Of Users</th>
        <th>Active Users</th>
        <th>None Active Users</th>
        <th>Hrs Per Day Online</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faceBookUsers as $faceBookUser)
            <tr>
                <td>{{ $faceBookUser->country }}</td>
            <td>{{ $faceBookUser->number_of_users }}</td>
            <td>{{ $faceBookUser->active_users }}</td>
            <td>{{ $faceBookUser->none_active_users }}</td>
            <td>{{ $faceBookUser->hrs_per_day_online }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faceBookUsers.destroy', $faceBookUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faceBookUsers.show', [$faceBookUser->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faceBookUsers.edit', [$faceBookUser->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
