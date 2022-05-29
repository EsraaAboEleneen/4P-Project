<div style="padding: 10px">
    <a class="btn btn-primary" href="{{route('contact.create')}}">Add New</a>
</div>
<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($contacts as $contact)
            <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
            <td>
{{--                <a class="fa fa-edit" style="color: #2d3748" href="{{route('contact.edit',$contact->id)}}"></a>--}}
                    <a class="fa fa-eye"  style="color: #48bb78" href="{{route('contact.show',$contact->id)}}"></a>
                    <a class="fa fa-close" style="color: darkred" href="{{route('contact.destroy',$contact->id)}}"
                       onclick="event.preventDefault();
                           if (confirm('Delete this ?')){
                           document.getElementById('form-delete-{{$contact->id}}').submit()
                           }"></a>
                    <form id="{{'form-delete-'.$contact->id}}" method="post" action="{{route('contact.destroy',$contact->id)}}">
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
        {{$contacts->links()}}
    </div>
</div>
