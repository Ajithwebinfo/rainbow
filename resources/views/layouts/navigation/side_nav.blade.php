<div class="scroll-sidebar">
    @if($userDetails['id_roles'] == 1)
    @endif

    @if($userDetails['id_roles'] == 2)
        @include('layouts.navigation.user.side_nav')
    @endif
</div>

