<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('blogs.create')}}">Add New</a>
</div>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Content</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($blogs as $blog)
                <th scope="row">{{$blog->id}}</th>
                <td>{{$blog->name}}</td>
                <td>{{$blog->content}}</td>
                <td>
                    <a class="fa fa-edit" style="color: #2d3748" href="{{route('blogs.edit',$blog->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('blogs.show',$blog->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('blogs.destroy',$blog->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$blog->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$blog->id}}" method="post" action="{{route('blogs.destroy',$blog->id)}}">
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
        {{$blogs->links()}}
    </div>
</div>
