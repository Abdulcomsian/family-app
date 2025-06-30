<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Social Media Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <style>
        body,
        html {
            font-family: "Open Sans", sans-serif;
        }

        .tab-button::after {
            background-color: var(--after-bg, transparent);
            transition: background-color 0.3s ease;
        }

        .notification-box {
            transition: all 0.3s ease-in-out;
            overflow-y: auto;
        }

        .notification-box {
            position: absolute;
            z-index: 1;
            /* Ensures it appears above other elements */
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-blue-100">
    @include("partials.nav")
    <div class="flex flex-col md:flex-row mx-auto max-w-[1440px]">
        @include("partials.sidebar")
        @yield("content")
    </div>
    <!-- @include("partials.scripts") -->
    @stack("scripts")
</body>

</html>