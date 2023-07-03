<?php 
$stylepath = "assets/css/";
$scriptpath = "assets/js/";
$pagepath = "assets/page/";
$basepath = "";
include 'assets/partials/_header.php';
?>
    <main>
        <h1 class="title">Partiel Dev</h1>
        <div class="article_content">
            <article id="art_1">
                <h2>Html</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum labore ex nesciunt laudantium. Iusto aut dicta voluptates quidem, sit voluptatibus dignissimos inventore tempora, sapiente facere velit debitis suscipit hic ea!</p>
                <p id="art_1_content"></p>
                <button id="art_1_btn">En savoir plus</button>
            </article>
            <article id="art_2">
                <h2>Css</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, nihil voluptatem! Officiis sunt cupiditate, quis harum iste laborum sapiente enim, nulla suscipit numquam commodi rem veniam aut quas? Vero, illo?</p>
                <p id="art_2_content"></p>
                <button id="art_2_btn">En savoir plus</button>
            </article>
            <article id="art_3">
                <h2>Js</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nam cupiditate neque maxime beatae ipsa amet deserunt enim minima maiores possimus ullam soluta reiciendis aspernatur, at nostrum dolore obcaecati distinctio.</p>
                <p id="art_3_content"></p>
                <button id="art_3_btn">En savoir plus</button>
            </article>
        </div>

        <button id="btn" class="Btnadmin" onclick="adminBtn()">Page Admin très secrète</button>
    </main>

<?php
include 'assets/partials/_footer.php';
?>
