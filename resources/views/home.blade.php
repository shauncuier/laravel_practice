@if ($LoginStatusKey === true)
    <h1>You Are Loged in</h1>
@elseif($LoginStatusKey===false)
    <h1>You Are not Loged in</h1>
@else
    <h1>Status not Found</h1>
@endif
