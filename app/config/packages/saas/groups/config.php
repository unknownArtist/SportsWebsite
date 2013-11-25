<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nick
 * Date: 8/12/13
 * Time: 9:06 PM
 * To change this template use File | Settings | File Templates.
 */

return array(
    // This key will be used to identify super-user role
    'admin_identifier' => 'Admin',

    // Beware that this values will be used across group components
    // ensure you change it into proper model, if you plan to change it
    'relations' => array(

        'user' => array(

            'model' => 'User',

        ),

        'brand' => array(

            'model' => 'Brand',

        ),

        'rule' => array(

            'model' => 'Saas\Groups\Rules\Eloquent\Rule',
            
        ),

        'throttle' => array(

            'model' => 'Saas\Groups\Throttles\Eloquent\Throttle',

        ),

        'group' => array(

            'model' => 'Saas\Groups\Groups\Eloquent\Group',

        ),

        'organization' => array(

            'model' => 'Saas\Groups\Brands\Eloquent\Organization',

        ),

        'relationship' => array(

            'model' => 'Saas\Groups\Relationships\Eloquent\Relationship',

        ),

        'attachment' => array(

            'model' => 'Attachment',

        ),
    ),
);
