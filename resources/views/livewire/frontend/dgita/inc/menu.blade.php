<nav class="mainMenu">
    <ul>
        <li class="menu-item">
            <a href="{{url('/')}}">Home</a>
        </li>
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">Services</a>
            <ul class="sub-menu">
                <li><a href="{{url('service')}}">All Services</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">Portfolio</a>
            <ul class="sub-menu">
                <li><a href="{{url('portfolio')}}">All Portfolio</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{url('blog')}}">blogs</a>
        </li>
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">Other</a>
            <ul class="sub-menu">
                <li><a href="{{url('aboutus')}}">About Us</a></li>
                <li><a href="{{url('contactus')}}">Contact Us</a></li>
            </ul>
        </li>
    </ul>
</nav>
