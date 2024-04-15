<?php

namespace TwentyToo\AutoTag\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\ResourceConnection;


class CustomTab extends Template
{
    protected $resourceConnection;

    public function __construct(
        Context $context,
        ResourceConnection $resourceConnection
    ) {
        $this->resourceConnection = $resourceConnection;
    }
    public function getCustomData()
    {
        $data = [
            'eng_tags' => [
                'Color' => 'Black And White',
                'Department' => 'Sets',
                'Detail' => 'Pocket',
                'Fit' => 'Oversized',
                'Neckline' => 'Round Neck',
                'Pattern' => 'Plain',
                'Sleeve-Length' => 'Long Sleeve',
                'Style' => 'Casual',
                'Type' => 'Sweatshirt',
                'Sleeve Type' => 'Drop Shoulder',
                'Target-Audience' => 'Women',
                'Title' => 'drop shoulder pullover & wide leg pants'
            ],
            'ar_tags' => [
                'اللون' => 'أسود وأبيض',
                'القسم' => 'الأطقم',
                'التفصيل' => 'جيب',
                'المقاس' => 'كبير الحجم',
                'قصة العنق' => 'العنق المستدير',
                'نمط' => 'سادة',
                'طول الأكمام' => 'أكمام طويلة',
                'ستايل' => 'كاجوال',
                'النوع' => 'سويتشيرت',
                'نوع الأكمام' => 'الكتف المنخفض',
                'الجمهور المستهدف' => 'نساء',
                'Title' => '"سترة بأكمام واسعة وبنطلون واسع"'
            ]
        ];

        return $data;
    }
}
