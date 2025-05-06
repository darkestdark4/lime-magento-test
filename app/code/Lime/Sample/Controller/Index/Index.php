<?php

declare(strict_types=1);

namespace Lime\Sample\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action {
  protected $resultPageFactory;

  public function __construct(Context $context, PageFactory $resultPageFactory) {
    parent::__construct($context);
    $this->resultPageFactory = $resultPageFactory;
  }

  public function execute() {
    // implement current theme view
    return $this->resultPageFactory->create();
  }
}