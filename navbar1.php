<!-- Navigation Bar -->
<nav class="navbar navbar-toggler sticky-top navbar-expand-lg" data-bs-theme="dark">
    <div class="container">
        <nav class="navbar" data-bs-theme="dark">
            <a class="navbar-brand" href="#">
                <img src="/cs2024-webprogramming/assets/shiny-purse-trans.svg" width="25" height="25" alt="" />
            </a>
        </nav>
        <a class="navbar-brand" href="#" style="font-size: 1.2em">The Antiques</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation Bar - Links -->
        <div class="collapse navbar-collapse justify-content-between ml-auto" id="navbarSupportedContent" style="font-size: 0.9em">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/cs2024-webprogramming/index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Items
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="/cs2024-webprogramming/items/antique_furnitures.php">Antique Furnitures</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/cs2024-webprogramming/items/collectibles.php">Collectibles</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/cs2024-webprogramming/items/curiosities.php">Curiosities</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/cs2024-webprogramming/items/vintage_decor.php">Vintage Decor</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cs2024-webprogramming/developer.php">Developer</a>
                </li>
            </ul>
            <!-- The position of these buttons is determined by Bootstrap, and they should appear in the right side of the navbar -->
            <?php
            if (isset($_SESSION['username'])) {
                // If user is logged in, display username and "Logout" on the right side
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d6d6d6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>' . '<a class="nav-link" href="/cs2024-webprogramming/index.php">' . $_SESSION['username'] . ' | ' . '</a>
                <a class="nav-link" href="/cs2024-webprogramming/logout_process.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d6d6d6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>
                    Logout
                </a>';
            } else {
                // If user is not logged in, display "Sign Up" and "Login" on the right side
                echo '<a class="nav-link" href="/cs2024-webprogramming/Sign-Up.php">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-door-open"
                    viewBox="0 0 16 16"
                    >
                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                    <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
                    <!-- SVG content here -->
                    </svg>'
                        . 'Sign Up' . ' | ' . 
                    '</a>
                    <a class="nav-link" href="/cs2024-webprogramming/Login.php">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-person-lines-fill"
                        viewBox="0 0 16 16"
                    >
                        <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"
                        />
                    </svg>
                        Login
                    </a>';
            }
            ?>
        </div>
    </div>
</nav>
<div class="navbar-invisibility" data-bs-theme="dark" style="overflow: hidden">
    <img src="https://i.imgur.com/iHjxujF.png" />
</div>
