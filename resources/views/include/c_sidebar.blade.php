
<div class="dashboard-nav">
    <header>
        <a class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <a class="brand-logo">
            <img class="img-fluid" src="{{ asset('all/images/mainLogo.png') }}" alt=""
            style='width: 50px; height: 50px; margin-top: 10px; margin-left: -10px'>
            <span style="margin-left: 10px; margin-top: 20px">STACKFORTE</span>
        </a>
    </header>
    <nav class="dashboard-nav-list">
        <a href="{{ route('app.home') }}" class="dashboard-nav-item"><i class="fas fa-home"></i>
            Home
        </a>
        <a href="{{ route('user.dashboard.view') }}" class="dashboard-nav-item active">
            <i class="fas fa-tachometer-alt"></i>
            dashboard
        </a>

        <a href="{{ route('user.deposit.view', ['usd']) }}" class="dashboard-nav-item">
            <i class="fas fa-file-upload"></i>
            Deposit Funds
        </a>

        <a href="{{ route('user.plan.view', ['all']) }}" class="dashboard-nav-item">
            <i class="fas fa-scroll"></i>
            Investment Plans
        </a>

        <a href="{{ route('user.withdraw.view') }}" class="dashboard-nav-item">
            <i class="fas fa-money-bill-transfer"></i>
            Withdraw
        </a>

        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fas fa-photo-video"></i>
                Retirement
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="{{ route('user.retirement_account') }}" class="dashboard-nav-dropdown-item">Add
                    Retirment</a>
                <a href="{{ route('customer.retirement.view', ['active']) }}"class="dashboard-nav-dropdown-item">Active
                    Retirement</a>
                <a href="{{ route('customer.retirement.view', ['all']) }}" class="dashboard-nav-dropdown-item">All
                    Retirement</a>
            </div>
        </div>

        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fas fa-photo-video"></i>
                Charity
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="{{ route('user.charity') }}" class="dashboard-nav-dropdown-item">Add
                    Charity</a>
                <a href="{{ route('customer.charity.view', ['active']) }}"class="dashboard-nav-dropdown-item">Active
                    Charity</a>
                <a href="{{ route('customer.charity.view', ['all']) }}" class="dashboard-nav-dropdown-item">All
                    Charity</a>
            </div>
        </div>

        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fas fa-photo-video"></i>
                NFP
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="{{ route('user.customerNFP') }}" class="dashboard-nav-dropdown-item">Add
                    NFP</a>
                <a href="{{ route('customer.customerNFP.view', ['active']) }}"class="dashboard-nav-dropdown-item">Active
                    NFP</a>
                <a href="{{ route('customer.customerNFP.view', ['all']) }}" class="dashboard-nav-dropdown-item">All
                    NFP</a>
            </div>
        </div>

        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fas fa-photo-video"></i>
                Loans
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="{{ route('user.loan') }}" class="dashboard-nav-dropdown-item">Add
                    Loans</a>
                <a href="{{ route('customer.loan.view', ['active']) }}"class="dashboard-nav-dropdown-item">Active
                    Loans</a>
                <a href="{{ route('customer.loan.view', ['all']) }}" class="dashboard-nav-dropdown-item">All
                    Loans</a>
            </div>
        </div>

        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fas fa-photo-video"></i>
                Children Account
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="{{ route('user.children_account') }}" class="dashboard-nav-dropdown-item">Add
                    Children Account</a>
                <a href="{{ route('customer.children_account.view', ['active']) }}"class="dashboard-nav-dropdown-item">Active
                    Children Account</a>
                <a href="{{ route('customer.children_account.view', ['all']) }}" class="dashboard-nav-dropdown-item">All
                    Children Account</a>
            </div>
        </div>


        <a href="{{ route('user.setting.view', ['general']) }}" class="dashboard-nav-item">
            <i class="fas fa-cogs"></i>
            Profile Settings
        </a>

        <a href="{{ route('user.setting.view', ['payment']) }}" class="dashboard-nav-item">
            <i class="fas fa-user"></i>
            Payment Settings
        </a>

        <a href="{{ route('user.setting.view', ['security']) }}" class="dashboard-nav-item">
            <i class="fas fa-user"></i>
            Account Security
        </a>

        <a href="{{ route('user.logout.view') }}" style="margin-bottom: 20px;" class="dashboard-nav-item">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </nav>
</div>
