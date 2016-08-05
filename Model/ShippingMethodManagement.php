<?php

namespace Gloo\Quote\Model;
use Magento\Quote\Model\ShippingMethodManagement as CoreShippingMethodManagement;


class ShippingMethodManagement extends CoreShippingMethodManagement{

    /**
     * {@inheritDoc}
     */
    public function estimateByAddressId($cartId, $addressId)
    {
        /** @var \Magento\Quote\Model\Quote $quote */
        $quote = $this->quoteRepository->getActive($cartId);

        // no methods applicable for empty carts or carts with virtual products
        if ($quote->isVirtual() || 0 == $quote->getItemsCount()) {
            return [];
        }
        $address = $this->addressRepository->getById($addressId);

        return $this->getEstimatedRates(
            $quote,
            $address->getCountryId(),
            $address->getPostcode(),
            $address->getRegionId(),
            $this->resolveRegion($address)
        );
    }

    public function resolveRegion($address){
        $region = $address->getRegion();
        if(is_object($region)){
            return $region->getRegion();
        }
        return $region;
    }
}