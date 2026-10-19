@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- SECTION 1: HERO / SYSTEM ARCHITECTURE -->
    <section class="relative w-full bg-surface-container-lowest overflow-hidden">
        <div
            class="absolute -right-32 -top-32 w-96 h-96 bg-secondary-fixed/20 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute left-1/4 bottom-0 w-80 h-80 bg-surface-container-high/60 rounded-full blur-2xl pointer-events-none">
        </div>
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-xl lg:py-24 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                <div class="lg:col-span-7 flex flex-col">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-low w-fit mb-space-md shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-secondary-fixed animate-pulse"></span>
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant font-bold">System
                            Architecture &amp; Workflow</span>
                    </div>
                    <h1
                        class="font-display text-display text-primary tracking-tight font-extrabold mb-space-md leading-none">
                        Engineered for Intuitive, Rapid Detailing.
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-space-xl">
                        From in-vehicle USB-C fast charging to microscopic debris capture, discover how the
                        AutoLustre Cordless Vacuum streamlines daily automotive maintenance in seconds.
                    </p>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm pt-space-xs">
                        <div class="p-3 bg-surface-container-low rounded-lg shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="material-symbols-outlined text-[18px] text-secondary">bolt</span>
                                <span
                                    class="font-label-sm text-label-sm uppercase text-on-surface-variant font-semibold">Deployment</span>
                            </div>
                            <p class="font-title-sm text-title-sm text-primary font-bold">Zero Setup Time</p>
                        </div>
                        <div class="p-3 bg-surface-container-low rounded-lg shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="material-symbols-outlined text-[18px] text-secondary">usb</span>
                                <span
                                    class="font-label-sm text-label-sm uppercase text-on-surface-variant font-semibold">Standard</span>
                            </div>
                            <p class="font-title-sm text-title-sm text-primary font-bold">5V/2A USB-C</p>
                        </div>
                        <div class="p-3 bg-surface-container-low rounded-lg shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="material-symbols-outlined text-[18px] text-secondary">filter_alt</span>
                                <span
                                    class="font-label-sm text-label-sm uppercase text-on-surface-variant font-semibold">Filtration</span>
                            </div>
                            <p class="font-title-sm text-title-sm text-primary font-bold">Dual-Layer Washable
                            </p>
                        </div>
                        <div class="p-3 bg-surface-container-low rounded-lg shadow-sm">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="material-symbols-outlined text-[18px] text-secondary">volume_down</span>
                                <span
                                    class="font-label-sm text-label-sm uppercase text-on-surface-variant font-semibold">Acoustics</span>
                            </div>
                            <p class="font-title-sm text-title-sm text-primary font-bold">68dB Ultra-Quiet</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 relative">
                    <div class="relative bg-surface-container-low rounded-2xl p-space-md shadow-md">
                        <div class="relative h-80 sm:h-96 w-full rounded-xl overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Close up studio product shot of AutoLustre matte charcoal cordless automotive vacuum lying cleanly alongside its modular crevice tool and charging cable on sleek slate automotive workshop workbench, crisp precision studio lighting, high tech detailing aesthetic"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnW_l3uW7Uh8aT3sanwp6NDZXMPk_c4SJnFPo2UwZ1ckWi7wSPSPeqRXyXy_L0s1Vc3jJCEOgF8wR8wprlvGo27_XWNwpc-SYnf55ARFwwogrFywnQCuT5riiaXk4REcLgSBnD2IYapC_alpQQs0e1RNJAYw-q7lcSRXBjgWtAD13CJYjFa6i7j9jWE8sqEfnA758v7zf7QLJVJvaCTMkmH3Awhy4zuLBrGl67x-FAEpNPwkf07xVvLA" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent flex items-end p-space-md">
                                <div class="text-on-primary">
                                    <span
                                        class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-wider font-bold">Precision
                                        Instrument</span>
                                    <p class="font-title-md text-title-md font-bold">Series 1 Cordless Handheld
                                        Unit</p>
                                    <p class="font-body-sm text-body-sm text-on-primary-container">Total weight:
                                        412g • 6,000 Pa Turbine Motor</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center justify-between text-on-surface px-1">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-secondary-fixed"></span>
                                <span
                                    class="font-label-sm text-label-sm font-semibold uppercase tracking-wider text-on-surface-variant">Active
                                    Firmware v2.4</span>
                            </div>
                            <span class="font-label-sm text-label-sm font-mono text-outline">AUTO-CALIBRATED
                                SPEED</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 2: 4-STAGE OPERATIONAL BREAKDOWN -->
    <section class="w-full py-space-xl bg-surface">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="max-w-3xl mb-space-xl">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Standard
                    Operating Procedure</span>
                <h2 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight mt-1 mb-space-sm">
                    Precision Workflow: 4 Operational Stages
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Engineered to eliminate friction from initial cabin inspection to final touchless canister
                    purge. No cords, no awkward dockings, no compromised airflow.
                </p>
            </div>
            <!-- Stage 01 -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg mb-space-xl items-center">
                <div class="lg:col-span-5 bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span
                            class="font-display text-display leading-none text-surface-container-highest font-extrabold select-none">01</span>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Deployment
                                &amp; Power</span>
                            <h3 class="font-headline-sm text-headline-sm font-bold text-primary">Universal
                                In-Vehicle Recharge</h3>
                        </div>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                        Equipped with an intelligent high-density lithium-ion battery. Simply plug into any
                        vehicle 12V adapter, center console USB-C port, or standard home charging brick. Reaches
                        full 25-minute runtime capacity in ~2.5 hours with LED state-of-charge indicators.
                    </p>
                    <div class="bg-surface-container-low p-space-md rounded-xl space-y-space-sm">
                        <span
                            class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold tracking-wider block">LED
                            Telemetry Diagnostics</span>
                        <div class="flex items-center justify-between text-body-sm font-body-sm">
                            <span class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-surface-tint animate-ping"></span>
                                <span>Flashing White Pulse</span>
                            </span>
                            <span class="font-semibold text-primary">Active Charging</span>
                        </div>
                        <div class="flex items-center justify-between text-body-sm font-body-sm">
                            <span class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-secondary-fixed"></span>
                                <span>Solid Green Luminescence</span>
                            </span>
                            <span class="font-semibold text-primary">100% Ready (Full Load)</span>
                        </div>
                        <div class="flex items-center justify-between text-body-sm font-body-sm">
                            <span class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                                <span>Intermittent Amber</span>
                            </span>
                            <span class="font-semibold text-primary">&lt;15% Power Reservation</span>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:col-span-7 h-80 sm:h-96 rounded-2xl overflow-hidden shadow-sm relative bg-surface-container-low">
                    <img class="w-full h-full object-cover"
                        data-alt="Interior center console of a high-end luxury vehicle showing the AutoLustre matte black vacuum plugged into a sleek USB-C fast charging braided cable, soft ambient dashboard lights, clean organized modern car interior"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBiCvESLgQKzEHQg3H_FqPzxkOVgp7QLJxlRiYMdBKzll3q_M1X3-GWm8jQmzWa7vmaSmuTsH5r9KsNdsF0Tf7_NK4eEK7BnEsqsayNd4ELxD_59isSZiPKe9R5RHkH7CvuhpKVx5IyJ2_AaAOCQi0ZDNuHjOxwCLEKBiFsN95ezRbcZaIdncCpgNw4emHg9mOWRvgKDROGBvBJiJD8FXjUhRl-aC8glZnIy02J_W6DbOTLzTUCwf_qeQ" />
                    <div
                        class="absolute bottom-4 left-4 right-4 bg-primary/80 backdrop-blur-md p-space-sm rounded-xl text-on-primary flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span
                                class="material-symbols-outlined text-secondary-fixed text-[20px]">battery_charging_full</span>
                            <span class="font-label-md text-label-md font-semibold">USB-C Power Delivery 3.0
                                Compatible</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary-fixed uppercase font-bold">2.5h
                            Full Recharge</span>
                    </div>
                </div>
            </div>
            <!-- Stage 02 -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg mb-space-xl items-center">
                <div class="lg:col-span-7 order-2 lg:order-1 grid grid-cols-1 sm:grid-cols-3 gap-space-sm">
                    <!-- Attachment 1 -->
                    <div
                        class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary mb-space-sm">
                                <span class="material-symbols-outlined">straighten</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Lance
                                Attachment</span>
                            <h4 class="font-title-sm text-title-sm font-bold text-primary mt-1 mb-1">Ultra-Slim
                                Crevice Lance</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                14.2 inches reach deep down seat railings, tight center console cracks, and deep
                                glove box seams.
                            </p>
                        </div>
                        <div class="mt-space-md pt-space-xs bg-surface-container-low/50 p-2 rounded text-center">
                            <span class="font-label-sm text-label-sm font-semibold text-primary">Seat Tracks
                                &amp; Gaps</span>
                        </div>
                    </div>
                    <!-- Attachment 2 -->
                    <div
                        class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary mb-space-sm">
                                <span class="material-symbols-outlined">brush</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Agitator
                                Brush</span>
                            <h4 class="font-title-sm text-title-sm font-bold text-primary mt-1 mb-1">
                                High-Density Horsehair</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Non-scratch microscopic fibers protect piano-black consoles, digital touchscreen
                                bezels, and HVAC louvers.
                            </p>
                        </div>
                        <div class="mt-space-md pt-space-xs bg-surface-container-low/50 p-2 rounded text-center">
                            <span class="font-label-sm text-label-sm font-semibold text-primary">Piano Trim
                                &amp; Vents</span>
                        </div>
                    </div>
                    <!-- Attachment 3 -->
                    <div
                        class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary mb-space-sm">
                                <span class="material-symbols-outlined">view_stream</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary font-bold uppercase">Wide
                                Intake</span>
                            <h4 class="font-title-sm text-title-sm font-bold text-primary mt-1 mb-1">Direct
                                Suction Funnel</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Maximum CFM intake for coarse gravel, dried winter road salts, and stubborn
                                embedded pet hair on trunk carpets.
                            </p>
                        </div>
                        <div class="mt-space-md pt-space-xs bg-surface-container-low/50 p-2 rounded text-center">
                            <span class="font-label-sm text-label-sm font-semibold text-primary">Floor Mats
                                &amp; Trunks</span>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:col-span-5 order-1 lg:order-2 bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span
                            class="font-display text-display leading-none text-surface-container-highest font-extrabold select-none">02</span>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Modular
                                Geometry</span>
                            <h3 class="font-headline-sm text-headline-sm font-bold text-primary">Selecting the
                                Exact Instrument</h3>
                        </div>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                        Automotive cabins feature heterogeneous textures—from vulnerable high-gloss acrylic
                        displays to rugged woven carpet loops. The modular quick-lock friction sleeve snaps
                        attachments into place with mechanical tactile certainty in under one second.
                    </p>
                    <div class="p-space-sm bg-surface-container-low rounded-xl flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary text-[24px]">lock_reset</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">
                            Tolerances engineered to 0.05mm prevent accidental detachment under high negative
                            pressure.
                        </span>
                    </div>
                </div>
            </div>
            <!-- Stage 03 -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg mb-space-xl items-center">
                <div class="lg:col-span-5 bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span
                            class="font-display text-display leading-none text-surface-container-highest font-extrabold select-none">03</span>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Turbine
                                Physics</span>
                            <h3 class="font-headline-sm text-headline-sm font-bold text-primary">High-Velocity
                                Aerodynamic Suction</h3>
                        </div>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                        A 6,000 Pa sustained suction velocity is generated by our brushless micro-turbine
                        spinning at 42,000 RPM. A continuous dual-cyclone vortex creates centrifugal separation,
                        ensuring the motor intake never clogs or loses pressure even as the 150ml collection
                        chamber fills.
                    </p>
                    <div class="grid grid-cols-2 gap-space-sm">
                        <div class="p-space-sm bg-surface-container-low rounded-lg">
                            <span class="font-headline-md text-headline-md font-bold text-primary block">6,000
                                Pa</span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">Constant
                                Negative Pressure</span>
                        </div>
                        <div class="p-space-sm bg-surface-container-low rounded-lg">
                            <span class="font-headline-md text-headline-md font-bold text-primary block">42k
                                RPM</span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">Brushless
                                Micro-Turbine</span>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:col-span-7 h-80 sm:h-96 rounded-2xl overflow-hidden shadow-sm relative bg-surface-container-low">
                    <img class="w-full h-full object-cover"
                        data-alt="Photorealistic action shot of AutoLustre vacuum crevice attachment extracting dust and gravel effortlessly from dark perforated leather sports car seats, cinematic high-contrast lighting, immaculate detailing craft"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp3Py4_5VbBw1pu9EDYCBI8anMcCFKobQtBlJp8x2ZA5287XgxbGXzx7rdLh8cTq_E93QD5j2WLQ5FfFCur-T-d48XA4tP52Coo317IFV94rAi-DltUSCj1yQ4gzFq3P_vBiMJvHwBrxaJEDOKDzJyNSXXDwEjbz7X1KwUhc69cI0dxyfLor5H3imDftHaXFa7zNf_obZMKrHLFO2UvyAB9dTuvc3P8dTn0ggWeuTepCA3hrs7mGE0ZA" />
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-primary/60 via-transparent to-transparent flex items-center p-space-lg">
                        <div class="max-w-xs text-on-primary">
                            <span
                                class="font-label-sm text-label-sm text-secondary-fixed uppercase font-bold tracking-wider">Dual-Cyclone
                                Isolation</span>
                            <h4 class="font-title-md text-title-md font-bold mt-1">Zero CFM Loss Over Full
                                Chamber Cycle</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stage 04 -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                <div
                    class="lg:col-span-7 order-2 lg:order-1 h-80 sm:h-96 rounded-2xl overflow-hidden shadow-sm relative bg-surface-container-low">
                    <img class="w-full h-full object-cover"
                        data-alt="Overhead clean minimalist product photograph showing the disassembled AutoLustre dust chamber, stainless steel mesh pre-filter, and white micro-HEPA filter core resting on a clean surface with dry water droplets, highlighting washable longevity"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAlrMqnqNZX9TZ-UJTZ86d055fv2YfcSvAorTNyMX2tp61obm9L4rKu26LUzw60Xh1XXHh4KIE2JPMC3NH--iks05-K9GtPB-P6m2SFFcVQCnqBB4GxVAxFOEB-Ie0Yc8spFTyJpssYEkzqSWgVLiT_545xH75CTPVkeLTf3GSs3rxyD5vQZroR1yuAXOGIf90EtUxAQ0BM0z2OMe2p9YRrwyf7dC4Ey9Ur1yEwdY-829Qolh_zBBoag" />
                    <div
                        class="absolute bottom-4 left-4 right-4 bg-primary/80 backdrop-blur-md p-space-sm rounded-xl text-on-primary flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary-fixed text-[20px]">water_drop</span>
                            <span class="font-label-md text-label-md font-semibold">100% Water-Rinseable
                                Core</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary-fixed uppercase font-bold">Fast
                            3-Hour Air Dry</span>
                    </div>
                </div>
                <div
                    class="lg:col-span-5 order-1 lg:order-2 bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span
                            class="font-display text-display leading-none text-surface-container-highest font-extrabold select-none">04</span>
                        <div>
                            <span
                                class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Sanitary
                                Maintenance</span>
                            <h3 class="font-headline-sm text-headline-sm font-bold text-primary">Hygienic
                                Disposal &amp; Longevity</h3>
                        </div>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                        Single-button spring latch flips the debris gate directly over the trash bin for
                        complete touchless disposal—eliminating dirty hands. Both the surgical stainless steel
                        outer mesh shield and the dense micro-HEPA filter are washable and dry in under three
                        hours.
                    </p>
                    <div class="space-y-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><strong>One-Touch Spring Latch:</strong> Empties the 150ml canister directly
                                into trash bins.</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><strong>Grade-304 Stainless Mesh:</strong> Blocks hair and large gravel before
                                touching the filter.</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                            <span><strong>True Micro-HEPA:</strong> Traps 99.7% of microscopic allergens,
                                exhaust particulates, and dust.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 3: USE CASE SCENARIO MATRIX -->
    <section class="w-full py-space-xl bg-surface-container-low">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl">
                <div>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Field
                        Effectiveness</span>
                    <h2 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight mt-1">
                        Where AutoLustre Excels
                    </h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-md mt-2 md:mt-0">
                    Tailored speed protocols designed around the real everyday disruptions that compromise
                    luxury automotive cabins.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
                <!-- Scenario 1 -->
                <div
                    class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div>
                        <div class="flex items-center justify-between mb-space-sm">
                            <span
                                class="w-10 h-10 rounded-xl bg-secondary-fixed/30 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">coffee</span>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold">30
                                SECONDS</span>
                        </div>
                        <h4 class="font-title-md text-title-md font-bold text-primary mb-1">Morning Commute
                            Cleanup</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Quickly captures dry coffee grounds, pastry flakes, and jacket lint trapped in
                            cupholders and seat seams before pulling into work.
                        </p>
                    </div>
                    <div
                        class="mt-space-md pt-space-xs flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span>Recommended Tool: Crevice Lance</span>
                    </div>
                </div>
                <!-- Scenario 2 -->
                <div
                    class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div>
                        <div class="flex items-center justify-between mb-space-sm">
                            <span
                                class="w-10 h-10 rounded-xl bg-secondary-fixed/30 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">pets</span>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold">3
                                MINUTES</span>
                        </div>
                        <h4 class="font-title-md text-title-md font-bold text-primary mb-1">Post-Dog Park
                            De-Shedding</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Lifts stubborn dog and cat hair woven into trunk lining and rear bench fabric
                            without leaving static cling or fiber damage.
                        </p>
                    </div>
                    <div
                        class="mt-space-md pt-space-xs flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span>Recommended Tool: Direct Intake</span>
                    </div>
                </div>
                <!-- Scenario 3 -->
                <div
                    class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div>
                        <div class="flex items-center justify-between mb-space-sm">
                            <span
                                class="w-10 h-10 rounded-xl bg-secondary-fixed/30 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">child_care</span>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold">5
                                MINUTES</span>
                        </div>
                        <h4 class="font-title-md text-title-md font-bold text-primary mb-1">Family SUV &amp;
                            Child Seats</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Extracts deeply buried snack crumbs, cheerios, and sandbox dirt beneath child
                            booster seats and seatbelt anchors.
                        </p>
                    </div>
                    <div
                        class="mt-space-md pt-space-xs flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span>Recommended Tool: Lance + Horsehair</span>
                    </div>
                </div>
                <!-- Scenario 4 -->
                <div
                    class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div>
                        <div class="flex items-center justify-between mb-space-sm">
                            <span
                                class="w-10 h-10 rounded-xl bg-secondary-fixed/30 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">sports_score</span>
                            </span>
                            <span
                                class="px-2 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold">2
                                MINUTES</span>
                        </div>
                        <h4 class="font-title-md text-title-md font-bold text-primary mb-1">Vintage Cabin &amp;
                            Leather</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Gentle soft-bristle suction clears delicate analog gauge clusters, walnut veneers,
                            and contrast saddle stitching safely.
                        </p>
                    </div>
                    <div
                        class="mt-space-md pt-space-xs flex items-center gap-1.5 text-secondary font-label-sm text-label-sm font-bold">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span>Recommended Tool: Soft Horsehair</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 4: TECHNICAL DOS & DON'TS / BATTERY CARE -->
    <section class="w-full py-space-xl bg-surface">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="max-w-3xl mb-space-xl">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Technical
                    Directives</span>
                <h2 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight mt-1 mb-space-sm">
                    Maintenance &amp; Battery Care Protocols
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Adhering to these strict operating procedures guarantees sustained peak 6,000 Pa motor draw
                    and ensures multi-year lithium cell stability.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg">
                <!-- DOs -->
                <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                    <div class="flex items-center gap-2 mb-space-md">
                        <span
                            class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold">
                            <span class="material-symbols-outlined text-[18px]">check</span>
                        </span>
                        <h3 class="font-title-md text-title-md font-bold text-primary">Approved Operational
                            Protocols (DO)</h3>
                    </div>
                    <div class="space-y-space-md">
                        <div class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] mt-0.5">check_circle</span>
                            <div>
                                <p class="font-title-sm text-title-sm font-bold text-primary">Rinse with
                                    Lukewarm Plain Water</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Flush the
                                    micro-HEPA filter under gentle tap flow. Allow to air dry for at least 3
                                    hours before reattaching.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] mt-0.5">check_circle</span>
                            <div>
                                <p class="font-title-sm text-title-sm font-bold text-primary">Optimal Thermal
                                    Cabin Storage</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Designed for
                                    glovebox or door-pocket storage between -10°C and 45°C (14°F - 113°F)
                                    year-round.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] mt-0.5">check_circle</span>
                            <div>
                                <p class="font-title-sm text-title-sm font-bold text-primary">Utilize Standard
                                    5V/2A or 9V PD Input</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Safe with factory
                                    vehicle USB-C outlets, auxiliary 12V adapters, and laptop power bricks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DONTs -->
                <div class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm">
                    <div class="flex items-center gap-2 mb-space-md">
                        <span
                            class="w-8 h-8 rounded-full bg-error-container flex items-center justify-center text-error font-bold">
                            <span class="material-symbols-outlined text-[18px]">close</span>
                        </span>
                        <h3 class="font-title-md text-title-md font-bold text-primary">Prohibited Conditions
                            (DON'T)</h3>
                    </div>
                    <div class="space-y-space-md">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-error text-[20px] mt-0.5">cancel</span>
                            <div>
                                <p class="font-title-sm text-title-sm font-bold text-primary">No Standing Water
                                    or Chemical Liquids</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Do not vacuum wet
                                    coffee spills, degreasers, or fuel puddle runoff. Designed solely for dry
                                    granular particulates.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-error text-[20px] mt-0.5">cancel</span>
                            <div>
                                <p class="font-title-sm text-title-sm font-bold text-primary">Never Use
                                    Corrosive Cleaners on HEPA</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Avoid bleach,
                                    isopropyl alcohol, or harsh wheel cleaners when washing the filter, as
                                    chemical agents break down fiber bonding.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-error text-[20px] mt-0.5">cancel</span>
                            <div>
                                <p class="font-title-sm text-title-sm font-bold text-primary">Never Run Motor
                                    Without Both Filter Layers</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Operating the
                                    turbine without the stainless pre-mesh or HEPA cartridge will compromise
                                    internal turbine bearings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 5: FREQUENTLY ASKED QUESTIONS -->
    <section class="w-full py-space-xl bg-surface-container-low">
        <div class="max-w-4xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="text-center mb-space-xl">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">In-Depth
                    Clarity</span>
                <h2 class="font-headline-lg text-headline-lg font-bold text-primary tracking-tight mt-1 mb-space-xs">
                    Operational Frequently Asked Questions
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Everything you need to understand
                    regarding charging, filter replacement cycles, and real-world durability.</p>
            </div>
            <div class="space-y-space-sm" id="accordion-group">
                <!-- Question 1 -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                    <button
                        class="w-full px-space-lg py-space-md flex items-center justify-between text-left focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span class="font-title-sm text-title-sm font-bold text-primary">Can I leave the
                            AutoLustre vacuum plugged into my vehicle USB-C port while driving?</span>
                        <span
                            class="material-symbols-outlined text-on-surface-variant transform transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="px-space-lg pb-space-md text-body-md text-on-surface-variant hidden">
                        Yes. The AutoLustre incorporates an integrated Overcharge &amp; Thermal Protection IC.
                        Once the internal lithium battery reaches 100%, trickle charging automatically
                        terminates. You can safely store it connected inside your center console on long drives
                        without battery degradation.
                    </div>
                </div>
                <!-- Question 2 -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                    <button
                        class="w-full px-space-lg py-space-md flex items-center justify-between text-left focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span class="font-title-sm text-title-sm font-bold text-primary">How frequently should
                            the micro-HEPA filter cartridge be replaced?</span>
                        <span
                            class="material-symbols-outlined text-on-surface-variant transform transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="px-space-lg pb-space-md text-body-md text-on-surface-variant hidden">
                        Because the dual stainless-steel mesh captures 90% of large dust particles before they
                        ever contact the HEPA pleats, each filter lasts significantly longer than conventional
                        models. Under regular weekly detailing, we recommend water-rinsing monthly and replacing
                        the core filter every 6 to 9 months for peak airflow. Replacement 3-packs are available
                        directly in our Shop.
                    </div>
                </div>
                <!-- Question 3 -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                    <button
                        class="w-full px-space-lg py-space-md flex items-center justify-between text-left focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span class="font-title-sm text-title-sm font-bold text-primary">What happens if I
                            accidentally vacuum up slightly damp dirt or wet pebbles?</span>
                        <span
                            class="material-symbols-outlined text-on-surface-variant transform transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="px-space-lg pb-space-md text-body-md text-on-surface-variant hidden">
                        Damp dirt, dried mud crumbles, or pebbles carrying slight moisture will be sequestered
                        in the lower collection basin without harming the turbine. However, avoid vacuuming
                        actual standing puddles of water. If damp debris is captured, immediately unlatch the
                        canister, rinse the stainless shield, and allow everything to thoroughly air dry.
                    </div>
                </div>
                <!-- Question 4 -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                    <button
                        class="w-full px-space-lg py-space-md flex items-center justify-between text-left focus:outline-none"
                        onclick="toggleFaq(this)">
                        <span class="font-title-sm text-title-sm font-bold text-primary">What is covered under
                            the AutoLustre 1-Year Comprehensive Warranty?</span>
                        <span
                            class="material-symbols-outlined text-on-surface-variant transform transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="px-space-lg pb-space-md text-body-md text-on-surface-variant hidden">
                        All units are covered against manufacturing defects, internal motor failure, battery
                        degradation below 80% original capacity within 12 months, and attachment latch
                        malfunction. We provide complimentary expedited replacement shipping within both the
                        United States and Canada.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 6: FINAL ACTION CTA -->
    <section class="w-full py-space-xl bg-surface-container-lowest relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/5 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin relative z-10">
            <div
                class="bg-primary text-on-primary rounded-3xl p-space-xl md:p-16 flex flex-col lg:flex-row items-center justify-between gap-space-xl shadow-xl">
                <div class="max-w-xl text-left">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-on-primary/10 text-secondary-fixed font-label-sm text-label-sm uppercase font-bold tracking-wider mb-space-sm">
                        <span>Guaranteed Next-Day Dispatch</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg font-bold text-on-primary tracking-tight mb-space-sm">
                        Ready to Elevate Your Cabin Care?
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-primary-container mb-space-md">
                        Experience effortless, immediate cleanups with zero cords. The complete kit includes the
                        AutoLustre Handheld Vacuum, 3 modular attachments, USB-C high-speed cable, and washable
                        HEPA core.
                    </p>
                    <div class="flex items-baseline gap-space-sm">
                        <span
                            class="font-display text-display font-extrabold text-on-primary leading-none">$44.99</span>
                        <span class="font-body-md text-body-md text-on-primary-container font-semibold">USD</span>
                        <span
                            class="text-secondary-fixed font-label-sm text-label-sm uppercase tracking-wider font-bold ml-2">
                            • Complimentary Shipping on $50+ orders
                        </span>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row lg:flex-col gap-space-sm w-full lg:w-auto">
                    <a class="px-8 py-4 bg-secondary-fixed hover:bg-secondary-fixed-dim text-primary font-label-md text-label-md font-bold rounded flex items-center justify-center gap-2 transition-colors shadow-sm"
                        data-path="shop" href="#">
                        <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                        <span>Order AutoLustre Vacuum</span>
                    </a>
                    <a class="px-8 py-4 bg-on-primary/10 hover:bg-on-primary/20 text-on-primary font-label-md text-label-md font-semibold rounded flex items-center justify-center gap-2 transition-colors"
                        data-path="shop" href="#">
                        <span>Explore Full Specs &amp; Accessories</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Interactive script for FAQ accordion behavior -->
    <script>
    function toggleFaq(button) {
        const content = button.nextElementSibling;
        const icon = button.querySelector('.material-symbols-outlined');
        const isHidden = content.classList.contains('hidden');

        if (isHidden) {
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    }
    </script>
</div>

@endsection