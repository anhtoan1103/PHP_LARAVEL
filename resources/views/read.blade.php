<h1>toan</h1>
@foreach($students as $data)
<tr>
    <th>{{ $data->id}}</th> <br>
    <th>{{ $data->studentname}}</th> <br>
    <th>{{ $data->course}}</th> <br>
    <th>{{ $data->fee}}</th>
    <th>
        <a href="/edit/{{$data->id}}">
            <button name="EDIT" >EDIT</button>
        </a>
    </th>
    <th>
        <a href="/delete/{{$data->id}}">
            <button name="DELETE" >DELETE</button>
        </a>
    </th>
    <br>
    <br>
</tr>
@endforeach
