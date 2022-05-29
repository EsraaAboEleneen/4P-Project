<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('about.create')}}">Add New</a>
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
            @foreach($abouts as $about)
                <th scope="row">{{$about->id}}</th>
                <td>{{$about->title}}</td>
                <td>
                    <a class="fa fa-edit" style="color: #2d3748" href="{{route('about.edit',$about->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('about.show',$about->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('about.destroy',$about->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$about->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$about->id}}" method="post" action="{{route('about.destroy',$about->id)}}">
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
        {{$abouts->links()}}
    </div>
</div>
