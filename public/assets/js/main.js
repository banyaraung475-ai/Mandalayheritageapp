document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.heritage-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const selected = button.dataset.filter;

            filterButtons.forEach(item => item.classList.toggle('active', item === button));

            cards.forEach(card => {
                const match = selected === 'All' || card.dataset.category === selected;
                card.classList.toggle('hidden', !match);
            });
        });
    });

    const mapEl = document.getElementById('heritageMap');
    const dataEl = document.getElementById('heritageSitesData');

    if (mapEl && dataEl) {
        if (typeof L === 'undefined') {
            console.error('Leaflet failed to load; the heritage map cannot be initialized.');
            return;
        }

        let sites;
        try {
            sites = JSON.parse(dataEl.textContent.trim());
        } catch (e) {
            console.warn('Failed to parse heritage sites data', e);
            return;
        }

        const validSites = sites
            .map(site => ({ ...site, lat: Number(site.lat), lng: Number(site.lng) }))
            .filter(site => Number.isFinite(site.lat) && Number.isFinite(site.lng));
        if (!validSites.length) return;

        const bounds = validSites.map(s => [s.lat, s.lng]);
        const map = L.map('heritageMap', {
            scrollWheelZoom: false,
            zoomControl: true
        }).fitBounds(bounds, { padding: [50, 50], maxZoom: 15 });

        requestAnimationFrame(() => map.invalidateSize());
        window.addEventListener('resize', () => map.invalidateSize());

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const makeIcon = (accent) => L.divIcon({
            className: `heritage-marker marker-${accent || 'gold'}`,
            html: '<div class="marker-pin"></div>',
            iconSize: [28, 28],
            iconAnchor: [14, 28],
            popupAnchor: [0, -26]
        });

        const markers = [];
        validSites.forEach((site, index) => {
            const marker = L.marker([site.lat, site.lng], { icon: makeIcon(site.accent) }).addTo(map);
            const popupContent = `
                <span class="popup-number">${String(index + 1).padStart(2, '0')}</span>
                <small>${site.category}</small>
                <strong>${site.name}</strong>
                <span class="popup-location">${site.gps}</span>
                <p>${site.description}</p>
            `;
            marker.bindPopup(popupContent);
            marker.on('click', () => {
                markers.forEach(item => item.getElement()?.classList.remove('selected'));
                marker.getElement()?.classList.add('selected');
            });
            markers.push(marker);
        });

        const focusSite = (siteIndex) => {
            const site = validSites[siteIndex];
            const marker = markers[siteIndex];
            if (!site || !marker) return;

            markers.forEach(item => item.getElement()?.classList.remove('selected'));
            marker.getElement()?.classList.add('selected');
            mapEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
            map.setView([site.lat, site.lng], Math.max(map.getZoom(), 16), { animate: true });
            marker.openPopup();
        };

        document.querySelectorAll('.card-image[data-site-index], .heritage-card[data-site-index] .card-image').forEach(image => {
            const card = image.closest('.heritage-card');
            const siteIndex = Number(card?.dataset.siteIndex);
            image.addEventListener('click', () => focusSite(siteIndex));
            image.addEventListener('keydown', event => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    focusSite(siteIndex);
                }
            });
        });

    }
});
