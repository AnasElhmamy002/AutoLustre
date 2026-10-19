@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">

    <!-- Primary PDP Viewport: Asymmetric Two-Column Stage -->
    <section class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin pt-space-lg pb-space-xl w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-space-xl items-start">
            <!-- LEFT COLUMN: Product Gallery & Trust Architecture -->
            <div class="lg:col-span-7 flex flex-col gap-space-md sticky top-28">
                <!-- Main Stage Visualizer -->
                <div
                    class="relative bg-surface-container-lowest rounded-xl shadow-sm p-space-md group overflow-hidden flex items-center justify-center min-h-[460px] md:min-h-[540px]">
                    <div class="absolute top-4 left-4 z-10 flex flex-col gap-1.5">
                        <span
                            class="bg-primary text-on-primary font-label-sm text-label-sm px-2.5 py-1 rounded tracking-widest uppercase font-bold">Series
                            1 Pro</span>
                        <span
                            class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2.5 py-1 rounded font-bold tracking-tight">6,000
                            Pa Suction</span>
                    </div>
                    <button aria-label="Interactive visual zoom"
                        class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-surface-container-low/80 backdrop-blur-sm text-on-surface flex items-center justify-center hover:bg-primary hover:text-on-primary transition-colors shadow-sm"
                        type="button">
                        <span class="material-symbols-outlined text-[18px]">zoom_in</span>
                    </button>
                    <!-- Primary Hero Image -->
                    <img alt="AutoLustre Cordless Car Vacuum Stealth Gray with lime green accents and attachments"
                        class="w-full max-h-[440px] md:max-h-[500px] object-contain transition-transform duration-500 ease-out group-hover:scale-105"
                        id="main-product-display"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA" />
                    <!-- Dynamic Mode Overlay Tag -->
                    <div
                        class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant bg-surface-container-lowest/80 backdrop-blur-md px-space-md py-2 rounded-lg shadow-sm">
                        <span class="flex items-center gap-1.5"><span
                                class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                            100% Automotive Grade Motor</span>
                        <span class="font-mono text-[11px] tracking-tight text-outline">SKU:
                            AL-VAC-01-GRY</span>
                    </div>
                </div>
                <!-- Interactive Thumbnails -->
                <div class="grid grid-cols-4 gap-space-sm" id="pdp-thumbnails">
                    <button
                        class="relative rounded-lg bg-surface-container-lowest p-2 shadow-sm transition-all outline-none bg-surface-container"
                        onclick="selectThumbnail(this, 'https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA')"
                        type="button">
                        <img alt="Full Studio Rig with Crevice Tool" class="w-full h-16 sm:h-20 object-contain rounded"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA" />
                        <span
                            class="absolute bottom-1 right-1 bg-primary text-[9px] font-bold text-on-primary px-1 rounded uppercase">Hero</span>
                    </button>
                    <button
                        class="relative rounded-lg bg-surface-container-lowest p-2 shadow-sm transition-all hover:bg-surface-container-low"
                        onclick="selectThumbnail(this, 'placeholder', 'AutoLustre handheld car vacuum plugged into car USB-C outlet on sleek luxury dashboard, glowing amber charging indicator lights, high-end automotive interior context, natural soft ambient light')"
                        type="button">
                        <img class="w-full h-16 sm:h-20 object-cover rounded"
                            data-alt="AutoLustre handheld car vacuum plugged into car USB-C outlet on sleek luxury dashboard, glowing amber charging indicator lights, high-end automotive interior context, natural soft ambient light"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZVAPJ9xU5-HjZ6SC4JwisDYk08J_TzXunFpbjaZahMx3rcVuGfrGCnXz37bbji1ifW1o97cijFzDUg5-NU8uCLeHWdHvIZtcwJiTLAuv7BJcBeVkJUJGR8izfD8AnTKSDNdqdVyeLcmi1i3yKK7fyiGSXZqgXIO7OQTf1dYBX3se-qtfxUgD79G1qUhR-Q3wlHbjqlCY30zUEwUnnpNhUFuDNrQDj2SFzjCHgvhxEr2i4Tt9snvOiuQ" />
                        <span
                            class="absolute bottom-1 right-1 bg-surface-container-high text-on-surface text-[9px] font-bold px-1 rounded uppercase">Charge</span>
                    </button>
                    <button
                        class="relative rounded-lg bg-surface-container-lowest p-2 shadow-sm transition-all hover:bg-surface-container-low"
                        onclick="selectThumbnail(this, 'placeholder', 'Detailed close-up shot of car enthusiast using the AutoLustre slim crevice nozzle cleaning dust along deep seat seams and leather stitching of a Porsche 911 cabin, crisp focused lighting')"
                        type="button">
                        <img class="w-full h-16 sm:h-20 object-cover rounded"
                            data-alt="Detailed close-up shot of car enthusiast using the AutoLustre slim crevice nozzle cleaning dust along deep seat seams and leather stitching of a Porsche 911 cabin, crisp focused lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwYEopl-xVTQ_gsh9yWCY1lHklODq8hFDbkng3vx0ExqpofIBNKu7s3BCu-xe-RkPWGnstFA3ULfzrmzoiLlmdPw-K7L3rd_Rw9_huJpTE68qgxn6cu_hkXdk1H_PEmgsEF02R2jpowRTkWF_O_EktBO2IfZU8827t0w84Jz2KB20JZA8kk4MxU1qCJlzuY7NckW-kH6CbZL85vxGdvGZBebVFom3mePF9KDi56o5DSGQotgOtombRUg" />
                        <span
                            class="absolute bottom-1 right-1 bg-surface-container-high text-on-surface text-[9px] font-bold px-1 rounded uppercase">Action</span>
                    </button>
                    <button
                        class="relative rounded-lg bg-surface-container-lowest p-2 shadow-sm transition-all hover:bg-surface-container-low"
                        onclick="selectThumbnail(this, 'placeholder', 'Technical exploded layout of the AutoLustre car vacuum dust bin and conical dual washable HEPA filter resting cleanly beside a stream of clear tap water, clean studio gray table')"
                        type="button">
                        <img class="w-full h-16 sm:h-20 object-cover rounded"
                            data-alt="Technical exploded layout of the AutoLustre car vacuum dust bin and conical dual washable HEPA filter resting cleanly beside a stream of clear tap water, clean studio gray table"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9RlM121Fd9SIym9lp0XpP8e89pW0LGu-caZlxGR8gE36CFTH0Ol1byCg-v0jc3eGTUOscHvoa65G3ainrSaS716BOIUJFssLHZRal-bECpzLyf-nKxTp4dkmM4ctxrgICdCnfo-Sn50rSvj9m0hN-hWwD2gNj5L_gc-RkDbzBPnOsGs1nowIuMFnWiT0AQ_tcdHIpytqdd9A5u1J4K4mbvpwuzuETlJuVFIGWrCfHuYgJZ0sRyiBLrA" />
                        <span
                            class="absolute bottom-1 right-1 bg-surface-container-high text-on-surface text-[9px] font-bold px-1 rounded uppercase">Filter</span>
                    </button>
                </div>
                <!-- Trust Badges Bar -->
                <div
                    class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm grid grid-cols-3 gap-space-xs text-center">
                    <div class="flex flex-col items-center justify-center p-2">
                        <span class="material-symbols-outlined text-secondary text-[24px] mb-1">local_shipping</span>
                        <span
                            class="font-label-md text-label-md text-on-surface font-bold leading-tight">Complimentary</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px]">Orders over
                            $50</span>
                    </div>
                    <div class="flex flex-col items-center justify-center p-2">
                        <span class="material-symbols-outlined text-primary text-[24px] mb-1">verified</span>
                        <span class="font-label-md text-label-md text-on-surface font-bold leading-tight">30-Day
                            Trial</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px]">100%
                            Guaranteed</span>
                    </div>
                    <div class="flex flex-col items-center justify-center p-2">
                        <span class="material-symbols-outlined text-primary text-[24px] mb-1">shield</span>
                        <span class="font-label-md text-label-md text-on-surface font-bold leading-tight">1-Year
                            Warranty</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px]">Direct
                            Replacement</span>
                    </div>
                </div>
            </div>
            <!-- RIGHT COLUMN: Conversion Architecture & Configuration Engine -->
            <div class="lg:col-span-5 flex flex-col gap-space-md">
                <!-- Header & Classification -->
                <div class="flex flex-col gap-space-xs">
                    <div class="flex items-center justify-between">
                        <span
                            class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-bold">AutoLustre
                            Detailing Series</span>
                        <span
                            class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-extrabold flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> BESTSELLER
                        </span>
                    </div>
                    <h1
                        class="font-headline-md text-headline-md font-bold text-on-surface tracking-tight leading-tight">
                        AutoLustre Cordless Car Vacuum
                    </h1>
                    <!-- Rating & Social Proof -->
                    <div class="flex items-center gap-space-sm pt-1 pb-2">
                        <div class="flex items-center text-secondary">
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
                        <span class="font-label-md text-label-md font-bold text-on-surface">4.9</span>
                        <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline decoration-outline-variant underline-offset-4"
                            href="#customer-reviews">(128 verified customer reviews)</a>
                        <span class="text-outline-variant">•</span>
                        <span class="font-label-sm text-label-sm text-secondary font-bold">1,420+ sold in US
                            &amp; Canada</span>
                    </div>
                </div>
                <!-- Pricing Card -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-xs">
                    <div class="flex items-baseline gap-space-sm">
                        <span
                            class="font-display-mobile text-display-mobile font-extrabold text-on-surface tracking-tight leading-none">$44.99</span>
                        <span class="font-title-md text-title-md text-on-surface-variant font-semibold">USD</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant font-normal">(approx.
                            $61.50 CAD)</span>
                        <span class="ml-auto font-label-sm text-label-sm line-through text-outline">$59.99</span>
                    </div>
                    <div class="flex items-center gap-2 pt-1 text-secondary font-label-md text-label-md font-bold">
                        <span class="material-symbols-outlined text-[18px]">check_circle</span>
                        <span>In Stock — Ready to ship within 24–48 business hours</span>
                    </div>
                </div>
                <!-- Color Finish Variant Selector -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-sm">
                    <div class="flex justify-between items-center text-body-sm font-body-sm">
                        <span class="font-bold text-on-surface">Exterior Finish:</span>
                        <span class="text-on-surface font-semibold text-label-md font-label-md">Stealth Charcoal
                            / Lime Accent (Selected)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <button aria-label="Stealth Charcoal with Lime Accent"
                            class="w-10 h-10 rounded-full bg-primary-container p-0.5 shadow-sm transition-transform scale-105 relative flex items-center justify-center"
                            type="button">
                            <span class="w-full h-full rounded-full bg-[#34383c] flex items-center justify-center">
                                <span class="w-2.5 h-2.5 rounded-full bg-secondary-fixed"></span>
                            </span>
                            <span
                                class="absolute -top-1 -right-1 w-4 h-4 bg-secondary-fixed text-primary rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-[10px] font-bold">check</span>
                            </span>
                        </button>
                        <button
                            class="w-10 h-10 rounded-full bg-[#111111] opacity-40 cursor-not-allowed relative flex items-center justify-center"
                            disabled="" title="Phantom Black Edition (Coming Soon)" type="button">
                            <span class="w-2.5 h-2.5 rounded-full bg-surface-container-high"></span>
                        </button>
                        <span class="text-body-sm font-body-sm text-on-surface-variant italic pl-2">Limited
                            production run for 2025</span>
                    </div>
                </div>
                <!-- Quantity & Instant Checkout Stack -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-md">
                        <!-- Stepper -->
                        <div class="flex items-center bg-surface-container-low rounded-lg p-1">
                            <button aria-label="Decrease quantity"
                                class="w-9 h-9 rounded-md flex items-center justify-center text-on-surface hover:bg-surface-container transition-colors"
                                onclick="decrementQty()" type="button">
                                <span class="material-symbols-outlined text-[18px]">remove</span>
                            </button>
                            <span class="w-10 text-center font-title-sm text-title-sm font-bold text-on-surface"
                                id="qty-val">1</span>
                            <button aria-label="Increase quantity"
                                class="w-9 h-9 rounded-md flex items-center justify-center text-on-surface hover:bg-surface-container transition-colors"
                                onclick="incrementQty()" type="button">
                                <span class="material-symbols-outlined text-[18px]">add</span>
                            </button>
                        </div>
                        <!-- Primary Lime CTA -->
                        <button
                            class="flex-1 bg-secondary-fixed hover:bg-secondary-fixed-dim text-on-secondary-fixed font-label-md text-label-md font-extrabold h-12 px-6 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all active:scale-[0.99]"
                            id="add-to-cart-btn" type="button">
                            <span class="material-symbols-outlined text-[20px]">shopping_cart</span>
                            <span id="cta-label">Add to Cart — $44.99 USD</span>
                        </button>
                    </div>
                    <!-- Secondary Immediate Buy -->
                    <div class="flex flex-col gap-2">
                        <button
                            class="w-full bg-primary hover:bg-inverse-surface text-on-primary font-label-md text-label-md font-bold h-12 rounded-lg transition-colors flex items-center justify-center gap-2 shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">bolt</span>
                            Buy It Now with 1-Click
                        </button>
                        <!-- Accelerated Payment Method Matrix -->
                        <div
                            class="pt-1 flex flex-wrap items-center justify-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                            <span class="font-normal text-outline">Accelerated &amp; Secure:</span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-low rounded text-[10px] font-bold text-on-surface">Shop
                                Pay</span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-low rounded text-[10px] font-bold text-on-surface">PayPal</span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-low rounded text-[10px] font-bold text-on-surface">Apple
                                Pay</span>
                            <span
                                class="px-2 py-0.5 bg-surface-container-low rounded text-[10px] font-bold text-on-surface">GPay</span>
                        </div>
                    </div>
                </div>
                <!-- Technical Highlights & Value Props -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                    <h2
                        class="font-title-sm text-title-sm font-bold text-on-surface mb-space-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[20px]">tune</span>
                        Precision Engineered For Interior Detailing
                    </h2>
                    <ul class="space-y-space-sm font-body-md text-body-md text-on-surface">
                        <li class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                            <span><strong>Ultra-lightweight 1.4 lb ergonomic chassis:</strong> Handcrafted
                                balance eliminates wrist fatigue across extended console and footwell
                                sessions.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                            <span><strong>25-minute sustained runtime:</strong> High-density 2000mAh battery
                                pack sustains continuous uninterrupted cyclonic suction power.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                            <span><strong>Dual HEPA multi-stage filtration:</strong> Traps 99.97% of fine
                                gravel, allergen particles, sand, and pet dander with zero exhaust odor.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                            <span><strong>Modular nozzle kit included:</strong> Deep reach narrow crevice wand
                                and soft bristle AC-vent dusting attachment clip in instantly.</span>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible Logistics & Guarantee Drawer -->
                <div
                    class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden divide-y divide-surface-container-low">
                    <!-- Accordion item 1 -->
                    <details class="group p-space-md cursor-pointer select-none">
                        <summary
                            class="flex justify-between items-center font-title-sm text-title-sm font-bold text-on-surface list-none">
                            <span class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-[20px]">local_shipping</span>
                                Free North American Shipping Details
                            </span>
                            <span
                                class="material-symbols-outlined text-on-surface transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="pt-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Standard ground dispatch arrives in 3–5 business days across continental USA and
                            Canadian provinces. All orders over $50 qualify automatically for priority tracked
                            fulfillment out of our Chicago, IL and Toronto, ON distribution centers.
                        </div>
                    </details>
                    <!-- Accordion item 2 -->
                    <details class="group p-space-md cursor-pointer select-none">
                        <summary
                            class="flex justify-between items-center font-title-sm text-title-sm font-bold text-on-surface list-none">
                            <span class="flex items-center gap-2">
                                <span
                                    class="material-symbols-outlined text-primary text-[20px]">assignment_return</span>
                                Risk-Free 30-Day In-Car Trial &amp; Return Policy
                            </span>
                            <span
                                class="material-symbols-outlined text-on-surface transition-transform group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="pt-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Test the AutoLustre Cordless Vacuum inside your vehicle for 30 full days. If the
                            suction does not satisfy your rigorous detailing standard, return it in original
                            packaging for a zero-hassle 100% refund. Prepaid return shipping label included.
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>
    <!-- Technical Specifications Matrix Section -->
    <section class="w-full bg-surface-container-lowest py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg">
                <div>
                    <span
                        class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Benchmarked
                        Performance</span>
                    <h2 class="font-headline-md text-headline-md font-bold text-on-surface">Verified Technical
                        Specifications</h2>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 md:mt-0 max-w-md">Every metric
                    independently lab-tested and verified inside vehicle cabins under real-world dirt and debris
                    conditions.</p>
            </div>
            <!-- Spec Grid Table -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between">
                    <div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
                        <span class="font-label-md text-label-md uppercase tracking-wider font-semibold">Suction
                            Pressure</span>
                        <span class="material-symbols-outlined text-secondary text-[22px]">speed</span>
                    </div>
                    <div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">6,000 Pa
                            (Verified)</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">High-speed brushless
                            micro-turbine motor spinning at 42,000 RPM</p>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between">
                    <div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
                        <span class="font-label-md text-label-md uppercase tracking-wider font-semibold">Power
                            Cell</span>
                        <span class="material-symbols-outlined text-secondary text-[22px]">battery_charging_full</span>
                    </div>
                    <div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">2,000 mAh
                            Li-ion</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Dual high-drain cells
                            delivering continuous power until empty</p>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between">
                    <div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
                        <span class="font-label-md text-label-md uppercase tracking-wider font-semibold">Charging
                            Protocol</span>
                        <span class="material-symbols-outlined text-secondary text-[22px]">usb</span>
                    </div>
                    <div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">~2.5 Hours
                            (USB-C)</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Recharge directly via
                            12V car charger, laptop, or standard wall block</p>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between">
                    <div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
                        <span class="font-label-md text-label-md uppercase tracking-wider font-semibold">Dust
                            Bin Capacity</span>
                        <span class="material-symbols-outlined text-secondary text-[22px]">delete_sweep</span>
                    </div>
                    <div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">150 ml
                            Quick-Release</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Single-latch click
                            disposal mechanism keeps hands free from debris</p>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between">
                    <div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
                        <span class="font-label-md text-label-md uppercase tracking-wider font-semibold">Tool
                            Mass</span>
                        <span class="material-symbols-outlined text-secondary text-[22px]">scale</span>
                    </div>
                    <div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">520 g / 1.15
                            lbs</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Featherweight center
                            of balance engineered directly over handle grip</p>
                    </div>
                </div>
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col justify-between">
                    <div class="flex items-center justify-between text-on-surface-variant mb-space-sm">
                        <span class="font-label-md text-label-md uppercase tracking-wider font-semibold">Form
                            Factor</span>
                        <span class="material-symbols-outlined text-secondary text-[22px]">straighten</span>
                    </div>
                    <div>
                        <div class="font-headline-sm text-headline-sm font-bold text-on-surface">14.2" x 2.8"
                            Cylindrical</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Compact stowage fits
                            directly in standard cup holders or door panels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Visual "What's In The Box" Breakdown Section -->
    <section class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-xl w-full">
        <div class="text-center max-w-2xl mx-auto mb-space-lg">
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Unboxing
                &amp; Kit Overview</span>
            <h2 class="font-headline-md text-headline-md font-bold text-on-surface">What's In The Box</h2>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Every AutoLustre package ships
                complete with all tools necessary for immediate interior restoration.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-space-md">
            <!-- Item 1 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-full aspect-square bg-surface-container-low rounded-lg p-2 flex items-center justify-center mb-space-sm">
                    <img alt="AutoLustre vacuum body" class="max-h-full object-contain"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA" />
                </div>
                <span class="font-label-sm text-label-sm font-bold text-primary">1x Master Unit</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">AutoLustre
                    Cordless Vacuum</span>
            </div>
            <!-- Item 2 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-full aspect-square bg-surface-container-low rounded-lg p-2 flex items-center justify-center mb-space-sm">
                    <img class="max-h-full object-contain"
                        data-alt="Dark gray matte crevice nozzle attachment tool for car vacuum resting on clean studio background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4k4vQQVbc3VKhT5dq_GY2hDzNMb0C-Zoz-cHfhk9UCeNpwF1gziLKsAwJpRyYeyOup66jOJxQ53iLZeYWCNnawg0xm7QGwznqrTUSxg9ioBdrFdu0Yo6hQn4lDv0qM9pLtGXmgaCT6LYrKsFM9i_PnRQL8MJkIhcFKr5Lt_qAfzJIlYdeVnhlIuVwWag_8rhxYkjCQLB25KPUi2LmIPXm6-TJJT8YEgINANfoU2OasVxHmZdGJ-cxpA" />
                </div>
                <span class="font-label-sm text-label-sm font-bold text-primary">1x Crevice Tool</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Precision
                    deep seam wand</span>
            </div>
            <!-- Item 3 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-full aspect-square bg-surface-container-low rounded-lg p-2 flex items-center justify-center mb-space-sm">
                    <img class="max-h-full object-contain"
                        data-alt="Dense bristle dusting brush head accessory with clip mechanism on minimal clean background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDonBKY0z7c8ZVgzUb4QgS--W-HwB6PCQgoasTuclcMF8rct3szNpExrkBw2tP3TS8ispXSFA8j_pIlipCv8i1geFmz0cXx_pJgbGork8HuQ2KJhjAZ5z_xLUzHiAQ63Rwq0A1YI3sN4enw58lVpVSqehg0ilWWBu7MCU70x5sYC6buEy1OUJhlnZkzlDW42xT-HCTIxZPfVx7aCchFTve5-4mYyoO2Do32aL5hRUp36c5My97vKbc88g" />
                </div>
                <span class="font-label-sm text-label-sm font-bold text-primary">1x Vent Brush</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Scratch-free
                    AC brush</span>
            </div>
            <!-- Item 4 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-full aspect-square bg-surface-container-low rounded-lg p-2 flex items-center justify-center mb-space-sm">
                    <img class="max-h-full object-contain"
                        data-alt="Black coiled heavy-duty nylon braided USB-C fast charging cable on clean studio white surface"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBV0O9FLN86JlOOJC-up7hvISzxK6gJB8P32EiCawSDk9ovlFoEgARa3_ebplJyzyWtYZXNDX0GrVsnd1OKzICyP-cHDvrigDsbG2ezwF8HtVTDh0n3jydHETrcRQi72iLzFis7AX11oaWEUnGGzpfmL-VBjr8nGpX2u3m_h9T0mIwev1yeWHb-vLdoFcvPMbwGR1xXu2dI-k3X8cGf2jRfmg9BHE-hZL2gJKf2GYZAhsBJ77A55G8GtA" />
                </div>
                <span class="font-label-sm text-label-sm font-bold text-primary">1x Fast Cable</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Braided USB-C
                    Cord</span>
            </div>
            <!-- Item 5 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-full aspect-square bg-surface-container-low rounded-lg p-2 flex items-center justify-center mb-space-sm">
                    <img class="max-h-full object-contain"
                        data-alt="Pleated conical white HEPA filter with gray rubber gasket on clean neutral background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVegswObhWMmCPyt7GeXqPTzEnV-hlruIH0eNyozptqmR-Er6q1W3rwMrti1fgFwnEBej4MKINwCw40AFNaS8SxGVZVmoDQc71uH0rOKmEiicC3hmF5HvyjNQkUa0NyETYK1xp0bTKAb1gnuxaksRsEINR2T6dix-pzlm8mWbiKiapTEjgqKvtjyh5D9jkGA8zcxI-sydh1_0eWakE-NvEWiHueGkirWlmRvR5q0BvYOc7C1MOo5A9GA" />
                </div>
                <span class="font-label-sm text-label-sm font-bold text-primary">1x HEPA Core</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Pre-installed
                    &amp; washable</span>
            </div>
            <!-- Item 6 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-full aspect-square bg-surface-container-low rounded-lg p-2 flex items-center justify-center mb-space-sm">
                    <img class="max-h-full object-contain"
                        data-alt="Sleek black automotive styling quick reference booklet with AutoLustre metallic silver typography"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiZphweM4dHKxbEPETyV4a0xEn9kpD5z161YeYPOVhbdfKoZ6k_Z6oQdStfFfdY9S08O2fvciMbVelR6KVWWdUYlcyp6ncZFJYoIy2IvJRcdSu-QVNubv28B4MvECbazdh2iJxwzd_ojAAC1a990Fuydge-tSgQk2F0E6o05ntUDPetyZVSqNgsA9oh0RXPUDjGQQd-GBx7UdSVyE2TJaSc1D7pNi755jrG8OOPY6ZWlFAHuNDQe2I9Q" />
                </div>
                <span class="font-label-sm text-label-sm font-bold text-primary">1x Quick Guide</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Automotive
                    maintenance specs</span>
            </div>
        </div>
    </section>
    <!-- Interactive Comparison Callout: Cordless AutoLustre vs Traditional Cords -->
    <section class="w-full bg-surface-container-high py-space-xl">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                    <div class="lg:col-span-5 flex flex-col gap-space-sm">
                        <span
                            class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">Engineered
                            Superiority</span>
                        <h3 class="font-headline-sm text-headline-sm font-bold text-on-surface">Why Drivers
                            Ditch Clunky Gas-Station Air Pumps &amp; Cords</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Car interior maintenance
                            should take 3 minutes after each drive, not 45 minutes wrestling tangled extension
                            cords in the driveway.</p>
                        <div class="flex items-center gap-4 pt-2">
                            <div class="flex flex-col">
                                <span class="font-headline-md text-headline-md font-extrabold text-primary">1.15
                                    <span class="text-body-md font-semibold">lbs</span></span>
                                <span class="font-label-sm text-label-sm text-outline">Weight</span>
                            </div>
                            <div class="h-8 w-px bg-surface-container"></div>
                            <div class="flex flex-col">
                                <span class="font-headline-md text-headline-md font-extrabold text-secondary">0
                                    <span class="text-body-md font-semibold">cords</span></span>
                                <span class="font-label-sm text-label-sm text-outline">Total Mobility</span>
                            </div>
                            <div class="h-8 w-px bg-surface-container"></div>
                            <div class="flex flex-col">
                                <span class="font-headline-md text-headline-md font-extrabold text-primary">100%</span>
                                <span class="font-label-sm text-label-sm text-outline">Washable Core</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                        <div class="bg-surface-container-low p-space-md rounded-lg">
                            <span
                                class="font-label-md text-label-md text-secondary font-bold flex items-center gap-1.5 mb-2">
                                <span class="material-symbols-outlined text-[18px]">verified</span>
                                AutoLustre Cordless
                            </span>
                            <ul class="space-y-1.5 font-body-sm text-body-sm text-on-surface">
                                <li class="flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                                    Stows inside door pocket or
                                    glovebox</li>
                                <li class="flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                                    Fast USB-C charge in your car
                                    center console</li>
                                <li class="flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                                    Precise reach between rails
                                    &amp; booster seats</li>
                                <li class="flex items-center gap-1.5"><span class="text-secondary font-bold">✓</span>
                                    Quiet 68dB operational decibel
                                    level</li>
                            </ul>
                        </div>
                        <div class="bg-surface-container-low p-space-md rounded-lg opacity-75">
                            <span
                                class="font-label-md text-label-md text-outline font-bold flex items-center gap-1.5 mb-2">
                                <span class="material-symbols-outlined text-[18px]">block</span>
                                Traditional 12V Cigarette Vacuums
                            </span>
                            <ul class="space-y-1.5 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-center gap-1.5"><span class="text-error font-bold">✗</span>
                                    16-foot tangled wire knocks
                                    interior knobs</li>
                                <li class="flex items-center gap-1.5"><span class="text-error font-bold">✗</span> Blown
                                    12V automotive fuses under
                                    load</li>
                                <li class="flex items-center gap-1.5"><span class="text-error font-bold">✗</span> Bulky
                                    bodies cannot slide between
                                    seats</li>
                                <li class="flex items-center gap-1.5"><span class="text-error font-bold">✗</span> Noisy
                                    unshielded motor whines</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Complementary Accessories & Ecosystem Section -->
    <section class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-xl w-full">
        <div class="flex items-center justify-between mb-space-lg">
            <div>
                <span
                    class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant font-bold">Modular
                    Ecosystem</span>
                <h2 class="font-headline-md text-headline-md font-bold text-on-surface">Related Detailing
                    Instruments</h2>
            </div>
            <a class="font-label-md text-label-md text-primary font-bold hover:text-secondary transition-colors flex items-center gap-1"
                data-path="shop" href="#">
                Browse Full Catalog <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
            <!-- Acc Card 1 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between group">
                <div>
                    <div
                        class="w-full aspect-square bg-surface-container-low rounded-lg p-4 flex items-center justify-center mb-space-sm relative overflow-hidden">
                        <span
                            class="absolute top-2 left-2 bg-primary text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded font-bold uppercase">Replacements</span>
                        <img class="max-h-full object-contain group-hover:scale-105 transition-transform"
                            data-alt="Pack of three white washable HEPA car vacuum filters sealed in luxury dark box with silver foil typography"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYePbtBwdLYkGlWXXEvjt-gURttMnej-Ea435iJMJs-6_B8sTnlqRH9JPsWZs7MgUtnB2KbmMh4TTju7tFjvqJbii-Y39GZSOMrARLAa13I5pT_2e6EwDXA1I-Z3uW6ah-p-e-_Jjl4WwajmHUmEUiyEpLI6SqKo-zlGr6S-vVFj1bEgF3gfBoU7yL6rzmOm-1zWpmFPz5SPQs_fYN53LAtJxNtMX1D5T-BDZY8_BB1-zRhJb44z-YLg" />
                    </div>
                    <span class="font-label-sm text-label-sm text-outline font-semibold">Accessories</span>
                    <h3 class="font-title-sm text-title-sm font-bold text-on-surface mt-0.5">HEPA Filter 3-Pack
                        Bundle</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Multi-stage washable
                        micro-mesh replacements for year-round fresh airflow.</p>
                </div>
                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                    <span class="font-title-sm text-title-sm font-extrabold text-on-surface">$14.99</span>
                    <button
                        class="bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface font-label-sm text-label-sm font-bold px-3 py-1.5 rounded transition-colors"
                        type="button">Add</button>
                </div>
            </div>
            <!-- Acc Card 2 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between group">
                <div>
                    <div
                        class="w-full aspect-square bg-surface-container-low rounded-lg p-4 flex items-center justify-center mb-space-sm relative overflow-hidden">
                        <span
                            class="absolute top-2 left-2 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded font-bold uppercase">Popular</span>
                        <img class="max-h-full object-contain group-hover:scale-105 transition-transform"
                            data-alt="Set of 3 premium car interior ultra-soft detailing boar bristle brushes with ergonomic non-slip handles on dark slate backdrop"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdAhMe0ycuYshIdtLmWMjk7IiYtElMrxAsn85fWcngW7u9eiK5xS4m64NBuToMmdU3DwZnFbLzbKJqF1VmhGTN1QTWKpyroUYyfLyhs7V2dDy2gitzFoKRpaLkJ8h9tFGMu2axhXxR9bSUM2-Dii32T8t9ihVsR9x_u12Z6Ept7LS4LDqe20C42lAa5eOfAioE4SPnSYavs77ey5pmgsS_DrdwSte-LoxzNG5XzGJN2rFXjOJ3ZXpehg" />
                    </div>
                    <span class="font-label-sm text-label-sm text-outline font-semibold">Brushes</span>
                    <h3 class="font-title-sm text-title-sm font-bold text-on-surface mt-0.5">Boar Bristle
                        Detailing Trio</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Safe agitation for
                        instrument clusters, emblem gaps, and leather piping.</p>
                </div>
                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                    <span class="font-title-sm text-title-sm font-extrabold text-on-surface">$18.50</span>
                    <button
                        class="bg-surface-container hover:bg-primary hover:text-on-primary text-on-surface font-label-sm text-label-sm font-bold px-3 py-1.5 rounded transition-colors"
                        type="button">Add</button>
                </div>
            </div>
            <!-- Acc Card 3 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between group">
                <div>
                    <div
                        class="w-full aspect-square bg-surface-container-low rounded-lg p-4 flex items-center justify-center mb-space-sm relative overflow-hidden">
                        <span
                            class="absolute top-2 left-2 bg-surface-container-high text-on-surface font-label-sm text-label-sm px-2 py-0.5 rounded font-bold uppercase">Coming
                            Soon</span>
                        <img class="max-h-full object-contain group-hover:scale-105 transition-transform"
                            data-alt="Heavy-duty ballistic nylon zipper case tailored precisely to house a car vacuum and cable set on minimalist studio table"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAynoheo0Zj5Oq6sov6LZXu-9vvouz9JflgGTt8kuRLlUieQRvQeu7gfuZm-S6n7HgY9kMLY6YvDMupRNW46pWaaZbyM-nT2n4rDiJGUvvQF30y1953imegpi-B1FzKE5fIlFpMw7mZ8CEU-k4dXJmG-hiHL2ggJIN06oOBh2LsGQsxQkSI3ROW2E2ORZdI4t1vKEk80XtOF0QrM8xsZABRGTooSn4ifu6ejVsHpa-pzQo56nPinNg7g" />
                    </div>
                    <span class="font-label-sm text-label-sm text-outline font-semibold">Storage</span>
                    <h3 class="font-title-sm text-title-sm font-bold text-on-surface mt-0.5">Molded Ballistic
                        Travel Case</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Impact-absorbing shell
                        fits under seat compartments seamlessly.</p>
                </div>
                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                    <span class="font-title-sm text-title-sm font-extrabold text-on-surface">$19.99</span>
                    <button
                        class="bg-surface-container-high text-outline cursor-not-allowed font-label-sm text-label-sm font-bold px-3 py-1.5 rounded"
                        disabled="" type="button">Notify Me</button>
                </div>
            </div>
            <!-- Acc Card 4 -->
            <div
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between group">
                <div>
                    <div
                        class="w-full aspect-square bg-surface-container-low rounded-lg p-4 flex items-center justify-center mb-space-sm relative overflow-hidden">
                        <span
                            class="absolute top-2 left-2 bg-surface-container-high text-on-surface font-label-sm text-label-sm px-2 py-0.5 rounded font-bold uppercase">Coming
                            Soon</span>
                        <img class="max-h-full object-contain group-hover:scale-105 transition-transform"
                            data-alt="High output 65W dual USB-C metal car lighter adapter charger with subtle lime green ring ambient light"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJiCjVAudn1bTExarzZKK1v1D_-DQgWJd9teXW2M_7Vroox5N5Y3pHMPmHM8rpjB5Os67BBr0XW7Iue7HiXC7qlMFmLHyxJb27Cx1kDDZW5k5uahx_FiNbAP-55lXp8AbNsDnHndHGIz6Wc3nMkBduchdVJ8-Bdb-DSbZQl5tt29SDexhHH9H18mX6xGWFBpxoPnep_jb2SRL0fgqhqRJ1FGGOo_CxdkPaDXnjt5rlZNglVZhpGrmoJg" />
                    </div>
                    <span class="font-label-sm text-label-sm text-outline font-semibold">Power</span>
                    <h3 class="font-title-sm text-title-sm font-bold text-on-surface mt-0.5">65W Dual Rapid 12V
                        In-Car Plug</h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Supercharged PD power
                        delivery to charge tool from 0 to 100% in 55 mins.</p>
                </div>
                <div class="mt-space-md pt-space-sm flex items-center justify-between">
                    <span class="font-title-sm text-title-sm font-extrabold text-on-surface">$22.00</span>
                    <button
                        class="bg-surface-container-high text-outline cursor-not-allowed font-label-sm text-label-sm font-bold px-3 py-1.5 rounded"
                        disabled="" type="button">Notify Me</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Verified Customer Feedback Matrix -->
    <section class="w-full bg-surface-container-low py-space-xl" id="customer-reviews">
        <div class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 mb-space-lg">
                <div>
                    <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Driver
                        Community</span>
                    <h2 class="font-headline-md text-headline-md font-bold text-on-surface">Verified Owner
                        Reviews</h2>
                </div>
                <div
                    class="flex items-center gap-space-sm bg-surface-container-lowest px-space-md py-2 rounded-lg shadow-sm">
                    <div class="flex items-center text-secondary">
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
                    <span class="font-title-sm text-title-sm font-extrabold text-on-surface">4.9 / 5.0</span>
                    <span class="text-on-surface-variant font-body-sm text-body-sm">(128 Reviews)</span>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                <!-- Review 1 -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center text-secondary">
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">3 days ago</span>
                        </div>
                        <h4 class="font-title-sm text-title-sm font-bold text-on-surface mb-1">Actually fits
                            between BMW M3 seat bolsters!</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Most
                            handheld vacuums have massive plastic bulbs that get caught against bucket seats.
                            The sleek cylinder on the AutoLustre slides straight down to the carpet floor
                            without scratching leather.</p>
                    </div>
                    <div class="pt-space-md mt-space-sm flex items-center justify-between text-body-sm font-body-sm">
                        <span class="font-bold text-on-surface">Marcus V. — Austin, TX</span>
                        <span class="text-secondary font-label-sm text-label-sm font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check</span> Verified Owner
                        </span>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center text-secondary">
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">1 week ago</span>
                        </div>
                        <h4 class="font-title-sm text-title-sm font-bold text-on-surface mb-1">Super suction for
                            dry beach sand</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Lives in my
                            center console permanently. The USB-C charging means I don’t bring it into the
                            house. Cleared out two car seats full of goldfish cracker crumbs and beach sand in 5
                            minutes flat.</p>
                    </div>
                    <div class="pt-space-md mt-space-sm flex items-center justify-between text-body-sm font-body-sm">
                        <span class="font-bold text-on-surface">Elena D. — Vancouver, BC</span>
                        <span class="text-secondary font-label-sm text-label-sm font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check</span> Verified Owner
                        </span>
                    </div>
                </div>
                <!-- Review 3 -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center text-secondary">
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="material-symbols-outlined text-[16px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                            </div>
                            <span class="text-on-surface-variant font-label-sm text-label-sm">2 weeks ago</span>
                        </div>
                        <h4 class="font-title-sm text-title-sm font-bold text-on-surface mb-1">Solid build
                            quality, premium touch</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">The matte
                            charcoal composite and lime accents look like something designed in Stuttgart. Very
                            reassuring weight in hand and emptying the transparent bin is just one thumb click.
                        </p>
                    </div>
                    <div class="pt-space-md mt-space-sm flex items-center justify-between text-body-sm font-body-sm">
                        <span class="font-bold text-on-surface">David K. — Seattle, WA</span>
                        <span class="text-secondary font-label-sm text-label-sm font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check</span> Verified Owner
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Comprehensive FAQ & Support Section -->
    <section class="max-w-4xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin py-space-xl w-full">
        <div class="text-center mb-space-lg">
            <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Frequently
                Asked Questions</span>
            <h2 class="font-headline-md text-headline-md font-bold text-on-surface">Everything You Need To Know
            </h2>
        </div>
        <div class="space-y-space-sm">
            <details
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm group cursor-pointer select-none">
                <summary
                    class="flex justify-between items-center font-title-sm text-title-sm font-bold text-on-surface list-none">
                    How do I clean and wash the internal HEPA filter?
                    <span
                        class="material-symbols-outlined text-on-surface transition-transform group-open:rotate-180">expand_more</span>
                </summary>
                <p class="pt-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    Simply twist open the dust canister, extract the conical HEPA filter cartridge, tap loose
                    dust into a waste basket, and rinse under cold running tap water. Ensure the filter
                    air-dries completely (approx. 12-24 hours) before locking it back into the unit.
                </p>
            </details>
            <details
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm group cursor-pointer select-none">
                <summary
                    class="flex justify-between items-center font-title-sm text-title-sm font-bold text-on-surface list-none">
                    Can I charge the vacuum directly from my car's USB port?
                    <span
                        class="material-symbols-outlined text-on-surface transition-transform group-open:rotate-180">expand_more</span>
                </summary>
                <p class="pt-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    Yes! The AutoLustre Cordless Vacuum features a universal standard USB-C port that accepts
                    power from built-in automotive USB ports, 12V cigarette lighter adapters, power banks, or
                    traditional household AC blocks.
                </p>
            </details>
            <details
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm group cursor-pointer select-none">
                <summary
                    class="flex justify-between items-center font-title-sm text-title-sm font-bold text-on-surface list-none">
                    Does this handle wet spills or standing puddles?
                    <span
                        class="material-symbols-outlined text-on-surface transition-transform group-open:rotate-180">expand_more</span>
                </summary>
                <p class="pt-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    The AutoLustre is engineered strictly as a dry-debris automotive vacuum designed for dust,
                    dirt, gravel, hair, crumbs, and gravel. It should never be used to vacuum liquid spills or
                    submerged in water.
                </p>
            </details>
            <details
                class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm group cursor-pointer select-none">
                <summary
                    class="flex justify-between items-center font-title-sm text-title-sm font-bold text-on-surface list-none">
                    What is covered under the 1-Year Replacement Warranty?
                    <span
                        class="material-symbols-outlined text-on-surface transition-transform group-open:rotate-180">expand_more</span>
                </summary>
                <p class="pt-3 font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    Our factory guarantee covers all battery degradation anomalies, motor performance variances,
                    and mechanical switch failures under standard consumer usage. If your vacuum malfunctions
                    within 365 days of receipt, we provide a replacement unit free of charge.
                </p>
            </details>
        </div>
    </section>
    <!-- Sticky Bottom Add-to-Cart Floating Bar (Desktop/Mobile Conversion Bar) -->
    <div class="fixed bottom-0 left-0 right-0 z-40 bg-surface-container-lowest/95 backdrop-blur-md shadow-xl py-space-sm transition-transform duration-300 translate-y-0"
        id="sticky-pdp-bar">
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-sm min-w-0">
                <img alt="Mini vacuum preview"
                    class="w-10 h-10 object-contain rounded bg-surface-container-low shrink-0"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIELjsbA9n-OQxphfPy9nyWc8UDN0dHohjp8GOCtKeSRe3fOG-s87XrOoiOvbXKQpJft9EnuJGgHuUaEyvIgVvOq8vAEuZO7EKIVgAIH7t7Llp_bjnNtjbhGgDm-jH4L98322qgg3LLWdaMR0V0F3FwDTxfBeaY2G2KTOxuBZBI5GrmHN6e0SOJVV9TX2Icpdf6AcAVGh8VdyLpcnxJnfENEMc9M9Xy7R4LYPqiOOjfj3p_LcVk_R8GA" />
                <div class="min-w-0">
                    <p class="font-title-sm text-title-sm font-bold text-on-surface truncate">AutoLustre
                        Cordless Car Vacuum</p>
                    <div class="flex items-center gap-2">
                        <span class="font-label-md text-label-md font-extrabold text-on-surface">$44.99
                            USD</span>
                        <span class="hidden sm:inline font-body-sm text-body-sm text-secondary font-semibold">•
                            In Stock</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-space-sm shrink-0">
                <button
                    class="bg-secondary-fixed hover:bg-secondary-fixed-dim text-on-secondary-fixed font-label-md text-label-md font-extrabold h-10 px-5 rounded-lg shadow-sm flex items-center gap-2 transition-all"
                    onclick="document.getElementById('add-to-cart-btn').click()" type="button">
                    <span class="material-symbols-outlined text-[18px]">shopping_cart</span>
                    <span>Add To Cart</span>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
let currentQty = 1;
const unitPrice = 44.99;

function updateQtyDisplay() {
    document.getElementById('qty-val').innerText = currentQty;
    const total = (currentQty * unitPrice).toFixed(2);
    document.getElementById('cta-label').innerText = `Add to Cart — $${total} USD`;
}

function incrementQty() {
    if (currentQty < 10) {
        currentQty++;
        updateQtyDisplay();
    }
}

function decrementQty() {
    if (currentQty > 1) {
        currentQty--;
        updateQtyDisplay();
    }
}

function selectThumbnail(btn, src, altPrompt) {
    const mainImg = document.getElementById('main-product-display');
    if (src === 'placeholder' && altPrompt) {
        mainImg.src = 'placeholder';
        mainImg.setAttribute('data-alt', altPrompt);
    } else {
        mainImg.src = src;
        mainImg.removeAttribute('data-alt');
    }

    const container = document.getElementById('pdp-thumbnails');
    Array.from(container.children).forEach(child => {
        child.classList.remove('bg-surface-container');
    });
    btn.classList.add('bg-surface-container');
}

// Quick feedback on add to cart
const cartBtn = document.getElementById('add-to-cart-btn');
if (cartBtn) {
    cartBtn.addEventListener('click', () => {
        const originalText = cartBtn.innerHTML;
        cartBtn.innerHTML =
            '<span class="material-symbols-outlined text-[20px] animate-spin">sync</span> Adding to Bag...';
        cartBtn.classList.add('opacity-90');
        setTimeout(() => {
            cartBtn.innerHTML =
                '<span class="material-symbols-outlined text-[20px]">done</span> Added!';
            setTimeout(() => {
                updateQtyDisplay();
                cartBtn.classList.remove('opacity-90');
            }, 1200);
        }, 500);
    });
}
</script>
@endsection