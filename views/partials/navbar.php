<div class="d-flex justify-content-center">
    <ul class="nav nav-underline">
        <li class="nav-item">
            <a class="nav-link <?= $_GET['page'] == 'home' ? 'active' : '' ?>" aria-current="page" href="?page=home"
                hx-boost="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $_GET['page'] == 'about' ? 'active' : '' ?>" href="?page=about"
                hx-boost="true">About</a>
        </li>
    </ul>
</div>