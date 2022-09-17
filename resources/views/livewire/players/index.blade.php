
<div>

    <table class="table table-striped">
        <thead >
            <tr class="text-white">
                <th>Id No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Age</th>
                <th>Team</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $play)
                <tr >
                    <th class="text-white">{{$play->id}}</th>
                    <th class="text-white">{{$play->name}}</th>
                    <th class="text-white">{{$play->address}}</th>
                    <th class="text-white">{{$play->contact}}</th>
                    <th class="text-white">{{$play->age}}</th>
                    <th class="text-white">{{$play->team}}</th>
                    <td >
                        <a href="{{url('edit', ['players' => $play->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    </td>
                    <td >
                        <a href="{{url('delete', ['players' => $play->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    body {
        background-image:url('{{asset('/images/onic.jpg')}}');
    }
</style>
