<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('static/90sMix-logo.jpeg') }}" class="logo-icon" alt="logo icon">
        </div>
        <div></div>
        <div class="toggle-icon ms-auto"><i class='bx bx-chevron-left'></i></div>
    </div>

    <!-- Navigation -->
    <ul class="metismenu" id="menu">
        <!-- Dashboard -->
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class='bx bxs-dashboard'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>


        <!-- Leads Section -->
        <li class="menu-label">Leads</li>



        <li>
            <a href="{{ route('dashboard.enquiries.index') }}">
                <div class="parent-icon"><i class='bx bx-phone'></i></div>
                <div class="menu-title">Enquiry</div>
            </a>
        </li>



        <li>
            <a href="{{ route('dashboard.bookings.index') }}">
                <div class="parent-icon"><i class='bx bx-calendar-plus'></i></div>
                <div class="menu-title">Booking</div>
            </a>
        </li>


        <li>
            <a href="{{ route('dashboard.categories.index') }}">
                <div class="parent-icon"><i class='bx bx-category'></i></div>
                <div class="menu-title">Category</div>
            </a>
        </li>


        <li>
            <a href="{{ route('dashboard.cuisines.index') }}">
                <div class="parent-icon"><i class='bx bx-food-menu'></i></div>
                <div class="menu-title">Cuisine</div>
            </a>
        </li>


        <li>
            <a href="{{ route('dashboard.items.index') }}">
                <div class="parent-icon"><i class='bx bx-box'></i></div>
                <div class="menu-title">Item</div>
            </a>
        </li>











        <!-- Settings Section -->

    </ul>
    <!-- End Navigation -->
</div>
