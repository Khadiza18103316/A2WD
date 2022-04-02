<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
       
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item active ">
                    <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="sidebar-item  ">
                    <a href="{{route('home.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{route('gallery.index')}}" class='sidebar-link'>
                        <i class="bi bi-image-fill"></i>
                        <span>Gallery</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="{{route('team.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Teammates</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>