<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('feedbacks.create')}}">Add New</a>
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
            @foreach($feedbacks as $feedback)
            <th scope="row">{{$feedback->id}}</th>
            <td>{{$feedback->title}}</td>
            <td>
                <a class="fa fa-edit" style="color: #2d3748" href="{{route('feedbacks.edit',$feedback->id)}}"></a>
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('feedbacks.show',$feedback->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('feedbacks.destroy',$feedback->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$feedback->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$feedback->id}}" method="post" action="{{route('feedbacks.destroy',$feedback->id)}}">
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
        {{$feedbacks->links()}}
    </div>
</div>
