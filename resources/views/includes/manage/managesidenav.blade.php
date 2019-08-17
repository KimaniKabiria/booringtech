<div class="manageSideMenu" id="manageSideMenu">
    <aside class="menu" style="margin-left:20px;margin-top:20px;">
        <p class="menu-label">
            General
            <hr style="margin-top:1px;margin-bottom:1px">
        </p>
        <ul class="menu-list">
            <li>
                <a href="{{route('manage.dashboard')}}" class=">
                    <i class="fa fa-columns" style="margin-right: 10px"></i>Dashboard
                </a>
            </li>
        </ul>
        <p class="menu-label">
            Administration
            <hr style="margin-top:1px;margin-bottom:1px">
        </p>
        <ul class="menu-list">
            <li>
                <a href="{{route('users.index')}}" class=">
                    <i class="fa fa-user" style="margin-right: 10px"></i>Users
                </a>
            </li>
            <li>
                <a href="{{route('roles.index')}}" class=">
                    <i class="fa fa-users" style="margin-right: 10px"></i>Roles
                </a>
            </li>
            <li>
                <a href="{{route('permissions.index')}}" class=">
                    <i class="fa fa-lock" style="margin-right: 10px"></i>Permissions
                </a>
            </li>
        </ul>

    </aside>
</div>
