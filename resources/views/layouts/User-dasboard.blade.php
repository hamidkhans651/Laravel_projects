<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/src/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
    <script>
        if (localStorage.theme === 'dark' || !('theme' in localStorage)) {
            document.querySelector('php').classList.add('dark');
            document.querySelector('php').style.colorScheme = 'dark';
        } else {
            document.querySelector('php').classList.remove('dark');
            document.querySelector('php').style.colorScheme = 'light';
        }
    </script>
</head>

<body class="font-inter antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400">
    <p>user-dashboard</p>
    <noscript>You need to enable JavaScript to run this app.</noscript>

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>
    <div id="root"></div>
    <script type="module" src="/resources/views/Dashboards/Users-dashboard/src/main.jsx"></script>
</body>

</html>