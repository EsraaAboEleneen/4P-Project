<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('latest.create')}}">Add New</a>
</div>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($latests as $latest)
                <th scope="row">{{$latest->id}}</th>
                <td>{{$latest->title}}</td>
                <td>
                    <a class="fa fa-edit" style="color: #2d3748" href="{{route('latest.edit',$latest->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('latest.show',$latest->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('latest.destroy',$latest->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$latest->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$latest->id}}" method="post" action="{{route('latest.destroy',$latest->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div style="margin-left: 10px">
        <h3 style="padding: 10px">Pages:</h3>
        {{$latests->links()}}
    </div>
</div>
