<div class="side-menu" style="-webkit-box-shadow: 5px 0 5px -2px #333;    box-shadow: 5px 0 5px -2px #333">
    <aside class="menu" style="margin-left:20px;margin-top:80px;">
        <p class="menu-label has-text-white">
            General
            <hr style="margin-top:1px;margin-bottom:1px">
        </p>
        <ul class="menu-list has-text-white">
            <li>
                <a href="{{route('manage.dashboard')}}" class="has-text-white">
                    <i class="fa fa-columns" style="margin-right: 10px"></i>Dashboard
                </a>
            </li>
        </ul>
        <p class="menu-label has-text-white">
            Administration
            <hr style="margin-top:1px;margin-bottom:1px">
        </p>
        <ul class="menu-list">
            <li>
                <a href="{{route('users.index')}}" class="has-text-white">
                    <i class="fa fa-user" style="margin-right: 10px"></i>Users
                </a>
            </li>
            <li>
                <a href="#" class="has-text-white">
                    <i class="fa fa-users" style="margin-right: 10px"></i>Roles
                </a>
            </li>
            <li>
                <a href="{{route('permissions.index')}}" class="has-text-white">
                    <i class="fa fa-lock" style="margin-right: 10px"></i>Permissions
                </a>
            </li>
        </ul>

    </aside>
</div>
