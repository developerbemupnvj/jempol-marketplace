<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image"
                    src="{{ Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : 'https://via.placeholder.com/200' }}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="user-role">
                    {{ Auth::user()->email }}
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('admin/dashboard') || Request::is('admin') ? 'active' : '' }}"
                data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                <a href="{{ route('admin.dashboard') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Seller</li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Seller"
                class="{{ Request::is('admin/seller*') ? 'active' : '' }}">
                <a href="{{ route('admin.seller.index') }}"><i class="ion ion-person"></i> Data Seller</a>
            </li>
            <li class="{{ Request::is('admin/product*') ? 'active' : '' }}" data-toggle="tooltip"
                data-placement="right" data-original-title="Data Product">
                <a href="{{ route('admin.product.index') }}"><i class="ion ion-bag"></i> Data Product</a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Request Promotion"
                class="{{ Request::is('admin/promotion*') ? 'active' : '' }}">
                <a href="{{ route('admin.promotion.index') }}"><i class="ion ion-android-mail"></i> Request
                    Promotion</a>
            </li>

            <li class="menu-header">Merchandise</li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Add Merchandise"
                class="{{ Request::is('admin/merchandise/create') ? 'active' : '' }}">
                <a href="{{ route('admin.merchandise.create') }}"><i class="ion ion-plus-round"></i> Add
                    Merchandise</a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Merchandise"
                class="{{ Request::is('admin/merchandise') || Request::is('admin/merchandise/*') ? 'active' : '' }}">
                <a href="{{ route('admin.merchandise.index') }}"><i class="ion ion-pricetags"></i> Data
                    Merchandise</a>
            </li>
            <li data-toggle="tooltip" data-placement="right" data-original-title="Data Merchandise"
                class="{{ Request::is('admin/merchandise-category*') ? 'active' : '' }} text-center">
                <a href="{{ route('admin.merchandise-category.index') }}"><i class="ion ion-android-list"></i> Data
                    Merchandise Category</a>
            </li>
        </ul>
        <div class="p-3 mt-4 mb-4">
            <a href="#" class="btn btn-credits btn-shadow btn-round has-icon has-icon-nofloat btn-block"
                data-toggle="tooltip" data-placement="bottom" data-original-title="Untuk informasi klik disini!">
                <i class="ion ion-ios-information-outline"></i>
                <div><b>CREDITS</b></div>
            </a>
        </div>
    </aside>
</div>
