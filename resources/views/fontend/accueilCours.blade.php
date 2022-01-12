@include('partial.header')
@section('title')
  Accueil cours
@endsection
    <section class="accueilcours">
        <div class="container-fluid ">
            <div class="container">
                <div class="accueilcours_header">
                    <h1>  Adobe illustrator </h1>
                    <p>Gain the fundamental skills you need to interact with and query your data in SQL—a powerful language used by data-driven businesses large and small to explore and manipulate their data to extract meaningful insights. In this track, you'll learn the skills you need to level up your data skills and leave Excel behind you. Through hands-on exercises, you’ll discover how to quickly summarize, join tables, and use window functions and built-in PostgreSQL functions to analyze your data.</p>
                    <span>Design </span>
                    <i class="fas fa-chess-clock-alt"> 6 hours</i>
                    <i class="fas fa-lamp"> 6 Courses</i>
                </div>

            </div>
        </div>
    </section>
    <section data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-expand-sm fixed-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#Apropos">A propos du cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Programme">Programmes du cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Commentaire">Avis des participants</a>
                </li>
            </ul>
        </nav>
        <div id="Apropos">
            <p>Vous apprendrez à déplacer, transformer, couper et répéter des illustrations. Vous apprendrez aussi à redessiner des exemples réels de logos célèbres. Ce qui est sûr Nous couvrirons l'essentiel pour tout savoir, comme la sauvegarde et l'exportation correctes, ainsi que bien plus encore.Si vous n’avez jamais ouvert Illustrator auparavant, ou si vous l’avez ouvert et que vous vous êtes débattu avec, venez avec moi, je vais vous montrer le moyen le plus simple de créer de belles illustrations.</p>
        </div>
        <div id="Programme">
            
        </div>
    </section>


    <script>
        $('div{1:div|body}').scrollspy({
            target: '#navId'
        });
    </script>

@include('partial.footer')
