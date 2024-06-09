<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{ asset('admin/') }}"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <span class="material-symbols-outlined">dashboard</span>
                </div>
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a class="active" href="{{ asset('admin/users') }}">User</a></li>
                <li><a href="{{ asset('admin/products') }}">Product</a></li>
                <li><a href="{{ asset('admin/categories') }}">Categories</a></li>
            </ul>
        </li>
        
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                 <span class="material-symbols-outlined">category</span>
                </div>
                <span>Category</span>
            </a>
            <ul>
                <li><a class="active" href="{{ asset('admin/categories/create') }}">Add Category</a></li>
            </ul>
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                  <span class="material-symbols-outlined">person</span>
                </div>
                <span>User</span>
            </a>
            <ul>
                <li><a class="active" href="{{ asset('admin/users/create') }}">Add User</a></li>
            </ul>
        </li>
        
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <span>Products</span>
            </a>
            <ul>
                <li><a class="active" href="{{ asset('admin/products/create') }}">Add Products</a></li>
            </ul>
        </li>

    </ul>

</nav>