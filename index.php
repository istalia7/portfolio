<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="index.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <title>Portfolio</title>
</head>
<body>
    <header id="Accueil">
        <nav>
            <div><a class="nav_links" href="#Accueil">Accueil</a></div>
            <i class="fa-solid fa-bars"></i>
            <ul class="liste_navbar">
                <li><a class="nav_links" href="#git">Profil</a></li>
                <li><a class="nav_links" href="#comp">Compétences</a></li>
                <li>Me contacter</li>
            </ul>
        </nav>
    </header>    

    <div id="intro">
        <p id="texte_centre">Alexis Perotin, Apprenti développeur web et web mobile</p>
    </div>

    <div id="git">
        <p>Vous pouvez retrouver mes projets sur mon profil Github ou via les images ! &nbsp; 
            <a href="https://github.com/istalia7" target="_blank"><img src="/images/25231.png" alt="Logo Github" width="35vh" height="35vh"></a>
        </p>
        
        <div id="projets_git">
            <div class="texte_img">
                Portfolio
                <a href="https://github.com/istalia7/Portfolio" target="_blank"><img class="preview_projects" src="/images/preview_portoflio.png" width="325vh"></a>
                </div>
            <div class="texte_img">
                Mon CV
                <a href="https://github.com/istalia7/CV" target="_blank"><img class="preview_projects" src="/images/preview_CV.png" width="325vh"></a>
                 </div>
        </div>
    </div>

    <div id="comp">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, harum illum explicabo voluptates modi cum libero magnam vel corrupti, deserunt, quam laborum magni reiciendis aliquam aliquid nostrum. Eius, impedit reprehenderit?</p>
            <div id="language_skills">
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
                <p class="language_icons"></p>
            </div>
    </div>
</body>
</html>