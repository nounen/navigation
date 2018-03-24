<aside class="main-sidebar">
    <section class="sidebar">
        <form method="get" class="sidebar-form" id="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="菜单搜索" id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            @if(isset($menus))
                @foreach($menus AS $menu)
                <li>
                    <a href="{{ $menu['url'] }}">
                        <span>{{ $menu['name'] }}</span>
                    </a>
                </li>
                @endforeach
            @endif
        </ul>
    </section>
</aside>
