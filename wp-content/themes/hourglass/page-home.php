<?php
/* Template Name: Home */
$currentPostId = 18;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <script src="js/page-home.js"></script>

    <title>Hourglass</title>

    <style>
        /* .graphs-row {
            border: solid black 1px;
        } */

        .scrollbar {
            scrollbar-width: thin;
            scrollbar-color: grey white;
        }
    </style>
</head>

<script>
    var post = {};
    var allPosts = [];
    var selecedTitles = [];

    /**
     * This will load all the posts from the backend
     * This will act as an async function
     */
    const loadAllPosts = async () => {
        return "hello";
    }

    loadAllPosts().then( (value) => {
        console.log(value);
    })

    /**
     * Use this function to get the data from all posts
     */
    const loadWikiContent = (title, content, author, publishedDate) => {
        document.getElementById("wiki_content_title").innerHTML = title;
        document.getElementById("wiki_content_content").innerHTML = content;
        document.getElementById("wiki_content_author_details").innerHTML = `${publishedDate} -- by ${author}`;
    }

    const loadGraph = () => {

    }

    const loadTableOfContent = () => {

    }

    const loadHistoryContent = () => {

    }

    
</script>

<body style="overflow: hidden;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="https://mdbgo.com/">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="16" alt="H O U R G L A S S" loading="lazy" style="margin-top: -1px;" />
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Dashboard</a> -->
                    </li>
                </ul>
                <!-- Left links -->

                <div class="d-flex align-items-center">
                    <!-- <button type="button" class="btn btn-link px-3 me-2">
                        Login
                    </button> -->
                    <!-- <button type="button" class="btn btn-primary me-3">
                        Sign up for free
                    </button> -->
                    <a class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 graphs-row">
                <h4>Graph</h4>
            </div>

            <div id="wiki_content" class="scrollbar col-sm-8 graphs-row" style="height: 100vh;overflow: scroll !important;/*! width: 200px; */">
                <div>
                    <h1 id="wiki_content_title"><?php echo get_post_field('post_title', 18); ?></h1>
                    <p id="wiki_content_author_details">2022 -- by Karl Marx, edited by Leon Trosky</p>
                </div>

                <div id="wiki_content_content">
                    <?php echo get_post_field('post_content', 18); ?>
                </div>

            </div>

            <div class="col-sm-2 graphs-row">
                <h4>Table of content</h4>
                <ol>
                    <?php

                    $args = array(
                        'post_type' => 'sand_management',
                        'posts_per_page' => 5,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                            <li style="cursor: pointer" onclick="loadWikiContent(`<?php echo the_title() ?>`, `<?php echo the_content() ?>`, `<?php echo the_author() ?>`, `<?php echo the_date() ?>`)"><?php the_title(); ?></li>
                    <?php
                        // Add example code here to get desired results.

                        endwhile;

                        /* Restore original Post Data */
                        wp_reset_postdata();

                    endif;

                    ?>
                </ol>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>