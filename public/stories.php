<?php
$pageTitle = 'Stories | Mandalay Heritage';
$pageDescription = 'Read the stories behind Mandalay’s heritage, architecture, devotion, and cultural memory.';
$currentPage = 'stories';
include __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero small-hero">
        <div class="container narrow-copy">
            <span class="eyebrow">Stories</span>
            <h1>Every monument carries a story.</h1>
        </div>
    </section>

    <section class="story-sections">
        <div class="container story-map-wrap">
            <div class="story-map-panel">
                <div class="story-map-header">
                    <span class="eyebrow accent">Story map</span>
                    <h2>Heritage route through the heart of Mandalay</h2>
                </div>
                <div class="story-map">
                    <div class="map-node node-one">
                        <span class="dot"></span>
                        <div class="map-card">
                            <small>Stop 01</small>
                            <strong>Mandalay Royal Palace</strong>
                            <em>21.9747° N, 96.0844° E</em>
                        </div>
                    </div>
                    <div class="map-node node-two">
                        <span class="dot"></span>
                        <div class="map-card">
                            <small>Stop 02</small>
                            <strong>Kuthodaw Pagoda</strong>
                            <em>21.9709° N, 96.0831° E</em>
                        </div>
                    </div>
                    <div class="map-node node-three">
                        <span class="dot"></span>
                        <div class="map-card">
                            <small>Stop 03</small>
                            <strong>Shwenandaw Monastery</strong>
                            <em>21.9739° N, 96.0817° E</em>
                        </div>
                    </div>
                    <div class="map-node node-four">
                        <span class="dot"></span>
                        <div class="map-card">
                            <small>Stop 04</small>
                            <strong>Sagaing Hill</strong>
                            <em>21.9140° N, 95.9951° E</em>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container detail-intro">
            <span class="eyebrow accent">Story details</span>
            <h2>Each site tells a different chapter of Mandalay.</h2>
        </div>

        <div class="container story-detail-grid">
            <article class="story-detail-card">
                <span class="story-tag">Royal memory</span>
                <h3>Royal Palace</h3>
                <p>The palace district represents the political and ceremonial center of Mandalay. It tells the story of a last dynasty that fused power, ritual, and architecture into a single urban expression.</p>
                <div class="detail-gps">GPS: 21.9747° N, 96.0844° E</div>
            </article>
            <article class="story-detail-card">
                <span class="story-tag">Religious devotion</span>
                <h3>Kuthodaw Pagoda</h3>
                <p>Known as the “World’s Largest Book,” this sacred site turns scripture into architecture. Its marble halls are an expression of both spiritual humility and the city’s deep literary tradition.</p>
                <div class="detail-gps">GPS: 21.9709° N, 96.0831° E</div>
            </article>
            <article class="story-detail-card">
                <span class="story-tag">Craftsmanship</span>
                <h3>Shwenandaw Monastery</h3>
                <p>Its carved teak walls preserve the beauty of royal-era craftsmanship. The monastery speaks to a craft culture where wood, faith, and artistic memory were inseparable.</p>
                <div class="detail-gps">GPS: 21.9739° N, 96.0817° E</div>
            </article>
            <article class="story-detail-card">
                <span class="story-tag">Landscape & view</span>
                <h3>Sagaing Hill</h3>
                <p>From the river-facing heights, the story of Mandalay expands beyond the city walls. Sagaing brings together monastic life, panoramic views, and a broader regional identity shaped by water and hill.</p>
                <div class="detail-gps">GPS: 21.9140° N, 95.9951° E</div>
            </article>
        </div>

        <div class="container story-list">
            <article class="story-item">
                <div>
                    <span class="story-tag">Royal memory</span>
                    <h2>The city of kings</h2>
                    <p>Mandalay’s royal sites reveal the ambition and grandeur of the last Burmese kingdom, where architecture served as both ceremony and politics.</p>
                </div>
                <img src="https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=900&q=80" alt="Mandalay palace" />
            </article>

            <article class="story-item reverse">
                <div>
                    <span class="story-tag">Spiritual rhythm</span>
                    <h2>Pagodas and everyday devotion</h2>
                    <p>Temples and monasteries are not isolated monuments here—they are places where ritual, learning, and community life continue in everyday rhythm.</p>
                </div>
                <img src="https://images.unsplash.com/photo-1508009603885-50cf7c579365?auto=format&fit=crop&w=900&q=80" alt="Pagoda in Mandalay" />
            </article>

            <article class="story-item">
                <div>
                    <span class="story-tag">Urban heritage</span>
                    <h2>Streets that remember</h2>
                    <p>Historic neighborhoods, civic buildings, and riverside spaces show how Mandalay evolved through trade, British influence, and local identity.</p>
                </div>
                <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=900&q=80" alt="Historic city street" />
            </article>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
