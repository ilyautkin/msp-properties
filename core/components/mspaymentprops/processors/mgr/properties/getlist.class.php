<?php
/**
 * The MIT License
 * Copyright (c) 2019 Ivan Klimchuk. https://klimchuk.com
 * Full license text placed in the LICENSE file in the repository or in the license.txt file in the package.
 */

include_once 'base.class.php';

/**
 * Class PaymentPropertiesGetListProcessor
 */
class PaymentPropertiesGetListProcessor extends PaymentPropertiesBaseProcessor
{
    public function process()
    {
        $properties = $this->getPaymentProperties();

        $list = [];
        foreach ($properties as $key => $value) {
            $list[] = ['key' => $key, 'value' => $value];
        }

        $output = array_slice($list, $this->getProperty('start'), $this->getProperty('limit'));

        return $this->outputArray($output, count($list));
    }
}

return PaymentPropertiesGetListProcessor::class;
