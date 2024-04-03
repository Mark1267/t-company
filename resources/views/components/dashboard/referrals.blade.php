<table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th></th>
                <th>S/N</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Date Joined</th>
                <th>Deposits</th>
                <th>Earnings</th>
        </tr>
    </thead>


    <tbody>

    
    @foreach ($tableData as $key => $user)
                <tr>
                    <td>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle bg-soft-primary text-success">
                            {{ substr($user->username, 0, 1) }}
                                </span>
                        </div>
                    </td>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('j D M, Y', strtotime($user->created_at)) }}</td>
                    <td>${{ $user->totalDeposits }}</td>
                    <td>${{ $user->totalDeposits * 0.1 }}</td>
                </tr>
    @endforeach
    </tbody>
</table>