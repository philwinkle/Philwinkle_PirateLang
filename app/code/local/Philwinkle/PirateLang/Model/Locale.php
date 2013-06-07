<?php

class Philwinkle_PirateLang_Model_Locale extends Mage_Core_Model_Locale
{
	protected function _getOptionLocales($translatedName=false)
	{ 
        $options = parent::_getOptionLocales($translatedName=false);

        //insert our pr_US locale
        $options[] = array(
                    'value' => 'pr_US',
                    'label' => 'Pirate (United States) / Pirate (United States)'
                );
        return $this->_sortOptionArray($options);
	}
}