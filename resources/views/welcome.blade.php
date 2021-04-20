<form action="{{route('create')}}" method="post">
    @csrf
    <input type="text" name="studentname" placeholder="studentname" >
    <input type="text" name="course" placeholder="course" >
    <input type="text" name="fee" placeholder="fee" >
    <input type="submit" >
</form>
