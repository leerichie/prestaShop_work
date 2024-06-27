<?php
class mymoduleDisplayModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        if (Tools::isSubmit('searchCar')) {
            $searchTerm = Tools::getValue('search_term');
            $carList = $this->module->getCarList($searchTerm);
        } else {
            $carList = [];
        }

        $this->context->smarty->assign([
            'my_module_message' => 'Search for cars:',
            'car_list' => $carList,
        ]);

        $this->setTemplate('module:mymodule/views/templates/front/display.tpl');
    }
}
