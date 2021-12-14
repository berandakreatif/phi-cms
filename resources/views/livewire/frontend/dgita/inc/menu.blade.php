<nav class="mainMenu">
    <ul>
        <li class="menu-item">
            <a href="{{url('/')}}">Home</a>
        </li>
        @if (isset($cat_service) && (count($cat_service)>0))
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">Services</a>
            <ul class="sub-menu">
                <li><a href="{{url('service')}}">All Services</a></li>
                @foreach ($cat_service as $cs)
                <li><a href="{{url('service/'.$cs->slug)}}">{{$cs->title ?? ''}}</a></li>
                @endforeach
            </ul>
        </li>
        @endif
        @if (isset($cat_portfolio) && (count($cat_portfolio)>0))
        <li class="menu-item-has-children">
            <a href="javascript:void(0);">Portfolio</a>
            <ul class="sub-menu">
                <li><a href="{{url('portfolio')}}">All Portfolio</a></li>
                @foreach ($cat_portfolio as $cf)
                <li><a href="{{url('portfolio/'.$cf->slug)}}">{{$cf->title ?? ''}}</a></li>
                @endforeach
            </ul>
        </li>
        @endif
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
