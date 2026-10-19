<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\ProductImage;
use App\Models\Review;
use App\Models\Faq;

class AutoLustreSeeder extends Seeder
{
    public function run(): void
    {
        // 1. إنشاء التصنيفات الرئيسية
        $hardwareCategory = Category::create([
            'name' => 'Hardware',
            'slug' => 'hardware',
        ]);

        $accessoriesCategory = Category::create([
            'name' => 'Accessories & Bundles',
            'slug' => 'accessories-bundles',
        ]);

        // 2. إنشاء المنتج الأساسي (المكنسة)
        $vacuum = Product::create([
            'category_id' => $hardwareCategory->id,
            'title' => 'AutoLustre Cordless Car Vacuum (MK-II Pro)',
            'slug' => 'autolustre-cordless-car-vacuum-mk2-pro',
            'subtitle' => 'Stealth Charcoal / Lime',
            'description' => 'Precision-engineered cordless detailing instruments for automotive purists and discerning owners. Features 6,000 Pa suction power, dual-stage HEPA filtration, and ultra-fast USB-C quick charge.',
            'price' => 44.99,
            'compare_at_price' => 59.99,
            'sku' => 'AL-MK2-VAC',
            'stock_quantity' => 150,
            'is_featured' => true,
        ]);

        // 3. إضافة المواصفات الفنية (Technical Specifications)
        $specs = [
            ['label' => 'Suction Power', 'value' => '6,000 Pa (Verified)'],
            ['label' => 'Battery Life', 'value' => '2,000 mAh Li-ion'],
            ['label' => 'Charging Protocol', 'value' => '~2.5 Hours (USB-C)'],
            ['label' => 'Dust Bin Capacity', 'value' => '150 ml Quick-Release'],
            ['label' => 'Weight', 'value' => '520 g / 1.15 lbs'],
            ['label' => 'Form Factor', 'value' => '14.5" x 2.8" Cylindrical'],
        ];

        foreach ($specs as $spec) {
            ProductSpecification::create([
                'product_id' => $vacuum->id,
                'label' => $spec['label'],
                'value' => $spec['value'],
            ]);
        }

        // 4. إضافة صور المنتج
        ProductImage::create([
            'product_id' => $vacuum->id,
            'image_url' => 'images/vacuum-main.jpg',
            'is_primary' => true,
        ]);

        // 5. إضافة المنتجات المتاحة كملحقات في السلة (Cross-sell / Bundles)
        $filter = Product::create([
            'category_id' => $accessoriesCategory->id,
            'title' => 'HEPA Washable Filter (2-Pack)',
            'slug' => 'hepa-washable-filter-2-pack',
            'subtitle' => 'Essential Maintenance',
            'description' => 'Traps 99.97% fine brake dust and allergens.',
            'price' => 8.99,
            'compare_at_price' => 12.99,
            'sku' => 'AL-FLT-2PK',
            'stock_quantity' => 200,
        ]);

        $brush = Product::create([
            'category_id' => $accessoriesCategory->id,
            'title' => 'Vent & Agitator Brush Duo',
            'slug' => 'vent-agitator-brush-duo',
            'subtitle' => 'Cockpit Detail',
            'description' => 'Loosens baked console debris and vent lint.',
            'price' => 11.50,
            'compare_at_price' => 15.00,
            'sku' => 'AL-BRS-DUO',
            'stock_quantity' => 120,
        ]);

        $towels = Product::create([
            'category_id' => $accessoriesCategory->id,
            'title' => '500 GSM Edgeless Towels (3-Pk)',
            'slug' => '500-gsm-edgeless-towels-3pk',
            'subtitle' => 'Scratch-Free',
            'description' => 'Zero-swirl dry dusting for piano black plastics.',
            'price' => 9.99,
            'compare_at_price' => 14.99,
            'sku' => 'AL-TWL-3PK',
            'stock_quantity' => 300,
        ]);

        // 6. إضافة تقييمات حقيقية للمنتج (Reviews)
        $reviews = [
            [
                'author_name' => 'Marcus A. - Austin, TX',
                'rating' => 5,
                'comment' => 'Actually fits between MK-VII seat bolsters. Powerful suction and incredible build quality. Best car vac Ive owned.',
            ],
            [
                'author_name' => 'Aura S. - Vancouver, BC',
                'rating' => 5,
                'comment' => 'Impeccable finish for the dash unit. It sweeps deep grain dirt out of carpets effortlessly. Premium feel.',
            ],
            [
                'author_name' => 'Derek R. - Seattle, WA',
                'rating' => 5,
                'comment' => 'Solid build quality, premium touch! The magnetic-style latch and quick release mechanism is super satisfying.',
            ],
        ];

        foreach ($reviews as $rev) {
            Review::create([
                'product_id' => $vacuum->id,
                'author_name' => $rev['author_name'],
                'rating' => $rev['rating'],
                'comment' => $rev['comment'],
                'is_verified_buyer' => true,
            ]);
        }

        // 7. إضافة الأسئلة الشائعة (FAQs)
        $faqs = [
            [
                'question' => 'How fast will my order ship?',
                'answer' => 'All in-stock instruments dispatch within 24–48 hours from our Ohio or Ontario distribution hubs with automated tracking emails.',
                'category' => 'shipping',
            ],
            [
                'question' => 'Any surprise customs fees in Canada?',
                'answer' => 'Never. Canadian orders ship direct from our Canadian depot via Canada Post & Purolator with all provincial duties pre-cleared.',
                'category' => 'shipping',
            ],
            [
                'question' => 'How does the 30-day trial work?',
                'answer' => 'If the suction power does not lift deeply ingrained dirt from your carpets, contact support for a prepaid return shipping slip.',
                'category' => 'warranty',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create([
                'question' => $faq['question'],
                'answer' => $faq['answer'],
                'category' => $faq['category'],
            ]);
        }
    }
}