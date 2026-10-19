<header class="fixed top-0 left-0 right-0 z-50">
    <div class="bg-primary text-on-primary">
        <div
            class="max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin h-9 flex items-center justify-between text-label-sm font-label-sm tracking-wide">
            <div class="flex items-center gap-space-xs text-on-primary-container">
                <span class="material-symbols-outlined text-[14px] text-secondary-fixed">local_shipping</span>
                <span>Complimentary shipping on orders over $50 | US &amp; Canada Orders</span>
            </div>
            <div class="flex items-center gap-space-sm font-medium">
                <span class="cursor-pointer hover:text-secondary-fixed transition-colors">🇺🇸 USD</span>
                <span class="text-outline">/</span>
                <span class="cursor-pointer hover:text-secondary-fixed transition-colors">🇨🇦 CAD</span>
            </div>
        </div>
    </div>
    <div class="bg-surface-container-lowest/95 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div
            class="h-20 max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet lg:px-margin flex items-center justify-between">
            <div class="flex items-center gap-space-xl">
                <!-- الشعار (نص فقط بدون صورة) يوجه للصفحة الرئيسية -->
                <a class="flex items-center gap-space-sm" href="{{ route('home') }}">
                    <span class="font-title-md text-title-md font-bold tracking-tight text-primary">AutoLustre</span>
                </a>

                <!-- القائمة الرئيسية -->
                <nav class="hidden lg:flex items-center gap-space-lg">
                    <a class="transition-colors py-space-xs relative {{ request()->routeIs('home') ? 'text-primary font-bold after:w-full' : 'text-on-surface-variant font-label-md hover:text-on-surface after:w-0' }} after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-primary after:transition-all"
                        href="{{ route('home') }}">Home</a>

                    <a class="transition-colors py-space-xs relative {{ request()->routeIs('shop') ? 'text-primary font-bold after:w-full' : 'text-on-surface-variant font-label-md hover:text-on-surface after:w-0' }} after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-primary after:transition-all"
                        href="{{ route('shop') }}">Shop</a>

                    <a class="transition-colors py-space-xs relative {{ request()->routeIs('how-it-works') ? 'text-primary font-bold after:w-full' : 'text-on-surface-variant font-label-md hover:text-on-surface after:w-0' }} after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-primary after:transition-all"
                        href="{{ route('how-it-works') }}">How It Works</a>

                    <a class="transition-colors py-space-xs relative {{ request()->routeIs('about-us') ? 'text-primary font-bold after:w-full' : 'text-on-surface-variant font-label-md hover:text-on-surface after:w-0' }} after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-primary after:transition-all"
                        href="{{ route('about-us') }}">About Us</a>

                    <a class="transition-colors py-space-xs relative {{ request()->routeIs('faq') ? 'text-primary font-bold after:w-full' : 'text-on-surface-variant font-label-md hover:text-on-surface after:w-0' }} after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-primary after:transition-all"
                        href="{{ route('faq') }}">FAQ</a>
                </nav>
            </div>

            <div class="flex items-center gap-space-md">
                <div class="hidden sm:flex items-center bg-surface-container-low px-space-sm py-1.5 rounded-lg">
                    <span
                        class="font-label-sm text-label-sm text-on-surface px-space-xs cursor-pointer font-bold">USD</span>
                    <span class="text-outline text-label-sm">|</span>
                    <span
                        class="font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface px-space-xs cursor-pointer">CAD</span>
                </div>

                <button aria-label="Search"
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors"
                    type="button">
                    <span class="material-symbols-outlined text-[20px]">search</span>
                </button>

                <!-- زر السلة المحدث (يتغير لونه وشكله تلقائياً عند الدخول لصفحة السلة) -->
                <a aria-label="Shopping cart with 1 item"
                    class="relative flex items-center gap-space-xs px-space-md py-2 rounded-lg transition-colors {{ request()->routeIs('cart') ? 'bg-primary text-on-primary ring-2 ring-secondary-fixed ring-offset-2' : 'bg-surface-container-low hover:bg-surface-container text-on-surface' }}"
                    href="{{ route('cart') }}">
                    <span
                        class="material-symbols-outlined {{ request()->routeIs('cart') ? 'text-secondary-fixed' : 'text-primary' }} text-[20px]">shopping_bag</span>
                    <span
                        class="hidden sm:inline font-label-md text-label-md {{ request()->routeIs('cart') ? 'text-on-primary' : 'text-on-surface' }} font-semibold">$44.99</span>
                    <span
                        class="inline-flex items-center justify-center w-5 h-5 text-[11px] font-extrabold bg-secondary-fixed text-primary rounded-full">1</span>
                </a>

                <a aria-label="Account profile"
                    class="w-9 h-9 rounded-full bg-surface-container-low hover:bg-surface-container flex items-center justify-center transition-colors text-on-surface-variant hover:text-on-surface"
                    href="#">
                    <span class="material-symbols-outlined text-[20px]">person</span>
                </a>
            </div>
        </div>
    </div>
</header>