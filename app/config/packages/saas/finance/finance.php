<?php

use Saas\Finance\Currency;

return array(
    /*
    |--------------------------------------------------------------------------
    | Acceptable locales
    |--------------------------------------------------------------------------
    | Specify a list of acceptable locales. Ideally, all supported languages
    | by our application, should be listed here.
    */
    'locales' => array(
    	'english' => 'en_US',
    	'japanese' => 'ja_JP',
    	'france' => 'fr_FR',
    ),

    /*
    |--------------------------------------------------------------------------
    | Available currencies
    |--------------------------------------------------------------------------
    | Specify a list of acceptable currencies. For now, we simply uses the one
    | provided by money packages. If we need to limits to other list, we could
    | overide these values.
    */
   	'currencies' => Currency::getCurrenciesRepository(),

    /*
    |--------------------------------------------------------------------------
    | Currencies base units
    |--------------------------------------------------------------------------
    | We will store the money value in the smallest unit possible, 
    | so we will need to know the base unit to convert the
    | money amount into displayable value.
    |
    | For example, if we set USD to 100, it means we will save it within cent
    | unit, and we will round it with 100 when display it.
    |
    | Prototype : 
    | 500 => 5.00 US
    | 125 => 1.25 US
    | ... and so on
    */
    'base_unit' => 100,

   	/*
    |--------------------------------------------------------------------------
    | Model(s) map
    |--------------------------------------------------------------------------
    | Beware that this values will be used across finance components
    | ensure you change it into proper model, if you plan to change it
    */
    'relations' => array(
        // Main finance entity
        'setup' => array('model' => 'Saas\Finance\Models\Setup'),

        // Polymorph entity 
        'trend' => array('model' => 'Saas\Finance\Models\Trend'),

        // Main category entity 
        'category' => array('model' => 'Saas\Finance\Models\Category'),

        // Setup child entities
        'admin' => array('model' => 'Saas\Finance\Models\Admin'),
        'asset' => array('model' => 'Saas\Finance\Models\Asset'),
        'funding' => array('model' => 'Saas\Finance\Models\Funding'),
        'marketing' => array('model' => 'Saas\Finance\Models\Marketing'),
        'product' => array('model' => 'Saas\Finance\Models\Product'),
        'service' => array('model' => 'Saas\Finance\Models\Service'),
        'staff' => array('model' => 'Saas\Finance\Models\Staff'),
    ),
);