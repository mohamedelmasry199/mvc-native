<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">MySite</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#nav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>

                <?php if (\app\core\Application::isGuest()): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="register">Register</a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                    </li>

                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
