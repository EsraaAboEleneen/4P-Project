<li class="{{ Request::is('blogs*') ? 'active' : '' }}">
    <a href="{{ route('blogs.index') }}"><i class="fa fa-edit"></i><span>Blogs</span></a>
</li>
<li class="{{ Request::is('benefits*') ? 'active' : '' }}">
    <a href="{{ route('benefits.index') }}"><i class="fa fa-check"></i><span>Benefits</span></a>
</li>
<li class="{{ Request::is('feedbacks*') ? 'active' : '' }}">
    <a href="{{ route('feedbacks.index') }}"><i class="fa fa-comment"></i><span>Feedbacks</span></a>
</li>
<li class="{{ Request::is('contact*') ? 'active' : '' }}">
    <a href="{{ route('contact.index') }}"><i class="fa fa-pencil"></i><span>Contact Us</span></a>
</li>
<li class="{{ Request::is('about*') ? 'active' : '' }}">
    <a href="{{ route('about.index') }}"><i class="fa fa-user"></i><span>About Us</span></a>
</li>
<li class="{{ Request::is('latest*') ? 'active' : '' }}">
    <a href="{{ route('latest.index') }}"><i class="fa fa-eye"></i><span>Latest</span></a>
</li>
<li class="{{ Request::is('service*') ? 'active' : '' }}">
    <a href="{{ route('service.index') }}"><i class="fa fa-share"></i><span>Service</span></a>
</li>
<li class="{{ Request::is('package*') ? 'active' : '' }}">
    <a href="{{ route('package.index') }}"><i class="fa fa-book"></i><span>Package</span></a>
</li>
