(function () {
    var config = window.PAGE_PROTECT || {};
    var passwordMeta = document.querySelector('meta[name="page-protect-password"]');

    if (passwordMeta) {
        config.password = config.password || passwordMeta.getAttribute('content') || '';
        config.eyebrow = config.eyebrow || (document.querySelector('meta[name="page-protect-eyebrow"]') || {}).content;
        config.title = config.title || (document.querySelector('meta[name="page-protect-title"]') || {}).content;
        config.hint = config.hint || (document.querySelector('meta[name="page-protect-hint"]') || {}).content;
        config.note = config.note || (document.querySelector('meta[name="page-protect-note"]') || {}).content;
    }

    if (!config.password) {
        return;
    }

    var storageKey = 'page-protect:' + window.location.pathname;

    function bindSidebarMotion(gate) {
        function attachToSidebar(sidebar) {
            if (!sidebar || sidebar.dataset.pageProtectBound === 'true') {
                return;
            }

            function syncState() {
                gate.classList.toggle('sidebar-hovered', sidebar.classList.contains('hovered'));
            }

            sidebar.addEventListener('mouseenter', syncState);
            sidebar.addEventListener('mouseleave', syncState);

            var sidebarObserver = new MutationObserver(syncState);
            sidebarObserver.observe(sidebar, { attributes: true, attributeFilter: ['class'] });

            sidebar.dataset.pageProtectBound = 'true';
            syncState();
        }

        var existingSidebar = document.getElementById('sidebarWrapper');
        if (existingSidebar) {
            attachToSidebar(existingSidebar);
        }

        var bodyObserver = new MutationObserver(function () {
            var sidebar = document.getElementById('sidebarWrapper');
            if (sidebar) {
                attachToSidebar(sidebar);
            }
        });

        bodyObserver.observe(document.body, { childList: true, subtree: true });
    }

    function markUnlocked() {
        sessionStorage.setItem(storageKey, 'unlocked');
        document.documentElement.classList.remove('page-protect-locked');
        document.body.classList.remove('page-protect-scroll-lock');

        var gate = document.querySelector('.page-protect-gate');
        if (gate) {
            gate.remove();
        }
    }

    if (sessionStorage.getItem(storageKey) === 'unlocked') {
        return;
    }

    document.documentElement.classList.add('page-protect-locked');

    function createGate() {
        document.body.classList.add('page-protect-scroll-lock');

        var gate = document.createElement('div');
        gate.className = 'page-protect-gate';
        gate.innerHTML = [
            '<div class="page-protect-card">',
            '<p class="page-protect-eyebrow">', (config.eyebrow || 'Private Case Study'), '</p>',
            '<h1 class="page-protect-title">', (config.title || 'Password Required'), '</h1>',
            '<p class="page-protect-copy">', (config.note || 'Enter the password to view this page.'), '</p>',
            '<form class="page-protect-form">',
            '<label class="page-protect-label" for="page-protect-input">Password</label>',
            '<input id="page-protect-input" class="page-protect-input" type="password" autocomplete="current-password" placeholder="',
            (config.hint || 'Enter password'),
            '" />',
            '<p class="page-protect-error" aria-live="polite"></p>',
            '<div class="page-protect-actions">',
            '<button class="page-protect-button" type="submit">Enter</button>',
            '</div>',
            '</form>',
            '</div>'
        ].join('');

        document.body.appendChild(gate);
        bindSidebarMotion(gate);

        var form = gate.querySelector('.page-protect-form');
        var input = gate.querySelector('.page-protect-input');
        var error = gate.querySelector('.page-protect-error');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            if (input.value === config.password) {
                markUnlocked();
                return;
            }

            error.textContent = 'Incorrect password. Please try again.';
            input.value = '';
            input.focus();
        });

        input.focus();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', createGate);
    } else {
        createGate();
    }
})();
