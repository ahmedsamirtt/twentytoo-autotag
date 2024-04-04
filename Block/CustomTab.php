<?php

namespace TwentyToo\AutoTag\Block;

use Magento\Framework\View\Element\Template;

class CustomTab extends Template
{
    public function getCustomData()
    {
        return "This is dynamic data from CustomTab.php";
    }
}
