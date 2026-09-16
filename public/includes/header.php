<?php
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Mandalay Heritage' ?></title>
    <meta name="description" content="<?= $pageDescription ?? "Explore Mandalay's heritage" ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav-wrap">
            <a class="brand" href="index.php" aria-label="Mandalay Heritage Home">
                <span class="brand-mark">MH</span>
                <div>
                    <strong>Mandalay</strong>
                    <small>Heritage</small>
                </div>
            </a>
            <nav class="main-nav" aria-label="Main navigation">
            <a href="discover.php" class="<?= $currentPage === 'discover' ? 'active' : '' ?>">Home</a>
             <!-- <a href="index.php" class="<?= $currentPage === 'home' ? 'active' : '' ?>">Home</a> -->
                <a href="about.php" class="<?= $currentPage === 'about' ? 'active' : '' ?>">About</a>
                <a href="stories.php" class="<?= $currentPage === 'stories' ? 'active' : '' ?>">Stories</a>
                <a href="visit.php" class="<?= $currentPage === 'visit' ? 'active' : '' ?>">Visit</a>
            </nav>
            <a class="nav-cta" href="visit.php">Explore now</a>
        </div>
    </header>
