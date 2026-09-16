<?php
$pageTitle = 'Discover | Mandalay Heritage';
$pageDescription = 'Browse Mandalay heritage landmarks and discover iconic cultural sites and walking routes.';
$currentPage = 'discover';
$heritageSites = [
    ['name' => 'Mandalay Royal Palace', 'category' => 'Historic', 'location' => 'Mandalay', 'distance' => '1.2 km', 'gps' => '21.9747° N, 96.0844° E', 'description' => 'The last royal palace of Burma, a symbol of imperial power and magnificent design.', 'image' => 'https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=900&q=80', 'accent' => 'gold'],
    ['name' => 'Kuthodaw Pagoda', 'category' => 'Religious', 'location' => 'Mandalay', 'distance' => '2.4 km', 'gps' => '21.9709° N, 96.0831° E', 'description' => 'A sacred complex known for the world’s largest book of scriptures, carved in marble.', 'image' => 'https://images.unsplash.com/photo-1508009603885-50cf7c579365?auto=format&fit=crop&w=900&q=80', 'accent' => 'teal'],
    ['name' => 'Maha Muni Buddha Temple', 'category' => 'Religious', 'location' => 'Mandalay', 'distance' => '3.1 km', 'gps' => '21.9667° N, 96.0907° E', 'description' => 'A revered pilgrimage site where the Buddha image is ritually revered and cared for.', 'image' => 'https://images.unsplash.com/photo-1516483638261-f4dbaf036963?auto=format&fit=crop&w=900&q=80', 'accent' => 'rose'],
    ['name' => 'Shwenandaw Monastery', 'category' => 'Cultural', 'location' => 'Mandalay', 'distance' => '2.9 km', 'gps' => '21.9739° N, 96.0817° E', 'description' => 'A finely carved teakwood monastery with priceless remnants of royal-era craftsmanship.', 'image' => 'https://images.unsplash.com/photo-1528181304800-259b08848526?auto=format&fit=crop&w=900&q=80', 'accent' => 'amber'],
    ['name' => 'Sagaing Hill', 'category' => 'Natural', 'location' => 'Sagaing', 'distance' => '12 km', 'gps' => '21.9140° N, 95.9951° E', 'description' => 'A panoramic heritage landscape with monasteries and striking views over the river.', 'image' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=900&q=80', 'accent' => 'sage'],
    ['name' => 'Inwa Bridge & Ancient City', 'category' => 'Historic', 'location' => 'Inwa', 'distance' => '20 km', 'gps' => '21.8420° N, 95.9750° E', 'description' => 'A sprawling archaeological landscape that preserves the memory of an ancient capital.', 'image' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=900&q=80', 'accent' => 'copper'],
    ['name' => 'Atumashi Monastery', 'category' => 'Cultural', 'location' => 'Mandalay', 'distance' => '900 m', 'gps' => '21.9726° N, 96.0872° E', 'description' => 'A landmark of local heritage known for monumental stairways and tranquil courtyards.', 'image' => 'https://images.unsplash.com/photo-1521295121783-8a321d551ad2?auto=format&fit=crop&w=900&q=80', 'accent' => 'indigo'],
    ['name' => 'Yadanabon University Historic Zone', 'category' => 'Historic', 'location' => 'Mandalay', 'distance' => '1.9 km', 'gps' => '21.9695° N, 96.0882° E', 'description' => 'A heritage district where urban memory, civic identity, and historic architecture converge.', 'image' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=900&q=80', 'accent' => 'sand']
];
$categories = ['All', 'Historic', 'Religious', 'Cultural', 'Natural'];
include __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero small-hero">
        <div class="container narrow-copy">
            <span class="eyebrow">Discover</span>
            <h1>Explore Mandalay’s iconic heritage sites.</h1>
        </div>
    </section>

    <section class="location-map-section">
        <div class="container location-map-box">
            <div class="map-copy">
                <span class="eyebrow accent">Map location</span>
                <h2>Follow the historic core of Mandalay.</h2>
                <p>Key heritage places cluster around the royal, spiritual, and civic heart of the city, creating an easy walking route through Mandalay’s most memorable landmarks.</p>
            </div>

            <div class="map-panel">
                <div id="heritageMap"></div>
            </div>
            <script id="heritageSitesData" type="application/json">
                <?= json_encode(array_map(function($site) {
                    preg_match('/([\d.]+)° N,\s*([\d.]+)° E/', $site['gps'], $matches);
                    return [
                        'name' => $site['name'],
                        'category' => $site['category'],
                        'lat' => isset($matches[1]) ? (float)$matches[1] : null,
                        'lng' => isset($matches[2]) ? (float)$matches[2] : null,
                        'gps' => $site['gps'],
                        'description' => $site['description'],
                        'accent' => $site['accent']
                    ];
                }, $heritageSites)) ?>
            </script>
        </div>
    </section>

    <section class="discover-page">
        <div class="container">
            <div class="filters" aria-label="Filter heritage categories">
                <?php foreach ($categories as $category): ?>
                    <button class="filter-btn <?= $category === 'All' ? 'active' : '' ?>" data-filter="<?= $category ?>"><?= $category ?></button>
                <?php endforeach; ?>
            </div>

            <div class="cards-grid" id="siteGrid">
                <?php foreach ($heritageSites as $siteIndex => $site): ?>
                    <article class="heritage-card" data-category="<?= $site['category'] ?>" data-site-index="<?= $siteIndex ?>">
                        <div class="card-image" role="button" tabindex="0" aria-label="Show <?= htmlspecialchars($site['name'], ENT_QUOTES) ?> on the map" style="background-image:url('<?= $site['image'] ?>')">
                            <span class="card-tag <?= $site['accent'] ?>"><?= $site['category'] ?></span>
                        </div>
                        <div class="card-body">
                            <div class="card-topline">
                                <span><?= $site['location'] ?></span>
                                <span><?= $site['distance'] ?></span>
                            </div>
                            <h3><?= $site['name'] ?></h3>
                            <p><?= $site['description'] ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
