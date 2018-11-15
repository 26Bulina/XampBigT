<table class="table table-responsive" id="employees-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Data Angajare</th>
        <th>Cnp</th>
        <th>angjt Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{!! $employee->name !!}</td>
            <td>{!! $employee->data_angajare !!}</td>
            <td>{!! $employee->cnp !!}</td>
            <td>{!! $employee->angajats_id !!}</td>
            <td>
                {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>