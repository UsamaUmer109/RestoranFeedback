<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"   href="{{ url('admin/users') }}">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"   href="{{ url('admin/categories') }}">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"   href="{{ url('admin/products') }}">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"   href="{{ url('admin/ratings') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Rating & Feedback</span>
            </a>
        </li>
    </ul>
</nav>
