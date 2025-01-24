<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Chapter Hub - Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tailwind CSS (via CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&family=Lato:wght@100;400;700&display=swap&">

    <!-- Boxicons (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicons/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicons/ms-icon-144x144.png') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body>
    <!-- HEADER -->
    <header>
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-md">
            <div class="container mx-auto flex justify-between items-center py-4 px-6">
                <!-- Logo -->
                <a href="#" class="flex items-center">
                    <img src="logo-2.png" alt="The Chapter Hub Logo" class="h-10 w-auto">
                </a>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden flex items-center text-gray-700 focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <!-- Navbar Links -->
                <div id="navbarNav" class="hidden lg:flex lg:items-center lg:space-x-6">
                    <ul class="flex flex-col lg:flex-row lg:space-x-6 text-gray-700">
                        <li class="nav-item">
                            <a href="index.html" class="hover:text-indigo-600 transition duration-300">Home</a>
                        </li>
                        <li class="nav-item relative group">
                            <a href="#" class="hover:text-indigo-600 transition duration-300 flex items-center">
                                Genres
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Dropdown Menu -->
                            <ul class="absolute left-0 mt-2 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 transition duration-300 z-10">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Action</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Romance</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Poems</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">See more...</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="hover:text-indigo-600 transition duration-300">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="hover:text-indigo-600 transition duration-300">Join Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="hover:text-indigo-600 transition duration-300">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="hover:text-indigo-600 transition duration-300">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        <section class="hero bg-light text-dark py-5 text-center">
            <!-- Hero Section-->
            <div class="container">
                <div class="card">
                    <div class="imgBox">
                        <div class="bark"></div>
                        <img src="logo-3.png" alt="The Last of Us">
                    </div>
                    <div class="details">
                        <!-- <h4 class="color1">You're not a Fossil! (YET)</h2> -->
                        <h4 class="color2 margin">Welcome to The Chapter Hub!!</h3>
                            <p>Welcome Readers,</p>
                            <p>We're thrilled to have you here!</p>
                            <p>Explore a collection of captivating stories,</p>
                            <p>immerse yourself in thrilling adventures,</p>
                            <p>and let your imagination soar with every</p>
                            <p>word. Your next favorite story is just a</p>
                            <p>click away.</p>
                            <p class="text-right">Happy Reading!</p>
                            <p class="text-right">♥The Team</p>
                    </div>
                </div>
            </div>

            </div>
        </section>

        <!-- Genres Section -->
        <section class="genres-carousel py-5 text-center">
            <div class="container">
                <div class="container-fluid">
                    <!-- <h1>Welcome to The Chapter Hub</h1> -->
                    <h2>Explore</h2>
                    <div class="search-bar mt-4">
                        <input type="text" class="form-control form-control-lg" placeholder="Search stories...">
                        <button type="button" id="searchButton" class="btn bx bx-search" title="Search">
                            <!-- <i class=''></i> -->
                        </button>
                    </div>
                    <!-- Modal for Search Results -->
                    <div class="modal fade" id="searchResultsModal" tabindex="-1"
                        aria-labelledby="searchResultsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="searchResultsModalLabel">Search Results</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="searchResults"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h2>Genres</h2>
                <div class="row mt-4">
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Mystery')">Mystery</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Poems')">Poems</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Horror')">Horror</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Thriller')">Thriller</button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Romance')">Romance</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Suspense')">Suspense</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Adventure')">Adventure</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button class="genre-btn btn btn-outline-danger btn-lg"
                            onclick="genreClick('Drama/Play')">Drama/Play</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Stories -->
        <section class="featured-stories py-5">
            <div class="container">
                <h2 class="text-center mb-4">Featured Stories</h2>
                <!-- Latest Stories -->
                <div class="row">
                    <!-- Romance Stories -->
                    <div class="col-12">
                        <h3>Romance</h3>
                        <div class="story-row">
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(2)">
                                <img src="assets/files/stories/romance/romance_1.png" alt="Thumbnail">
                                <span id="story-title">When Two Lovers</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(3)">
                                <img src="assets/files/stories/romance/romance_2.png" alt="Thumbnail">
                                <span id="story-title">I wanna Grow Old With You</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(4)">
                                <img src="assets/files/stories/romance/romance_3.png" alt="Thumbnail">
                                <span id="story-title">Hold My Hands Darling</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(5)">
                                <img src="assets/files/stories/romance/romance_4.png" alt="Thumbnail">
                                <span id="story-title">Under The Nightly Skies</span>
                                <span id="story-rating"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Horror Stories -->
                    <div class="col-12">
                        <h3>Horror</h3>
                        <div class="story-row">
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(1)">
                                <img src="assets/files/stories/horror/horror_1.png" alt="">
                                <span class="story-title">The Midnight Heirloom</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(6)">
                                <img src="assets/files/stories/horror/horror_2.png" alt="">
                                <span id="story-title">Don't Look Down</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(7)">
                                <img src="assets/files/stories/horror/horror_3.png" alt="">
                                <span id="story-title">As of Midnight</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(8)">
                                <img src="assets/files/stories/horror/horror_4.png" alt="">
                                <span id="story-title">The Light Beyond The Walls</span>
                                <span id="story-rating"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Adventure Stories -->
                    <div class="col-12">
                        <h3>Adventure</h3>
                        <div class="story-row">
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(9)">
                                <img src="assets/files/stories/adventure/adventure_1.png" alt="">
                                <span id="story-title">Till We Meet Again</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(10)">
                                <img src="assets/files/stories/adventure/adventure_2.png" alt="">
                                <span id="story-title">Conquering the Running Waters</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(11)">
                                <img src="assets/files/stories/adventure/adventure_3.png" alt="">
                                <span id="story-title">Anywhere But Here</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(12)">
                                <img src="assets/files/stories/adventure/adventure_4.png" alt="">
                                <span id="story-title">Ticking Time Bomb</span>
                                <span id="story-rating"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Poems -->
                    <div class="col-12">
                        <h3>Poems</h3>
                        <div class="story-row">
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(13)">
                                <img src="assets/files/stories/poems/poem_1.png" alt="">
                                <span id="story-title">The Whispering Willow</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(14)">
                                <img src="assets/files/stories/poems/poem_2.png" alt="">
                                <span id="story-title">City Lights</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(15)">
                                <img src="assets/files/stories/poems/poem_3.png" alt="">
                                <span id="story-title">Echoes of Time</span>
                                <span id="story-rating"></span>
                            </div>
                            <div class="container-fluid" id="story-thumbnail" onclick="storyClick(16)">
                                <img src="assets/files/stories/poems/poem_4.png" alt="">
                                <span id="story-title">The Dance of Shadows</span>
                                <span id="story-rating"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <div class="icons-in-footer">
                <a href="#" class="nav-link" aria-label="Visit our Twitter page">
                    <span class="bx bxl-twitter bx-lg" aria-hidden="true"></span>
                </a>
                <a href="#" class="nav-link" aria-label="Visit our Instagram page">
                    <span class="bx bxl-instagram bx-lg" aria-hidden="true"></span>
                </a>
                <a href="#" class="nav-link" aria-label="Visit our Facebook page">
                    <span class="bx bxl-facebook-circle bx-lg" aria-hidden="true"></span>
                </a>
            </div>
            <hr>
            <p>&copy; 2025 The Chapter Hub | All Rights Reserved.</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>