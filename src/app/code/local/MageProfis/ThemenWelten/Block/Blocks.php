<?php

class MageProfis_ThemenWelten_Block_Blocks extends Mage_Core_Block_Template {

    public function getBlockData($id) {
        $block_data = array(
            'title' => Mage::getStoreConfig('themenwelten/box_' . $id . '/title'),
            'url' => Mage::getStoreConfig('themenwelten/box_' . $id . '/url'),
            'img' => Mage::getUrl('media/theme/') . Mage::getStoreConfig('themenwelten/box_' . $id . '/img'),
            'img_alt' => Mage::getStoreConfig('themenwelten/box_' . $id . '/alt_text'),
        );

        if ($block_data['img_alt'] == "") {
            $block_data['img_alt'] = $block_data['title'];
        }

        return $block_data;
    }

    protected function _toHtml() {
        if (!Mage::getStoreConfigFlag('themenwelten/general/active')) {
            return '';
        }
        return parent::_toHtml();
    }

}
