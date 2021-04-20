<form action="{{route('edit')}}" method="post">
    @csrf
    <input type="text" name="studentname" value = "{{$studentById->studentname}}">
    <input type="text" name="course" value = "{{$studentById->course}}" >
    <input type="text" name="fee" value = "{{$studentById->fee}}">
    <input type="submit" >
</form>
