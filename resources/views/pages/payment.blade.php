@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- Progress & Trust Header Strip -->
    <section class="w-full bg-surface-container-lowest shadow-sm">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-md">
            <div class="flex flex-col md:flex-row items-center justify-between gap-space-md">
                <!-- Security & Brand Authority Seal -->
                <div class="flex items-center gap-space-sm">
                    <div class="w-9 h-9 rounded-xl bg-primary flex items-center justify-center text-secondary-fixed">
                        <span class="material-symbols-outlined text-[20px]">lock</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center gap-space-xs">
                            <span class="font-title-sm text-title-sm text-primary tracking-tight">Official
                                Encrypted Checkout</span>
                            <span
                                class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-full bg-secondary-fixed/20 text-on-secondary-fixed font-label-sm text-[10px]">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                ACTIVE SSL
                            </span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">256-Bit TLS Bank-Grade
                            Military Encryption • PCI-DSS Level 1</span>
                    </div>
                </div>
                <!-- 3-Step Breadcrumb Progress Indicator -->
                <nav aria-label="Checkout Progress" class="flex items-center gap-space-sm sm:gap-space-md">
                    <!-- Step 1 -->
                    <div class="flex items-center gap-1.5 cursor-pointer group">
                        <span
                            class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-secondary-fixed">
                            <span class="material-symbols-outlined text-[15px]"
                                style="font-variation-settings: 'FILL' 1;">check</span>
                        </span>
                        <span
                            class="font-label-md text-label-md text-on-surface font-semibold group-hover:text-primary">1.
                            Cart</span>
                    </div>
                    <span class="w-5 h-[2px] bg-secondary-fixed rounded-full"></span>
                    <!-- Step 2 -->
                    <div class="flex items-center gap-1.5 cursor-pointer group">
                        <span
                            class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-secondary-fixed">
                            <span class="material-symbols-outlined text-[15px]"
                                style="font-variation-settings: 'FILL' 1;">check</span>
                        </span>
                        <span
                            class="font-label-md text-label-md text-on-surface font-semibold group-hover:text-primary">2.
                            Shipping</span>
                    </div>
                    <span class="w-5 h-[2px] bg-secondary-fixed rounded-full"></span>
                    <!-- Step 3 (Active) -->
                    <div class="flex items-center gap-1.5">
                        <span
                            class="w-6 h-6 rounded-full bg-secondary-fixed text-primary flex items-center justify-center font-bold text-[12px] shadow-sm ring-4 ring-secondary-fixed/30">
                            3
                        </span>
                        <span class="font-label-md text-label-md text-primary font-bold">3. Payment</span>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- Main Checkout Workflow Canvas -->
    <main class="w-full bg-surface py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                <!-- LEFT COLUMN: 60% Width (7 Cols on Desktop) -->
                <div class="lg:col-span-7 flex flex-col gap-space-lg">
                    <!-- Order Dispatch Recap Card -->
                    <section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                        <div
                            class="flex items-center justify-between pb-space-sm mb-space-sm bg-surface-container-low/50 px-space-md py-space-sm rounded-lg">
                            <div class="flex items-center gap-space-xs text-on-surface">
                                <span class="material-symbols-outlined text-[18px] text-secondary">verified</span>
                                <span
                                    class="font-label-md text-label-md uppercase tracking-wider text-on-surface">Verified
                                    Customer &amp; Delivery Destination</span>
                            </div>
                            <span
                                class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-widest">Order
                                ID #AL-8492</span>
                        </div>
                        <div class="flex flex-col gap-space-sm">
                            <!-- Contact row -->
                            <div
                                class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low/60 hover:bg-surface-container-low transition-colors">
                                <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-space-md min-w-0">
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant w-20 shrink-0 uppercase tracking-wide">Contact</span>
                                    <span
                                        class="font-body-md text-body-md text-on-surface font-medium truncate">marcus.vance@example.com</span>
                                </div>
                                <a class="font-label-md text-label-md text-secondary hover:underline font-bold shrink-0 ml-space-sm"
                                    href="#">Edit</a>
                            </div>
                            <!-- Ship to row -->
                            <div
                                class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low/60 hover:bg-surface-container-low transition-colors">
                                <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-space-md min-w-0">
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant w-20 shrink-0 uppercase tracking-wide">Ship
                                        to</span>
                                    <span class="font-body-md text-body-md text-on-surface font-medium truncate">742
                                        Evergreen Terrace, Seattle, WA 98101, United States</span>
                                </div>
                                <a class="font-label-md text-label-md text-secondary hover:underline font-bold shrink-0 ml-space-sm"
                                    href="#">Edit</a>
                            </div>
                            <!-- Method row -->
                            <div
                                class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low/60 hover:bg-surface-container-low transition-colors">
                                <div class="flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-space-md min-w-0">
                                    <span
                                        class="font-label-sm text-label-sm text-on-surface-variant w-20 shrink-0 uppercase tracking-wide">Method</span>
                                    <div class="flex items-center gap-space-xs truncate">
                                        <span class="inline-flex w-2 h-2 rounded-full bg-secondary"></span>
                                        <span
                                            class="font-body-md text-body-md text-on-surface font-medium truncate">Free
                                            Priority Dispatch (3–5 Business Days) — $0.00</span>
                                    </div>
                                </div>
                                <a class="font-label-md text-label-md text-secondary hover:underline font-bold shrink-0 ml-space-sm"
                                    href="#">Edit</a>
                            </div>
                        </div>
                    </section>

                    <!-- Payment Method Section (PayPal Only) -->
                    <section
                        class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-lg">
                        <header>
                            <div class="flex items-center justify-between">
                                <h2 class="font-headline-sm text-headline-sm text-primary">Payment Method</h2>
                                <div
                                    class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                                    <span>End-to-End Encrypted</span>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                All transactions are secure, encrypted, and processed according to PCI-DSS Level
                                1 compliance standards.
                            </p>
                        </header>

                        <!-- Single PayPal Option Container -->
                        <div class="flex flex-col gap-space-sm">
                            <label
                                class="flex items-center justify-between p-space-md rounded-lg bg-surface-container-low border-2 border-[#0079C1] cursor-pointer transition-colors shadow-sm">
                                <div class="flex items-center gap-space-md">
                                    <input checked="" class="w-4 h-4 text-primary accent-primary cursor-pointer"
                                        name="payment_choice" type="radio" value="paypal" />
                                    <div class="flex flex-col">
                                        <span class="font-title-sm text-title-sm text-primary font-bold">PayPal
                                            Express</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Redirect
                                            to PayPal to authenticate and pay securely in one tap.</span>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center bg-surface-container-lowest px-3 py-1.5 rounded shadow-sm shrink-0">
                                    <span
                                        class="font-title-sm text-title-sm font-extrabold text-[#003087]">Pay</span><span
                                        class="font-title-sm text-title-sm font-extrabold text-[#0079C1]">Pal</span>
                                </div>
                            </label>
                        </div>
                    </section>

                    <!-- Billing Address Section -->
                    <section
                        class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                        <h3 class="font-title-sm text-title-sm text-primary font-bold">Billing Address</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Select the address that matches your PayPal billing profile.
                        </p>
                        <div class="flex flex-col gap-space-xs">
                            <label
                                class="flex items-center gap-space-md p-space-md rounded-lg bg-surface-container-low cursor-pointer">
                                <input checked="" class="w-4 h-4 text-primary accent-primary cursor-pointer"
                                    name="billing_address" type="radio" value="same" />
                                <div class="flex flex-col">
                                    <span class="font-title-sm text-title-sm text-primary font-semibold">Same as
                                        shipping address</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">742
                                        Evergreen Terrace, Seattle, WA 98101, United States</span>
                                </div>
                            </label>
                            <label
                                class="flex items-center gap-space-md p-space-md rounded-lg bg-surface-container-low/50 hover:bg-surface-container-low cursor-pointer transition-colors">
                                <input class="w-4 h-4 text-primary accent-primary cursor-pointer" name="billing_address"
                                    type="radio" value="different" />
                                <div class="flex flex-col">
                                    <span class="font-title-sm text-title-sm text-primary font-semibold">Use a
                                        different billing address</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Specify
                                        secondary company or alternative residential address.</span>
                                </div>
                            </label>
                        </div>
                    </section>

                    <!-- Ecological Transit Contribution / Reversible Checkbox -->
                    <section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                        <label class="flex items-start gap-space-md cursor-pointer group">
                            <input checked="" class="mt-1 w-5 h-5 rounded accent-secondary cursor-pointer"
                                id="carbonCheckbox" type="checkbox" />
                            <div class="flex flex-col">
                                <div class="flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">eco</span>
                                    <span class="font-title-sm text-title-sm text-primary font-bold">Carbon-Neutral
                                        Transit Offset (+ $0.95 USD)</span>
                                    <span
                                        class="px-2 py-0.5 rounded-full bg-secondary-fixed/30 text-on-secondary-fixed font-label-sm text-[10px]">Eco
                                        Verified</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                    100% verified native hardwood reforestation in the Pacific Northwest to
                                    neutralise vehicle delivery emissions.
                                </p>
                            </div>
                        </label>
                    </section>

                    <!-- Final Checkout Action Trigger Area (Direct PayPal Button) -->
                    <div class="flex flex-col gap-space-sm pt-space-xs">
                        <button
                            class="w-full py-4 px-space-xl bg-[#FFC439] hover:brightness-95 text-[#003087] font-title-md text-title-md font-extrabold rounded-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-space-xs group active:scale-[0.99] italic"
                            id="completeOrderBtn" type="button">
                            <span>Pay with PayPal</span>
                            <span class="not-italic font-black text-[#0079C1] ml-1">Express</span>
                        </button>

                        <p class="font-body-sm text-[12px] text-center text-outline mt-2 leading-relaxed">
                            By clicking "Pay with PayPal", you authorize AutoLustre to redirect to PayPal to complete
                            the charge for <strong class="text-on-surface" id="authorizeText">$58.30 USD</strong> and
                            acknowledge agreement with AutoLustre's <a class="underline hover:text-primary"
                                href="#">Terms of Service</a> and <a class="underline hover:text-primary"
                                href="#">30-Day Return Policy</a>.
                        </p>
                    </div>
                </div>

                <!-- RIGHT COLUMN: 40% Width (5 Cols on Desktop) - Order Summary Bento -->
                <aside class="lg:col-span-5 flex flex-col gap-space-lg lg:sticky lg:top-[136px]">
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-md">
                        <!-- Summary Header -->
                        <div class="flex items-center justify-between pb-space-md border-b-0">
                            <div class="flex items-center gap-2">
                                <h2 class="font-title-md text-title-md text-primary font-bold">Order Summary
                                </h2>
                                <span
                                    class="px-2 py-0.5 bg-surface-container rounded-full font-label-sm text-label-sm text-on-surface-variant font-bold">2
                                    items</span>
                            </div>
                            <span
                                class="font-label-sm text-label-sm text-secondary uppercase font-extrabold tracking-wider bg-secondary-fixed/20 px-2 py-1 rounded">
                                Free Expedited
                            </span>
                        </div>
                        <!-- Itemized Line Items -->
                        <div class="flex flex-col gap-space-md py-space-md">
                            <!-- Item 1: AutoLustre Vacuum -->
                            <div
                                class="flex items-center gap-space-md p-space-sm rounded-lg hover:bg-surface-container-low transition-colors">
                                <div
                                    class="relative w-20 h-20 rounded-lg bg-surface-container-low overflow-hidden shrink-0 flex items-center justify-center">
                                    <img class="w-full h-full object-cover"
                                        data-alt="High-precision cordless handheld car vacuum in stealth charcoal matte finish with neon lime accent buttons"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqRg8b5apj39nDr5rwuEehggHQPkR_ck9CaZJ4IXMlCe7WUSOZJVRsvIZjFKfQ-c5GpxIjmHUqWp6pid653Ne4myklGQvJ5m8lGyku02-0sUZgzW-_1h--x6jpoKZndFqQcMkCmlHlP5LKu8jK3Pgf8BfxSiqtuoKmLSUYcxyEF2X40UtR3tTW4aPlwGc8AoyEx6ADJX5YUr3eVLsXWTuoSAaWGi7JhzDqi2YDgf1HhLEW1qxRSI8YzA" />
                                    <span
                                        class="absolute top-1 right-1 w-5 h-5 rounded-full bg-primary text-on-primary font-label-sm text-[11px] font-bold flex items-center justify-center">1</span>
                                </div>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="font-title-sm text-title-sm text-primary font-bold truncate">
                                            AutoLustre MK-II Pro Vacuum</h3>
                                        <span
                                            class="font-title-sm text-title-sm text-primary font-bold shrink-0">$44.99</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Stealth
                                        Charcoal / Lime Edition</span>
                                    <div class="flex items-center gap-1.5 mt-1">
                                        <span
                                            class="px-1.5 py-0.5 rounded bg-surface-container text-on-surface-variant text-[10px] font-medium uppercase tracking-wider">16,000
                                            PA</span>
                                        <span
                                            class="px-1.5 py-0.5 rounded bg-surface-container text-on-surface-variant text-[10px] font-medium uppercase tracking-wider">USB-C
                                            Fast</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2: HEPA Filter 2-Pack -->
                            <div
                                class="flex items-center gap-space-md p-space-sm rounded-lg hover:bg-surface-container-low transition-colors">
                                <div
                                    class="relative w-20 h-20 rounded-lg bg-surface-container-low overflow-hidden shrink-0 flex items-center justify-center">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Dual-layer automotive washable HEPA microfilter twin-pack"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2YKW-f_jmRjg-tAdO0UJHmujP20bicF6xildtdYd1XrTpy9_6poykHOcsWy4c2a4haFv7cI4PDXOkz7N0EaSwWMxS2tDEEku-Y7NmnRG6EcON4NknCbgjMoYH5mujOaL0Jp6hoFJ0CTjDyk4pwrz2M8v3kIcBOUlirOKPIs1g1J3iipD28exGuK5ZddkIaCvWcit7RrOB2Izkcrwv0ajLfI5hpr3fbOICm853wDLqLyv9mWwOqoDkNA" />
                                    <span
                                        class="absolute top-1 right-1 w-5 h-5 rounded-full bg-primary text-on-primary font-label-sm text-[11px] font-bold flex items-center justify-center">1</span>
                                </div>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="font-title-sm text-title-sm text-primary font-bold truncate">
                                            Dual-Layer Washable HEPA Filter</h3>
                                        <span
                                            class="font-title-sm text-title-sm text-primary font-bold shrink-0">$8.99</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">2-Pack OEM
                                        Replacement Units</span>
                                    <div class="flex items-center gap-1 mt-1 text-[11px] text-secondary font-semibold">
                                        <span
                                            class="material-symbols-outlined text-[13px]">published_with_changes</span>
                                        <span>Washable &amp; Reusable</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Discount / Voucher Drawer -->
                        <div class="py-space-sm">
                            <div class="flex gap-space-xs">
                                <input
                                    class="flex-1 bg-surface-container-low text-on-surface px-space-md py-2.5 rounded-lg font-body-sm text-body-sm focus:outline-none focus:ring-1 focus:ring-primary uppercase tracking-wide placeholder:normal-case placeholder:text-outline"
                                    placeholder="Promo or Detailing Pro code" type="text" value="LUSTREVIP" />
                                <button
                                    class="px-space-md py-2.5 bg-primary text-on-primary hover:bg-surface-tint font-label-md text-label-md rounded-lg font-semibold transition-colors"
                                    type="button">
                                    Applied
                                </button>
                            </div>
                            <div class="flex items-center gap-1.5 mt-2 text-[12px] text-secondary font-medium">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                <span>10% VIP Detailing Discount applied at pre-tax calculation</span>
                            </div>
                        </div>
                        <!-- Ledger Breakdown -->
                        <div
                            class="bg-surface-container-low/70 p-space-md rounded-lg flex flex-col gap-space-xs my-space-sm">
                            <div
                                class="flex justify-between items-center font-body-sm text-body-sm text-on-surface-variant">
                                <span>Items Subtotal</span>
                                <span class="font-medium text-on-surface">$53.98 USD</span>
                            </div>
                            <div
                                class="flex justify-between items-center font-body-sm text-body-sm text-on-surface-variant">
                                <div class="flex items-center gap-1">
                                    <span>Carbon-neutral Transit Offset</span>
                                    <span class="material-symbols-outlined text-[14px] text-secondary">forest</span>
                                </div>
                                <span class="font-medium text-on-surface" id="offsetLedgerPrice">+$0.95
                                    USD</span>
                            </div>
                            <div
                                class="flex justify-between items-center font-body-sm text-body-sm text-on-surface-variant">
                                <div class="flex items-center gap-1">
                                    <span>Free Priority Courier Dispatch</span>
                                    <span
                                        class="text-[10px] bg-secondary-fixed/40 text-on-secondary-fixed font-bold px-1 rounded">PROMO</span>
                                </div>
                                <span class="font-bold text-secondary">FREE ($0.00)</span>
                            </div>
                            <div
                                class="flex justify-between items-center font-body-sm text-body-sm text-on-surface-variant">
                                <span>Estimated State &amp; Local Tax</span>
                                <span class="font-medium text-on-surface">$4.32 USD</span>
                            </div>
                            <!-- Grand Total Accent Highlight Box -->
                            <div
                                class="pt-space-sm mt-space-xs bg-surface-container-lowest p-space-sm rounded-lg flex flex-col gap-1 shadow-sm">
                                <div class="flex items-baseline justify-between">
                                    <div class="flex flex-col">
                                        <span class="font-title-sm text-title-sm text-primary font-bold">Total
                                            Amount Due</span>
                                        <span class="font-label-sm text-[11px] text-on-surface-variant">Includes
                                            all duties and federal taxes</span>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-primary font-extrabold"
                                                id="totalAmountText">$58.30</span>
                                            <span
                                                class="font-label-sm text-label-sm text-on-surface-variant font-bold">USD</span>
                                        </div>
                                        <span class="font-body-sm text-[11px] text-outline">Approx. $79.80
                                            CAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Guarantee Reassurance Box -->
                        <div class="p-space-md rounded-lg bg-surface-container flex flex-col gap-space-sm mt-space-sm">
                            <div class="flex items-start gap-space-sm">
                                <div
                                    class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center shrink-0 text-primary">
                                    <span class="material-symbols-outlined text-[18px]">verified</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">30-Day
                                        In-Vehicle Test Trial</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                        Test the suction on your own car mats and tight crevices. If it doesn't
                                        leave every seat immaculate, return it for a complete, hassle-free
                                        refund.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-between pt-space-xs text-[12px] text-on-surface-variant">
                                <span class="flex items-center gap-1 font-semibold text-primary">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-secondary">support_agent</span>
                                    Driver Concierge Support
                                </span>
                                <span
                                    class="text-primary font-bold hover:underline cursor-pointer">1-800-418-LUSTRE</span>
                            </div>
                        </div>
                    </div>
                    <!-- Trust Badges Strip Under Cart -->
                    <div
                        class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center justify-between text-center">
                        <div class="flex flex-col items-center flex-1">
                            <span class="material-symbols-outlined text-secondary text-[22px]">local_shipping</span>
                            <span class="font-label-sm text-[10px] text-primary font-bold uppercase mt-1">Same-Day
                                Dispatch</span>
                        </div>
                        <div class="w-[1px] h-8 bg-surface-container"></div>
                        <div class="flex flex-col items-center flex-1">
                            <span class="material-symbols-outlined text-secondary text-[22px]">security</span>
                            <span class="font-label-sm text-[10px] text-primary font-bold uppercase mt-1">1-Year
                                Warranty</span>
                        </div>
                        <div class="w-[1px] h-8 bg-surface-container"></div>
                        <div class="flex flex-col items-center flex-1">
                            <span
                                class="material-symbols-outlined text-secondary text-[22px]">published_with_changes</span>
                            <span class="font-label-sm text-[10px] text-primary font-bold uppercase mt-1">Free
                                Returns</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!-- Legal & Compliance Reassurance Bar -->
    <section class="w-full bg-surface-container-lowest py-space-lg shadow-[0_-1px_6px_rgba(0,0,0,0.02)]">
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin flex flex-col md:flex-row items-center justify-between gap-space-md text-on-surface-variant">
            <div class="flex items-center gap-space-xs font-label-sm text-label-sm">
                <span class="material-symbols-outlined text-[18px] text-secondary">verified_user</span>
                <span>AutoLustre Secure Checkout is PCI-DSS Level 1 Certified &amp; SOC2 Type II Audited</span>
            </div>
            <div class="flex items-center gap-space-md font-body-sm text-body-sm">
                <a class="hover:text-primary transition-colors" href="#">Refund Policy</a>
                <span>•</span>
                <a class="hover:text-primary transition-colors" href="#">Shipping Policy</a>
                <span>•</span>
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <span>•</span>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </section>

    <!-- Interactive Logic for Payment Toggles & Dynamic Total -->
    <script>
    (function initCheckout() {
        const carbonCheckbox = document.getElementById('carbonCheckbox');
        const totalAmountText = document.getElementById('totalAmountText');
        const authorizeText = document.getElementById('authorizeText');
        const offsetLedgerPrice = document.getElementById('offsetLedgerPrice');
        const completeOrderBtn = document.getElementById('completeOrderBtn');

        const baseAmount = 57.35; // without carbon offset
        const carbonOffset = 0.95;

        function updateTotal() {
            const hasCarbon = carbonCheckbox && carbonCheckbox.checked;
            const finalTotal = hasCarbon ? (baseAmount + carbonOffset) : baseAmount;
            if (totalAmountText) {
                totalAmountText.textContent = '$' + finalTotal.toFixed(2);
            }
            if (authorizeText) {
                authorizeText.textContent = '$' + finalTotal.toFixed(2) + ' USD';
            }
            if (offsetLedgerPrice) {
                offsetLedgerPrice.textContent = hasCarbon ? '+$0.95 USD' : '$0.00 (Declined)';
                offsetLedgerPrice.className = hasCarbon ? 'font-medium text-on-surface' :
                    'font-medium text-outline line-through';
            }
        }

        if (carbonCheckbox) {
            carbonCheckbox.addEventListener('change', updateTotal);
        }

        if (completeOrderBtn) {
            completeOrderBtn.addEventListener('click', function() {
                completeOrderBtn.disabled = true;
                completeOrderBtn.innerHTML =
                    '<span class="inline-block animate-spin material-symbols-outlined text-[20px] mr-2">progress_activity</span> Redirecting to PayPal...';
                completeOrderBtn.classList.add('opacity-90');
                setTimeout(function() {
                    completeOrderBtn.innerHTML =
                        '<span class="material-symbols-outlined text-[20px] mr-1">check_circle</span> Connecting Secure Gateway...';
                }, 1200);
            });
        }
    })();
    </script>
</div>
@endsection