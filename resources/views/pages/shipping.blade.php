@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
    <!-- Minimalist Distraction-Free Header Bar -->
    <header class="w-full bg-surface-container-lowest shadow-sm">
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-md flex flex-wrap items-center justify-between gap-space-md">
            <!-- Back Link & Shield -->
            <div class="flex items-center gap-space-lg">

                <div
                    class="hidden sm:flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">
                    <span class="material-symbols-outlined text-secondary text-[16px]">lock</span>
                    <span>256-Bit SSL Encrypted</span>
                </div>
            </div>
            <!-- Stepper Progress Tracker -->
            <nav aria-label="Checkout Progress" class="flex items-center gap-space-sm sm:gap-space-md">
                <!-- Step 1: Cart (Completed) -->
                <a class="flex items-center gap-1.5 group cursor-pointer" href="#">
                    <span
                        class="w-6 h-6 rounded-full bg-secondary-fixed text-primary flex items-center justify-center font-bold text-[12px]">
                        <span class="material-symbols-outlined text-[15px] font-bold">check</span>
                    </span>
                    <span class="font-label-md text-label-md text-on-surface group-hover:text-primary">Cart</span>
                </a>
                <span class="w-6 h-[2px] bg-secondary-fixed"></span>
                <!-- Step 2: Shipping (Active) -->
                <div aria-current="step" class="flex items-center gap-1.5">
                    <span
                        class="w-6 h-6 rounded-full bg-primary text-secondary-fixed flex items-center justify-center font-bold text-[12px] shadow-sm">
                        2
                    </span>
                    <span class="font-label-md text-label-md text-primary font-bold">Shipping Details</span>
                </div>
                <span class="w-6 h-[2px] bg-surface-container-high"></span>
                <!-- Step 3: Payment (Upcoming) -->
                <div class="flex items-center gap-1.5 opacity-40">
                    <span
                        class="w-6 h-6 rounded-full bg-surface-container text-on-surface flex items-center justify-center font-bold text-[12px]">
                        3
                    </span>
                    <span class="font-label-md text-label-md text-on-surface-variant">Payment</span>
                </div>
            </nav>
            <!-- Operations Hub Status -->
            <div class="hidden lg:flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                <span class="w-2 h-2 rounded-full bg-secondary-fixed animate-pulse"></span>
                <span>Dual Hubs Active: Columbus &amp; Mississauga</span>
            </div>
        </div>
    </header>
    <!-- Main Checkout Workspace -->
    <main class="w-full py-space-lg lg:py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <!-- Free Shipping Unlocked Notification Bar -->
            <div
                class="mb-space-lg rounded-xl bg-surface-container-lowest p-space-md shadow-sm flex items-center justify-between flex-wrap gap-space-sm">
                <div class="flex items-center gap-space-sm">
                    <div class="w-9 h-9 rounded-lg bg-secondary-fixed/25 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[20px]">local_shipping</span>
                    </div>
                    <div>
                        <p class="font-title-sm text-title-sm text-primary font-bold">Order Tier Unlocked: Free
                            Express Priority Dispatch</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Your order exceeds $50.00
                            USD. Standard transit fees have been waived at checkout.</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <span
                        class="px-3 py-1 rounded bg-secondary-fixed text-primary font-label-sm text-label-sm tracking-wider uppercase">Auto-Applied</span>
                </div>
            </div>
            <!-- Two-Column Asymmetric Checkout Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                <!-- Left Column: Shipping Form & Dispatch Protocols (7 cols) -->
                <section class="lg:col-span-7 flex flex-col gap-space-xl">
                    <!-- Express Checkout Accelerated Panel -->
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <div class="flex items-center justify-between mb-space-md">
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant">Express
                                One-Touch Checkout</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Bypasses manual
                                entry</span>
                        </div>
                        <div class="w-full">
                            <!-- PayPal -->
                            <button
                                class="w-full h-12 rounded-lg bg-[#FFC439] text-[#003087] flex items-center justify-center hover:opacity-95 transition-opacity shadow-sm font-bold text-[15px] italic"
                                type="button">
                                PayPal
                            </button>
                        </div>
                        <div class="relative flex py-space-md items-center">
                            <div class="flex-grow bg-surface-container-high h-[1px]"></div>
                            <span
                                class="flex-shrink mx-space-md font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">or
                                continue with standard checkout</span>
                            <div class="flex-grow bg-surface-container-high h-[1px]"></div>
                        </div>
                    </div>
                    <!-- Section 1: Customer Contact -->
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <div class="flex items-center justify-between pb-space-md mb-space-md">
                            <div class="flex items-center gap-space-xs">
                                <span
                                    class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-[12px]">1</span>
                                <h2 class="font-title-md text-title-md text-primary font-bold">Contact
                                    Information</h2>
                            </div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">
                                Already registered? <a
                                    class="font-semibold text-primary underline underline-offset-4 hover:text-secondary"
                                    href="#">Log in</a>
                            </div>
                        </div>
                        <div class="space-y-space-md">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="contact-email">
                                    Email address for delivery updates &amp; receipts <span class="text-error">*</span>
                                </label>
                                <div class="relative">
                                    <input
                                        class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all shadow-inner"
                                        id="contact-email" placeholder="name@example.com" required="" type="email"
                                        value="alex.vance.detail@gmail.com" />
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-secondary text-[20px]">check_circle</span>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="contact-phone">
                                    Mobile Phone for Dispatch SMS Tracking <span
                                        class="text-on-surface-variant font-normal">(Optional)</span>
                                </label>
                                <div class="relative">
                                    <input
                                        class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all shadow-inner"
                                        id="contact-phone" placeholder="+1 (555) 000-0000" type="tel"
                                        value="+1 (614) 849-2041" />
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant text-[20px]">sms</span>
                                </div>
                                <p class="mt-1 font-body-sm text-body-sm text-on-surface-variant">We send
                                    automated courier dispatched and delivery-at-door alerts.</p>
                            </div>
                            <label class="flex items-start gap-space-sm cursor-pointer pt-space-xs">
                                <input checked=""
                                    class="mt-1 w-4 h-4 rounded text-primary focus:ring-secondary-fixed accent-primary"
                                    type="checkbox" />
                                <span class="font-body-sm text-body-sm text-on-surface">
                                    Keep me updated on AutoLustre product drops, vehicle fitment tips, and
                                    maintenance reminder cycles.
                                </span>
                            </label>
                        </div>
                    </div>
                    <!-- Section 2: Shipping Destination -->
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <div class="flex items-center justify-between pb-space-md mb-space-md">
                            <div class="flex items-center gap-space-xs">
                                <span
                                    class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-[12px]">2</span>
                                <h2 class="font-title-md text-title-md text-primary font-bold">Shipping Address
                                </h2>
                            </div>
                            <span
                                class="font-label-sm text-label-sm uppercase tracking-wider text-secondary flex items-center gap-1 font-bold">
                                <span class="material-symbols-outlined text-[16px]">verified</span> Direct Hub
                                Routing
                            </span>
                        </div>
                        <!-- Country Selection Toggle -->
                        <div class="mb-space-md">
                            <label class="block font-label-md text-label-md text-on-surface mb-1.5">Country /
                                Region</label>
                            <div class="grid grid-cols-2 gap-space-sm p-1 rounded-lg bg-surface-container-low">
                                <button
                                    class="flex items-center justify-center gap-2 py-2.5 rounded font-label-md text-label-md transition-all bg-surface-container-lowest text-primary shadow-sm font-bold"
                                    id="btn-country-us" onclick="setRegion('us')" type="button">
                                    <span>🇺🇸</span>
                                    <span>United States (Domestic)</span>
                                </button>
                                <button
                                    class="flex items-center justify-center gap-2 py-2.5 rounded font-label-md text-label-md transition-all text-on-surface-variant hover:text-on-surface font-medium"
                                    id="btn-country-ca" onclick="setRegion('ca')" type="button">
                                    <span>🇨🇦</span>
                                    <span>Canada (Direct Hub)</span>
                                </button>
                            </div>
                        </div>
                        <!-- Name Rows -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md mb-space-md">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="first-name">First name <span class="text-error">*</span></label>
                                <input
                                    class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                    id="first-name" required="" type="text" value="Alexander" />
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="last-name">Last name <span class="text-error">*</span></label>
                                <input
                                    class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                    id="last-name" required="" type="text" value="Vance" />
                            </div>
                        </div>
                        <!-- Street Address -->
                        <div class="space-y-space-md mb-space-md">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="address-street">Street address <span class="text-error">*</span></label>
                                <div class="relative">
                                    <input
                                        class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                        id="address-street" placeholder="Street and number" required="" type="text"
                                        value="742 Evergreen Terrace" />
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant text-[20px]">pin_drop</span>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="address-suite">Apartment, suite, unit, bay, etc. <span
                                        class="text-on-surface-variant font-normal">(Optional)</span></label>
                                <input
                                    class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                    id="address-suite" placeholder="Apt, Suite, Building..." type="text"
                                    value="Garage Unit B-4" />
                            </div>
                        </div>
                        <!-- City, State, ZIP -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md mb-space-md">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="address-city">City <span class="text-error">*</span></label>
                                <input
                                    class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                    id="address-city" required="" type="text" value="Columbus" />
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="address-state" id="label-state">State <span class="text-error">*</span></label>
                                <div class="relative">
                                    <select
                                        class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md appearance-none focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all cursor-pointer"
                                        id="address-state">
                                        <option selected="" value="OH">Ohio (OH)</option>
                                        <option value="CA">California (CA)</option>
                                        <option value="NY">New York (NY)</option>
                                        <option value="TX">Texas (TX)</option>
                                        <option value="FL">Florida (FL)</option>
                                        <option value="IL">Illinois (IL)</option>
                                        <option value="MI">Michigan (MI)</option>
                                        <option value="PA">Pennsylvania (PA)</option>
                                        <option value="ON">Ontario (ON)</option>
                                        <option value="BC">British Columbia (BC)</option>
                                        <option value="AB">Alberta (AB)</option>
                                        <option value="QC">Quebec (QC)</option>
                                    </select>
                                    <span
                                        class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none material-symbols-outlined text-on-surface-variant">expand_more</span>
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface mb-1.5"
                                    for="address-zip" id="label-zip">ZIP code <span class="text-error">*</span></label>
                                <input
                                    class="w-full h-12 px-4 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                    id="address-zip" required="" type="text" value="43215" />
                            </div>
                        </div>
                        <!-- Save Address Preference -->
                        <label class="flex items-center gap-space-sm cursor-pointer pt-space-xs">
                            <input checked=""
                                class="w-4 h-4 rounded text-primary focus:ring-secondary-fixed accent-primary"
                                type="checkbox" />
                            <span class="font-body-sm text-body-sm text-on-surface">Save this address to my
                                AutoLustre Garage Profile for 1-click orders</span>
                        </label>
                    </div>
                    <!-- Section 3: Calculated Dispatch Options -->
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <div class="flex items-center justify-between pb-space-md mb-space-md">
                            <div class="flex items-center gap-space-xs">
                                <span
                                    class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-[12px]">3</span>
                                <h2 class="font-title-md text-title-md text-primary font-bold">Shipping Method
                                </h2>
                            </div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">schedule</span> Dispatches
                                within 24h
                            </span>
                        </div>
                        <!-- Radio Options Stack -->
                        <div aria-label="Available Shipping Methods" class="space-y-space-sm" role="radiogroup">
                            <!-- Option A: Free Priority Dispatch (Unlocked & Selected) -->
                            <label
                                class="flex items-start justify-between p-space-md rounded-xl bg-surface-container-low cursor-pointer transition-all hover:bg-surface-container"
                                id="shipping-opt-free">
                                <div class="flex items-start gap-space-sm">
                                    <div class="pt-0.5">
                                        <input checked=""
                                            class="w-5 h-5 text-primary accent-primary cursor-pointer focus:ring-secondary-fixed"
                                            name="shipping_method" onchange="updateShipping(0)" type="radio"
                                            value="free" />
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-title-sm text-title-sm text-primary font-bold">Free
                                                Priority Dispatch</span>
                                            <span
                                                class="px-2 py-0.5 rounded text-[10px] font-extrabold uppercase bg-secondary-fixed text-primary tracking-wider">Recommended</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">3-5
                                            Business Days via USPS Tracked / Canada Post Expedited</p>
                                        <p class="font-label-sm text-label-sm text-secondary font-semibold mt-1">
                                            Unlocked via cart subtotal threshold over $50.00</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="font-title-sm text-title-sm text-secondary font-extrabold tracking-tight">FREE</span>
                                    <span
                                        class="block line-through text-on-surface-variant font-body-sm text-body-sm">$6.95</span>
                                </div>
                            </label>
                            <!-- Option B: Expedited Air -->
                            <label
                                class="flex items-start justify-between p-space-md rounded-xl bg-surface-container-lowest cursor-pointer transition-all hover:bg-surface-container-low shadow-sm"
                                id="shipping-opt-express">
                                <div class="flex items-start gap-space-sm">
                                    <div class="pt-0.5">
                                        <input
                                            class="w-5 h-5 text-primary accent-primary cursor-pointer focus:ring-secondary-fixed"
                                            name="shipping_method" onchange="updateShipping(9.95)" type="radio"
                                            value="express" />
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-title-sm text-title-sm text-primary font-bold">Express
                                                Air Tracked Dispatch</span>
                                            <span
                                                class="px-2 py-0.5 rounded text-[10px] font-semibold bg-surface-container text-on-surface-variant tracking-wider uppercase">Rush
                                                Hub</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">1-2
                                            Business Days guaranteed with priority pack &amp; boarding</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant mt-1">
                                            FedEx Express / Purolator Air with real-time GPS link</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">$9.95
                                        USD</span>
                                </div>
                            </label>
                        </div>
                        <!-- Regional Dispatch Hub Note -->
                        <div
                            class="mt-space-md p-space-sm rounded-lg bg-surface-container flex items-center gap-space-sm">
                            <span class="material-symbols-outlined text-primary text-[20px]">warehouse</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-snug">
                                Orders dispatch directly from <strong class="text-primary font-semibold">Columbus,
                                    OH</strong> (for US orders) or
                                <strong class="text-primary font-semibold">Mississauga, ON</strong> (for
                                Canadian orders). Cross-border customs tariffs are 100% pre-cleared.
                            </p>
                        </div>
                    </div>
                    <!-- Checkout Navigation Actions -->
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs pb-space-lg">
                        <a class="inline-flex items-center gap-2 font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-2"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                            <span>Return to Shopping Cart</span>
                        </a>
                        <a href="{{route('payment')}}"
                            class="w-full sm:w-auto px-space-xl h-14 rounded-lg bg-secondary-fixed text-primary font-label-md text-label-md font-bold uppercase tracking-wider hover:bg-secondary-fixed-dim transition-all shadow-md flex items-center justify-center gap-space-sm group"
                            type="button">
                            <span>Continue to Payment</span>
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </section>
                <!-- Right Column: Order Summary & Reassurances (5 cols Sticky) -->
                <aside class="lg:col-span-5 sticky top-28 space-y-space-lg">
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-md">
                        <!-- Summary Header -->
                        <div class="flex items-center justify-between pb-space-md mb-space-md">
                            <h2 class="font-title-md text-title-md text-primary font-bold">Order Summary</h2>
                            <span
                                class="font-label-sm text-label-sm px-2.5 py-1 rounded bg-surface-container-high text-primary font-bold">2
                                Items</span>
                        </div>
                        <!-- Itemized Line Items -->
                        <div class="space-y-space-md pb-space-md mb-space-md">
                            <!-- Item 1: AutoLustre Vacuum -->
                            <div class="flex items-center gap-space-md">
                                <div
                                    class="relative w-16 h-16 rounded-lg bg-surface-container flex-shrink-0 flex items-center justify-center overflow-visible">
                                    <img class="w-14 h-14 object-contain"
                                        data-alt="AutoLustre MK-II Pro cordless automotive vacuum cleaner in matte charcoal finish with electric lime accents, studio lighting on clean gray background"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEWjILF6GNfWe2WIywkS1E_5NAUL_IVKTWykw-9vnTNzLN7Qqv0Vr0vkuX941PKoMbRRiVj2Q6ck2dGpUU-ATCxW5z4J1VSH6NT99I18ser4FYfGmZ2-kSShiFqVP0wEoM0VK2V_AAZSHP0jry0hzAUi89vx-MFBN4iLf8QPTQ0TRBF0m6QojhMNR-WG6phJZnacg5Di8ixjs4arOjgOeQ06hdz83Ae7TV8JKuZDv7tujCX7l06-I-UA" />
                                    <span
                                        class="absolute -top-1.5 -right-1.5 w-5 h-5 rounded-full bg-primary text-secondary-fixed text-[11px] font-bold flex items-center justify-center shadow-sm">
                                        1
                                    </span>
                                </div>
                                <div class="flex-grow min-w-0">
                                    <h3 class="font-title-sm text-title-sm text-primary font-bold truncate">
                                        AutoLustre Cordless Vacuum (MK-II Pro)</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant truncate">
                                        Stealth Charcoal / Electric Lime • 16,000 Pa</p>
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">In
                                        Stock • Ready to Pack</span>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">$44.99</span>
                                </div>
                            </div>
                            <!-- Item 2: HEPA Filter Pack -->
                            <div class="flex items-center gap-space-md">
                                <div
                                    class="relative w-16 h-16 rounded-lg bg-surface-container flex-shrink-0 flex items-center justify-center overflow-visible">
                                    <img class="w-14 h-14 object-contain"
                                        data-alt="Pack of two dual layer washable HEPA replacement filters for AutoLustre automotive vacuum with rubberized seal on neutral gray surface"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwHrQEPwcIoGoW_xaQq1WTHsSB1rd7sVpDX0WUo1BTLLo82MDf42uX6rYWmbvVGvfhbL7R0kacjQulSUwA5Ene0UsiQ_IsI5VtxRgI8-er37SH7PnruXpPiIGcHayg_OBirLKRljyGIt1aTbWd6pB1xBuSsFeVFiEkE2g4UChz_bd1wEBIGgGHKWVCAixHgeC_JK0vDb98_6uBPWUpIyfSclEzMXzWRK02rC3Sr2Bbri8Ba2hFR7vBuQ" />
                                    <span
                                        class="absolute -top-1.5 -right-1.5 w-5 h-5 rounded-full bg-primary text-secondary-fixed text-[11px] font-bold flex items-center justify-center shadow-sm">
                                        1
                                    </span>
                                </div>
                                <div class="flex-grow min-w-0">
                                    <h3 class="font-title-sm text-title-sm text-primary font-bold truncate">
                                        Dual-Layer Washable HEPA Filter</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant truncate">2-Pack
                                        Replacement Kit • Micro-Mesh</p>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Compatible
                                        with MK-II</span>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-title-sm text-title-sm text-primary font-bold">$8.99</span>
                                </div>
                            </div>
                        </div>
                        <!-- Detailing Promo / Gift Voucher -->
                        <div class="pb-space-md mb-space-md">
                            <form class="flex gap-space-xs" onsubmit="event.preventDefault(); applyPromo();">
                                <div class="relative flex-grow">
                                    <input
                                        class="w-full h-11 px-3.5 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm uppercase tracking-wider focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary-fixed transition-all"
                                        id="promo-input" placeholder="Promo code or gift card" type="text" />
                                    <span
                                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">sell</span>
                                </div>
                                <button
                                    class="h-11 px-space-md rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-surface-variant hover:text-primary transition-colors flex-shrink-0 font-semibold"
                                    type="submit">
                                    Apply
                                </button>
                            </form>
                            <div class="hidden mt-1.5 font-label-sm text-label-sm text-secondary font-bold"
                                id="promo-feedback">
                                ✓ Code "DETAILPRO" applied: -$5.00 discount activated!
                            </div>
                        </div>
                        <!-- Financial Ledger Breakdown -->
                        <div
                            class="space-y-space-xs font-body-md text-body-md text-on-surface-variant pb-space-md mb-space-md">
                            <div class="flex justify-between items-center">
                                <span>Cart Subtotal</span>
                                <span class="text-on-surface font-semibold">$53.98 USD</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="flex items-center gap-1">
                                    <span>Shipping &amp; Logistics</span>
                                    <span
                                        class="material-symbols-outlined text-[14px] text-on-surface-variant cursor-pointer"
                                        title="Direct ground priority transit">info</span>
                                </span>
                                <span class="font-title-sm text-title-sm text-secondary font-bold"
                                    id="shipping-display">FREE ($0.00)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="flex items-center gap-1">
                                    <span>Estimated Tax &amp; Regional Duties</span>
                                    <span
                                        class="material-symbols-outlined text-[14px] text-on-surface-variant cursor-pointer"
                                        title="Calculated based on delivery state / province">help_outline</span>
                                </span>
                                <span class="text-on-surface font-semibold">$4.32 USD</span>
                            </div>
                        </div>
                        <!-- Grand Total -->
                        <div class="pt-space-xs">
                            <div class="flex justify-between items-baseline">
                                <div>
                                    <span
                                        class="font-headline-sm text-headline-sm text-primary font-extrabold tracking-tight">Total</span>
                                    <span
                                        class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Including
                                        all taxes &amp; duties</span>
                                </div>
                                <div class="text-right">
                                    <div class="flex items-baseline gap-1.5 justify-end">
                                        <span
                                            class="font-label-sm text-label-sm text-on-surface-variant font-bold">USD</span>
                                        <span
                                            class="font-headline-md text-headline-md text-primary font-extrabold tracking-tight"
                                            id="grand-total">$58.30</span>
                                    </div>
                                    <span class="block font-body-sm text-body-sm text-on-surface-variant"
                                        id="cad-estimate">approx. ~CAD $79.80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trust Assurances & Hardware Guarantees Card -->
                    <div class="bg-surface-container-low p-space-md rounded-xl space-y-space-sm">
                        <div class="flex items-start gap-space-sm">
                            <div
                                class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">verified</span>
                            </div>
                            <div>
                                <h4 class="font-title-sm text-title-sm text-primary font-semibold">30-Day
                                    Risk-Free In-Car Trial</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Test the vacuum
                                    inside your vehicle. If it does not exceed expectations, return it for a
                                    100% refund.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div
                                class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">shield_with_heart</span>
                            </div>
                            <div>
                                <h4 class="font-title-sm text-title-sm text-primary font-semibold">1-Year
                                    AutoLustre Hardware Warranty</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Full replacement
                                    coverage on motor, Li-Ion battery pack, and turbine impeller assembly.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div
                                class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[18px]">local_shipping</span>
                            </div>
                            <div>
                                <h4 class="font-title-sm text-title-sm text-primary font-semibold">Zero
                                    Cross-Border Brokerage Fees</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Canadian and US
                                    shipments clear locally with no surprise customs invoices upon receipt.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Direct Support Assistance -->
                    <div
                        class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-center justify-between">
                        <div class="flex items-center gap-space-sm">
                            <span
                                class="material-symbols-outlined text-on-surface-variant text-[22px]">support_agent</span>
                            <div class="leading-tight">
                                <p class="font-title-sm text-title-sm text-primary font-bold">Need help with
                                    fitment?</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Chat with our Ohio
                                    detailing team</p>
                            </div>
                        </div>
                        <a class="px-3 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high font-label-md text-label-md text-primary font-semibold transition-colors"
                            href="#">
                            Live Chat
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!-- Distraction-Free Checkout Footer -->
    <footer class="w-full bg-surface-container-lowest mt-space-xl py-space-lg shadow-sm">
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin flex flex-col md:flex-row items-center justify-between gap-space-md">
            <!-- Policy Quick Links -->
            <div
                class="flex flex-wrap items-center justify-center md:justify-start gap-space-md font-body-sm text-body-sm text-on-surface-variant">
                <a class="hover:text-primary transition-colors" href="#">Refund &amp; Return Policy</a>
                <span>•</span>
                <a class="hover:text-primary transition-colors" href="#">Shipping &amp; Dispatch Guidelines</a>
                <span>•</span>
                <a class="hover:text-primary transition-colors" href="#">Privacy &amp; Data Security</a>
                <span>•</span>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
            </div>
            <!-- Payment Security Icons -->
            <div class="flex items-center gap-space-xs text-on-surface-variant">
                <span
                    class="px-2 py-1 rounded bg-surface-container font-label-sm text-label-sm font-bold uppercase tracking-wider">VISA</span>
                <span
                    class="px-2 py-1 rounded bg-surface-container font-label-sm text-label-sm font-bold uppercase tracking-wider">MASTERCARD</span>
                <span
                    class="px-2 py-1 rounded bg-surface-container font-label-sm text-label-sm font-bold uppercase tracking-wider">AMEX</span>
                <span
                    class="px-2 py-1 rounded bg-surface-container font-label-sm text-label-sm font-bold uppercase tracking-wider">DISCOVER</span>
                <span
                    class="px-2 py-1 rounded bg-surface-container font-label-sm text-label-sm font-bold uppercase tracking-wider">APPLE
                    PAY</span>
                <span
                    class="px-2 py-1 rounded bg-surface-container font-label-sm text-label-sm font-bold uppercase tracking-wider">PAYPAL</span>
            </div>
        </div>
    </footer>
    <!-- Micro-Interactions Script -->
    <script>
    let currentShippingCost = 0;
    const baseSubtotal = 53.98;
    const estimatedTax = 4.32;
    let discount = 0;

    function recalculateTotal() {
        const grand = baseSubtotal + currentShippingCost + estimatedTax - discount;
        document.getElementById('grand-total').innerText = '$' + grand.toFixed(2);
        const cadApprox = grand * 1.368;
        document.getElementById('cad-estimate').innerText = 'approx. ~CAD $' + cadApprox.toFixed(2);
    }

    function updateShipping(cost) {
        currentShippingCost = cost;
        const displayElem = document.getElementById('shipping-display');
        if (cost === 0) {
            displayElem.innerText = 'FREE ($0.00)';
            displayElem.className = 'font-title-sm text-title-sm text-secondary font-bold';
        } else {
            displayElem.innerText = '$' + cost.toFixed(2) + ' USD';
            displayElem.className = 'font-title-sm text-title-sm text-primary font-bold';
        }
        recalculateTotal();
    }

    function applyPromo() {
        const input = document.getElementById('promo-input');
        const val = input.value.trim().toUpperCase();
        const feedback = document.getElementById('promo-feedback');
        if (val === 'DETAILPRO' || val === 'AUTOLUSTRE' || val === 'FREESHIP') {
            discount = 5.00;
            feedback.innerText = '✓ Promo code applied: -$5.00 USD Detailing Rebate';
            feedback.classList.remove('hidden');
            feedback.classList.add('text-secondary');
            recalculateTotal();
        } else {
            feedback.innerText = '✕ Invalid promotional code. Try "DETAILPRO"';
            feedback.classList.remove('hidden');
            feedback.classList.remove('text-secondary');
            feedback.classList.add('text-error');
        }
    }

    function setRegion(region) {
        const btnUS = document.getElementById('btn-country-us');
        const btnCA = document.getElementById('btn-country-ca');
        const labelState = document.getElementById('label-state');
        const labelZip = document.getElementById('label-zip');
        const stateSelect = document.getElementById('address-state');
        const zipInput = document.getElementById('address-zip');

        if (region === 'ca') {
            btnCA.className =
                'flex items-center justify-center gap-2 py-2.5 rounded font-label-md text-label-md transition-all bg-surface-container-lowest text-primary shadow-sm font-bold';
            btnUS.className =
                'flex items-center justify-center gap-2 py-2.5 rounded font-label-md text-label-md transition-all text-on-surface-variant hover:text-on-surface font-medium';
            labelState.innerHTML = 'Province <span class="text-error">*</span>';
            labelZip.innerHTML = 'Postal Code <span class="text-error">*</span>';
            stateSelect.value = 'ON';
            zipInput.value = 'L5V 2N6';
        } else {
            btnUS.className =
                'flex items-center justify-center gap-2 py-2.5 rounded font-label-md text-label-md transition-all bg-surface-container-lowest text-primary shadow-sm font-bold';
            btnCA.className =
                'flex items-center justify-center gap-2 py-2.5 rounded font-label-md text-label-md transition-all text-on-surface-variant hover:text-on-surface font-medium';
            labelState.innerHTML = 'State <span class="text-error">*</span>';
            labelZip.innerHTML = 'ZIP code <span class="text-error">*</span>';
            stateSelect.value = 'OH';
            zipInput.value = '43215';
        }
    }
    </script>
</div>
@endsection