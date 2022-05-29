<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('benefits.create')}}">Add New</a>
</div>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($benefits as $benefit)
            <th scope="row">{{$benefit->id}}</th>
            <td>{{$benefit->title}}</td>
            <td>
                <a class="fa fa-edit" style="color: #2d3748" href="{{route('benefits.edit',$benefit->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('benefits.show',$benefit->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('benefits.destroy',$benefit->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$benefit->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$benefit->id}}" method="post" action="{{route('benefits.destroy',$benefit->id)}}">
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
        {{$benefits->links()}}
    </div>
</div>
