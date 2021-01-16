<nav>
    <a href="<?= route('home') ?>">
        <li class="<?= (route() == 'home') ? 'active' : ''; ?>">
            <i class="fas fa-home"></i>
        </li>
    </a>
    <a href="<?= route('report') ?>">
        <li class="<?= (route() == 'report') ? 'active' : ''; ?>">
            <i class="fas fa-chart-line"></i>
        </li>
    </a>
    <a href="<?= route('wishlist') ?>">
        <li class="<?= (route() == 'wishlist') ? 'active' : ''; ?>">
            <i class="fas fa-shopping-cart"></i>
        </li>
    </a>
    <a href="<?= route('labels') ?>">
        <li class="<?= (route() == 'labels') ? 'active' : ''; ?>">
            <i class="fas fa-tags"></i>
        </li>
    </a>
    <a href="#">
        <li>
            <i class="fas fa-cog"></i>
        </li>
    </a>
</nav>