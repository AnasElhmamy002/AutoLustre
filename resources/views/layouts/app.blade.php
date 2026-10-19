<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <style>
    @layer base {

        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            overscroll-behavior: none;
        }

        main>:first-child {
            margin-top: 0 !important;
        }

        main>:last-child {
            margin-bottom: 0 !important;
        }
    }

    ::-webkit-scrollbar {
        display: none;
    }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "tertiary-container": "#191c1e",
                    "on-surface": "#1a1b21",
                    "surface-container-high": "#e8e7ef",
                    "secondary-fixed-dim": "#9ed830",
                    "on-primary-fixed-variant": "#404758",
                    "secondary-fixed": "#b9f54c",
                    "on-secondary-fixed-variant": "#354e00",
                    "outline": "#76777d",
                    "surface-container": "#ededf4",
                    "on-tertiary-fixed": "#191c1e",
                    "tertiary": "#000000",
                    "error": "#ba1a1a",
                    "on-primary-fixed": "#141b2b",
                    "surface-container-low": "#f3f3fa",
                    "tertiary-fixed-dim": "#c4c7ca",
                    "surface-dim": "#d9d9e0",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed-variant": "#44474a",
                    "surface-bright": "#f9f9ff",
                    "surface-container-lowest": "#ffffff",
                    "primary": "#000000",
                    "on-surface-variant": "#45464c",
                    "on-secondary": "#ffffff",
                    "on-tertiary-container": "#818487",
                    "surface-tint": "#575e70",
                    "outline-variant": "#c6c6cd",
                    "primary-container": "#141b2b",
                    "inverse-on-surface": "#f0f0f7",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e2e2e9",
                    "on-tertiary": "#ffffff",
                    "surface": "#f9f9ff",
                    "background": "#f9f9ff",
                    "on-secondary-container": "#4b6d00",
                    "inverse-surface": "#2e3036",
                    "surface-variant": "#e2e2e9",
                    "on-secondary-fixed": "#131f00",
                    "tertiary-fixed": "#e0e3e6",
                    "error-container": "#ffdad6",
                    "on-background": "#1a1b21",
                    "secondary-container": "#b6f249",
                    "primary-fixed": "#dce2f7",
                    "secondary": "#476800",
                    "inverse-primary": "#c0c6db",
                    "on-primary": "#ffffff",
                    "on-primary-container": "#7d8497",
                    "primary-fixed-dim": "#c0c6db"
                },
                "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                },
                "spacing": {
                    "gutter": "1.5rem",
                    "margin-tablet": "2rem",
                    "space-xl": "2.5rem",
                    "space-sm": "0.5rem",
                    "space-xs": "0.25rem",
                    "margin-mobile": "1.25rem",
                    "space-lg": "1.5rem",
                    "space-md": "1rem",
                    "gutter-mobile": "1rem",
                    "margin": "3rem"
                },
                "fontFamily": {
                    "label-md": ["Plus Jakarta Sans"],
                    "label-sm": ["Plus Jakarta Sans"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "body-sm": ["Plus Jakarta Sans"],
                    "display-mobile": ["Plus Jakarta Sans"],
                    "title-md": ["Plus Jakarta Sans"],
                    "body-md": ["Plus Jakarta Sans"],
                    "headline-lg-mobile": ["Plus Jakarta Sans"],
                    "display": ["Plus Jakarta Sans"],
                    "title-sm": ["Plus Jakarta Sans"],
                    "headline-lg": ["Plus Jakarta Sans"],
                    "body-lg": ["Plus Jakarta Sans"],
                    "headline-sm": ["Plus Jakarta Sans"]
                },
                "fontSize": {
                    "label-md": ["14px", {
                        "lineHeight": "18px",
                        "letterSpacing": "0.01em",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["11px", {
                        "lineHeight": "14px",
                        "letterSpacing": "0.06em",
                        "fontWeight": "700"
                    }],
                    "headline-md": ["28px", {
                        "lineHeight": "36px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-sm": ["13px", {
                        "lineHeight": "18px",
                        "letterSpacing": "0.005em",
                        "fontWeight": "400"
                    }],
                    "display-mobile": ["36px", {
                        "lineHeight": "44px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "800"
                    }],
                    "title-md": ["18px", {
                        "lineHeight": "24px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-md": ["15px", {
                        "lineHeight": "24px",
                        "letterSpacing": "0em",
                        "fontWeight": "400"
                    }],
                    "headline-lg-mobile": ["28px", {
                        "lineHeight": "36px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "display": ["56px", {
                        "lineHeight": "64px",
                        "letterSpacing": "-0.03em",
                        "fontWeight": "800"
                    }],
                    "title-sm": ["16px", {
                        "lineHeight": "22px",
                        "letterSpacing": "0em",
                        "fontWeight": "600"
                    }],
                    "headline-lg": ["40px", {
                        "lineHeight": "48px",
                        "letterSpacing": "-0.025em",
                        "fontWeight": "700"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "letterSpacing": "-0.005em",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["22px", {
                        "lineHeight": "28px",
                        "letterSpacing": "-0.015em",
                        "fontWeight": "600"
                    }]
                }
            }
        }
    }
    </script>
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">
    @include('layouts.nav')

    <main class="w-full pt-[116px] bg-surface min-h-screen">
        @yield('content')
    </main>

    @include('layouts.footer')

    @stack('scripts')
</body>

</html>