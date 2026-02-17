<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Staff;
use App\Models\SuccessPartner;
use App\Models\Review;
use App\Models\Service;
use App\Models\FeasibilityStudy;
use App\Models\InvestmentOpportunity;
use App\Models\Faq;
use App\Models\Post;
use App\Models\MainSlider;
use App\Models\Contact;
use App\Models\WorkSample;
use App\Models\FeasibilityStudyRequest;

class ComprehensiveSeeder extends Seeder
{
    public function run()
    {
        // إنشاء المستخدمين أولاً
        $admin = User::create([
            'name' => 'أحمد محمد',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
        ]);

        $manager = User::create([
            'name' => 'سارة أحمد',
            'email' => 'manager@company.com',
            'password' => bcrypt('password123'),
        ]);

      

   
        // إنشاء التقييمات
        $reviews = [
            [
                'name' => 'عبدالرحمن الأحمد',
                'review' => 'خدمة ممتازة وفريق محترف. ساعدوني في إعداد دراسة جدوى شاملة لمشروع مطعمي الجديد. النتائج فاقت توقعاتي والمشروع حقق أرباحاً ممتازة.',
                'status' => 1,
                'approved_by' => $admin->id,
            ],
            [
                'name' => 'نورا السالم',
                'review' => 'أنصح بشدة بالتعامل مع هذه الشركة. دراسة الجدوى كانت دقيقة ومفصلة، وساعدتني في اتخاذ قرار صحيح بخصوص مشروع التجارة الإلكترونية.',
                'status' => 1,
                'approved_by' => $admin->id,
            ],
            [
                'name' => 'محمد العتيبي',
                'review' => 'فريق عمل متميز ومتعاون. قدموا لي استشارة شاملة وساعدوني في تطوير خطة عمل ناجحة لمشروع الخدمات التقنية.',
                'status' => 1,
                'approved_by' => $admin->id,
            ],
            [
                'name' => 'سارة المطيري',
                'review' => 'خدمة عملاء رائعة ومتابعة مستمرة. دراسة الجدوى ساعدتني في الحصول على تمويل بنكي لمشروع مركز التدريب.',
                'status' => 1,
                'approved_by' => $admin->id,
            ],
            [
                'name' => 'خالد الزهراني',
                'review' => 'أفضل شركة تعاملت معها في مجال دراسات الجدوى. التحليل المالي كان دقيقاً جداً والتوقعات تحققت بالفعل.',
                'status' => 1,
                'approved_by' => $admin->id,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
        
        

        // إنشاء المقالات
        $posts = [
            [
                'title' => 'أهمية دراسة الجدوى في نجاح المشاريع الصغيرة',
                'description' => 'تعتبر دراسة الجدوى من أهم الخطوات التي يجب على رائد الأعمال القيام بها قبل البدء في أي مشروع. في هذا المقال نستعرض أهمية دراسة الجدوى وكيف تساهم في نجاح المشاريع الصغيرة والمتوسطة. نناقش العناصر الأساسية لدراسة الجدوى وكيفية إعدادها بطريقة احترافية تضمن اتخاذ قرارات استثمارية صحيحة.',
                'image' => 'posts/feasibility-importance.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
            [
                'title' => 'اتجاهات الاستثمار في التكنولوجيا لعام 2026',
                'description' => 'نستكشف في هذا المقال أحدث اتجاهات الاستثمار في قطاع التكنولوجيا لعام 2026. نتناول الفرص الاستثمارية الواعدة في الذكاء الاصطناعي، إنترنت الأشياء، البلوك تشين، والتكنولوجيا المالية. كما نقدم نصائح للمستثمرين حول كيفية اختيار الفرص الاستثمارية المناسبة وتقييم المخاطر.',
                'image' => 'posts/tech-investment-trends.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
            [
                'title' => 'كيفية إعداد خطة عمل ناجحة',
                'description' => 'خطة العمل هي خارطة الطريق لنجاح أي مشروع. في هذا المقال نقدم دليلاً شاملاً لإعداد خطة عمل احترافية تشمل جميع العناصر الضرورية من تحليل السوق والمنافسين إلى الخطة المالية والتسويقية. نشارك أيضاً أمثلة عملية ونصائح من خبراء في مجال ريادة الأعمال.',
                'image' => 'posts/business-plan-guide.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
            [
                'title' => 'التحول الرقمي وأثره على الأعمال التجارية',
                'description' => 'يشهد العالم تسارعاً في عملية التحول الرقمي، وهذا يؤثر بشكل كبير على طريقة ممارسة الأعمال التجارية. نناقش في هذا المقال كيف يمكن للشركات الاستفادة من التحول الرقمي لتحسين عملياتها وزيادة كفاءتها. نستعرض أيضاً التحديات والفرص التي يوفرها التحول الرقمي.',
                'image' => 'posts/digital-transformation.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }

        // إنشاء شرائح العرض الرئيسية
        $sliders = [
            [
                'title' => 'نحول أفكارك إلى مشاريع ناجحة',
                'description' => 'نقدم دراسات جدوى احترافية ومتكاملة تساعدك في اتخاذ قرارات استثمارية صحيحة وتحقيق النجاح في مشروعك',
                'link' => '/services',
                'image' => 'sliders/main-slide-1.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
            [
                'title' => 'خبرة تزيد عن 10 سنوات في دراسات الجدوى',
                'description' => 'فريق من الخبراء والمتخصصين يقدم لك أفضل الحلول والاستشارات لضمان نجاح مشروعك وتحقيق أهدافك',
                'link' => '/about',
                'image' => 'sliders/main-slide-2.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
            [
                'title' => 'شريكك في النجاح والتميز',
                'description' => 'نساعدك في كل خطوة من خطوات مشروعك من الفكرة إلى التنفيذ مع متابعة مستمرة لضمان تحقيق أفضل النتائج',
                'link' => '/contact',
                'image' => 'sliders/main-slide-3.jpg',
                'status' => 1,
                'created_by' => $admin->id,
            ],
        ];

        foreach ($sliders as $slider) {
            MainSlider::create($slider);
        }

        // إنشاء رسائل التواصل
        $contacts = [
            [
                'name' => 'أحمد محمد العلي',
                'phone' => '+966501234567',
                'message' => 'أرغب في الحصول على استشارة حول مشروع مطعم جديد في الرياض. هل يمكنكم مساعدتي في إعداد دراسة جدوى شاملة؟',
            ],
            [
                'name' => 'فاطمة أحمد السالم',
                'phone' => '+966507654321',
                'message' => 'لدي فكرة لمتجر إلكتروني وأحتاج إلى دراسة جدوى مفصلة. متى يمكنني الحصول على موعد للاستشارة؟',
            ],
            [
                'name' => 'خالد عبدالله المطيري',
                'phone' => '+966512345678',
                'message' => 'أبحث عن شريك استثماري لمشروع تقني. هل تقدمون خدمات في هذا المجال؟',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
        
        

        echo "تم إنشاء جميع البيانات بنجاح!\n";
        echo "تم إنشاء:\n";
        echo "- 5 فئات\n";
        echo "- " . count($reviews) . " تقييم\n";
        echo "- " . count($posts) . " مقال\n";
        echo "- " . count($sliders) . " شريحة عرض\n";
        echo "- " . count($contacts) . " رسالة تواصل\n";
    }
}