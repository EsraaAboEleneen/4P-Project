<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('service.create')}}">Add New</a>
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
            @foreach($services as $service)
                <th scope="row">{{$service->id}}</th>
                <td>{{$service->title}}</td>
                <td>
                    <a class="fa fa-edit" style="color: #2d3748" href="{{route('service.edit',$service->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('service.show',$service->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('service.destroy',$service->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$service->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$service->id}}" method="post" action="{{route('service.destroy',$service->id)}}">
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
        {{$services->links()}}
    </div>
</div>
