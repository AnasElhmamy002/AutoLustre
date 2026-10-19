@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- Top Navigation & Checkout Journey Stepper -->
    <section class="w-full bg-surface-container-lowest shadow-sm">
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-md flex flex-col md:flex-row md:items-center justify-between gap-space-md">

            <!-- Visual Step Journey Indicator -->
            <div class="flex items-center gap-space-sm md:gap-space-md font-label-sm text-label-sm tracking-wide">
                <!-- Step 1: Active -->
                <div class="flex items-center gap-space-xs text-primary font-bold">
                    <span
                        class="w-6 h-6 rounded-full bg-primary text-secondary-fixed flex items-center justify-center text-[12px] shadow-sm">1</span>
                    <span class="uppercase">Review Cart</span>
                </div>
                <span class="w-8 h-[2px] bg-secondary-fixed"></span>
                <!-- Step 2: Next -->
                <div class="flex items-center gap-space-xs text-on-surface-variant font-medium">
                    <span
                        class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface-variant flex items-center justify-center text-[12px]">2</span>
                    <span class="hidden sm:inline uppercase">Shipping Details</span>
                </div>
                <span class="w-8 h-[2px] bg-surface-container-high"></span>
                <!-- Step 3: Payment -->
                <div class="flex items-center gap-space-xs text-on-surface-variant/60 font-medium">
                    <span
                        class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface-variant/60 flex items-center justify-center text-[12px]">3</span>
                    <span class="hidden sm:inline uppercase">Payment</span>
                </div>
            </div>
            <!-- Live Guarantee Badge -->
            <div class="hidden lg:flex items-center gap-1.5 text-secondary font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-[16px] text-secondary">verified</span>
                <span class="tracking-wide">Official Factory Direct Cart</span>
            </div>
        </div>
    </section>
    <!-- Free Shipping Milestone Engine -->
    <section class="w-full bg-surface-container-low py-space-sm">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div
                class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md">
                <div class="flex items-center gap-space-md w-full md:w-auto">
                    <div
                        class="w-10 h-10 rounded-lg bg-secondary-fixed/30 flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined text-[24px]">local_shipping</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center gap-space-xs">
                            <span class="font-title-sm text-title-sm text-primary font-bold">Add $5.01
                                more</span>
                            <span class="font-body-md text-body-md text-on-surface-variant">to unlock</span>
                            <span
                                class="font-title-sm text-title-sm text-secondary font-bold uppercase tracking-wider">Free
                                Priority Shipping</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Qualified for fast
                            transit to all 50 US States &amp; Canadian Provinces</span>
                    </div>
                </div>
                <!-- Progress Gauge -->
                <div class="w-full md:w-80 flex flex-col gap-1.5 shrink-0">
                    <div class="flex justify-between items-center font-label-sm text-label-sm">
                        <span class="text-on-surface font-semibold">$44.99 of $50.00</span>
                        <span class="text-secondary font-bold">90% Complete</span>
                    </div>
                    <div class="w-full h-2.5 bg-surface-container-high rounded-full overflow-hidden p-0.5">
                        <div class="h-full bg-secondary-fixed rounded-full transition-all duration-500 ease-out"
                            id="shipping-progress-bar" style="width: 90%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Conversion Workspace -->
    <section class="w-full py-space-lg md:py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                <!-- Left Column: Cart Inventory & Unlock Modules (~65% = 8 cols) -->
                <div class="lg:col-span-8 flex flex-col gap-space-lg">
                    <!-- Inventory Card Container -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm">
                        <!-- Header with Session Timer -->
                        <div
                            class="flex flex-wrap items-center justify-between gap-space-sm pb-space-md mb-space-md bg-surface-container-low -mx-space-md -mt-space-md p-space-md rounded-t-xl">
                            <div class="flex items-center gap-space-sm">
                                <h1 class="font-title-md text-title-md text-primary font-bold tracking-tight">
                                    Cart Inventory</h1>
                                <span
                                    class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm font-bold">1
                                    Unit</span>
                            </div>
                            <div
                                class="flex items-center gap-1.5 px-3 py-1 rounded bg-primary text-secondary-fixed font-label-sm text-label-sm font-bold">
                                <span class="material-symbols-outlined text-[16px] animate-pulse">timer</span>
                                <span>RESERVED FOR: <span id="countdown-timer">14:59</span></span>
                            </div>
                        </div>
                        <!-- Primary Cart Item -->
                        <div class="flex flex-col md:flex-row gap-space-md py-space-xs">
                            <!-- Item Media Canvas -->
                            <div
                                class="w-full md:w-44 h-44 rounded-lg bg-surface-container-low shrink-0 relative overflow-hidden flex items-center justify-center p-space-sm">
                                <img class="w-full h-full object-contain mix-blend-multiply"
                                    data-alt="High precision cordless car handheld vacuum finished in matte stealth black with aggressive lime green trim lines, studio shot with soft rim lighting emphasizing aerodynamic carbon nozzle details"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCjor9d94FB7ejb9EvANP5KgMrHCGP7UP5YSrcas63ORo8F5lnvFWxWlZGUNtydPNvYwQbpnxUCvqV2ytpmAuJe7SsW_jc3bw79wehzmU0XeAC6WXZ7T4i9LVGSDqWf90u8mQb8a4_6rhrRXpPMScuU5qU2MNQtWyG1RzkfrCgxx5-Lb0ptzm02v2rApIJIXX1y-tdxe32hPfN1R0siFgkkNTv9xWWJSWlt-XjeQyGdEQQJ7u_yTljmQ" />
                                <span
                                    class="absolute top-2 left-2 px-1.5 py-0.5 rounded bg-primary text-secondary-fixed text-[10px] font-extrabold uppercase tracking-widest">MK-II
                                    SPEC</span>
                            </div>
                            <!-- Item Specifications & Controls -->
                            <div class="flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-start justify-between gap-space-sm mb-1">
                                        <div>
                                            <span
                                                class="text-on-surface-variant font-label-sm text-label-sm tracking-wider uppercase">AutoLustre™
                                                Hardware</span>
                                            <h2 class="font-title-md text-title-md text-primary font-bold leading-snug">
                                                Cordless Handheld Car Vacuum (MK-II Pro)</h2>
                                        </div>
                                        <div class="text-right shrink-0">
                                            <div class="font-title-md text-title-md text-primary font-extrabold">
                                                $44.99 <span
                                                    class="text-[12px] font-medium text-on-surface-variant">USD</span>
                                            </div>
                                            <div class="font-body-sm text-body-sm text-outline line-through">
                                                $59.99 USD</div>
                                        </div>
                                    </div>
                                    <!-- Spec Metadata Matrix -->
                                    <div class="flex flex-wrap gap-1.5 my-space-xs">
                                        <span
                                            class="px-2 py-0.5 rounded bg-surface-container-low text-on-surface text-[12px] font-medium">Stealth
                                            Charcoal / Lime</span>
                                        <span
                                            class="px-2 py-0.5 rounded bg-surface-container-low text-on-surface text-[12px] font-medium">6,000
                                            Pa Brushless</span>
                                        <span
                                            class="px-2 py-0.5 rounded bg-surface-container-low text-on-surface text-[12px] font-medium">Dual-Stage
                                            HEPA</span>
                                        <span
                                            class="px-2 py-0.5 rounded bg-surface-container-low text-on-surface text-[12px] font-medium">USB-C
                                            PD Quick Charge</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Includes Precision Crevice Lance, High-Density Agitator Vent Brush, and
                                        Braided 3-Foot Armor-Woven USB-C Cable.
                                    </p>
                                </div>
                                <!-- Warranty Inclusion Line -->
                                <div
                                    class="my-space-sm p-space-xs rounded bg-surface-container-low flex items-center justify-between">
                                    <div class="flex items-center gap-space-xs text-[12px] text-on-surface">
                                        <span
                                            class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                                        <span class="font-medium">1-Year Factory Replacement Coverage
                                            Included</span>
                                    </div>
                                    <span
                                        class="text-secondary font-bold text-[11px] uppercase tracking-wider">FREE</span>
                                </div>
                                <!-- Stepper Actions & Removal -->
                                <div class="flex items-center justify-between pt-space-xs">
                                    <div class="flex items-center bg-surface-container-low rounded-lg p-1">
                                        <button aria-label="Decrease quantity"
                                            class="w-8 h-8 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container-highest flex items-center justify-center font-bold text-title-sm transition-colors shadow-sm disabled:opacity-40"
                                            disabled="" type="button">
                                            <span class="material-symbols-outlined text-[16px]">remove</span>
                                        </button>
                                        <span
                                            class="w-10 text-center font-title-sm text-title-sm font-bold text-primary">1</span>
                                        <button aria-label="Increase quantity"
                                            class="w-8 h-8 rounded bg-surface-container-lowest text-on-surface hover:bg-surface-container-highest flex items-center justify-center font-bold text-title-sm transition-colors shadow-sm"
                                            type="button">
                                            <span class="material-symbols-outlined text-[16px]">add</span>
                                        </button>
                                    </div>
                                    <button
                                        class="flex items-center gap-1 text-on-surface-variant hover:text-error font-label-sm text-label-sm transition-colors"
                                        type="button">
                                        <span class="material-symbols-outlined text-[18px]">delete_outline</span>
                                        <span>Remove</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Threshold Upsell Engine (One-Click to Free Shipping) -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs pb-space-md">
                            <div>
                                <div
                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded bg-secondary-fixed/40 text-on-secondary-fixed text-[11px] font-bold uppercase tracking-wider mb-1">
                                    <span class="material-symbols-outlined text-[14px]">bolt</span>
                                    <span>Instant Milestone Unlock</span>
                                </div>
                                <h3 class="font-title-md text-title-md text-primary font-bold">Add 1 Item to
                                    Gain Free Shipping ($5.01 Away)</h3>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Recommended with
                                your MK-II Vacuum</span>
                        </div>
                        <!-- Upsell Product Cards Matrix -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <!-- Bundle Card 1 -->
                            <div
                                class="bg-surface-container-low rounded-lg p-space-md flex flex-col justify-between hover:-translate-y-0.5 transition-all duration-200">
                                <div>
                                    <div
                                        class="w-full h-32 rounded bg-surface-container-lowest mb-space-sm overflow-hidden flex items-center justify-center p-space-xs">
                                        <img class="w-full h-full object-contain"
                                            data-alt="Pair of pristine white micro-pleated circular HEPA vacuum replacement filters with black rubberized sealing rings on clean technical background"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4ZABevM-i1-5Wgt_sdeckN8Sw0LwjnEXVGlrdLYB6PlB-BagNgoaLxYH7rAdzuTc-joytQqwRn9U83JmJPEYHf-5_q4ZJXmBls6FcKoKYaNrkFYJi-OqDoB_RI7CUMDBWZ0ZA77orBxhlmrgz7f-g5SrgElo0TsQFqI_uf5AyZvJEkaCtw7LE61wuXhuov2PouaLoWND6U24wuIR_dswYwoITbdU9CUvAoKuHS_mwa64L6KOvBjPLQg" />
                                    </div>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant uppercase">Essential
                                        Maintenance</span>
                                    <h4 class="font-title-sm text-title-sm text-primary font-bold leading-tight mt-0.5">
                                        HEPA Washable Filter (2-Pack)</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Traps
                                        99.97% fine brake dust and allergens.</p>
                                </div>
                                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">$8.99</span>
                                    <button
                                        class="px-space-md py-1.5 rounded bg-secondary-fixed hover:bg-secondary-container text-on-secondary-fixed font-label-md text-label-md font-bold transition-colors flex items-center gap-1 shadow-sm"
                                        type="button">
                                        <span class="material-symbols-outlined text-[16px]">add</span>
                                        <span>Add</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Bundle Card 2 -->
                            <div
                                class="bg-surface-container-low rounded-lg p-space-md flex flex-col justify-between hover:-translate-y-0.5 transition-all duration-200">
                                <div>
                                    <div
                                        class="w-full h-32 rounded bg-surface-container-lowest mb-space-sm overflow-hidden flex items-center justify-center p-space-xs">
                                        <img class="w-full h-full object-contain"
                                            data-alt="Two premium car interior detailing brushes with dark ergonomic handles, ultra-soft boars hair bristles, and chemical resistant lime collars"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD43NJF4b2S0L-YLmCzP0ajwXljriKZ7eRX3l9gq7B5q6i4tjIFGdjvmSQxVSTeMZPKD0UcLEgI5lQIcDpQl9O6lIYtsHEUAV_nRCpprAIdv1WPMTzTo6mYVhV5nLX8yZjYoDv4CUYTCdVEKVnf762MHuALrAOxCcSIypwdLCNrz1IaRQMvxMIcLMFSDO3IOhIRbsUT8Ejk6VfpwwCdMTUWEdNsVuRevph6xyhgATfRO_LdZYE0EUnVlw" />
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Cockpit
                                        Detail</span>
                                    <h4 class="font-title-sm text-title-sm text-primary font-bold leading-tight mt-0.5">
                                        Vent &amp; Agitator Brush Duo</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Loosens
                                        baked console debris and vent lint.</p>
                                </div>
                                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">$11.50</span>
                                    <button
                                        class="px-space-md py-1.5 rounded bg-secondary-fixed hover:bg-secondary-container text-on-secondary-fixed font-label-md text-label-md font-bold transition-colors flex items-center gap-1 shadow-sm"
                                        type="button">
                                        <span class="material-symbols-outlined text-[16px]">add</span>
                                        <span>Add</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Bundle Card 3 -->
                            <div
                                class="bg-surface-container-low rounded-lg p-space-md flex flex-col justify-between hover:-translate-y-0.5 transition-all duration-200">
                                <div>
                                    <div
                                        class="w-full h-32 rounded bg-surface-container-lowest mb-space-sm overflow-hidden flex items-center justify-center p-space-xs">
                                        <img class="w-full h-full object-contain"
                                            data-alt="Stack of three folded 500 GSM plush charcoal grey edgeless microfiber towels for luxury automotive interior dry dusting and glass polishing"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVJpKVafKWRtPuUg1nGmXPObpourEiIp5quxya861JGvxaZMAwWmrz4PnqR9IXtq0RsQB9Errh6wJFDl6DQNrA9lWd7eefvCzGW-w18pcfH56pchG3y3S0jqVbG3o4YKWLTzJNxXffr1LhlGoOdqXyBiLHNCHrsVdKFAs72QTVNLhw3mvfBWFR_XnxD-nHwZbS1Kr9_f99FWMgaanuH55LzmKJJduZn-_85dWXovQUKaBBaIfZmZkMwg" />
                                    </div>
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant uppercase">Scratch-Free</span>
                                    <h4 class="font-title-sm text-title-sm text-primary font-bold leading-tight mt-0.5">
                                        500 GSM Edgeless Towels (3-Pk)</h4>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Zero-swirl
                                        dry dusting for piano black plastics.</p>
                                </div>
                                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">$9.99</span>
                                    <button
                                        class="px-space-md py-1.5 rounded bg-secondary-fixed hover:bg-secondary-container text-on-secondary-fixed font-label-md text-label-md font-bold transition-colors flex items-center gap-1 shadow-sm"
                                        type="button">
                                        <span class="material-symbols-outlined text-[16px]">add</span>
                                        <span>Add</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trust & Fulfillment Assurance Mosaic -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div
                            class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex items-start gap-space-sm">
                            <div
                                class="w-9 h-9 rounded-lg bg-surface-container-low text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                            </div>
                            <div>
                                <h4 class="font-title-sm text-title-sm text-primary font-bold">30-Day In-Car
                                    Trial</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Test it in
                                    your vehicle. Full hassle-free return if not completely spotless.</p>
                            </div>
                        </div>
                        <div
                            class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex items-start gap-space-sm">
                            <div
                                class="w-9 h-9 rounded-lg bg-surface-container-low text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[20px]">warehouse</span>
                            </div>
                            <div>
                                <h4 class="font-title-sm text-title-sm text-primary font-bold">Dual-Hub Dispatch
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Shipped in
                                    24h from Columbus, OH &amp; Mississauga, ON facilities.</p>
                            </div>
                        </div>
                        <div
                            class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex items-start gap-space-sm">
                            <div
                                class="w-9 h-9 rounded-lg bg-surface-container-low text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[20px]">lock</span>
                            </div>
                            <div>
                                <h4 class="font-title-sm text-title-sm text-primary font-bold">256-Bit SSL Guard
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">End-to-end
                                    tokenized vault encryption for card &amp; digital payments.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: High-Velocity Checkout Command Center (~35% = 4 cols) -->
                <div class="lg:col-span-4 sticky top-[136px]">
                    <div
                        class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm flex flex-col gap-space-md">
                        <!-- Section Header -->
                        <div class="flex items-center justify-between pb-space-sm">
                            <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Order Summary
                            </h3>
                            <span
                                class="px-2 py-0.5 rounded bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase">USD
                                Currency</span>
                        </div>
                        <!-- Discount / Voucher Entry Form -->
                        <div class="flex gap-space-xs">
                            <div class="relative flex-1">
                                <span
                                    class="material-symbols-outlined text-outline text-[18px] absolute left-3 top-1/2 -translate-y-1/2">sell</span>
                                <input
                                    class="w-full pl-9 pr-space-sm py-2 rounded-lg bg-surface-container-low text-on-surface placeholder:text-outline font-body-sm text-body-sm focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary transition-all"
                                    placeholder="Promo or VIP Detailing code" type="text" />
                            </div>
                            <button
                                class="px-space-md py-2 bg-primary text-on-primary hover:bg-surface-container-highest/30 hover:text-primary rounded-lg font-label-md text-label-md font-bold transition-colors"
                                type="button">
                                Apply
                            </button>
                        </div>
                        <!-- Fee Accounting Table -->
                        <div
                            class="flex flex-col gap-space-sm py-space-sm bg-surface-container-low rounded-lg p-space-md">
                            <div class="flex justify-between items-center font-body-md text-body-md text-on-surface">
                                <span>Hardware Subtotal</span>
                                <span class="font-bold text-primary">$44.99</span>
                            </div>
                            <div class="flex justify-between items-center font-body-md text-body-md text-on-surface">
                                <div class="flex items-center gap-1">
                                    <span>Standard Shipping</span>
                                    <span class="material-symbols-outlined text-outline text-[14px] cursor-help"
                                        title="Standard tracked courier transit across US &amp; Canada">info</span>
                                </div>
                                <span class="font-medium text-primary">$4.99</span>
                            </div>
                            <div class="flex justify-between items-center font-body-md text-body-md text-on-surface">
                                <div class="flex items-center gap-1">
                                    <span>Estimated Taxes &amp; Duties</span>
                                    <span class="material-symbols-outlined text-outline text-[14px] cursor-help"
                                        title="Calculated based on delivery state / postal zip code">help_outline</span>
                                </div>
                                <span class="font-medium text-primary">$3.60</span>
                            </div>
                            <!-- Savings Tag Line -->
                            <div
                                class="flex justify-between items-center font-label-sm text-label-sm text-secondary pt-space-xs">
                                <span>Promotional Instant Savings</span>
                                <span class="font-bold">-$15.00 USD</span>
                            </div>
                            <!-- Grand Total Readout -->
                            <div class="pt-space-sm mt-space-xs flex flex-col gap-0.5">
                                <div class="flex justify-between items-baseline">
                                    <span class="font-title-md text-title-md text-primary font-bold">Estimated
                                        Total</span>
                                    <div class="text-right">
                                        <span
                                            class="font-headline-sm text-headline-sm text-primary font-extrabold tracking-tight">$53.58</span>
                                        <span
                                            class="text-label-sm text-label-sm text-on-surface-variant font-bold ml-1">USD</span>
                                    </div>
                                </div>
                                <div class="text-right font-body-sm text-body-sm text-on-surface-variant">
                                    ≈ $73.20 CAD <span class="text-[11px] font-normal">(Live Bank
                                        Conversion)</span>
                                </div>
                            </div>
                        </div>
                        <!-- Primary Checkout Trigger -->
                        <a class="w-full py-3.5 px-space-lg rounded-lg bg-secondary-fixed hover:bg-secondary-container text-primary font-label-md text-label-md font-extrabold tracking-wide text-center uppercase flex items-center justify-center gap-space-sm shadow-md transition-all duration-200 hover:scale-[1.01]"
                            data-path="checkout" href="{{route('shipping')}}">
                            <span>Proceed to Checkout</span>
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </a>
                        <!-- Express Checkout Dividers -->
                        <div class="relative flex items-center justify-center my-space-xs">
                            <div class="w-full h-[1px] bg-surface-container-high"></div>
                            <span
                                class="absolute bg-surface-container-lowest px-space-sm font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Or
                                Instant Express Pay</span>
                        </div>
                        <!-- 1-Click Payment Providers -->
                        <div class="grid grid-cols-2 gap-space-xs">
                            <button aria-label="Pay instantly with PayPal"
                                class="col-span-2 h-11 rounded-lg bg-[#FFC439] hover:brightness-95 text-[#003087] font-bold text-[14px] flex items-center justify-center gap-1 italic tracking-tight shadow-sm transition-all"
                                type="button">
                                <span>Pay with</span> <span class="not-italic tracking-normal font-black">PayPal</span>
                            </button>
                        </div>
                        <!-- Micro Guarantee Badges -->
                        <div class="pt-space-xs flex flex-col gap-space-xs text-center">
                            <div
                                class="flex items-center justify-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px] text-secondary">shield</span>
                                <span>Encrypted PCI-DSS Level 1 Safe Processing</span>
                            </div>
                            <div class="flex items-center justify-center gap-1.5 opacity-70">
                                <span
                                    class="px-1.5 py-0.5 rounded bg-surface-container-low text-on-surface text-[10px] font-bold">VISA</span>
                                <span
                                    class="px-1.5 py-0.5 rounded bg-surface-container-low text-on-surface text-[10px] font-bold">MASTERCARD</span>
                                <span
                                    class="px-1.5 py-0.5 rounded bg-surface-container-low text-on-surface text-[10px] font-bold">AMEX</span>
                                <span
                                    class="px-1.5 py-0.5 rounded bg-surface-container-low text-on-surface text-[10px] font-bold">DISCOVER</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technical Support & FAQ Strip -->
    <section class="w-full bg-surface-container-low py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                <div
                    class="flex flex-col md:flex-row md:items-center justify-between gap-space-md mb-space-md pb-space-sm">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Frequently Asked
                            Ordering Questions</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Everything you need to know
                            about packaging, customs, and vehicle compatibility.</p>
                    </div>
                    <a class="inline-flex items-center gap-1 text-primary hover:text-secondary font-label-md text-label-md font-bold transition-colors"
                        data-path="faq" href="#">
                        <span>Explore Complete Help Center</span>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                    <div class="flex flex-col gap-1">
                        <h4 class="font-title-sm text-title-sm text-primary font-bold flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px] text-secondary">speed</span>
                            <span>How fast will my order ship?</span>
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            All in-stock instruments dispatch within 24–48 hours from our Ohio or Ontario
                            distribution hubs with automated tracking emails.
                        </p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h4 class="font-title-sm text-title-sm text-primary font-bold flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px] text-secondary">public</span>
                            <span>Any surprise customs fees in Canada?</span>
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Never. Canadian orders ship direct from our Canadian depot via Canada Post &amp;
                            Purolator with all provincial duties pre-cleared.
                        </p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <h4 class="font-title-sm text-title-sm text-primary font-bold flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[18px] text-secondary">autorenew</span>
                            <span>How does the 30-day trial work?</span>
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            If the suction power does not lift deeply ingrained dirt from your carpets, contact
                            support for a prepaid return shipping slip.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
// Countdown Timer Micro-interaction for Cart Reservation
(function initTimer() {
    let timeLeft = 14 * 60 + 59;
    const timerDisplay = document.getElementById('countdown-timer');
    if (!timerDisplay) return;

    const interval = setInterval(() => {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        timerDisplay.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        if (timeLeft <= 0) {
            clearInterval(interval);
            timerDisplay.textContent = "EXTENDED";
        }
        timeLeft--;
    }, 1000);
})();
</script>

@endsection