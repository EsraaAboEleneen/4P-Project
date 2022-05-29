<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    {{$slot}}
    @if(session()->has('message'))
        <div style="color: #48bb78" role="alert">
            {{ session()->get('message') }}
        </div>
    @elseif(session()->has('error'))
        <div style="color: red" role="alert">{{session()->get('error')}}</div>
    @endif

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
