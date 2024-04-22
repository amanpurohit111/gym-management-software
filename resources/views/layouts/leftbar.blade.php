<style>
    .nav-link:hover,
    .nav-link span:hover {
        color: #f36100 !important;
    }

    .sbactive,
    .sbactive a,
    .sbactive span {
        color: #f36100 !important;
    }
</style>


<div class="container-fluid" style="box-shadow:1px 1px 5px #000; border-radius:5px ">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-12 col-xl-12 px-sm-12 px-0">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="pb-3 text-center h5" style="border-bottom:1px solid #222; width:100%;">
                    <i class="fa fa-tasks" aria-hidden="true" style="color:#f36100"></i> <span style="color:#f36100"
                        class="ms-1 d-none d-sm-inline"> Menu</span>
                </div>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/home" class="nav-link align-middle px-0">
                            <i class="fa fa-tachometer" aria-hidden="true"></i> <span
                                class="ms-1 d-none d-sm-inline">DashBoard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse"
                            class="nav-link px-0 align-middle {{(Route::currentRouteName()=='members.create')?'sbactive':''}} || {{(Route::currentRouteName()=='members.index')?'sbactive':''}}">
                            <i class="fa fa-id-card-o" aria-hidden="true"></i> <span
                                class="ms-1 d-none d-sm-inline">Members</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100 {{(Route::currentRouteName()=='members.create')?'sbactive':''}}">
                                <a href="/members/create" class="nav-link px-0"> <i class="fa fa-user-plus"
                                        aria-hidden="true"></i><span class="d-none d-sm-inline"> Create</span> </a>
                            </li>
                            <li class="{{(Route::currentRouteName()=='members.index')?'sbactive':''}}">
                                <a href="/members" class="nav-link px-0"><i class="fa fa-users"
                                        aria-hidden="true"></i><span class="d-none d-sm-inline"> View</span> </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle {{(Route::currentRouteName()=='plans.create')?'sbactive':''}} || {{(Route::currentRouteName()=='plans.index')?'sbactive':''}}">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                            <span class="ms-1 d-none d-sm-inline">Plans</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100 {{(Route::currentRouteName()=='plans.create')?'sbactive':''}}" >
                                <a href="/plans/create" class="nav-link px-0"><i class="fa fa-plus-square-o"
                                        aria-hidden="true"></i>
                                        <span class="d-none d-sm-inline"> Create</span> </a>
                            </li>
                            <li class="{{(Route::currentRouteName()=='plans.index')?'sbactive':''}}">
                                <a href="/plans" class="nav-link px-0"><i class="fa fa-outdent" aria-hidden="true"> </i>
                                    <span class="d-none d-sm-inline"> View</span> </a>
                            </li>

                        </ul>
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul> -->

            </div>
        </div>

    </div>
</div>