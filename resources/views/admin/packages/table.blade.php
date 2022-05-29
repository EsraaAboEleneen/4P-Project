<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('package.create')}}">Add New</a>
</div>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Service Id</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($packages as $package)
                <th scope="row">{{$package->id}}</th>
                <td>{{$package->name}}</td>
                <td>{{$package->service_id}}</td>
                <td>
                    <a class="fa fa-edit" style="color: #2d3748" href="{{route('package.edit',$package->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('package.show',$package->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('package.destroy',$package->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$package->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$package->id}}" method="post" action="{{route('package.destroy',$package->id)}}">
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
        {{$packages->links()}}
    </div>
</div>
