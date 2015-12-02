<?php

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_content-markup',
        'title' => 'Content Markup',
        'fields' => array (
            array (
                'key' => 'field_565f08e829eaa',
                'label' => 'Remove Auto P',
                'name' => 'ac_remove_auto_p',
                'type' => 'true_false',
                'instructions' => 'Remove the automatic &lt;P&gt; tags generated by WordPress. Useful if you are authoring your own markup. Otherwise leave unchecked.',
                'message' => 'Remove P tags',
                'default_value' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 1,
                ),
            ),
        ),
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}