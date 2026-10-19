@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- HERO SECTION -->
    <section class="relative w-full overflow-hidden bg-surface py-space-xl lg:py-24">
        <!-- Ambient Precision Glows -->
        <div
            class="pointer-events-none absolute -top-40 -left-40 h-96 w-96 rounded-full bg-secondary-fixed/20 blur-3xl">
        </div>
        <div
            class="pointer-events-none absolute top-1/2 right-0 h-96 w-96 rounded-full bg-surface-container-high/60 blur-3xl">
        </div>
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="grid grid-cols-1 items-center gap-space-xl lg:grid-cols-12 lg:gap-12">
                <!-- Left Column: Copy & Actions -->
                <div class="flex flex-col items-start lg:col-span-7">
                    <!-- Accent Badge -->
                    <div
                        class="inline-flex items-center gap-2 rounded-full bg-secondary-container/30 px-3.5 py-1 text-on-secondary-container">
                        <span class="h-2 w-2 rounded-full bg-secondary"></span>
                        <span class="font-label-sm text-label-sm tracking-wider uppercase">PRECISION AUTOMOTIVE
                            CARE</span>
                    </div>
                    <!-- Main Headline -->
                    <h1 class="mt-space-md font-display text-display text-on-surface">
                        Your Car Deserves a Deeper Clean.
                    </h1>
                    <!-- Supporting Text -->
                    <p class="mt-space-md max-w-xl font-body-lg text-body-lg text-on-surface-variant">
                        Make everyday messes easier to handle with convenient cleaning tools designed for life
                        on the go.
                    </p>
                    <!-- Social Proof Rating -->
                    <div class="mt-space-md flex flex-wrap items-center gap-2 text-on-surface">
                        <div class="flex text-amber-500">
                            <span class="material-symbols-outlined text-[20px]"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-[20px]"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-[20px]"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-[20px]"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined text-[20px]"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <span class="font-title-sm text-title-sm font-bold">4.9/5</span>
                        <span class="text-outline">·</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">based on verified driver
                            experiences</span>
                    </div>
                    <!-- CTA Pair -->
                    <div class="mt-space-lg flex w-full flex-col gap-space-sm sm:w-auto sm:flex-row sm:items-center">
                        <a class="inline-flex items-center justify-center rounded bg-secondary-fixed px-6 py-4 font-label-md text-label-md text-primary shadow-sm transition hover:bg-secondary-fixed-dim"
                            href="#product-showcase">
                            <span>Shop the Vacuum — $44.99 USD</span>
                            <span class="material-symbols-outlined ml-2 text-[18px]">arrow_forward</span>
                        </a>
                        <a class="inline-flex items-center justify-center rounded bg-surface-container-lowest px-6 py-4 font-label-md text-label-md text-on-surface shadow-sm transition hover:bg-surface-container"
                            href="#how-it-works">
                            <span>See How It Works</span>
                            <span class="material-symbols-outlined ml-2 text-[18px]">play_circle</span>
                        </a>
                    </div>
                    <!-- Micro-trust Signals -->
                    <div
                        class="mt-space-lg flex flex-wrap items-center gap-y-2 gap-x-4 font-label-sm text-label-sm text-on-surface-variant">
                        <span class="inline-flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                            30-Day In-Hand Trial</span>
                        <span class="hidden sm:inline text-outline">•</span>
                        <span class="inline-flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                            Ships to US &amp; Canada</span>
                        <span class="hidden sm:inline text-outline">•</span>
                        <span class="inline-flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                            1-Year Limited Hardware
                            Warranty</span>
                    </div>
                </div>
                <!-- Right Column: Visual Stage with Floating Chips -->
                <div class="relative flex items-center justify-center lg:col-span-5">
                    <!-- Background Stage Plate -->
                    <div class="relative w-full overflow-hidden rounded-xl bg-surface-container-lowest p-6 shadow-xl">
                        <div
                            class="relative flex aspect-square w-full items-center justify-center overflow-hidden rounded-lg bg-surface-container-low">
                            <img alt="AutoLustre Cordless Car Vacuum with detailing attachments"
                                class="h-full w-full object-cover transition-transform duration-700 hover:scale-105"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA" />
                        </div>
                        <!-- Floating Highlight Callout 1 -->
                        <div
                            class="absolute top-10 -left-2 z-10 hidden sm:flex items-center gap-3 rounded-lg bg-primary/95 px-3.5 py-2.5 text-on-primary shadow-xl backdrop-blur-md">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-full bg-secondary-fixed text-primary">
                                <span class="material-symbols-outlined text-[16px]">scale</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="font-label-sm text-[10px] text-on-primary-container uppercase tracking-wider">Ergonomic
                                    Form</span>
                                <span class="font-label-md text-label-md">Cordless &amp; Portable (1.4
                                    lbs)</span>
                            </div>
                        </div>
                        <!-- Floating Highlight Callout 2 -->
                        <div
                            class="absolute -bottom-2 -right-2 z-10 hidden sm:flex items-center gap-3 rounded-lg bg-primary/95 px-3.5 py-2.5 text-on-primary shadow-xl backdrop-blur-md">
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-full bg-secondary-fixed text-primary">
                                <span class="material-symbols-outlined text-[16px]">electric_bolt</span>
                            </div>
                            <div class="flex flex-col">
                                <span
                                    class="font-label-sm text-[10px] text-on-primary-container uppercase tracking-wider">Core
                                    Performance</span>
                                <span class="font-label-md text-label-md">High-RPM Digital Motor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TRUST HIGHLIGHTS (SECTION D) -->
    <section class="w-full bg-surface-container-lowest py-space-xl">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Trust 1 -->
                <div class="flex items-start gap-4 rounded-xl bg-surface p-5 shadow-sm transition hover:shadow-md">
                    <div
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-secondary-fixed">
                        <span class="material-symbols-outlined text-[24px]">power</span>
                    </div>
                    <div>
                        <h3 class="font-title-sm text-title-sm font-bold text-on-surface">Everyday Cleaning</h3>
                        <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Quick grab-and-go
                            cordless design for instant cleanups on the road.</p>
                    </div>
                </div>
                <!-- Trust 2 -->
                <div class="flex items-start gap-4 rounded-xl bg-surface p-5 shadow-sm transition hover:shadow-md">
                    <div
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-secondary-fixed">
                        <span class="material-symbols-outlined text-[24px]">tune</span>
                    </div>
                    <div>
                        <h3 class="font-title-sm text-title-sm font-bold text-on-surface">Hard-to-Reach Areas
                        </h3>
                        <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Crevice tool and fine
                            detailing brush included in the box.</p>
                    </div>
                </div>
                <!-- Trust 3 -->
                <div class="flex items-start gap-4 rounded-xl bg-surface p-5 shadow-sm transition hover:shadow-md">
                    <div
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-secondary-fixed">
                        <span class="material-symbols-outlined text-[24px]">lock</span>
                    </div>
                    <div>
                        <h3 class="font-title-sm text-title-sm font-bold text-on-surface">Secure Checkout</h3>
                        <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Encrypted 256-bit
                            payment processing for complete peace of mind.</p>
                    </div>
                </div>
                <!-- Trust 4 -->
                <div class="flex items-start gap-4 rounded-xl bg-surface p-5 shadow-sm transition hover:shadow-md">
                    <div
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary text-secondary-fixed">
                        <span class="material-symbols-outlined text-[24px]">support_agent</span>
                    </div>
                    <div>
                        <h3 class="font-title-sm text-title-sm font-bold text-on-surface">Customer Support</h3>
                        <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Dedicated US &amp;
                            Canada automotive care team ready to assist.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCT SHOWCASE (SECTION E) -->
    <section class="w-full bg-surface py-space-xl" id="product-showcase">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Section Header -->
            <div class="mb-space-lg flex flex-col md:flex-row md:items-end md:justify-between">
                <div>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Flagship
                        Hardware</span>
                    <h2 class="mt-1 font-headline-lg text-headline-lg text-on-surface">AutoLustre Cordless Car
                        Vacuum</h2>
                </div>
                <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant md:mt-0">Model AL-V1 ·
                    Engineered in North America</p>
            </div>
            <!-- Spotlight Showcase Card -->
            <div class="overflow-hidden rounded-xl bg-surface-container-lowest p-6 shadow-xl lg:p-10">
                <div class="grid grid-cols-1 items-center gap-space-xl lg:grid-cols-12 lg:gap-12">
                    <!-- Visual & Gallery Thumbnails -->
                    <div class="flex flex-col gap-4 lg:col-span-6">
                        <div
                            class="relative aspect-square w-full overflow-hidden rounded-xl bg-surface-container-low shadow-sm">
                            <img alt="AutoLustre Cordless Car Vacuum High-Res Stage View"
                                class="h-full w-full object-cover object-center" id="main-product-image"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA" />
                            <div
                                class="absolute top-4 left-4 inline-flex items-center gap-1.5 rounded-full bg-surface-container-lowest/90 px-3 py-1 text-on-surface shadow-sm backdrop-blur-sm">
                                <span class="h-2 w-2 rounded-full bg-secondary"></span>
                                <span class="font-label-sm text-[11px] font-bold">READY TO SHIP</span>
                            </div>
                        </div>
                        <!-- In-box Feature Badges -->
                        <div class="grid grid-cols-3 gap-2 text-center">
                            <div class="rounded-lg bg-surface-container p-2.5">
                                <span
                                    class="material-symbols-outlined text-[20px] text-primary">battery_charging_full</span>
                                <p class="font-label-sm text-[11px] font-bold text-on-surface">USB-C Quick
                                    Charge</p>
                            </div>
                            <div class="rounded-lg bg-surface-container p-2.5">
                                <span class="material-symbols-outlined text-[20px] text-primary">filter_alt</span>
                                <p class="font-label-sm text-[11px] font-bold text-on-surface">Washable HEPA</p>
                            </div>
                            <div class="rounded-lg bg-surface-container p-2.5">
                                <span class="material-symbols-outlined text-[20px] text-primary">speed</span>
                                <p class="font-label-sm text-[11px] font-bold text-on-surface">High Suction
                                    Velocity</p>
                            </div>
                        </div>
                    </div>
                    <!-- Purchasing Engine & Selectors -->
                    <div class="flex flex-col lg:col-span-6">
                        <!-- Price Display -->
                        <div class="flex flex-wrap items-baseline gap-3">
                            <span class="font-display text-display text-primary">$44.99</span>
                            <span class="font-title-sm text-title-sm text-on-surface-variant font-semibold">USD</span>
                            <span
                                class="rounded bg-surface-container-high px-2 py-0.5 font-label-sm text-label-sm text-on-surface-variant">CAD
                                approx. $61.50 at checkout</span>
                        </div>
                        <!-- Product Description -->
                        <p class="mt-space-md font-body-md text-body-md text-on-surface-variant">
                            Engineered specifically for automotive interiors. Lightweight, compact, and balanced
                            to maneuver beneath seats, between tight center console seams, and along footwells
                            without being tethered to cords.
                        </p>
                        <!-- Color Variant Selector -->
                        <div class="mt-space-lg">
                            <label class="font-label-md text-label-md text-on-surface">Select Finish</label>
                            <div class="mt-space-xs grid grid-cols-2 gap-3">
                                <button
                                    class="flex items-center justify-between rounded-lg bg-primary px-4 py-3 text-left text-on-primary shadow-sm transition"
                                    type="button">
                                    <div class="flex items-center gap-2.5">
                                        <span class="h-3.5 w-3.5 rounded-full bg-outline-variant"></span>
                                        <span class="font-label-md text-label-md">Matte Stealth Gray</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-secondary-fixed">In
                                        Stock</span>
                                </button>
                                <button
                                    class="flex cursor-not-allowed items-center justify-between rounded-lg bg-surface-container px-4 py-3 text-left opacity-60"
                                    disabled="" type="button">
                                    <div class="flex items-center gap-2.5">
                                        <span class="h-3.5 w-3.5 rounded-full bg-surface-dim"></span>
                                        <span class="font-label-md text-label-md text-on-surface">Glacier
                                            Silver</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-outline">Coming Soon</span>
                                </button>
                            </div>
                        </div>
                        <!-- Quantity & Actions -->
                        <div class="mt-space-lg flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                                <span class="font-label-md text-label-md text-on-surface">Quantity:</span>
                                <div class="inline-flex items-center rounded-lg bg-surface-container p-1">
                                    <button
                                        class="flex h-8 w-8 items-center justify-center rounded bg-surface-container-lowest text-on-surface font-bold transition hover:bg-surface-container-high"
                                        onclick="decrementQty()" type="button">-</button>
                                    <span class="w-12 text-center font-title-sm text-title-sm font-bold text-on-surface"
                                        id="qty-counter">1</span>
                                    <button
                                        class="flex h-8 w-8 items-center justify-center rounded bg-surface-container-lowest text-on-surface font-bold transition hover:bg-surface-container-high"
                                        onclick="incrementQty()" type="button">+</button>
                                </div>
                            </div>
                            <!-- Main Add to Cart & Buy Now -->
                            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                <button
                                    class="flex w-full items-center justify-center gap-2 rounded bg-secondary-fixed py-4 font-label-md text-label-md text-primary shadow-sm transition hover:bg-secondary-fixed-dim"
                                    id="add-to-cart-btn" onclick="handleAddToCart()" type="button">
                                    <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                                    <span id="cart-button-text">Add to Cart</span>
                                </button>
                                <button
                                    class="flex w-full items-center justify-center gap-2 rounded bg-primary py-4 font-label-md text-label-md text-on-primary transition hover:bg-inverse-surface"
                                    type="button">
                                    <span class="material-symbols-outlined text-[20px]">flash_on</span>
                                    <span>Instant Checkout</span>
                                </button>
                            </div>
                        </div>
                        <!-- In-box items spec link -->
                        <a class="mt-space-md inline-flex items-center font-label-md text-label-md text-primary hover:text-secondary-fixed-dim"
                            href="#problem-solution">
                            <span>View Full Specifications &amp; In-Box Contents</span>
                            <span class="material-symbols-outlined ml-1 text-[16px]">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROBLEM AND SOLUTION (SECTION F) -->
    <section class="w-full bg-surface-container py-space-xl" id="problem-solution">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Section Title -->
            <div class="mx-auto max-w-2xl text-center">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Tailored
                    Automotive Utility</span>
                <h2 class="mt-2 font-headline-lg text-headline-lg text-on-surface">Goodbye, Everyday Car Mess.
                </h2>
                <p class="mt-2 font-body-lg text-body-lg text-on-surface-variant">
                    Designed specifically for automotive interiors, where standard home vacuums cannot reach.
                </p>
            </div>
            <!-- 4 Cleaning Scenario Cards -->
            <div class="mt-space-xl grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Scenario 1 -->
                <div
                    class="flex flex-col rounded-xl bg-surface-container-lowest p-5 shadow-sm transition hover:shadow-md">
                    <div class="relative mb-4 aspect-[4/3] w-full overflow-hidden rounded-lg bg-surface-container">
                        <img class="h-full w-full object-cover"
                            data-alt="Macro high-definition shot of tight car seat seam with crumbs before vacuuming, clean luxury leather trim with subtle natural daylight."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMqD8lZ2PtoCHnzOmtAZmo2fHhyBhUci3zPdT2JFnkbYCdQvy7nYWQsWjt50xvXOm566Zh-hrukN8gZu7Owp43pvaJRT9LDEwibCsHPoGGahpkVkFIqAa5fq3E5uR6BVvMBmQ8lBBA5dIDQmSAibTB_yAdGgg4b2XiMk82TOQrww4jxHD0mQpQGL279SAW71-SwXhfISkB2cYgI5uEV_k0MbKUMcxKbkEKe2SUzKmoeCYXirkbR5kg7A" />
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary">Tight Tolerance</span>
                    <h3 class="mt-1 font-title-sm text-title-sm font-bold text-on-surface">Crumbs between the
                        seats</h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">The extended crevice
                        nozzle slots smoothly between bucket seats and consoles where crumbs hide.</p>
                </div>
                <!-- Scenario 2 -->
                <div
                    class="flex flex-col rounded-xl bg-surface-container-lowest p-5 shadow-sm transition hover:shadow-md">
                    <div class="relative mb-4 aspect-[4/3] w-full overflow-hidden rounded-lg bg-surface-container">
                        <img class="h-full w-full object-cover"
                            data-alt="Close up photograph of car air conditioning vents and infotainment touch display dusted with precision soft bristle brush tool."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGy-NPCMYqRY0-PQ4pdJ2qZbPhQ4gTCGkygD1fFicOSAvwtZfiOhG1zghQJfNQzWlp3O9PzknT5V4KbK1sFNOH67SqqIqgRMqP0olCC8T99vn_fSWlAZqFJ3abwqBjd9fgBbUA0z4Yt3Pr0UJZWTT5Of8091ysW1eDxn1mYeFuBOFUaopPZhxw-SxVu-QBhS3_8WVBHxRMiRASQje51D_GORJfF1dTLgP9Ra_egiQVNQV8lPXX2Kxvrw" />
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary">Delicate Detailing</span>
                    <h3 class="mt-1 font-title-sm text-title-sm font-bold text-on-surface">Dust around AC vents
                    </h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Fine bristles lift
                        micro-dust from delicate dashboard louvers and screens without scratch hazards.</p>
                </div>
                <!-- Scenario 3 -->
                <div
                    class="flex flex-col rounded-xl bg-surface-container-lowest p-5 shadow-sm transition hover:shadow-md">
                    <div class="relative mb-4 aspect-[4/3] w-full overflow-hidden rounded-lg bg-surface-container">
                        <img class="h-full w-full object-cover"
                            data-alt="Automotive velour upholstery and floor mat cleaning showing stubborn dog fur and pet hair being lifted cleanly."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZXlsV6IvJ9jhrwVHUyOenT0KxSHG5MXdGSjWsgexm7HOdIUPbkSV0iXo5uPrhQT0Gpbb8tUy4ghiWqncWQG90Y4lxKZIzhtiqb24ztePiggL6KtWicavcO60aro4TxzzqgR2fMGtkMN7DkKZTijtSbpzDn4IDZn7566_HV3zrcqWcZqCbMcBV6yX23qDqg_5Gl8t42m3cF-zrBpZobI6Zh4cdPMuCFD2D9MRbX0Uoxgqu6LFrs-BI3Q" />
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary">High Friction Lift</span>
                    <h3 class="mt-1 font-title-sm text-title-sm font-bold text-on-surface">Pet hair on
                        upholstery</h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">High-velocity intake pulls
                        embedded fur and lint out of woven car mats and rear bench seats.</p>
                </div>
                <!-- Scenario 4 -->
                <div
                    class="flex flex-col rounded-xl bg-surface-container-lowest p-5 shadow-sm transition hover:shadow-md">
                    <div class="relative mb-4 aspect-[4/3] w-full overflow-hidden rounded-lg bg-surface-container">
                        <img class="h-full w-full object-cover"
                            data-alt="Deep center console cup holder pocket with gravel and sand particles cleaned with small cordless vacuum."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuADCZpm4YsnGR9gwaTDOUZzChjC6X2BqbHqpTDVrz5htCBFN072gYWDpETjFX8wMUbm2XtQeb4vanoJpvU-VLvbKzuQMfcbQe0fubq1C_Xkj3LFinYSvUnD3Tz0aZISy4nFcpyqwek1YxlVgFFm0uSiXnzGL-o6mm-kSvr-Zg5UaUreT6xbXqr5jNwMw46P-L3nU63EZZ4Y6CQFXwchoAD0-24-XnzCF266rqcFRwEFb70JTLT1J6c2DA" />
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary">Deep Cavities</span>
                    <h3 class="mt-1 font-title-sm text-title-sm font-bold text-on-surface">Debris in cup holders
                    </h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Direct suction extracts
                        dried dirt, coin residue, and grit trapped in bottom console compartments.</p>
                </div>
            </div>
            <!-- Before and After Interactive Split Block -->
            <div class="mt-space-xl overflow-hidden rounded-xl bg-surface-container-lowest p-6 shadow-md lg:p-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">The Contrast of Everyday
                            Care</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">A 2-minute run leaves cabin
                            surfaces pristine before your next passenger steps in.</p>
                    </div>
                    <div class="mt-3 md:mt-0 flex items-center gap-2">
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-error/10 text-error font-label-sm text-label-sm font-bold">BEFORE</span>
                        <span class="material-symbols-outlined text-outline text-[16px]">trending_flat</span>
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-secondary-container/40 text-on-secondary-container font-label-sm text-label-sm font-bold">AFTER
                            AUTOLUSTRE</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Before side -->
                    <div class="relative group overflow-hidden rounded-lg bg-surface-container-low">
                        <img class="w-full h-72 object-cover"
                            data-alt="Real automotive interior floorboard and seat side cluttered with dried mud crumbs and lint under natural outdoor light."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7IYuEbRaeJIH_IhZMJvzs-SqjZSwsj41qH5Z5-rxuQ5WwWjGOzqdIcDBQQ6bQOiciY0RGY8Oo-cKyZZdYY__YLc-u_1LB76uGd0KK1jYrr-6sdjUxUancuSIRmtYCkVQMKaiuHYXd67UDyEjudL6wwkUtEEyqW6iFbv3PQB6ndizvm3SwTHlJBqPJxAAkr8jaemXHs8FLg0G_4wM7opO3GzE_Dr28jJHMEZO383M5-VBTHNmdYXcTpQ" />
                        <div
                            class="absolute bottom-3 left-3 bg-primary/80 backdrop-blur-sm text-on-primary px-3 py-1 rounded text-label-sm font-label-sm">
                            Standard Daily Mess (Accumulated commute wear)
                        </div>
                    </div>
                    <!-- After side -->
                    <div class="relative group overflow-hidden rounded-lg bg-surface-container-low">
                        <img class="w-full h-72 object-cover"
                            data-alt="Immaculately detailed car interior cockpit floor and seat rails with deep dark clean carpets and pristine leather surfaces."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAi6dhVDsvpHy35ulzAzyfPTJA-WQ8ZtIg-q_KTeJ4AJsA4bObdMosRfQcWJTdJ4LLq5nlIpSchwUKw5QsfShsAzkmPBhQXmIx-TL8CpyAKwweoey6ND0KJbxBSOmKibSWfhUgiW1vVdKU5bDK1hJx0beuq_-aNz9bUff3n9eg-2ocjpZXKJ_FDuZj7hucsmv40m3OlS4XjNxlzJMF7rpK-rG_juLJ7n0oSMpk7yDnkJOSJiOxlE_mfCg" />
                        <div
                            class="absolute bottom-3 left-3 bg-secondary-fixed text-primary px-3 py-1 rounded text-label-sm font-label-sm font-bold">
                            Post-AutoLustre 90-Second Detail
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW IT WORKS (SECTION G) -->
    <section class="w-full bg-surface py-space-xl" id="how-it-works">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Section Title -->
            <div class="mx-auto max-w-2xl text-center">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Effortless
                    Operation</span>
                <h2 class="mt-2 font-headline-lg text-headline-lg text-on-surface">Clean in Three Simple Steps
                </h2>
                <p class="mt-2 font-body-lg text-body-lg text-on-surface-variant">Engineered for quick execution
                    without dragging out heavy household cords.</p>
            </div>
            <!-- 3-Step Clean Flow -->
            <div class="mt-space-xl grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Step 1 -->
                <div
                    class="relative flex flex-col rounded-xl bg-surface-container-lowest p-6 shadow-sm transition hover:shadow-md">
                    <div class="flex items-center justify-between">
                        <span class="font-display text-[44px] font-extrabold text-outline-variant">01</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-[22px]">battery_charging_full</span>
                        </div>
                    </div>
                    <h3 class="mt-4 font-headline-sm text-headline-sm font-bold text-on-surface">Charge &amp;
                        Prepare</h3>
                    <p class="mt-2 font-body-md text-body-md text-on-surface-variant">
                        Connect via the universal USB-C port in your vehicle console or at your desk. Rapid
                        multi-cell lithium batteries reach full charge quickly for immediate availability.
                    </p>
                    <div class="mt-6 pt-4 border-t-0 bg-surface-container-low p-3 rounded-lg">
                        <span class="font-label-sm text-label-sm text-primary font-bold">Standard 5V/2A input
                            compatible</span>
                    </div>
                </div>
                <!-- Step 2 -->
                <div
                    class="relative flex flex-col rounded-xl bg-surface-container-lowest p-6 shadow-sm transition hover:shadow-md">
                    <div class="flex items-center justify-between">
                        <span class="font-display text-[44px] font-extrabold text-outline-variant">02</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-[22px]">extension</span>
                        </div>
                    </div>
                    <h3 class="mt-4 font-headline-sm text-headline-sm font-bold text-on-surface">Choose Your
                        Attachment</h3>
                    <p class="mt-2 font-body-md text-body-md text-on-surface-variant">
                        Snap on the extended flat crevice nozzle for console tracks, or snap on the dense
                        bristle brush for speaker grilles, leather stitching, and AC slats.
                    </p>
                    <div class="mt-6 pt-4 border-t-0 bg-surface-container-low p-3 rounded-lg">
                        <span class="font-label-sm text-label-sm text-primary font-bold">Click-lock magnetic
                            retention</span>
                    </div>
                </div>
                <!-- Step 3 -->
                <div
                    class="relative flex flex-col rounded-xl bg-surface-container-lowest p-6 shadow-sm transition hover:shadow-md">
                    <div class="flex items-center justify-between">
                        <span class="font-display text-[44px] font-extrabold text-outline-variant">03</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-[22px]">delete_sweep</span>
                        </div>
                    </div>
                    <h3 class="mt-4 font-headline-sm text-headline-sm font-bold text-on-surface">Detail Your
                        Interior</h3>
                    <p class="mt-2 font-body-md text-body-md text-on-surface-variant">
                        Power on with the tactile button. When finished, press the single-click chamber release
                        directly over a bin for a completely hands-free empty.
                    </p>
                    <div class="mt-6 pt-4 border-t-0 bg-surface-container-low p-3 rounded-lg">
                        <span class="font-label-sm text-label-sm text-primary font-bold">Zero dust puffback
                            mechanism</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRODUCT BENEFITS (SECTION H) -->
    <section class="w-full bg-surface-container-lowest py-space-xl">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12">
                <!-- Left: Image showcase -->
                <div class="relative lg:col-span-5">
                    <div class="relative aspect-[4/5] w-full overflow-hidden rounded-xl bg-surface-container shadow-lg">
                        <img class="h-full w-full object-cover"
                            data-alt="Driver opening car glovebox and sliding in the sleek dark gray cordless vacuum with lime green accents, showing compact spatial efficiency."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5kEUGg0UI7VQGr_kpM2qlppeRUFEbP9m1H83lPaV3v-vCNQkjtn9R-duqHbaiRls0AbtRRsj3JZlndKBCbQiLoVjZv2nuuL2mPOvTBkhiLIN1nyJSoFICFs5YhPuv5MFnGTAVKPnMbr-imST9T8sijoBsRlqiqPn0joQbIYP2C7XTEXB0f72NzA8VrEeM1YmhdgnQZot_BuRqPKgALR6Hu7p7qFKiTE2I05tHGT2CCtAu1q3qVffNeQ" />
                        <div
                            class="absolute bottom-4 left-4 right-4 rounded-lg bg-primary/90 p-4 text-on-primary backdrop-blur-md">
                            <span
                                class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-wider">Spatial
                                Footprint</span>
                            <p class="font-title-sm text-title-sm font-semibold">Stores inside standard car
                                glove compartments &amp; door pockets.</p>
                        </div>
                    </div>
                </div>
                <!-- Right: 4 Concise Benefit Blocks -->
                <div class="flex flex-col lg:col-span-7">
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Purpose-Built
                        Engineering</span>
                    <h2 class="mt-2 font-headline-lg text-headline-lg text-on-surface">Why Drivers Keep
                        AutoLustre Onboard</h2>
                    <div class="mt-space-lg grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <!-- Benefit 1 -->
                        <div class="flex flex-col rounded-xl bg-surface p-5 shadow-sm">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded bg-primary text-secondary-fixed">
                                <span class="material-symbols-outlined text-[20px]">inventory_2</span>
                            </div>
                            <h3 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">Compact &amp;
                                Convenient</h3>
                            <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Stashes within
                                immediate reach in door storage pockets, center armrests, or rear seat nets.</p>
                        </div>
                        <!-- Benefit 2 -->
                        <div class="flex flex-col rounded-xl bg-surface p-5 shadow-sm">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded bg-primary text-secondary-fixed">
                                <span class="material-symbols-outlined text-[20px]">compress</span>
                            </div>
                            <h3 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">Easy-to-Reach
                                Cleaning</h3>
                            <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Engineered slim
                                profile glides smoothly alongside seat anchors and into tight pedal wells.</p>
                        </div>
                        <!-- Benefit 3 -->
                        <div class="flex flex-col rounded-xl bg-surface p-5 shadow-sm">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded bg-primary text-secondary-fixed">
                                <span class="material-symbols-outlined text-[20px]">filter_vintage</span>
                            </div>
                            <h3 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">Interior
                                Maintenance</h3>
                            <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Rinseable
                                multi-stage filter traps 99.8% of micro-particles without losing flow velocity.
                            </p>
                        </div>
                        <!-- Benefit 4 -->
                        <div class="flex flex-col rounded-xl bg-surface p-5 shadow-sm">
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded bg-primary text-secondary-fixed">
                                <span class="material-symbols-outlined text-[20px]">pets</span>
                            </div>
                            <h3 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">For Busy
                                Drivers &amp; Pets</h3>
                            <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Swiftly collects
                                biscuit crumbs, soccer turf rubber, and shedding pet hair after every trip.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BUNDLES & ACCESSORIES (SECTION I) -->
    <section class="w-full bg-surface py-space-xl">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-space-lg">
                <div>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">The
                        Ecosystem</span>
                    <h2 class="mt-1 font-headline-lg text-headline-lg text-on-surface">Bundles &amp; Accessories
                    </h2>
                </div>
                <div class="mt-2 md:mt-0 max-w-md text-right">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Accessories are currently
                        undergoing quality validation and will be available soon.</p>
                </div>
            </div>
            <!-- 3 Placeholder Accessory Cards -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- Card 1 -->
                <div class="flex flex-col rounded-xl bg-surface-container-lowest p-6 shadow-sm opacity-90">
                    <div class="relative aspect-video w-full overflow-hidden rounded-lg bg-surface-container-low">
                        <img class="h-full w-full object-cover"
                            data-alt="Stack of ultra thick 600 GSM charcoal gray and lime stitched microfiber detailing cloths folded neatly on car hood."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDn8j-tn4ijL7fO3b-V3XUbY_KvQEqnYCOzaFX5SqU1IBxbotNS_tedVj8q42mUkFS7qFP7dFYW8XW_xJvwUHvukrQrE2B2rX5mUSeW0cZrBvbwTtsp1omme2ZLRAtxTgaOoSH-0T6wK0BO144DaZeZ5LOc-qy0ONVZYKL84Gi20xUIo8ZxM1bA_vVK-lhMw0rIF_5a0h93DKFEWkq3E7BBeFJYsBf7SwjAyqKyDGBh9Im9_ED66pmIvQ" />
                        <span
                            class="absolute top-3 right-3 rounded bg-surface-container-highest px-2.5 py-1 font-label-sm text-label-sm text-on-surface font-semibold">In
                            Development</span>
                    </div>
                    <h3 class="mt-4 font-title-sm text-title-sm font-bold text-on-surface">Microfiber Detailing
                        Cloth 3-Pack</h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Edgeless lint-free plush
                        weave tailored for scratch-free interior dash and window wiping.</p>
                    <div class="mt-6 flex items-center justify-between pt-3">
                        <span class="font-label-md text-label-md text-outline">Targeting Q2 2025</span>
                        <button
                            class="rounded bg-surface-container px-3 py-1.5 font-label-sm text-label-sm text-outline cursor-not-allowed"
                            disabled="" type="button">Notify Me</button>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="flex flex-col rounded-xl bg-surface-container-lowest p-6 shadow-sm opacity-90">
                    <div class="relative aspect-video w-full overflow-hidden rounded-lg bg-surface-container-low">
                        <img class="h-full w-full object-cover"
                            data-alt="Set of three ergonomic automotive interior detailing brushes with soft boar bristles on matte gray workshop table."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSrzwaqOL0L8G9t-3sL4eBO3ZGEOSVlF8slBhA1r34zS8iI7xoc-x8Ft5G-24Kn0u5ktEU68LDeOsjgcKBDx-J1QAFjAL8mJ2Wyf5gx5tiWJhhf2blK7qJa1UT0KZyzSolYLk1ffYpOeCZDe07UYfltJc18zWxHLEWm7652x5TLLxx0_XaKnUorAO36rwuPiuOHz-neMjYh0oCEzhpDtscbpwTQqpItdqr3WZOjWKpnHCoYQZj8f-SQg" />
                        <span
                            class="absolute top-3 right-3 rounded bg-surface-container-highest px-2.5 py-1 font-label-sm text-label-sm text-on-surface font-semibold">In
                            Development</span>
                    </div>
                    <h3 class="mt-4 font-title-sm text-title-sm font-bold text-on-surface">Car Detailing Brush
                        Kit (3 Sizes)</h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Specialized bristle
                        lengths to agitate dust in deep emblems, air vents, and steering wheel buttons.</p>
                    <div class="mt-6 flex items-center justify-between pt-3">
                        <span class="font-label-md text-label-md text-outline">Targeting Q2 2025</span>
                        <button
                            class="rounded bg-surface-container px-3 py-1.5 font-label-sm text-label-sm text-outline cursor-not-allowed"
                            disabled="" type="button">Notify Me</button>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="flex flex-col rounded-xl bg-surface-container-lowest p-6 shadow-sm opacity-90">
                    <div class="relative aspect-video w-full overflow-hidden rounded-lg bg-surface-container-low">
                        <img class="h-full w-full object-cover"
                            data-alt="Curated all in one car cabin detailing bundle box containing replacement filters cloths and nozzles neatly organized."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsTdWK3TcHiTZNfYW33XfzXgwLHb4P5ummmyajrDzz0V7BV07jcQt1LKJnARs6h464eZpMqcsawt_4pPe6VdLGi98Pj1HFAQTQCw7FfoguO65LAxv9MzfMCWo0w7xA5HB_yp4rDsTpKR2ue6BjUnhjneQ1YwAANN07NgdumAUjOwyxcbGHGG01zW9uEqZtxOa9d-qA5Yae4teZgLB59-9-xZJAdTbGpuFoDrnUUL-yyCL_GSOXQOHdsw" />
                        <span
                            class="absolute top-3 right-3 rounded bg-surface-container-highest px-2.5 py-1 font-label-sm text-label-sm text-on-surface font-semibold">In
                            Development</span>
                    </div>
                    <h3 class="mt-4 font-title-sm text-title-sm font-bold text-on-surface">Interior Complete
                        Care Bundle</h3>
                    <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">Includes extra HEPA filter
                        cartridge, long flexible extension hose, and protective travel sleeve.</p>
                    <div class="mt-6 flex items-center justify-between pt-3">
                        <span class="font-label-md text-label-md text-outline">Targeting Q3 2025</span>
                        <button
                            class="rounded bg-surface-container px-3 py-1.5 font-label-sm text-label-sm text-outline cursor-not-allowed"
                            disabled="" type="button">Notify Me</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CUSTOMER REVIEWS (SECTION J) -->
    <section class="w-full bg-surface-container py-space-xl">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Section Title -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-space-lg">
                <div>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Verified
                        Customer Experiences</span>
                    <h2 class="mt-1 font-headline-lg text-headline-lg text-on-surface">Real Feedback From Real
                        Drivers</h2>
                </div>
                <!-- Integrity Callout -->
                <div
                    class="mt-3 md:mt-0 flex items-center gap-2 rounded-lg bg-surface-container-lowest px-4 py-2 shadow-sm">
                    <span class="material-symbols-outlined text-[18px] text-secondary">verified</span>
                    <span class="font-body-sm text-body-sm text-on-surface font-medium">100% Authentic Owner
                        Reviews</span>
                </div>
            </div>
            <!-- Honest Transparency Box -->
            <div class="rounded-xl bg-surface-container-lowest p-6 shadow-sm mb-8">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-secondary-container/40 text-secondary">
                            <span class="material-symbols-outlined text-[20px]">shield</span>
                        </div>
                        <div>
                            <p class="font-title-sm text-title-sm font-bold text-on-surface">Our Integrity
                                Commitment</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Verified customer
                                reviews will appear here post-delivery. AutoLustre never fabricates ratings,
                                names, or testimonials.</p>
                        </div>
                    </div>
                    <span
                        class="shrink-0 rounded bg-surface-container px-3 py-1 font-label-sm text-label-sm font-bold text-on-surface">Post-Order
                        Dispatch Active</span>
                </div>
            </div>
            <!-- Sample Review Card Structure (Mockup Layout for Incoming Orders) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Sample Review 1 -->
                <div class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex text-amber-500">
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                            <span
                                class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-bold">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Verified
                                Buyer
                            </span>
                        </div>
                        <h4 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">"Fits right in my
                            door tray"</h4>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">
                            "Finally a vacuum with real suction that doesn't need a 12V cigarette cord dangling
                            across my stick shift. Cleaned gravel out of the driver mat effortlessly."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-outline text-[12px]">
                        <span class="font-medium text-on-surface">Marcus T. — Seattle, WA</span>
                        <span>Tesla Model 3</span>
                    </div>
                </div>
                <!-- Sample Review 2 -->
                <div class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex text-amber-500">
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                            <span
                                class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-bold">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Verified
                                Buyer
                            </span>
                        </div>
                        <h4 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">"Indispensable
                            for pet owners"</h4>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">
                            "My golden retriever sheds across the rear leather bench weekly. The brush
                            attachment pulls fur without dulling the finish. Takes two minutes."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-outline text-[12px]">
                        <span class="font-medium text-on-surface">Danielle K. — Vancouver, BC</span>
                        <span>Subaru Outback</span>
                    </div>
                </div>
                <!-- Sample Review 3 -->
                <div class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex text-amber-500">
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[18px]">star_half</span>
                            </div>
                            <span
                                class="inline-flex items-center gap-1 font-label-sm text-label-sm text-secondary font-bold">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Verified
                                Buyer
                            </span>
                        </div>
                        <h4 class="mt-3 font-title-sm text-title-sm font-bold text-on-surface">"Solid build
                            quality &amp; battery"</h4>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">
                            "Feels heavy-duty and purposeful. USB-C charging right from my dashboard is a
                            massive plus. The crevice tool got everything between my seats."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-outline text-[12px]">
                        <span class="font-medium text-on-surface">Liam P. — Toronto, ON</span>
                        <span>BMW M340i</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FREQUENTLY ASKED QUESTIONS (SECTION K) -->
    <section class="w-full bg-surface py-space-xl">
        <div class="mx-auto max-w-4xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Section Header -->
            <div class="text-center">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary">Got
                    Questions?</span>
                <h2 class="mt-2 font-headline-lg text-headline-lg text-on-surface">Frequently Asked Questions
                </h2>
                <p class="mt-2 font-body-lg text-body-lg text-on-surface-variant">Clear, straightforward answers
                    about our hardware, shipping, and guarantees.</p>
            </div>
            <!-- FAQ Accordion Container -->
            <div class="mt-space-lg flex flex-col gap-3">
                <!-- FAQ 1 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>What areas of my car can the vacuum clean?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        AutoLustre is engineered to tackle virtually every interior automotive surface: footwell
                        carpets, leather and cloth upholstery, tight center console crevices, under-seat tracks,
                        cup holders, door bins, dashboard vents, and rear cargo areas.
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>What attachments are included?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        Every AutoLustre vacuum box includes the high-velocity base unit, a narrow extended
                        crevice nozzle for reaching narrow gaps between seats, a soft-bristle detailing brush
                        for air vents and delicate displays, and a heavy-duty braided USB-C fast charging cable.
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>How long does the battery last?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        The high-density lithium-ion battery delivers up to 25 minutes of continuous full-power
                        suction per charge—more than enough for 4 to 6 full cabin detailing touch-ups before
                        needing a recharge.
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>How do I charge and maintain the vacuum?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        Simply plug the included USB-C cable into any vehicle USB port, 12V adapter, wall brick,
                        or power bank. Maintenance is effortless: press the one-click dust release latch over a
                        bin, remove the HEPA filter, rinse under cold water monthly, and let it dry fully before
                        reinserting.
                    </div>
                </div>
                <!-- FAQ 5 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>How long does shipping take?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        All orders dispatch from our North American distribution hubs within 24-48 business
                        hours. Standard shipping across the continental United States and Canada typically
                        arrives within 3 to 6 business days with tracking provided via email.
                    </div>
                </div>
                <!-- FAQ 6 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>What is your return policy?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        We offer an unconditional 30-Day In-Hand Trial. Test AutoLustre inside your vehicle; if
                        you aren't thoroughly impressed with the convenience and suction power, return it in
                        original packaging for a prompt and courteous refund.
                    </div>
                </div>
                <!-- FAQ 7 -->
                <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition">
                    <button
                        class="flex w-full items-center justify-between p-5 text-left font-title-sm text-title-sm font-bold text-on-surface"
                        onclick="toggleFaq(this)" type="button">
                        <span>How can I contact customer support?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-outline transition-transform duration-200">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 font-body-md text-body-md text-on-surface-variant">
                        Our support desk is based in North America. You can reach our team Monday through Friday
                        via email at support@autolustre.com or through the Contact Support portal on our
                        website. Average response time is under 4 business hours.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EMAIL SIGNUP (SECTION L) -->
    <section class="w-full bg-surface-container py-space-xl">
        <div class="mx-auto max-w-7xl px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Dark Automotive Card -->
            <div
                class="relative overflow-hidden rounded-xl bg-primary px-8 py-12 text-on-primary shadow-xl md:px-16 md:py-16">
                <!-- Subtle Performance Grid Backdrop -->
                <div
                    class="pointer-events-none absolute -right-20 -bottom-20 h-80 w-80 rounded-full bg-secondary-fixed/10 blur-3xl">
                </div>
                <div class="relative z-10 mx-auto max-w-3xl text-center">
                    <div
                        class="inline-flex items-center gap-1.5 rounded-full bg-surface-container-lowest/10 px-3 py-1 font-label-sm text-label-sm text-secondary-fixed">
                        <span class="material-symbols-outlined text-[16px]">mail</span>
                        <span>AUTOLUSTRE DISPATCH</span>
                    </div>
                    <h2
                        class="mt-4 font-display text-[32px] sm:text-display font-extrabold tracking-tight text-on-primary">
                        Keep Your Ride Looking Its Best.
                    </h2>
                    <p class="mt-2 font-body-lg text-body-lg text-on-primary-container">
                        Get practical car-care tips and updates from AutoLustre.
                    </p>
                    <!-- Input Group -->
                    <form class="mt-8 flex flex-col sm:flex-row items-stretch justify-center gap-3" id="subscribe-form"
                        onsubmit="handleSubscribe(event)">
                        <input
                            class="w-full sm:w-96 rounded bg-surface-container-lowest px-4 py-3.5 font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:ring-2 focus:ring-secondary-fixed"
                            id="sub-email" placeholder="Enter your email address" required="" type="email" />
                        <button
                            class="flex items-center justify-center rounded bg-secondary-fixed px-8 py-3.5 font-label-md text-label-md text-primary font-bold transition hover:bg-secondary-fixed-dim shrink-0 shadow-sm"
                            id="sub-btn" type="submit">
                            Subscribe
                        </button>
                    </form>
                    <p class="hidden mt-4 font-label-md text-label-md text-secondary-fixed" id="sub-success-message">
                        ✓ You're in! Check your inbox for our latest interior detailing routine.
                    </p>
                    <p class="mt-4 font-body-sm text-body-sm text-on-primary-container">
                        We respect your privacy. Unsubscribe anytime.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- CLIENT INTERACTIONS JAVASCRIPT -->
<script>
// Quantity Selector
let qty = 1;

function incrementQty() {
    qty++;
    document.getElementById('qty-counter').innerText = qty;
}

function decrementQty() {
    if (qty > 1) {
        qty--;
        document.getElementById('qty-counter').innerText = qty;
    }
}

// Quick Add To Cart Simulation
function handleAddToCart() {
    const btn = document.getElementById('add-to-cart-btn');
    const label = document.getElementById('cart-button-text');
    btn.classList.add('bg-secondary', 'text-on-secondary');
    btn.classList.remove('bg-secondary-fixed', 'text-primary');
    label.innerText = 'Added to Cart!';
    setTimeout(() => {
        btn.classList.remove('bg-secondary', 'text-on-secondary');
        btn.classList.add('bg-secondary-fixed', 'text-primary');
        label.innerText = 'Add to Cart';
    }, 2000);
}

// FAQ Accordion Toggle
function toggleFaq(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('.faq-icon');
    const isHidden = content.classList.contains('hidden');

    // Close all other faqs in group
    document.querySelectorAll('.faq-content').forEach(el => el.classList.add('hidden'));
    document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));

    if (isHidden) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    }
}

// Newsletter Submit State
function handleSubscribe(e) {
    e.preventDefault();
    const btn = document.getElementById('sub-btn');
    const input = document.getElementById('sub-email');
    const msg = document.getElementById('sub-success-message');
    btn.disabled = true;
    btn.innerText = 'Subscribed!';
    input.value = '';
    msg.classList.remove('hidden');
}
</script>

@endsection