@if($role === 0)
    <x-dashboard.profile.student/>
@elseif($role === 1)
    <x-dashboard.profile.collages/>
@endif
