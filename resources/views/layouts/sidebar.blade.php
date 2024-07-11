<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" data-key="t-menu">Menu</li>

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="bx bx-layer"></i>
                <span data-key="t-dashboard">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="bx bx-store"></i>
                <span data-key="t-apps">Outlets</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="{{ route('outlet.create') }}">
                        <span data-key="t-calendar">Add Outlets</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('outlet.index') }}">
                        <span data-key="t-chat">View Outlets</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="bx bx-pen"></i>
                <span data-key="t-components">Blogs</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('blog.create') }}" data-key="t-alerts">Add Blogs</a></li>
                <li><a href="{{ route('blog.index') }}" data-key="t-buttons">View Blogs</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('partner.index') }}" class="">
                <i class="bx bxs-user"></i>
                <span data-key="t-ui-elements">Partners</span>
            </a>
        </li>
        <li>
            <a href="{{ route('count.create') }}" class="">
                <i class="mdi mdi-format-list-numbered"></i>
                <span data-key="t-ui-elements">Count</span>
            </a>
        </li>
        <li>
            <a href="{{ route('enquiry.index') }}" class="">
                <i class="bx bxs-report"></i>
                <span data-key="t-ui-elements">Enquiry</span>
            </a>
        </li>
        <li>
            <a href="{{ route('contact.index') }}" class="">
                <i class="bx bx-envelope"></i>
                <span data-key="t-ui-elements">Contact</span>
            </a>
        </li>
    </ul>
</div>
