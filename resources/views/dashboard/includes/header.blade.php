{{-- Main --}}
<header class="row bg-dark" id="page-header">
    <div style="background: #000;">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <button type="button" class="btn btn-sm btn-dual ml-n6 d-none d-lg-inline-block text-light" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
            <div class="ml-3 mt-1"><p class="text-light h3" style="font-family: Georgia, Cochin, Georgia, Times, 'Times New Roman', serif;">Al Shark Herbs</p></div>

        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn btn-sm btn-dual d-flex align-items-center" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="rounded-circle border border-light border-2 px-1"><img class="rounded-circle" src="{{ asset('dashboard/media/avatars/user.png') }}" alt="Header Avatar" style="width: 21px;"></span>
                    <span class="d-none d-sm-inline-block ml-2 text-light">Admin</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1 text-light"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0" aria-labelledby="page-header-user-dropdown" style="background: #000">
                    <div class="p-3 text-center rounded-top" >
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('dashboard/media/avatars/user.png') }}" alt="">
                        <p class="mt-2 mb-0 text-white font-w500">{{ Auth::user()->name }}</p>
                        <p class="mb-0 font-size-sm text-light">Company Manager</p>
                    </div>
                    <div class="p-2" style="background: #FC0000">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('emails.index') }}">
                            <span class="font-size-sm font-w500 text-light">Inbox</span>
                            @php
                            $emails_number = count(App\Models\Emails::all());
                            echo '<span class="badge badge-pill badge-primary ml-2 text-light">'.$emails_number.'</span>';
                            @endphp
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center justify-content-between text-light">
                                <span class="font-size-sm font-w500 text-light">{{ __('Logout') }}</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
    </div>

</header>
<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="" style="background: #FC0000;color:#fff;">
        <div class="content content-full">
            @if(request()->routeIs('team.*'))
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center ml-n8 py-2 text-center text-sm-left">
            @else
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
             @endif
                <div class="flex-sm-fill">

                    <h1 class="h3 font-w700 mb-2" style="color: #fff">
                        @if(request()->routeIs('dashboard.home'))
                        {{"Main Dashboard"}}
                        @elseif (request()->routeIs('categories.*'))
                        {{"Categories"}}
                        @elseif (request()->routeIs('products.*'))
                        {{"Products"}}
                        @elseif (request()->routeIs('categoryproduct.*'))
                        {{"Relations"}}
                        @elseif (request()->routeIs('team.*'))
                        {{"Team"}}
                        @elseif (request()->routeIs('emails.*'))
                        {{"Emails"}}
                        @else
                        {{"Main Dashboard"}}
                        @endif
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

