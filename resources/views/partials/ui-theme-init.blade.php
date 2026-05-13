{{-- Apply UI theme before paint: Tailwind dark: needs html.dark + darkMode: 'class' in tailwind config (see dev/mock-layout.blade.php). --}}
<script>
(function () {
    try {
        var key = 'norms-ui-theme';
        var stored = localStorage.getItem(key);
        var root = document.documentElement;
        if (stored === 'dark') {
            root.classList.add('dark');
        } else if (stored === 'light') {
            root.classList.remove('dark');
        } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            root.classList.add('dark');
        } else {
            root.classList.remove('dark');
        }
    } catch (e) {}
})();
</script>
