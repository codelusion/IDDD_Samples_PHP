<?php

namespace SaasOvation\AgilePm\Domain\Model\Discussion;

class AddOnNotEnabled extends DiscussionAvailability
{
    /**
     * @return bool
     */
    public function isAddOnNotAvailable() {
        return true;
    }
}
