<?php
namespace Lime\Sample\Observer;

use Magento\Framework\UrlInterface;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Data\Tree;
use Magento\Framework\Data\Tree\NodeFactory;
use Magento\Framework\App\RequestInterface;

class CustomTopMenu implements ObserverInterface
{
  protected $nodeFactory;
  protected $request;
  protected $url;

  public function __construct(NodeFactory $nodeFactory, RequestInterface $request, UrlInterface $url) {
    $this->nodeFactory = $nodeFactory;
    $this->request = $request;
    $this->url = $url;
  }

  public function execute(Observer $observer) {
    $menu = $observer->getMenu(); // Get the menu
    $tree = $menu->getTree(); // Get the menu tree

    // Create data for Home menu
    $homeMenuData = [
      'name' => __('Home'),
      'id' => 'home',
      'url' => $this->url->getUrl('/'),
      'is_active' => $this->request->getModuleName() == 'cms'
    ];

    // Create data for Hello menu
    $helloMenuData = [
      'name' => __('Hello World'),
      'id' => 'sample',
      'url' => $this->url->getUrl('sample'),
      'is_active' => $this->request->getModuleName() == 'sample'
    ];

    // Create nodes
    $homeNode = $this->nodeFactory->create(['data' => $homeMenuData, 'idField' => 'id', 'tree' => $tree]);
    $helloNode = $this->nodeFactory->create(['data' => $helloMenuData, 'idField' => 'id', 'tree' => $tree]);

    // Add the node to the menu
    $menu->addChild($homeNode);
    $menu->addChild($helloNode);
  }
}