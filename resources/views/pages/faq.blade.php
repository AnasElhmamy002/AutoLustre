@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- Top Ambient Glow Accent -->
    <div class="relative w-full overflow-hidden bg-surface-container-lowest pb-space-xl">
        <div
            class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[360px] bg-secondary-fixed/20 blur-[120px] pointer-events-none rounded-full">
        </div>
        <!-- Hero Knowledge Base Search Header -->
        <div class="relative max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin pt-space-lg">

            <!-- Badge with live status pulse -->
            <div
                class="inline-flex items-center gap-space-xs px-3 py-1.5 rounded-full bg-surface-container-low shadow-sm mb-space-md">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                </span>
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface">SUPPORT
                    ARCHIVE &amp; FREQUENTLY ASKED QUESTIONS</span>
            </div>
            <!-- Main Headline & Subhead -->
            <div class="max-w-3xl mb-space-lg">
                <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight font-extrabold mb-space-sm">
                    Answers for Every Mile. Clear, Direct &amp; Rigorous.
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Everything you need to know about charging protocols, micro-HEPA filter maintenance, order
                    fulfillment across the US &amp; Canada, and our 30-day in-car trial guarantee.
                </p>
            </div>
            <!-- High-Precision Search Box -->
            <div class="relative max-w-3xl mb-space-lg">
                <div
                    class="relative flex items-center rounded-xl bg-surface-container-lowest shadow-md overflow-hidden transition-all focus-within:shadow-xl focus-within:ring-2 focus-within:ring-secondary-fixed">
                    <span class="material-symbols-outlined text-outline pl-space-md text-[24px]">search</span>
                    <input
                        class="w-full bg-transparent py-4 px-space-sm font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none"
                        id="faq-search-input"
                        placeholder="Search questions, e.g. charging time, pet hair, shipping to Canada, replacement filters..."
                        type="text" />
                    <div class="pr-space-md flex items-center gap-space-xs">
                        <span
                            class="hidden sm:inline-flex items-center justify-center font-label-sm text-label-sm bg-surface-container px-2.5 py-1 rounded text-on-surface-variant font-mono">⌘K</span>
                        <button aria-label="Clear Search"
                            class="hidden text-outline hover:text-primary transition-colors p-1" id="clear-search-btn"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">close</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Filter Chips -->
            <div class="flex flex-wrap items-center gap-space-xs">
                <button
                    class="filter-chip active-filter font-label-sm text-label-sm px-3.5 py-2 rounded bg-primary text-on-primary transition-all flex items-center gap-1.5 shadow-sm"
                    data-filter="all" type="button">
                    <span>All Topics</span>
                    <span
                        class="bg-surface-container-high/20 text-on-primary text-[10px] px-1.5 py-0.5 rounded font-bold">13</span>
                </button>
                <button
                    class="filter-chip font-label-sm text-label-sm px-3.5 py-2 rounded bg-surface-container-low text-on-surface hover:bg-surface-container transition-all flex items-center gap-1.5"
                    data-filter="battery" type="button">
                    <span class="material-symbols-outlined text-[15px] text-secondary">bolt</span>
                    <span>Hardware &amp; Battery</span>
                </button>
                <button
                    class="filter-chip font-label-sm text-label-sm px-3.5 py-2 rounded bg-surface-container-low text-on-surface hover:bg-surface-container transition-all flex items-center gap-1.5"
                    data-filter="cleaning" type="button">
                    <span class="material-symbols-outlined text-[15px] text-secondary">auto_fix</span>
                    <span>Attachments &amp; Cleaning</span>
                </button>
                <button
                    class="filter-chip font-label-sm text-label-sm px-3.5 py-2 rounded bg-surface-container-low text-on-surface hover:bg-surface-container transition-all flex items-center gap-1.5"
                    data-filter="filters" type="button">
                    <span class="material-symbols-outlined text-[15px] text-secondary">air</span>
                    <span>Maintenance &amp; Filters</span>
                </button>
                <button
                    class="filter-chip font-label-sm text-label-sm px-3.5 py-2 rounded bg-surface-container-low text-on-surface hover:bg-surface-container transition-all flex items-center gap-1.5"
                    data-filter="shipping" type="button">
                    <span class="material-symbols-outlined text-[15px] text-secondary">local_shipping</span>
                    <span>Orders &amp; NA Shipping</span>
                </button>
                <button
                    class="filter-chip font-label-sm text-label-sm px-3.5 py-2 rounded bg-surface-container-low text-on-surface hover:bg-surface-container transition-all flex items-center gap-1.5"
                    data-filter="warranty" type="button">
                    <span class="material-symbols-outlined text-[15px] text-secondary">verified_user</span>
                    <span>Warranty &amp; Returns</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Quick-Access Support Channels Strip -->
    <section
        class="max-w-7xl mx-auto w-full px-margin-mobile md:px-margin-tablet lg:px-margin -mt-8 relative z-10 mb-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
            <!-- Card 1: Live Chat -->
            <div
                class="bg-surface-container-lowest p-space-md rounded-xl shadow-md hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-space-sm">
                        <div
                            class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-secondary-fixed transition-colors">
                            <span class="material-symbols-outlined text-[22px]">forum</span>
                        </div>
                        <span
                            class="inline-flex items-center gap-1 text-[11px] font-bold font-label-sm text-secondary bg-surface-container px-2 py-0.5 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                            ONLINE NOW
                        </span>
                    </div>
                    <h3 class="font-title-sm text-title-sm text-primary font-bold mb-1">Live Chat &amp; Driver
                        Concierge</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                        Direct access to in-house technicians. Typical live response in under 12 minutes during
                        dispatch hours.
                    </p>
                </div>
                <div class="pt-space-sm flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Mon–Fri: 9am–6pm
                        EST</span>
                    <button
                        class="text-primary font-label-md text-label-md font-bold flex items-center gap-1 hover:text-secondary transition-colors"
                        type="button">
                        Start Chat
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>
            </div>
            <!-- Card 2: Order Tracking -->
            <div
                class="bg-surface-container-lowest p-space-md rounded-xl shadow-md hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-space-sm">
                        <div
                            class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-secondary-fixed transition-colors">
                            <span class="material-symbols-outlined text-[22px]">track_changes</span>
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container px-2 py-0.5 rounded">US
                            &amp; CANADA</span>
                    </div>
                    <h3 class="font-title-sm text-title-sm text-primary font-bold mb-1">Order Tracking &amp;
                        Delivery</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                        Instant tracking status for dispatches out of Columbus, Ohio and Mississauga, Ontario
                        facilities.
                    </p>
                </div>
                <div class="pt-space-sm flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">USPS • FedEx • Canada
                        Post</span>
                    <button
                        class="text-primary font-label-md text-label-md font-bold flex items-center gap-1 hover:text-secondary transition-colors"
                        type="button">
                        Track Order
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>
            </div>
            <!-- Card 3: Warranty Claim -->
            <div
                class="bg-surface-container-lowest p-space-md rounded-xl shadow-md hover:shadow-lg transition-all flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-space-sm">
                        <div
                            class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary group-hover:bg-secondary-fixed transition-colors">
                            <span class="material-symbols-outlined text-[22px]">verified</span>
                        </div>
                        <span
                            class="font-label-sm text-label-sm text-primary bg-secondary-fixed px-2 py-0.5 rounded font-bold">1-YR
                            GUARANTEED</span>
                    </div>
                    <h3 class="font-title-sm text-title-sm text-primary font-bold mb-1">1-Year Warranty Claim
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                        Zero-friction hardware swap for verified orders. Simple photo or serial verification is
                        all that is required.
                    </p>
                </div>
                <div class="pt-space-sm flex items-center justify-between">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Instant Serial
                        Check</span>
                    <button
                        class="text-primary font-label-md text-label-md font-bold flex items-center gap-1 hover:text-secondary transition-colors"
                        type="button">
                        File Claim
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Main FAQ Categorized Knowledge Base Grid -->
    <section class="max-w-7xl mx-auto w-full px-margin-mobile md:px-margin-tablet lg:px-margin pb-space-xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
            <!-- Left Column: Sticky Subcategory Navigator & Technical Spec Overview -->
            <div class="lg:col-span-4 flex flex-col gap-space-lg">
                <!-- Category Navigation Menu -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm sticky top-28">
                    <div
                        class="flex items-center justify-between mb-space-sm pb-space-xs border-b border-surface-container">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Documentation
                            Sections</span>
                        <span class="font-label-sm text-label-sm text-secondary font-mono">13 ENTRIES</span>
                    </div>
                    <nav class="flex flex-col gap-1">
                        <a class="flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors font-body-sm text-body-sm group"
                            href="#cat-battery">
                            <span class="flex items-center gap-2">
                                <span
                                    class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary">bolt</span>
                                <span class="font-medium">Hardware &amp; Battery</span>
                            </span>
                            <span class="font-label-sm text-label-sm text-outline group-hover:text-primary">4</span>
                        </a>
                        <a class="flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors font-body-sm text-body-sm group"
                            href="#cat-cleaning">
                            <span class="flex items-center gap-2">
                                <span
                                    class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary">auto_fix</span>
                                <span class="font-medium">Attachments &amp; Cleaning</span>
                            </span>
                            <span class="font-label-sm text-label-sm text-outline group-hover:text-primary">3</span>
                        </a>
                        <a class="flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors font-body-sm text-body-sm group"
                            href="#cat-filters">
                            <span class="flex items-center gap-2">
                                <span
                                    class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary">air</span>
                                <span class="font-medium">Maintenance &amp; Filters</span>
                            </span>
                            <span class="font-label-sm text-label-sm text-outline group-hover:text-primary">2</span>
                        </a>
                        <a class="flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors font-body-sm text-body-sm group"
                            href="#cat-shipping">
                            <span class="flex items-center gap-2">
                                <span
                                    class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary">local_shipping</span>
                                <span class="font-medium">Shipping &amp; Fulfilment</span>
                            </span>
                            <span class="font-label-sm text-label-sm text-outline group-hover:text-primary">2</span>
                        </a>
                        <a class="flex items-center justify-between p-2 rounded-lg hover:bg-surface-container-low text-on-surface transition-colors font-body-sm text-body-sm group"
                            href="#cat-warranty">
                            <span class="flex items-center gap-2">
                                <span
                                    class="material-symbols-outlined text-[18px] text-outline group-hover:text-primary">verified_user</span>
                                <span class="font-medium">Warranty &amp; 30-Day Trial</span>
                            </span>
                            <span class="font-label-sm text-label-sm text-outline group-hover:text-primary">2</span>
                        </a>
                    </nav>
                    <!-- Technical Specs Mini Infographic Box -->
                    <div class="mt-space-md p-space-sm bg-surface-container-low rounded-lg">
                        <div
                            class="flex items-center gap-2 text-primary font-label-sm text-label-sm font-bold uppercase tracking-wider mb-2">
                            <span class="material-symbols-outlined text-[16px] text-secondary">tune</span>
                            AutoLustre v2 Architecture
                        </div>
                        <div class="space-y-1.5 text-body-sm font-body-sm">
                            <div class="flex justify-between items-center text-on-surface-variant">
                                <span>Negative Pressure</span>
                                <span class="font-semibold text-on-surface font-mono">6,000 Pa (True
                                    Tested)</span>
                            </div>
                            <div class="flex justify-between items-center text-on-surface-variant">
                                <span>Brushless Turbine</span>
                                <span class="font-semibold text-on-surface font-mono">42,000 RPM</span>
                            </div>
                            <div class="flex justify-between items-center text-on-surface-variant">
                                <span>Continuous Runtime</span>
                                <span class="font-semibold text-on-surface font-mono">25 Minutes</span>
                            </div>
                            <div class="flex justify-between items-center text-on-surface-variant">
                                <span>Charge Interface</span>
                                <span class="font-semibold text-on-surface font-mono">USB-C Power
                                    Delivery</span>
                            </div>
                            <div class="flex justify-between items-center text-on-surface-variant">
                                <span>Filtration Rating</span>
                                <span class="font-semibold text-on-surface font-mono">99.97% @ 0.3μm</span>
                            </div>
                        </div>
                    </div>
                    <!-- Need instant manual PDF link -->
                    <div class="mt-space-sm pt-space-xs text-center">
                        <a class="inline-flex items-center gap-1 font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-[15px]">download</span>
                            <span>Download Complete Field Manual (PDF 1.8MB)</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Right Column: Full Accordion Sections -->
            <div class="lg:col-span-8 flex flex-col gap-space-xl" id="faq-accordions-container">
                <!-- CATEGORY A: HARDWARE, BATTERY & CHARGING -->
                <div class="faq-group scroll-mt-28" data-category="battery" id="cat-battery">
                    <div class="flex items-center gap-space-xs mb-space-md">
                        <div class="w-8 h-8 rounded bg-primary text-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">bolt</span>
                        </div>
                        <div>
                            <h2 class="font-title-md text-title-md font-bold text-primary">Hardware, Battery
                                &amp; Charging Protocols</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Cell longevity, USB-C
                                input limits, and automotive thermal tolerances.</p>
                        </div>
                    </div>
                    <div class="space-y-space-sm">
                        <!-- Q1 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="charge charging usb-c vehicle 12v adapter 100% capacity thermal protection">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    How do I charge the AutoLustre vacuum, and can I charge it while driving?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2 mb-2">
                                    AutoLustre is equipped with a universally compliant <strong
                                        class="text-primary">USB-C Power Delivery port</strong>. Connect it via
                                    the included 3-foot braided heavy-gauge cable directly into any vehicle 12V
                                    cigarette adapter, center console USB-A/USB-C slot, power bank, or standard
                                    AC wall adapter (5V/2A or 9V/2A supported).
                                </p>
                                <div
                                    class="p-3 bg-surface-container-low rounded-lg text-body-sm text-on-surface flex items-start gap-2">
                                    <span
                                        class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">check_circle</span>
                                    <span><strong>On-The-Road Ready:</strong> Recharges to 100% in approximately
                                        2.5 hours. Smart battery management circuitry automatically halts
                                        current draw once saturated, preventing parasitic draw on your vehicle's
                                        12V battery.</span>
                                </div>
                            </div>
                        </div>
                        <!-- Q2 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="battery runtime suction rating 25 minutes 42000 rpm turbine 6000 pa negative pressure">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    What is the real-world battery runtime and suction rating?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2 mb-2">
                                    Unlike conventional units that experience suction drop-off as voltage wanes,
                                    our dual 2,000mAh high-density lithium-ion cells maintain stable output
                                    throughout their discharge curve.
                                </p>
                                <ul class="list-disc list-inside space-y-1 mb-2 pl-1 font-body-sm text-on-surface">
                                    <li><strong>Continuous Runtime:</strong> 25 minutes uninterrupted
                                        high-velocity vacuuming.</li>
                                    <li><strong>Motor Speed:</strong> Custom 42,000 RPM precision-balanced
                                        micro-turbine.</li>
                                    <li><strong>Negative Pressure:</strong> Tested and certified at 6,000 Pa
                                        (Pascals), effortlessly lifting pebble gravel, dried mud crust, and
                                        deeply woven pet fur from heavy carpet mats.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Q3 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="temperature heat winter car glovebox cabin storage safe freeze freezing sun">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    Is it safe to store the vacuum in my car during extreme summer heat or
                                    freezing winters?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2">
                                    Yes. AutoLustre was designed strictly for automotive environments. The
                                    high-capacity lithium cells and reinforced polycarbonate chassis are rated
                                    for cabin storage between <strong class="text-primary">-10°C and 45°C (14°F
                                        to 113°F)</strong>.
                                </p>
                                <p class="mt-2 text-body-sm text-on-surface-variant">
                                    <em>Pro Detailing Tip:</em> In sub-tropical climates where interior vehicle
                                    temperatures can exceed 50°C (122°F) under direct sunlight, we recommend
                                    storing the unit in your glove box, center armrest compartment, or under the
                                    driver's seat rather than atop the dashboard or rear parcel shelf.
                                </p>
                            </div>
                        </div>
                        <!-- Q4 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="led diagnostic lights white green amber battery reserve indication">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    What do the LED diagnostic lights mean?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 pt-2">
                                    <div class="p-2.5 rounded bg-surface-container-low flex flex-col gap-1">
                                        <span
                                            class="flex items-center gap-1.5 font-label-sm text-label-sm text-primary font-bold">
                                            <span class="w-2.5 h-2.5 rounded-full bg-outline animate-pulse"></span>
                                            Pulsing White
                                        </span>
                                        <span class="text-body-sm text-on-surface-variant">Active charging
                                            session underway.</span>
                                    </div>
                                    <div class="p-2.5 rounded bg-surface-container-low flex flex-col gap-1">
                                        <span
                                            class="flex items-center gap-1.5 font-label-sm text-label-sm text-secondary font-bold">
                                            <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                                            Solid Green
                                        </span>
                                        <span class="text-body-sm text-on-surface-variant">Fully charged (100%
                                            capacity reached).</span>
                                    </div>
                                    <div class="p-2.5 rounded bg-surface-container-low flex flex-col gap-1">
                                        <span
                                            class="flex items-center gap-1.5 font-label-sm text-label-sm text-error font-bold">
                                            <span class="w-2.5 h-2.5 rounded-full bg-error"></span>
                                            Intermittent Amber
                                        </span>
                                        <span class="text-body-sm text-on-surface-variant">Low reserve: under
                                            15% remaining runtime.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CATEGORY B: ATTACHMENTS, DETAILING & PERFORMANCE -->
                <div class="faq-group scroll-mt-28" data-category="cleaning" id="cat-cleaning">
                    <div class="flex items-center gap-space-xs mb-space-md">
                        <div class="w-8 h-8 rounded bg-primary text-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">auto_fix</span>
                        </div>
                        <div>
                            <h2 class="font-title-md text-title-md font-bold text-primary">Attachments,
                                Detailing &amp; Performance</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Nozzle geometries,
                                piano black safety, and spill management.</p>
                        </div>
                    </div>
                    <div class="space-y-space-sm">
                        <!-- Q5 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="crevice lance seat rails seatbelt center console crumbs scratch leather">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    Which attachment should I use for crumbs deep between seat rails?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2">
                                    Attach the <strong class="text-primary">14.2-inch Ultra-Slim Crevice
                                        Lance</strong>. Its aerodynamic profile is calibrated to slide into the
                                    narrow 8mm gap between seat sliders and center consoles without scuffing
                                    Napa leather or soft-touch dashboard moldings. Its friction-fit collar seals
                                    100% of the vacuum velocity directly to the tip aperture.
                                </p>
                            </div>
                        </div>
                        <!-- Q6 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="vent brush scratch piano black console touchscreen screen delicate micro-marring">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    Can the vent brush damage delicate piano black trim or touchscreen displays?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2">
                                    <strong class="text-primary">Absolutely not.</strong> Our detailing nozzle
                                    features ultra-dense, feathered-tip synthetic horsehair fibers. They are
                                    non-abrasive and laboratory-tested against automotive lacquer and high-gloss
                                    piano black plastics to guarantee zero swirl marks or micro-scratching on
                                    digital infotainment screens, gauge clusters, and delicate AC louvers.
                                </p>
                            </div>
                        </div>
                        <!-- Q7 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="wet spills water liquid puddles coffee soda dry debris warranty">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    Does the vacuum handle wet spills or standing puddles?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <div class="p-3 bg-surface-container rounded-lg text-body-sm text-on-surface mb-2">
                                    <span class="font-bold text-error flex items-center gap-1 mb-1">
                                        <span class="material-symbols-outlined text-[16px]">warning</span>
                                        DRY DEBRIS INSTRUMENT ONLY
                                    </span>
                                    <span>AutoLustre is engineered for dry particulate matter: dirt, sand, road
                                        grit, pet hair, cereal, and gravel. It is not a wet extractor.</span>
                                </div>
                                <p class="text-body-sm text-on-surface-variant">
                                    Vacuuming liquids or damp mud will saturate the micro-HEPA filter and can
                                    bypass the turbine chamber, which poses an electrical hazard and voids the
                                    1-year motor warranty.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CATEGORY C: FILTRATION, CLEANING & MAINTENANCE -->
                <div class="faq-group scroll-mt-28" data-category="filters" id="cat-filters">
                    <div class="flex items-center gap-space-xs mb-space-md">
                        <div class="w-8 h-8 rounded bg-primary text-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">air</span>
                        </div>
                        <div>
                            <h2 class="font-title-md text-title-md font-bold text-primary">Filtration, Cleaning
                                &amp; Canister Maintenance</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Washing guidelines,
                                replacement cycles, and hands-free disposal.</p>
                        </div>
                    </div>
                    <div class="space-y-space-sm">
                        <!-- Q8 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="hepa filter clean rinse replace washing dual-stage stainless steel 24 hours">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    How often should I clean or replace the dual-stage HEPA filter?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2 mb-2">
                                    AutoLustre uses an aerospace-grade primary stainless-steel cyclonic screen
                                    coupled with an inner pleated micro-HEPA core.
                                </p>
                                <div class="space-y-2 text-body-sm">
                                    <div class="flex items-start gap-2">
                                        <span
                                            class="w-5 h-5 rounded bg-surface-container flex items-center justify-center text-primary font-bold text-[11px] shrink-0">1</span>
                                        <span><strong>Routine Cleaning (Every 2–3 uses):</strong> Remove the
                                            canister, twist out the filter core, and gently tap against the side
                                            of a trash bin to dislodge loose fine dust.</span>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <span
                                            class="w-5 h-5 rounded bg-surface-container flex items-center justify-center text-primary font-bold text-[11px] shrink-0">2</span>
                                        <span><strong>Deep Wash (Monthly):</strong> Rinse both filters under
                                            warm running tap water without soap. <em>Crucial:</em> Allow to dry
                                            on a towel for 24 hours before reinstalling to prevent moisture
                                            ingress.</span>
                                    </div>
                                    <div class="flex items-start gap-2">
                                        <span
                                            class="w-5 h-5 rounded bg-secondary-fixed flex items-center justify-center text-primary font-bold text-[11px] shrink-0">3</span>
                                        <span><strong>Replacement Schedule:</strong> Replace the micro-HEPA
                                            cartridge every 6 to 9 months. Twin-pack replacements are available
                                            on our store for $14.99.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Q9 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="empty latch canister disposal hygienic 150ml hands free">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    How does the hygienic empty latch operate?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2">
                                    Our single-click tactile eject trigger is positioned on the underside of the
                                    vacuum body. Hold the device over a bin and depress the tactile toggle: the
                                    150ml dust collector releases instantly at a 90-degree drop angle, ejecting
                                    debris without contaminating your hands with dust, pollen, or pet dander.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CATEGORY D: SHIPPING, DELIVERY & TRACKING (US & CANADA) -->
                <div class="faq-group scroll-mt-28" data-category="shipping" id="cat-shipping">
                    <div class="flex items-center gap-space-xs mb-space-md">
                        <div class="w-8 h-8 rounded bg-primary text-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">local_shipping</span>
                        </div>
                        <div>
                            <h2 class="font-title-md text-title-md font-bold text-primary">Shipping, Delivery
                                &amp; Tracking (US &amp; Canada)</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Regional fulfillment
                                hubs, transit times, and cross-border duties.</p>
                        </div>
                    </div>
                    <div class="space-y-space-sm">
                        <!-- Q10 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="shipping delivery time united states canada columbus mississauga days tariff duty free">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    How long does shipping take to the United States and Canada?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2 mb-2">
                                    Every order ships from our domestic twin fulfillment facilities to prevent
                                    cross-border border holdups:
                                </p>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-2">
                                    <div class="p-3 bg-surface-container-low rounded-lg">
                                        <div
                                            class="font-title-sm text-title-sm text-primary font-bold flex items-center gap-1.5 mb-1">
                                            <span>🇺🇸</span> United States
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Dispatched
                                            via Columbus, OH facility. Delivered in <strong>3 to 5 business
                                                days</strong> via USPS Priority or FedEx Home Delivery.</p>
                                    </div>
                                    <div class="p-3 bg-surface-container-low rounded-lg">
                                        <div
                                            class="font-title-sm text-title-sm text-primary font-bold flex items-center gap-1.5 mb-1">
                                            <span>🇨🇦</span> Canada
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Dispatched
                                            via Mississauga, ON facility. Delivered in <strong>4 to 7 business
                                                days</strong> via Canada Post Expedited. <strong
                                                class="text-primary">Zero import tariffs or customs
                                                fees.</strong></p>
                                    </div>
                                </div>
                                <p class="font-body-sm text-on-surface-variant">You will receive an automated
                                    dispatch notification with live tracking numbers within 24 hours of placing
                                    your order.</p>
                            </div>
                        </div>
                        <!-- Q11 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="shipping rates threshold free 50 dollars cost express">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    What are the shipping rates and free shipping threshold?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2">
                                    Standard trackable ground delivery is flat-rate <strong class="text-primary">$4.99
                                        USD</strong>. All orders totaling <strong class="text-secondary">$50.00 USD or
                                        more</strong> (such as an
                                    AutoLustre Vacuum bundled with replacement HEPA filters or an extra Lance
                                    extension) automatically receive <strong class="text-primary">Complimentary
                                        Free Insured Shipping</strong> anywhere in the US and Canada.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CATEGORY E: 30-DAY IN-CAR TRIAL, WARRANTY & RETURNS -->
                <div class="faq-group scroll-mt-28" data-category="warranty" id="cat-warranty">
                    <div class="flex items-center gap-space-xs mb-space-md">
                        <div class="w-8 h-8 rounded bg-primary text-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">verified_user</span>
                        </div>
                        <div>
                            <h2 class="font-title-md text-title-md font-bold text-primary">30-Day In-Car Trial,
                                Warranty &amp; Returns</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Zero-risk trial
                                conditions and full-replacement coverage.</p>
                        </div>
                    </div>
                    <div class="space-y-space-sm">
                        <!-- Q12 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="30-day trial refund return label test car vehicle risk free">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    How does the 30-Day Risk-Free In-Car Trial work?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2 mb-2">
                                    We believe showroom perfection is proven in real vehicle cabins. When your
                                    order arrives, put AutoLustre through its paces for 30 consecutive days.
                                    Vacuum road sand, dog hair from the trunk, and French fry salt from the seat
                                    tracks.
                                </p>
                                <p class="text-body-sm text-on-surface-variant">
                                    If you are not 100% satisfied that it outperforms bulkier garage vacuums,
                                    simply reach out to our concierge desk at <span
                                        class="font-medium text-primary">support@autolustre.com</span>. We will
                                    generate a prepaid return shipping slip and process a 100% prompt refund
                                    back to your original payment method. No restocking fees.
                                </p>
                            </div>
                        </div>
                        <!-- Q13 -->
                        <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm transition-all overflow-hidden"
                            data-keywords="1-year warranty replacement defect motor degradation failure new unit">
                            <button
                                class="faq-trigger w-full px-space-md py-4 text-left flex items-center justify-between gap-space-sm group"
                                type="button">
                                <span
                                    class="font-title-sm text-title-sm font-semibold text-primary group-hover:text-on-surface-variant transition-colors">
                                    What does the 1-Year Comprehensive Replacement Warranty cover?
                                </span>
                                <span
                                    class="faq-icon material-symbols-outlined text-outline group-hover:text-primary transition-transform duration-200 shrink-0">expand_more</span>
                            </button>
                            <div
                                class="faq-content hidden px-space-md pb-space-md pt-0 text-on-surface-variant font-body-md text-body-md border-t border-surface-container-low mt-2">
                                <p class="pt-2 mb-2">
                                    Every instrument is backed by a full 1-Year Comprehensive Replacement
                                    Guarantee:
                                </p>
                                <div
                                    class="p-3 bg-surface-container-low rounded-lg text-body-sm space-y-1 text-on-surface">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">check</span>
                                        <span>Turbine motor electrical and mechanical failures</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">check</span>
                                        <span>Battery cell degradation exceeding 25% original charge
                                            density</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">check</span>
                                        <span>Internal PCB charging or LED indicator anomalies</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">check</span>
                                        <span>Mechanical canister latch snap or hinge integrity</span>
                                    </div>
                                </div>
                                <p class="mt-2 text-body-sm text-on-surface-variant">
                                    We don't make you wait weeks for repairs. Once verified with your order
                                    receipt, we dispatch a brand-new replacement unit directly to your doorstep.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- No search results fallback (hidden by default) -->
                <div class="hidden p-space-xl bg-surface-container-lowest rounded-xl text-center shadow-sm"
                    id="no-faq-results">
                    <div
                        class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center mx-auto mb-space-sm text-outline">
                        <span class="material-symbols-outlined text-[24px]">search_off</span>
                    </div>
                    <h3 class="font-title-md text-title-md font-bold text-primary mb-1">No Matching Technical
                        Topics Found</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-md mx-auto mb-space-md">
                        We couldn't find an answer matching your query. Speak directly with our automotive
                        product specialists.
                    </p>
                    <button
                        class="font-label-md text-label-md px-4 py-2 bg-primary text-on-primary rounded font-bold hover:bg-neutral-800 transition-colors"
                        id="reset-search-btn" type="button">
                        Clear Filters &amp; View All
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Still Have Questions? Concierge Support Card -->
    <section class="max-w-7xl mx-auto w-full px-margin-mobile md:px-margin-tablet lg:px-margin pb-space-xl">
        <div class="bg-primary text-on-primary rounded-xl p-space-lg md:p-space-xl shadow-xl relative overflow-hidden">
            <!-- Subtle Decorative Accent Grid Line -->
            <div
                class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-secondary-fixed/10 blur-3xl pointer-events-none">
            </div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                <div class="lg:col-span-7">
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container-high/20 text-secondary-fixed text-label-sm font-label-sm uppercase tracking-wider mb-space-sm">
                        <span class="material-symbols-outlined text-[14px]">headset_mic</span>
                        <span>Concierge Driver Desk</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md font-bold text-on-primary mb-space-xs">
                        Have a question about vehicle fitment or commercial detailing fleets?
                    </h3>
                    <p class="font-body-md text-body-md text-on-primary-container max-w-xl mb-space-md">
                        Our support engineers are auto enthusiasts based in North America. We provide
                        knowledgeable answers, not automated script loops.
                    </p>
                    <div class="flex flex-wrap items-center gap-space-md text-body-sm text-on-primary-container">
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary-fixed">schedule</span>
                            <span>Average resolution: &lt; 4 hours</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px] text-secondary-fixed">check_circle</span>
                            <span>100% human automotive experts</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 flex flex-col sm:flex-row lg:flex-col gap-space-sm justify-center">
                    <a class="flex items-center justify-between px-space-md py-3.5 rounded bg-surface-container-high/10 hover:bg-surface-container-high/20 border border-on-primary/10 transition-colors text-on-primary group"
                        href="mailto:support@autolustre.com">
                        <div class="flex items-center gap-space-sm">
                            <span class="material-symbols-outlined text-[20px] text-secondary-fixed">mail</span>
                            <div class="text-left">
                                <div class="font-label-md text-label-md font-bold">Email Detailing Desk</div>
                                <div class="text-[12px] text-on-primary-container">support@autolustre.com</div>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-[18px] text-on-primary-container group-hover:text-secondary-fixed transition-colors">arrow_forward</span>
                    </a>
                    <a class="flex items-center justify-between px-space-md py-3.5 rounded bg-surface-container-high/10 hover:bg-surface-container-high/20 border border-on-primary/10 transition-colors text-on-primary group"
                        href="tel:18004185878">
                        <div class="flex items-center gap-space-sm">
                            <span class="material-symbols-outlined text-[20px] text-secondary-fixed">call</span>
                            <div class="text-left">
                                <div class="font-label-md text-label-md font-bold">Call Toll-Free Concierge
                                </div>
                                <div class="text-[12px] text-on-primary-container">1-800-418-LUSTRE (Mon-Fri)
                                </div>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-[18px] text-on-primary-container group-hover:text-secondary-fixed transition-colors">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Bottom Conversion Callout -->
    <section class="w-full bg-surface-container-low py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div
                class="bg-surface-container-lowest rounded-xl p-space-lg md:p-space-xl shadow-md flex flex-col md:flex-row items-center justify-between gap-space-lg">
                <div class="max-w-xl">
                    <span
                        class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold mb-1 block">PRECISION
                        CAR CARE READY</span>
                    <h2 class="font-headline-md text-headline-md text-primary font-bold mb-space-xs">
                        Ready to Experience Effortless Cabin Detailing?
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Join thousands of car owners, weekend detailers, and luxury motorists across the US and
                        Canada. Complete with all 3 high-precision attachments.
                    </p>
                    <div
                        class="mt-space-sm flex flex-wrap items-center gap-space-sm text-label-sm text-on-surface-variant">
                        <span class="flex items-center gap-1 font-semibold text-on-surface">
                            <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                            30-Day Risk-Free Trial
                        </span>
                        <span>•</span>
                        <span class="flex items-center gap-1 font-semibold text-on-surface">
                            <span class="material-symbols-outlined text-secondary text-[16px]">local_shipping</span>
                            Fast US &amp; Canada Dispatch
                        </span>
                    </div>
                </div>
                <div class="flex flex-col items-center sm:items-end w-full md:w-auto shrink-0">
                    <div class="mb-space-xs flex items-baseline gap-2">
                        <span class="font-headline-sm text-headline-sm font-extrabold text-primary">$44.99
                            USD</span>
                        <span class="text-body-sm text-on-surface-variant line-through">$69.99</span>
                        <span
                            class="bg-secondary-fixed text-primary text-[10px] font-bold px-1.5 py-0.5 rounded uppercase">SAVE
                            $25</span>
                    </div>
                    <a class="w-full sm:w-auto px-8 py-3.5 bg-secondary-fixed hover:bg-secondary-fixed-dim text-primary font-label-md text-label-md font-bold rounded shadow transition-all transform active:scale-95 text-center flex items-center justify-center gap-2"
                        data-path="shop" href="#">
                        <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                        <span>Order AutoLustre Vacuum</span>
                    </a>
                    <span class="font-label-sm text-label-sm text-on-surface-variant mt-2">In Stock • Dispatches
                        Within 24 Hours</span>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
// Technical Accordion & Interactive Filtering Micro-Script
document.addEventListener('DOMContentLoaded', function() {
    const triggers = document.querySelectorAll('.faq-trigger');
    const filterButtons = document.querySelectorAll('.filter-chip');
    const searchInput = document.getElementById('faq-search-input');
    const clearBtn = document.getElementById('clear-search-btn');
    const resetBtn = document.getElementById('reset-search-btn');
    const faqItems = document.querySelectorAll('.faq-item');
    const faqGroups = document.querySelectorAll('.faq-group');
    const noResults = document.getElementById('no-faq-results');

    // 1. Accordion Toggle Logic
    triggers.forEach(trigger => {
        trigger.addEventListener('click', function() {
            const item = this.closest('.faq-item');
            const content = item.querySelector('.faq-content');
            const icon = item.querySelector('.faq-icon');
            const isOpen = !content.classList.contains('hidden');

            // Close other items for crisp accordions
            triggers.forEach(otherTrigger => {
                if (otherTrigger !== trigger) {
                    const otherItem = otherTrigger.closest('.faq-item');
                    const otherContent = otherItem.querySelector(
                        '.faq-content');
                    const otherIcon = otherItem.querySelector('.faq-icon');
                    if (otherContent) otherContent.classList.add('hidden');
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            if (isOpen) {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // 2. Filter by Category
    function applyFilter(category) {
        filterButtons.forEach(btn => {
            if (btn.dataset.filter === category) {
                btn.classList.add('bg-primary', 'text-on-primary', 'shadow-sm');
                btn.classList.remove('bg-surface-container-low', 'text-on-surface');
            } else {
                btn.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
                btn.classList.add('bg-surface-container-low', 'text-on-surface');
            }
        });

        faqGroups.forEach(group => {
            if (category === 'all' || group.dataset.category === category) {
                group.classList.remove('hidden');
            } else {
                group.classList.add('hidden');
            }
        });

        checkVisibility();
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            applyFilter(this.dataset.filter);
            if (searchInput) searchInput.value = '';
            if (clearBtn) clearBtn.classList.add('hidden');
        });
    });

    // 3. Search Bar Real-time Filter
    function filterBySearch() {
        const term = searchInput.value.toLowerCase().trim();
        if (term.length > 0) {
            clearBtn.classList.remove('hidden');
        } else {
            clearBtn.classList.add('hidden');
        }

        // Reset category filter highlights to "All" when actively typing
        if (term.length > 0) {
            faqGroups.forEach(g => g.classList.remove('hidden'));
            filterButtons.forEach(b => {
                b.classList.remove('bg-primary', 'text-on-primary');
                b.classList.add('bg-surface-container-low', 'text-on-surface');
            });
            filterButtons[0].classList.add('bg-primary', 'text-on-primary');
        }

        faqItems.forEach(item => {
            const text = (item.innerText + ' ' + (item.dataset.keywords || '')).toLowerCase();
            if (term === '' || text.includes(term)) {
                item.classList.remove('hidden');
                // Auto-expand if direct match and searching
                if (term.length > 2 && text.includes(term)) {
                    const content = item.querySelector('.faq-content');
                    const icon = item.querySelector('.faq-icon');
                    if (content) content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            } else {
                item.classList.add('hidden');
            }
        });

        checkVisibility();
    }

    function checkVisibility() {
        let visibleCount = 0;
        faqGroups.forEach(group => {
            const items = group.querySelectorAll('.faq-item:not(.hidden)');
            if (items.length === 0) {
                group.classList.add('hidden');
            } else {
                group.classList.remove('hidden');
                visibleCount += items.length;
            }
        });

        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterBySearch);
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            clearBtn.classList.add('hidden');
            filterBySearch();
        });
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            searchInput.value = '';
            clearBtn.classList.add('hidden');
            applyFilter('all');
            faqItems.forEach(i => i.classList.remove('hidden'));
            checkVisibility();
        });
    }

    // Hotkey: ⌘K or Ctrl+K focusing search
    document.addEventListener('keydown', function(e) {
        if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
            e.preventDefault();
            if (searchInput) {
                searchInput.focus();
                searchInput.select();
            }
        }
    });
});
</script>


@endsection