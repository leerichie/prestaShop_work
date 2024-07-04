<?php
if (!defined('_PS_VERSION_')) {
    exit;

}

class MyModule extends Module
{
    public function __construct()
    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Lee Richards';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99'
        ];
        $this->bootstrap = true;

        parent::__construct();
        ;

        $this->displayName = $this->trans('Lee\'s module', [], 'Modules.Mymodule.Admin');
        $this->description = $this->trans('Having fun with Presta', [], 'Modules.Mymodule.Admin');

        $this->confirmUninstall = $this->trans('You absolutely sure you want to remove ME mate??', [], 'Modules.Mymodule.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('U never provided a name', [], 'Modules.Mymodule.Admin');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() &&
            $this->registerHook('displayHome') &&                 // module on HOME
            $this->registerHook('actionFrontControllerSetMedia') &&
            Configuration::updateValue('MYMODULE_NAME', 'my module');

    }

    public function uninstall()
    {
        return (
            parent::uninstall()
            && Configuration::deleteByName('MYMODULE_NAME')
        );
    }

    public function hookDisplayHome($params)              // my HOOK template on HOME
    {
        $this->context->smarty->assign([
            'my_module_name' => Configuration::get('MYMODULE_NAME'),
            'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display'),
            'my_module_img' => $this->_path. ('views/img/')
        ]);

        return $this->display(__FILE__, 'mymodule.tpl');
    }

    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->registerStylesheet(
            'mymodule-style',
            'modules/' . $this->name . '/views/css/mymodule.css',
            [
                'media' => 'all',
                'priority' => 1000,
            ]
        );

        $this->context->controller->registerJavascript(
            'mymodule-javascript',
            'modules/' . $this->name . '/views/js/mymodule.js',
            [
                'position' => 'bottom',
                'priority' => 1000,
            ]
        );
    }

    public function hookHeader()        // google fonts
    {
        $this->context->controller->registerStylesheet(
            'google-fonts',
            'https://fonts.googleapis.com/css2?family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&display=swap',
            array('media' => 'all', 'priority' => 150)
        );
    }


    public function getContent()
    {
        $output = '';

        // executed only when the form is submitted
        if (Tools::isSubmit('submit' . $this->name)) {
            // retrieve the value set by the user
            $configValue = (string) Tools::getValue('MYMODULE_CONFIG');

            // check value is valid
            if (empty($configValue) || !Validate::isGenericName($configValue)) {
                // invalid value, show an error
                $output = $this->displayError($this->l('Wrong... wrong... wrong!!!'));
            } else {
                // value ok, update and display confirmation msg
                Configuration::updateValue('MYMODULE_CONFIG', $configValue);
                $output = $this->displayConfirmation($this->l('And Bob\'s ya uncle!'));
            }
        }

        // display any message, then the form
        return $output . $this->displayForm();
    }

    public function getCarList($searchTerm)
    {
        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('cars'); // Assuming your table is named 'cars'
        $sql->where('make LIKE \'%' . pSQL($searchTerm) . '%\' OR model LIKE \'%' . pSQL($searchTerm) . '%\'');

        return Db::getInstance()->executeS($sql);
    }

    public function displayForm()       // config FORMS
    {
        $form = [
            'form' => [
                'legend' => [
                    'title' => $this->l('OrderMeCom'),
                ],
                'input' => [
                    [
                        'type' => 'select',
                        'label' => $this->l('Do you wish to make an order?'),
                        'name' => 'beer_faq',
                        'desc' => $this->l('Please choose an option'),
                        'options' => [
                            'query' => [
                                [
                                    'id_option' => '-',
                                    'name_option' => '-',
                                ],
                                [
                                    'id_option' => '1',
                                    'name_option' => 'Yes',
                                ],
                                [
                                    'id_option' => '2',
                                    'name_option' => 'No',
                                ],
                            ],
                            'id' => 'id_option',
                            'name' => 'name_option',
                        ],
                    ],
                    [
                        'type' => 'select',
                        'label' => 'What time of day should the order arrive by?',
                        'name' => 'beer_amount',
                        'desc' => $this->l('Delivery times may vary and are only an estimation'),
                        'options' => [
                            'query' => [
                                [
                                    'id_option' => '-',
                                    'name_option' => '-',
                                ],

                                [
                                    'id_option' => '1',
                                    'name_option' => 'Morning: 6-12 AM'
                                ],
                                [
                                    'id_option' => '2',
                                    'name_option' => 'Afternoon: 12-6 PM'

                                ],
                                [
                                    'id_option' => '3',
                                    'name_option' => 'Evening: 6-11pm'
                                ],
                            ],
                            'id' => 'id_option',
                            'name' => 'name_option',
                        ],
                    ],
                    [
                        'type' => 'switch',
                        'label' => $this->l('Do you agree to GDPR?'),
                        'desc' => 'Required for processing',
                        'name' => 'beerstop',
                        'required' => true,
                        'values' => [
                            [
                                'id' => 'yes',
                                'value' => 1,
                                'label' => $this->l('Yes'),
                                'checked' => true,
                            ],
                            [
                                'id' => 'no',
                                'value' => 0,
                                'label' => $this->l('No'),
                                'checked' => true,
                            ],
                        ],
                    ],
                ],

                'submit' => [
                    'title' => $this->l('Pour a pint!'),
                    'class' => 'btn btn-primary pull-right',
                ],
            ],
        ];

        $form1 = [
            'form' => [
                'legend' => [
                    'title' => $this->l('Work Hard'),
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'label' => $this->l('How hard do you work?'),
                        'name' => 'MYMODULE_CONFIG',
                        'size' => 20,
                    ],
                ],
                'submit' => [
                    'title' => $this->l('Withdraw funds!'),
                    'class' => 'btn btn-primary pull-right',
                ],
            ],
        ];

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->table = $this->table;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&' . http_build_query(['configure' => $this->name]);
        $helper->submit_action = 'submit' . $this->name;

        // Default language
        $helper->default_form_language = (int) Configuration::get('PS_LANG_DEFAULT');

        // Load current value into the form
        $helper->fields_value['MYMODULE_CONFIG'] = Tools::getValue('MYMODULE_CONFIG', Configuration::get('MYMODULE_CONFIG'));

        return $helper->generateForm([$form]);
    }
}