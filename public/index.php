<?php
header('Location: discover.php');
exit;

$heritageSites = [
    [
        'name' => 'Mandalay Royal Palace',
        'category' => 'Historic',
        'location' => 'Mandalay',
        'distance' => '1.2 km',
        'description' => 'The last royal palace of Burma, a living symbol of Mandalay’s imperial legacy and grand architecture.',
        'image' => 'https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=900&q=80',
        'accent' => 'gold'
    ],
    [
        'name' => 'Kuthodaw Pagoda',
        'category' => 'Religious',
        'location' => 'Mandalay',
        'distance' => '2.4 km',
        'description' => 'Known as the world’s largest book, this sacred pagoda surrounds a row of marble-inscribed Buddhist scriptures.',
        'image' => 'https://images.unsplash.com/photo-1508009603885-50cf7c579365?auto=format&fit=crop&w=900&q=80',
        'accent' => 'teal'
    ],
    [
        'name' => 'Maha Muni Buddha Temple',
        'category' => 'Religious',
        'location' => 'Mandalay',
        'distance' => '3.1 km',
        'description' => 'A spiritual landmark where devotees gather to honor the revered and carefully maintained Buddha image.',
        'image' => 'https://images.unsplash.com/photo-1516483638261-f4dbaf036963?auto=format&fit=crop&w=900&q=80',
        'accent' => 'rose'
    ],
    [
        'name' => 'Shwenandaw Monastery',
        'category' => 'Cultural',
        'location' => 'Mandalay',
        'distance' => '2.9 km',
        'description' => 'An exquisite teakwood monastery retaining the artistry and craftsmanship of the Konbaung era.',
        'image' => 'https://images.unsplash.com/photo-1528181304800-259b08848526?auto=format&fit=crop&w=900&q=80',
        'accent' => 'amber'
    ],
    [
        'name' => 'Sagaing Hill',
        'category' => 'Natural',
        'location' => 'Sagaing',
        'distance' => '12 km',
        'description' => 'A panoramic landscape dotted with monasteries, pagodas, and scenic viewpoints overlooking the Ayeyarwady River.',
        'image' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=900&q=80',
        'accent' => 'sage'
    ],
    [
        'name' => 'Inwa Bridge & Ancient City',
        'category' => 'Historic',
        'location' => 'Inwa',
        'distance' => '20 km',
        'description' => 'An archaeological landscape where royal ruins, pagodas, and the famous teak bridge tell stories of a forgotten capital.',
        'image' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=900&q=80',
        'accent' => 'copper'
    ],
    [
        'name' => 'Atumashi Monastery',
        'category' => 'Cultural',
        'location' => 'Mandalay',
        'distance' => '900 m',
        'description' => 'A striking example of Burmese religious architecture with elegant terraces and historic significance.',
        'image' => 'https://images.unsplash.com/photo-1521295121783-8a321d551ad2?auto=format&fit=crop&w=900&q=80',
        'accent' => 'indigo'
    ],
    [
        'name' => 'Yadanabon University Historic Zone',
        'category' => 'Historic',
        'location' => 'Mandalay',
        'distance' => '1.9 km',
        'description' => 'A heritage corridor blending colonial-era structures, civic spaces, and urban memory across central Mandalay.',
        'image' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=900&q=80',
        'accent' => 'sand'
    ]
];

$categories = ['All', 'Historic', 'Religious', 'Cultural', 'Natural'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandalay Heritage | Discover the Living Legacy</title>
    <meta name="description" content="Explore Mandalay's iconic heritage landmarks, ancient temples, royal history, and cultural treasures.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav-wrap">
            <div class="brand">
                <span class="brand-mark">MH</span>
                <div>
                    <strong>Mandalay</strong>
                    <small>Heritage</small>
                </div>
            </div>
            <nav class="main-nav">
                <a href="#about">About</a>
                <a href="#discover">Discover</a>
                <a href="#stories">Stories</a>
                <a href="#visit">Visit</a>
            </nav>
            <a class="nav-cta" href="#discover">Explore now</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-overlay"></div>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">Cultural map of Mandalay</span>
                    <h1>Discover the soul of Mandalay through its heritage.</h1>
                    <p>
                        Step into a city shaped by royal legacy, spiritual devotion, colonial memory,
                        and timeless craftsmanship.
                    </p>
                    <div class="hero-actions">
                        <a href="#discover" class="button primary">Explore landmarks</a>
                        <a href="#about" class="button secondary">Learn more</a>
                    </div>
                    <ul class="hero-meta">
                        <li><strong>80+</strong><span>heritage sites</span></li>
                        <li><strong>5</strong><span>heritage themes</span></li>
                        <li><strong>1000+</strong><span>annual visitors</span></li>
                    </ul>
                </div>
                <div class="hero-panel">
                    <div class="panel-card featured">
                        <span class="badge">Featured route</span>
                        <h2>Royal Mandalay</h2>
                        <div class="route-points">
                            <span>Mandalay Royal Palace</span>
                            <span>Kuthodaw Pagoda</span>
                            <span>Shwenandaw Monastery</span>
                        </div>
                        <div class="panel-footer">
                            <div>
                                <small>Distance</small>
                                <strong>4.7 km</strong>
                            </div>
                            <div>
                                <small>Best time</small>
                                <strong>Sunrise</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="highlights">
            <div class="container highlights-grid">
                <article>
                    <span class="icon">🏛️</span>
                    <h3>Royal Legacy</h3>
                    <p>Ancient palaces, monasteries, and civic halls preserving Mandalay’s imperial past.</p>
                </article>
                <article>
                    <span class="icon">🧭</span>
                    <h3>Curated Routes</h3>
                    <p>Explore handpicked heritage trails crafted for walking, discovery, and meaning.</p>
                </article>
                <article>
                    <span class="icon">🌿</span>
                    <h3>Living Culture</h3>
                    <p>See how temples, neighborhoods, and landscapes continue to shape everyday life.</p>
                </article>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container about-grid">
                <div class="about-copy">
                    <span class="eyebrow accent">A city that remembers</span>
                    <h2>Heritage woven into the rhythm of daily life.</h2>
                    <p>
                        Mandalay is more than a destination. It is a living archive of Buddhist devotion,
                        royal architecture, craftsmanship, and community memory.
                    </p>
                    <p>
                        From pagodas and monasteries to river-facing viewpoints and historic urban spaces,
                        every landmark tells a story about resilience, beauty, and continuity.
                    </p>
                </div>
                <div class="about-stats">
                    <div class="stat-box">
                        <strong>31</strong>
                        <span>key heritage stops</span>
                    </div>
                    <div class="stat-box">
                        <strong>18th-20th</strong>
                        <span>century timeline</span>
                    </div>
                    <div class="stat-box">
                        <strong>4</strong>
                        <span>heritage categories</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="discover" id="discover">
            <div class="container">
                <div class="section-head">
                    <div>
                        <span class="eyebrow accent">Discover</span>
                        <h2>Explore iconic sites</h2>
                    </div>
                    <div class="filters" aria-label="Filter heritage categories">
                        <?php foreach ($categories as $category): ?>
                            <button class="filter-btn <?= $category === 'All' ? 'active' : '' ?>" data-filter="<?= $category ?>"><?= $category ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="cards-grid" id="siteGrid">
                    <?php foreach ($heritageSites as $site): ?>
                        <article class="heritage-card" data-category="<?= $site['category'] ?>">
                            <div class="card-image" style="background-image:url('<?= $site['image'] ?>')">
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

        <section class="stories" id="stories">
            <div class="container stories-grid">
                <div class="story-copy">
                    <span class="eyebrow accent">Heritage stories</span>
                    <h2>Follow the stories behind the stone, river, and pagoda.</h2>
                    <p>
                        Mandalay’s monuments are rooted in devotion and dynastic memory. Each landmark carries
                        a visual language of craftsmanship, cultural ceremony, and urban identity.
                    </p>
                    <ul>
                        <li>Temple architecture shaped by Buddhist symbolism and royal patronage</li>
                        <li>Urban districts reflecting colonial influence and regional identities</li>
                        <li>River-and-hill landscapes guiding spiritual and civic movement</li>
                    </ul>
                </div>
                <div class="story-panel">
                    <div class="story-feature">
                        <small>Best known landmark</small>
                        <h3>Maha Muni Temple</h3>
                        <p>One of the most revered Buddhist pilgrimage sites in Myanmar, known for its ritual care and deep spiritual atmosphere.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="visit" id="visit">
            <div class="container visit-box">
                <div>
                    <span class="eyebrow">Plan a visit</span>
                    <h2>Experience Mandalay beyond the guidebook.</h2>
                </div>
                <a href="#discover" class="button primary">Start your route</a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-wrap">
            <div>
                <div class="brand footer-brand">
                    <span class="brand-mark">MH</span>
                    <div>
                        <strong>Mandalay</strong>
                        <small>Heritage</small>
                    </div>
                </div>
            </div>
            <p>Preserving stories, places, and identity across Mandalay.</p>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
