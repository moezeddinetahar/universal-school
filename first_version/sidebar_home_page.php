<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ad_Sidebar</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<style>
/* Importing Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    transition: margin-left 0.3s ease;
    /* Ajout de la transition pour le contenu */
}

body {
    height: 100vh;
    width: 100%;
    background-image: url("images/hero-bg.jpg");
    background-position: center;
    background-size: cover;
}

.ad_sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 60px;
    height: 100%;
    display: flex;
    align-items: center;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(17px);
    --webkit-backdrop-filter: blur(17px);
    border-right: 1px solid rgba(255, 255, 255, 0.7);
    z-index: 1000;
    /* Assure que la barre latérale est au-dessus du contenu */
    transition: left 0.3s ease;
    /* Ajout de la transition pour la position */
}

body.sidebar-opened {
    margin-left: 200px;
    /* Décalage du contenu lorsque la barre latérale est ouverte */

}

.ad_sidebar:hover {
    left: 0;
    /* Affiche la barre latérale lors du survol */
    width: 260px;
    /* Agrandit la barre latérale lorsqu'elle est ouverte */
}

.ad_sidebar .logo {
    color: #000;
    display: flex;
    align-items: center;
    padding: 25px 10px 15px;
}

.logo img {
    width: 43px;
    border-radius: 50%;
}

.logo h2 {
    font-size: 1.15rem;
    font-weight: 600;
    margin-left: 15px;
    display: none;
}

.ad_sidebar:hover .logo h2 {
    display: block;
}

.ad_sidebar .side_links {
    list-style: none;
    margin-top: 20px;
    overflow-y: auto;
    scrollbar-width: none;
    height: calc(100% - 140px);
}

.ad_sidebar .side_links::-webkit-scrollbar {
    display: none;
}

.side_links li {
    display: flex;
    border-radius: 4px;
    align-items: center;
}

.side_links li:hover {
    cursor: pointer;
    background: #fff;
}

.side_links h4 {
    color: #222;
    font-weight: 500;
    display: none;
    margin-bottom: 10px;
}

.ad_sidebar:hover .side_links h4 {
    display: block;
}

.side_links hr {
    margin: 10px 8px;
    border: 1px solid #4c4c4c;
}

.ad_sidebar:hover .side_links hr {
    border-color: transparent;
}

.side_links li span {
    padding: 12px 10px;
}

.side_links li a {
    padding: 10px;
    color: #000;
    display: none;
    font-weight: 500;
    white-space: nowrap;
    text-decoration: none;
}

.ad_sidebar:hover .side_links li a {
    display: block;
}

.side_links .logout-link {
    margin-top: 20px;
}
</style>

<body>
    <aside class="ad_sidebar">
        <div class="logo">
            <img src="/metouia%20fm/v.1/photos/admin_icone.png" alt="logo">
            <h2>User Name</h2>
        </div>
        <ul class="side_links">
            <h4>Main Menu</h4>
            <li>
                <span class="material-symbols-outlined">dashboard</span>
                <a href="\universal-school\first_version\home_page.php">Accueil</a>
            </li>
            <li>
                <span class="material-symbols-outlined">show_chart</span>
                <a href="#">Revenue</a>
            </li>
            <li>
                <span class="material-symbols-outlined">flag</span>
                <a href="#">Reports</a>
            </li>
            <hr>
            <h4>Advanced</h4>
            <li>
                <span class="material-symbols-outlined">person</span>
                <a href="#">Designer</a>
            </li>
            <li>
                <span class="material-symbols-outlined">group</span>
                <a href="#">Developer </a>
            </li>
            <li>
                <span class="material-symbols-outlined">ambient_screen</span>
                <a href="#">Magic Build</a>
            </li>
            <li>
                <span class="material-symbols-outlined">pacemaker</span>
                <a href="#">Theme Maker</a>
            </li>
            <li>
                <span class="material-symbols-outlined">monitoring</span>
                <a href="#">Analytic</a>
            </li>
            <hr>
            <h4>Account</h4>
            <li>
                <span class="material-symbols-outlined">bar_chart</span>
                <a href="#">Overview</a>
            </li>
            <li>
                <span class="material-symbols-outlined">mail</span>
                <a href="#">Message</a>
            </li>
            <li>
                <span class="material-symbols-outlined">settings</span>
                <a href="\universal-school\first_version\changer_mdp.php">Settings</a>
            </li>
            <li class="logout-link">
                <span class="material-symbols-outlined">logout</span>
                <a href="\universal-school\first_version\accueil.php">Logout</a>
            </li>
        </ul>
    </aside>


    <script>
    // Ajoute la classe 'sidebar-opened' au body lorsque la barre latérale est ouverte
    document.querySelector('.ad_sidebar').addEventListener('mouseenter', function() {
        document.body.classList.add('sidebar-opened');
    });

    // Retire la classe 'sidebar-opened' du body lorsque la barre latérale est fermée
    document.querySelector('.ad_sidebar').addEventListener('mouseleave', function() {
        document.body.classList.remove('sidebar-opened');
    });
    </script>

</body>

</html>