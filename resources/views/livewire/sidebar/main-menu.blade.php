<div class="sidebar-content">
    <div class="user">
        @livewire("sidebar.components.user-item")
    </div>
    <ul class="nav nav-primary">
        @foreach ($menus as $menuItem)
            @livewire("sidebar.components.{$menuItem['type']}-item", ['data' => $menuItem])
        @endforeach
    </ul>
</div>
