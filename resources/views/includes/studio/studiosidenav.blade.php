<div class="studioSideMenu" id="studioSideMenu">
    <aside class="menu" style="margin-left:20px;margin-top:20px;">
        <ul class="menu-list">
            <li>
                <a href="{{route('studio.dashboard')}}">
                    <i class="fa fa-columns" style="margin-right: 10px"></i>Dashboard
                </a>
            </li>
        </ul>
        <p class="menu-label">
            Create
            <i class="fa fa-pencil" style="margin-left: 10px"></i>
            <hr style="margin-top:1px;margin-bottom:1px">
        </p>
        <ul class="menu-list">
            <li>
                <a href="{{route('posts.index')}}">
                    <i class="fa fa-list" style="margin-right: 10px"></i>All Posts
                </a>
            </li>
            <li>
                <a href="{{route('roles.index')}}">
                    <i class="fa fa-pencil-square-o" style="margin-right: 10px"></i>Create Post
                </a>
            </li>
            <li>
                <a href="{{route('permissions.index')}}">
                    <i class="fa fa-lock" style="margin-right: 10px"></i>Permissions
                </a>
            </li>
        </ul>

    </aside>
</div>
