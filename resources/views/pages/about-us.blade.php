@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- Brand Story & Engineering Vision Hero -->
    <section class="relative w-full bg-surface-container-lowest overflow-hidden py-space-xl lg:py-24">
        <div
            class="absolute inset-0 bg-gradient-to-r from-surface-container-lowest via-surface-container-low/40 to-surface-container-lowest pointer-events-none">
        </div>
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin relative z-10">
            <!-- Overline Tag & Status Pill -->
            <div class="flex items-center gap-space-sm mb-space-md">
                <span
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-primary text-secondary-fixed rounded-full font-label-sm text-label-sm tracking-wider uppercase">
                    <span class="w-2 h-2 rounded-full bg-secondary-fixed animate-pulse"></span>
                    AutoLustre Lab &amp; Archive
                </span>
                <span
                    class="text-on-surface-variant font-label-sm text-label-sm tracking-wider uppercase hidden sm:inline-block">/
                    Document No. AL-2025-V1</span>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                <!-- Hero Narrative Left -->
                <div class="lg:col-span-7 flex flex-col justify-center">
                    <h1 class="font-display text-display text-primary tracking-tight mb-space-lg">
                        Engineered for Drivers Who Take Pride in Their Ride.
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed mb-space-lg max-w-2xl">
                        For decades, vehicle owners were trapped between bulky corded shop vacs that scar door
                        sills and feeble toy-grade handheld gadgets that surrender at the first speck of gravel.
                        We designed AutoLustre to obliterate that compromise.
                    </p>
                    <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                        <a class="inline-flex items-center gap-space-xs px-6 py-3.5 bg-secondary-fixed hover:bg-secondary-fixed-dim text-on-secondary-fixed font-label-md text-label-md transition-colors rounded"
                            href="#knowledge-hub">
                            <span>Explore Knowledge Base</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_downward</span>
                        </a>
                        <a class="inline-flex items-center gap-space-xs px-6 py-3.5 bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors rounded"
                            href="#support-contact">
                            <span class="material-symbols-outlined text-[18px]">headset_mic</span>
                            <span>Direct Driver Support</span>
                        </a>
                    </div>
                    <!-- Quick Metrics Bar -->
                    <div
                        class="grid grid-cols-3 gap-space-md mt-space-xl pt-space-lg bg-surface-container-low p-space-md rounded-xl">
                        <div>
                            <span class="font-headline-md text-headline-md text-primary font-bold block">16.5<span
                                    class="font-label-md text-label-md text-secondary">kPa</span></span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">True
                                Tested Suction</span>
                        </div>
                        <div>
                            <span class="font-headline-md text-headline-md text-primary font-bold block">540<span
                                    class="font-label-md text-label-md text-secondary">g</span></span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Curb
                                Weight Balance</span>
                        </div>
                        <div>
                            <span class="font-headline-md text-headline-md text-primary font-bold block">&lt;24<span
                                    class="font-label-md text-label-md text-secondary">hr</span></span>
                            <span
                                class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Concierge
                                Response</span>
                        </div>
                    </div>
                </div>
                <!-- Hero Visual Bento Right -->
                <div class="lg:col-span-5 relative">
                    <div
                        class="relative bg-surface-container-high rounded-xl overflow-hidden shadow-xl aspect-[4/5] flex items-center justify-center">
                        <img class="w-full h-full object-cover"
                            data-alt="Close up photographic studio view of an aerodynamic obsidian black handheld cordless car detailing vacuum resting precisely on the perforated black leather seat of a luxury sports vehicle, soft directional studio lighting catching the lime green power accent ring and machined aluminum filter vents, pristine automotive craftsmanship, hyper clean composition"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl5PX0IxxfodRA0-Psx9N9pcFFG-xj3Mmb9hc5pH3Vw3cpq1Ea1dMHeEM5e3_NeREolCTgTzu4fMv7mu7zi9UhQmHqLvpYgAeStOd0AClcuAVDwfN8wWqjeKGP7zxlNFGZgWOd6KSS4q3u4HJSWNgtsMz8SVXlqigCsV8pxldUWPIaoT6CncCq8knyFudqaWLoqz6jgR124tAQ7TEL2G5F_v6CvIeEB_TDkuVkUS0EPLZLKse0HziaPA" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent flex flex-col justify-end p-space-lg text-on-primary">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="material-symbols-outlined text-secondary-fixed text-[18px]">verified</span>
                                <span
                                    class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed font-bold">Standard
                                    01 / Chassis</span>
                            </div>
                            <p class="font-title-sm text-title-sm font-semibold text-on-primary">Anodized CNC
                                Core &amp; Micro-HEPA Assembly</p>
                            <p class="font-body-sm text-body-sm text-inverse-on-surface/80">Every component
                                calibrated to resist cabin heat spikes up to 85°C.</p>
                        </div>
                    </div>
                    <!-- Overlapping Spec Badge -->
                    <div
                        class="absolute -bottom-6 -left-6 bg-surface-container-lowest p-space-md rounded-xl shadow-lg hidden sm:flex items-center gap-space-sm max-w-xs">
                        <div
                            class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold">
                            <span class="material-symbols-outlined text-[20px]">precision_manufacturing</span>
                        </div>
                        <div>
                            <p class="font-label-sm text-label-sm uppercase text-on-surface-variant">Engineering
                                Benchmark</p>
                            <p class="font-title-sm text-title-sm font-bold text-on-surface">Zero Inflated
                                Wattage Claims</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Values & Automotive Standards Grid -->
    <section class="w-full bg-surface py-space-xl lg:py-20">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
                <div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Our
                        Operating Standards</span>
                    <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-space-xs">
                        Built For Enthusiasts. Held to Rigor.
                    </h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                    We don't manufacture white-labeled novelties. We engineer dedicated cockpit maintenance
                    tools designed around vehicle interior geometry.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Value 1 -->
                <div
                    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md group-hover:bg-secondary-fixed transition-colors">
                            <span class="material-symbols-outlined text-[26px]">airline_seat_recline_extra</span>
                        </div>
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Geometry-Specific</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary mt-1 mb-space-sm">
                            Purpose-Built for Cars</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Aerodynamic slimline chassis slips effortlessly between seat rails, deep center
                            console channels, and glovebox compartments. No awkward bulk scraping fine nappa
                            leather or gloss piano trim.
                        </p>
                    </div>
                    <div
                        class="mt-space-lg pt-space-md bg-surface-container-low -mx-space-lg -mb-space-lg px-space-lg py-space-sm rounded-b-xl flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
                        <span>Profile: 42mm Dia. Bore</span>
                        <span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
                    </div>
                </div>
                <!-- Value 2 -->
                <div
                    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md group-hover:bg-secondary-fixed transition-colors">
                            <span class="material-symbols-outlined text-[26px]">troubleshoot</span>
                        </div>
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Uncompromising
                            Honesty</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary mt-1 mb-space-sm">Transparent
                            Specifications</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            We publish real laboratory-measured Pascals and sustained duty cycles, not phantom
                            999,000Pa battery burst spikes. When we say 28 minutes continuous cleaning, that is
                            on genuine high-torque load.
                        </p>
                    </div>
                    <div
                        class="mt-space-lg pt-space-md bg-surface-container-low -mx-space-lg -mb-space-lg px-space-lg py-space-sm rounded-b-xl flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
                        <span>Verified Dyno Curves</span>
                        <span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
                    </div>
                </div>
                <!-- Value 3 -->
                <div
                    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow group">
                    <div>
                        <div
                            class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md group-hover:bg-secondary-fixed transition-colors">
                            <span class="material-symbols-outlined text-[26px]">support_agent</span>
                        </div>
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Bilingual
                            Care</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary mt-1 mb-space-sm">Driver-First
                            Support</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                            Direct access to technical automotive gear specialists stationed in the United
                            States and Canada. Zero automated endless telephone loops; real human car
                            enthusiasts resolving queries rapidly.
                        </p>
                    </div>
                    <div
                        class="mt-space-lg pt-space-md bg-surface-container-low -mx-space-lg -mb-space-lg px-space-lg py-space-sm rounded-b-xl flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
                        <span>US &amp; Canadian Logistics Hubs</span>
                        <span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Complete Searchable FAQ Knowledge Hub -->
    <section class="w-full bg-surface-container-low py-space-xl lg:py-24" id="knowledge-hub">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="text-center max-w-3xl mx-auto mb-space-xl">
                <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Driver
                    Knowledge Base</span>
                <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-space-xs mb-space-sm">
                    Frequently Answered Inquiries
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Complete clarity regarding suction longevity, battery cycles, maintenance regimes, and North
                    American delivery logistics.
                </p>
                <!-- Live Instant Search Bar -->
                <div class="mt-space-lg relative max-w-xl mx-auto">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-[22px]">search</span>
                    <input
                        class="w-full bg-surface-container-lowest text-on-surface pl-12 pr-10 py-3.5 rounded-lg shadow-sm font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all placeholder:text-outline"
                        id="faq-search-input"
                        placeholder="Search topics (e.g. battery, washable filter, Canada shipping)..." type="text" />
                    <button
                        class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface p-1"
                        id="faq-search-clear">
                        <span class="material-symbols-outlined text-[18px]">close</span>
                    </button>
                </div>
                <!-- Filter Pill Chips -->
                <div class="flex flex-wrap items-center justify-center gap-space-xs mt-space-md">
                    <button
                        class="faq-filter-btn px-4 py-2 rounded font-label-sm text-label-sm tracking-wide bg-primary text-on-primary transition-colors"
                        data-category="all">
                        All Questions (7)
                    </button>
                    <button
                        class="faq-filter-btn px-4 py-2 rounded font-label-sm text-label-sm tracking-wide bg-surface-container-lowest text-on-surface hover:bg-surface-container transition-colors"
                        data-category="battery">
                        Product &amp; Battery
                    </button>
                    <button
                        class="faq-filter-btn px-4 py-2 rounded font-label-sm text-label-sm tracking-wide bg-surface-container-lowest text-on-surface hover:bg-surface-container transition-colors"
                        data-category="maintenance">
                        Usage &amp; Maintenance
                    </button>
                    <button
                        class="faq-filter-btn px-4 py-2 rounded font-label-sm text-label-sm tracking-wide bg-surface-container-lowest text-on-surface hover:bg-surface-container transition-colors"
                        data-category="shipping">
                        Shipping &amp; Returns
                    </button>
                </div>
            </div>
            <!-- FAQ Accordion Container -->
            <div class="max-w-4xl mx-auto flex flex-col gap-space-sm" id="faq-accordion-list">
                <!-- Item 1: Battery / Power -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="battery">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Product</span>
                            <span class="font-title-md text-title-md text-primary font-bold">How long does the
                                battery last on a single charge and how is it recharged?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        The AutoLustre Cordless Detailing Vacuum features dual 2,000mAh lithium-ion high-density
                        cells providing up to 28 minutes of continuous sustained high-suction runtime—ample
                        duration to thoroughly detail front, rear, trunk, and crevice zones of an SUV. It
                        recharges universally via an included high-amperage USB-C cable in roughly 2.5 hours
                        through any standard 12V in-car adapter, laptop port, or wall brick.
                    </div>
                </div>
                <!-- Item 2: Suction Power -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="battery">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Suction</span>
                            <span class="font-title-md text-title-md text-primary font-bold">Can it pick up
                                heavier cabin debris like gravel, road salt, and stubborn pet fur?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        Yes. Powered by an efficient 120W digital brushless motor spinning at 42,000 RPM, it
                        generates 16,500 Pa of calibrated negative pressure. Combined with the interchangeable
                        static-dissipative stiff nylon bristle head, it breaks free intertwined canine hair from
                        velour floor mats and effortlessly lifts heavy winter gravel deposits.
                    </div>
                </div>
                <!-- Item 3: Filter & Cleaning -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="maintenance">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Filter</span>
                            <span class="font-title-md text-title-md text-primary font-bold">Are the internal
                                filters washable and how often should they be replaced?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        The multi-stage filtration consists of an outer stainless steel cyclone pre-screen and
                        an inner high-density nano-HEPA filter. Both elements are 100% washable under warm
                        running water. Simply allow them to thoroughly air dry for 24 hours before reinsertion.
                        Under standard detailing routines (twice monthly), a single filter core lasts 6 to 9
                        months. Each unit ships with two spare filters in the retail bundle.
                    </div>
                </div>
                <!-- Item 4: Wet / Dry Capability -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="maintenance">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Usage</span>
                            <span class="font-title-md text-title-md text-primary font-bold">Can the AutoLustre
                                vacuum ingest liquids or spilled beverages?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        The vacuum is engineered specifically as a dry extraction instrument for dry dust, soil,
                        grit, crumbs, and debris. While it can safely handle slightly damp carpet moisture after
                        spot-cleaning sprays, it is not designed to siphon Standing liquids (such as full coffee
                        spills or standing puddle water), as liquid penetration into the high-speed brushless
                        turbine could compromise internal circuits.
                    </div>
                </div>
                <!-- Item 5: Glovebox Storage -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="maintenance">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Storage</span>
                            <span class="font-title-md text-title-md text-primary font-bold">Is it safe to store
                                the vacuum in a car during hot summers or freezing winters?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        Our power pack features integrated thermal protection circuitry (BMS) rated for vehicle
                        internal extremes between -15°C and 60°C (5°F to 140°F). It can be safely stowed in your
                        glove compartment, under-seat tray, or trunk organizer. During extreme thermal events
                        (over 65°C direct sun baking), we advise stowing it in shaded door pockets or the rear
                        storage well.
                    </div>
                </div>
                <!-- Item 6: Shipping Logistics -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="shipping">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Shipping</span>
                            <span class="font-title-md text-title-md text-primary font-bold">What are the exact
                                shipping timeframes and rates for the US and Canada?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        All domestic United States orders ship via expedited ground (USPS Priority / FedEx)
                        within 1 business day, arriving in 3 to 5 business days. Canadian shipments dispatch
                        directly from our Ontario regional depot via Canada Post Expedited Parcel, delivering in
                        4 to 7 business days with zero unexpected import duties. Complimentary standard shipping
                        applies to all orders surpassing $50.00 USD/CAD.
                    </div>
                </div>
                <!-- Item 7: 30-Day Guarantee -->
                <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden transition-all duration-200"
                    data-category="shipping">
                    <button
                        class="faq-trigger w-full px-space-lg py-space-md text-left flex items-center justify-between gap-space-md focus:outline-none">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="px-2.5 py-1 bg-surface-container-low text-secondary rounded font-label-sm text-label-sm uppercase font-bold">Guarantee</span>
                            <span class="font-title-md text-title-md text-primary font-bold">What is the 30-Day
                                Risk-Free Trial and return procedure?</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-primary faq-icon transition-transform duration-300 text-[22px]">expand_more</span>
                    </button>
                    <div
                        class="faq-content hidden px-space-lg pb-space-lg pt-space-xs text-on-surface-variant font-body-md text-body-md leading-relaxed">
                        Every driver receives an unconditional 30-day trial period from the delivery timestamp.
                        Test it on your daily commute, family road trips, or project builds. If it fails to
                        outperform your expectations, simply access our return portal or ping our concierge team
                        for a prepaid domestic return label and a 100% refund back to your original payment
                        method.
                    </div>
                </div>
            </div>
            <!-- No Results State -->
            <div class="hidden text-center py-space-xl" id="faq-empty-state">
                <span class="material-symbols-outlined text-[48px] text-outline mb-space-sm">search_off</span>
                <p class="font-title-md text-title-md text-primary font-bold">No Matching Knowledge Base Records
                </p>
                <p class="font-body-md text-body-md text-on-surface-variant mt-1">Try another keyword or reach
                    out directly to our engineering desk below.</p>
            </div>
        </div>
    </section>
    <!-- Contact Driver Concierge & Technical Inquiries -->
    <section class="w-full bg-surface py-space-xl lg:py-24" id="support-contact">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
                <!-- Left Contact Context & Operations Card -->
                <div class="lg:col-span-5 flex flex-col justify-between">
                    <div>
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Direct
                            Communication</span>
                        <h2
                            class="font-headline-lg text-headline-lg text-primary tracking-tight mt-space-xs mb-space-md">
                            Need Assistance? Speak Directly With Our Crew.
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg leading-relaxed">
                            Whether you need replacement nozzle tips, battery guidance, fleet procurement
                            inquiries, or real-time package rerouting, our North American team is standing by.
                        </p>
                        <!-- SLA & Operating Schedule Pill -->
                        <div
                            class="space-y-space-md bg-surface-container-lowest p-space-lg rounded-xl shadow-sm mb-space-lg">
                            <div class="flex items-start gap-space-sm">
                                <span
                                    class="material-symbols-outlined text-secondary-fixed-dim text-[24px] mt-0.5">timer</span>
                                <div>
                                    <h4 class="font-title-sm text-title-sm font-bold text-primary">24-Hour
                                        Response Guarantee</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">All ticket
                                        inquiries are answered within 24 hours on business cycles, typically
                                        under 3 hours.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-space-sm">
                                <span
                                    class="material-symbols-outlined text-secondary-fixed-dim text-[24px] mt-0.5">schedule</span>
                                <div>
                                    <h4 class="font-title-sm text-title-sm font-bold text-primary">Operating
                                        Hours</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Monday –
                                        Friday: 9:00 AM – 6:00 PM EST<br />Weekend Technical On-Call: 10:00 AM –
                                        2:00 PM EST</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-space-sm">
                                <span
                                    class="material-symbols-outlined text-secondary-fixed-dim text-[24px] mt-0.5">local_shipping</span>
                                <div>
                                    <h4 class="font-title-sm text-title-sm font-bold text-primary">Dispatch
                                        Warehouses</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">🇺🇸 Columbus,
                                        Ohio (US Hub) • 🇨🇦 Mississauga, Ontario (CA Hub)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Direct Contacts -->
                    <div
                        class="flex flex-col sm:flex-row gap-space-md text-body-sm font-body-sm text-on-surface-variant">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px] text-primary">mail</span>
                            <span class="font-semibold text-primary">support@autolustre.com</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px] text-primary">phone_iphone</span>
                            <span>1-800-418-LUSTRE</span>
                        </div>
                    </div>
                </div>
                <!-- Right Support Form -->
                <div class="lg:col-span-7">
                    <div class="bg-surface-container-lowest p-space-lg lg:p-space-xl rounded-xl shadow-md relative">
                        <form class="space-y-space-md" id="support-inquiry-form"
                            onsubmit="event.preventDefault(); document.getElementById('form-success-banner').classList.remove('hidden'); this.reset();">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <!-- Full Name -->
                                <div>
                                    <label class="block font-label-md text-label-md text-primary mb-1.5 font-bold"
                                        for="contact-name">Full Name *</label>
                                    <input
                                        class="w-full bg-surface-container-low text-on-surface px-space-md py-3 rounded text-body-md font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all placeholder:text-outline"
                                        id="contact-name" placeholder="Marcus Vance" required="" type="text" />
                                </div>
                                <!-- Email -->
                                <div>
                                    <label class="block font-label-md text-label-md text-primary mb-1.5 font-bold"
                                        for="contact-email">Email Address *</label>
                                    <input
                                        class="w-full bg-surface-container-low text-on-surface px-space-md py-3 rounded text-body-md font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all placeholder:text-outline"
                                        id="contact-email" placeholder="marcus@garage-studio.com" required=""
                                        type="email" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <!-- Country Selector -->
                                <div>
                                    <label class="block font-label-md text-label-md text-primary mb-1.5 font-bold"
                                        for="contact-country">Region / Country *</label>
                                    <select
                                        class="w-full bg-surface-container-low text-on-surface px-space-md py-3 rounded text-body-md font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                        id="contact-country" required="">
                                        <option value="US">🇺🇸 United States (USD)</option>
                                        <option value="CA">🇨🇦 Canada (CAD)</option>
                                        <option value="OTHER">Other Global Territory</option>
                                    </select>
                                </div>
                                <!-- Order Number (Optional) -->
                                <div>
                                    <label class="block font-label-md text-label-md text-primary mb-1.5 font-bold"
                                        for="contact-order">
                                        Order Number <span class="text-on-surface-variant font-normal">(Optional)</span>
                                    </label>
                                    <input
                                        class="w-full bg-surface-container-low text-on-surface px-space-md py-3 rounded text-body-md font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all placeholder:text-outline"
                                        id="contact-order" placeholder="e.g. #AL-98421" type="text" />
                                </div>
                            </div>
                            <!-- Topic Dropdown -->
                            <div>
                                <label class="block font-label-md text-label-md text-primary mb-1.5 font-bold"
                                    for="contact-topic">Inquiry Topic *</label>
                                <select
                                    class="w-full bg-surface-container-low text-on-surface px-space-md py-3 rounded text-body-md font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                    id="contact-topic" required="">
                                    <option value="technical">Technical Support &amp; Maintenance Advice
                                    </option>
                                    <option value="order">Order Tracking &amp; Delivery Update</option>
                                    <option value="returns">Initiate 30-Day Return or Warranty Claim</option>
                                    <option value="parts">Replacement Filters &amp; Nozzle Attachments</option>
                                    <option value="wholesale">Detailer Wholesale &amp; Fleet Ordering</option>
                                </select>
                            </div>
                            <!-- Message Textarea -->
                            <div>
                                <label class="block font-label-md text-label-md text-primary mb-1.5 font-bold"
                                    for="contact-message">Message *</label>
                                <textarea
                                    class="w-full bg-surface-container-low text-on-surface px-space-md py-3 rounded text-body-md font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all placeholder:text-outline"
                                    id="contact-message"
                                    placeholder="Describe your question, vehicle setup, or order inquiry..." required=""
                                    rows="4"></textarea>
                            </div>
                            <!-- Checkbox Acceptance -->
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <input
                                    class="w-4 h-4 rounded text-primary focus:ring-secondary-fixed accent-primary cursor-pointer"
                                    id="support-consent" required="" type="checkbox" />
                                <label class="font-body-sm text-body-sm text-on-surface-variant cursor-pointer"
                                    for="support-consent">
                                    I agree to the processing of my inquiry according to AutoLustre's Privacy
                                    Policy.
                                </label>
                            </div>
                            <!-- Submit Action Button -->
                            <button
                                class="w-full py-4 bg-secondary-fixed hover:bg-secondary-fixed-dim text-on-secondary-fixed font-label-md text-label-md transition-colors rounded font-bold shadow-sm flex items-center justify-center gap-2"
                                type="submit">
                                <span>Transmit Inquiry to Support Team</span>
                                <span class="material-symbols-outlined text-[20px]">send</span>
                            </button>
                            <!-- Live Success Feedback Notification (Hidden by default) -->
                            <div class="hidden mt-space-md p-space-md bg-surface-container-high text-primary rounded flex items-center gap-space-sm animate-fade-in"
                                id="form-success-banner">
                                <span class="material-symbols-outlined text-secondary text-[24px]">task_alt</span>
                                <div class="font-body-sm text-body-sm">
                                    <span class="font-bold block">Transmission Confirmed!</span>
                                    Your inquiry has been assigned ticket ID <strong
                                        class="text-secondary font-mono">#TK-8049</strong>. A support engineer
                                    will reply within 24 hours.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Legal & Policies Navigation Cards -->
    <section class="w-full bg-surface-container-lowest py-space-xl lg:py-20">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg">
                <div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Buyer
                        Safeguards &amp; Governance</span>
                    <h2 class="font-headline-md text-headline-md text-primary tracking-tight mt-space-xs">
                        Operational Policies &amp; Legal Framework
                    </h2>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    Complete transparent documentation for every transacted unit.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- Policy Card 1: Shipping Policy -->
                <div
                    class="bg-surface-container-low p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:bg-surface-container transition-colors group">
                    <div>
                        <div class="flex items-center justify-between mb-space-md">
                            <span class="material-symbols-outlined text-[28px] text-primary">local_shipping</span>
                            <span
                                class="px-2 py-0.5 bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm rounded uppercase font-bold">Fast
                                Transit</span>
                        </div>
                        <h3 class="font-title-md text-title-md font-bold text-primary mb-space-xs">Shipping
                            Policy</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Fast domestic fulfillment. US orders deliver in 3–5 business days. Canadian orders
                            arrive in 4–7 business days without border duties. Free over $50.
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary transition-colors"
                        href="#">
                        <span>Read Shipping Details</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
                <!-- Policy Card 2: Return Policy -->
                <div
                    class="bg-surface-container-low p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:bg-surface-container transition-colors group">
                    <div>
                        <div class="flex items-center justify-between mb-space-md">
                            <span
                                class="material-symbols-outlined text-[28px] text-primary">published_with_changes</span>
                            <span
                                class="px-2 py-0.5 bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm rounded uppercase font-bold">30
                                Days</span>
                        </div>
                        <h3 class="font-title-md text-title-md font-bold text-primary mb-space-xs">Returns &amp;
                            Refunds</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            30-day money-back trial window. If it doesn't transform your automotive detailing
                            routine, return it hassle-free with complimentary pre-paid shipping tags.
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary transition-colors"
                        href="#">
                        <span>Start Return Process</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
                <!-- Policy Card 3: Privacy Policy (Editable Draft marker) -->
                <div
                    class="bg-surface-container-low p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:bg-surface-container transition-colors group">
                    <div>
                        <div class="flex items-center justify-between mb-space-md">
                            <span class="material-symbols-outlined text-[28px] text-primary">lock_clock</span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm rounded uppercase font-bold">Draft
                                Ready</span>
                        </div>
                        <h3 class="font-title-md text-title-md font-bold text-primary mb-space-xs">Privacy
                            Policy</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Strict GDPR and CCPA compliance. Zero sale of customer data or driving telematics.
                            Clear, editable legal markers for regional corporate governance.
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary transition-colors"
                        href="#">
                        <span>Review Privacy Terms</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
                <!-- Policy Card 4: Terms of Service (Editable Draft marker) -->
                <div
                    class="bg-surface-container-low p-space-lg rounded-xl shadow-sm flex flex-col justify-between hover:bg-surface-container transition-colors group">
                    <div>
                        <div class="flex items-center justify-between mb-space-md">
                            <span class="material-symbols-outlined text-[28px] text-primary">gavel</span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm rounded uppercase font-bold">Draft
                                Ready</span>
                        </div>
                        <h3 class="font-title-md text-title-md font-bold text-primary mb-space-xs">Terms of
                            Service</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Standard vehicle warranty boundaries, hardware safe usage guidelines, limitation of
                            liabilities, and commercial distributor terms.
                        </p>
                    </div>
                    <a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary transition-colors"
                        href="#">
                        <span>Read Complete Terms</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Interactive Search & Accordion Vanilla JS Script -->
    <script>
    (function() {
        // Accordion toggle logic
        const triggers = document.querySelectorAll('.faq-trigger');
        triggers.forEach(trigger => {
            trigger.addEventListener('click', () => {
                const content = trigger.nextElementSibling;
                const icon = trigger.querySelector('.faq-icon');
                const isExpanded = !content.classList.contains('hidden');

                // Close other opened FAQs
                triggers.forEach(otherTrigger => {
                    if (otherTrigger !== trigger) {
                        const otherContent = otherTrigger.nextElementSibling;
                        const otherIcon = otherTrigger.querySelector('.faq-icon');
                        otherContent.classList.add('hidden');
                        otherIcon.style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle current
                if (isExpanded) {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    content.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });

        // Filter tabs logic
        const filterBtns = document.querySelectorAll('.faq-filter-btn');
        const faqItems = document.querySelectorAll('.faq-item');
        const searchInput = document.getElementById('faq-search-input');
        const clearBtn = document.getElementById('faq-search-clear');
        const emptyState = document.getElementById('faq-empty-state');

        let currentCategory = 'all';

        function applyFilters() {
            const query = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;

            if (query.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }

            faqItems.forEach(item => {
                const itemCat = item.getAttribute('data-category');
                const textContent = item.textContent.toLowerCase();
                const matchesCat = (currentCategory === 'all' || itemCat === currentCategory);
                const matchesQuery = (query === '' || textContent.includes(query));

                if (matchesCat && matchesQuery) {
                    item.classList.remove('hidden');
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            if (visibleCount === 0) {
                emptyState.classList.remove('hidden');
            } else {
                emptyState.classList.add('hidden');
            }
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-on-primary');
                    b.classList.add('bg-surface-container-lowest',
                        'text-on-surface');
                });
                btn.classList.add('bg-primary', 'text-on-primary');
                btn.classList.remove('bg-surface-container-lowest', 'text-on-surface');

                currentCategory = btn.getAttribute('data-category');
                applyFilters();
            });
        });

        searchInput.addEventListener('input', applyFilters);

        clearBtn.addEventListener('click', () => {
            searchInput.value = '';
            applyFilters();
            searchInput.focus();
        });
    })();
    </script>
</div>

@endsection