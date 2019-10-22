<?php
namespace Jsp\Placeholder\Plugin\Checkout\Block\Checkout\AttributeMerger;
class Plugin {
  public function afterMerge(\Magento\Checkout\Block\Checkout\AttributeMerger $subject, $result)
  {
    if (array_key_exists('street', $result)) {
      $result['street']['children'][0]['placeholder'] = __('Road');
      $result['street']['children'][1]['placeholder'] = __('Number');
      $result['street']['children'][2]['placeholder'] = __('Complement');
      $result['street']['children'][3]['placeholder'] = __('Neighborhood');
    }
    return $result;
  }
}
