<style>
    .sidebar-nav > ul > li > a.active {
        background: none !important;
    }
</style>


<div class="scroll-sidebar">
    @include('layouts.navigation.user.side_user_profile')

    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-devider"></li>
            @foreach($menuFull as $index=> $menu)
                <li>
                    <a href="../{{$menu['current_route_name']}}" >
                        <i class="mdi mdi-gauge"></i><span class="hide-menu">{{$menu['page_title']}}</span>
                    </a>
                </li>


            @endforeach





        </ul>
    </nav>



</div>







