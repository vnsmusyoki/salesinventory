<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">User Dashboard</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboards
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                    <a class="nav-link" href="dashboard.php">
                        My Dashboard
                    </a>
                    <a class="nav-link" href="account-security.php">Update Account</a>
                    <a class="nav-link" href="logout.php">Log out</a>
                </nav>
            </div>
            <!-- Sidenav Heading (Custom)-->
            <!-- Sidenav Accordion (Pages)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Inventory
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link" href="add-inventory.php">Add Inventory</a>
                    <a class="nav-link" href="invoice.html">All Inventories</a>
                </nav>
            </div>
            <!-- Sidenav Accordion (Applications)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
                <div class="nav-link-icon"><i data-feather="globe"></i></div>
                Products
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseApps" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavAppsMenu">
                    <a class="nav-link" href="add-product.php">Add Product</a>
                    <a class="nav-link" href="all-products.php">All Products</a>

                </nav>
            </div>
            <!-- Sidenav Accordion (Flows)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                Sales
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="add-sales.php">Add Sales</a>
                    <a class="nav-link" href="all-sales.php">All Sales</a>
                </nav>
            </div>
            <!-- Sidenav Accordion (Layout)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                Purchases
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                    <a class="nav-link" href="add-purchases.php">Add Purchases</a>
                    <a class="nav-link" href="all-purchases.php">All Purchases</a>
                </nav>
            </div>
            <!-- Sidenav Accordion (Components)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                <div class="nav-link-icon"><i data-feather="package"></i></div>
                Components
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseComponents" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="alerts.html">Alerts</a>
                    <a class="nav-link" href="avatars.html">Avatars</a>
                    <a class="nav-link" href="badges.html">Badges</a>
                    <a class="nav-link" href="buttons.html">Buttons</a>
                    <a class="nav-link" href="cards.html">
                        Cards
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                    <a class="nav-link" href="forms.html">
                        Forms
                        <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                    </a>
                    <a class="nav-link" href="modals.html">Modals</a>
                    <a class="nav-link" href="navigation.html">Navigation</a>
                    <a class="nav-link" href="progress.html">Progress</a>
                    <a class="nav-link" href="step.html">Step</a>
                    <a class="nav-link" href="timeline.html">Timeline</a>
                    <a class="nav-link" href="toasts.html">Toasts</a>
                    <a class="nav-link" href="tooltips.html">Tooltips</a>
                </nav>
            </div>
            <!-- Sidenav Accordion (Utilities)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                <div class="nav-link-icon"><i data-feather="tool"></i></div>
                Utilities
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="animations.html">Animations</a>
                    <a class="nav-link" href="background.html">Background</a>
                    <a class="nav-link" href="borders.html">Borders</a>
                    <a class="nav-link" href="lift.html">Lift</a>
                    <a class="nav-link" href="shadows.html">Shadows</a>
                    <a class="nav-link" href="typography.html">Typography</a>
                </nav>
            </div>
            <!-- Sidenav Heading (Addons)-->
            <div class="sidenav-menu-heading">Plugins</div>
            <!-- Sidenav Link (Charts)-->
            <a class="nav-link" href="charts.html">
                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                Charts
            </a>
            <!-- Sidenav Link (Tables)-->
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                Tables
            </a>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div>
</nav>