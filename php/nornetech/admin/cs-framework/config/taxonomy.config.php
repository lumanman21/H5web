<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TAXONOMY OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options     = array();

// -----------------------------------------
// Taxonomy Options                        -
// -----------------------------------------
$options[]   = array(
  'id'       => 'category_options',
  'taxonomy' => 'category', // category, post_tag or your custom taxonomy name
  'fields'   => array(

    	array(
			'id'     => 'cat_layout',
			'type'   => 'radio',
			'title'  => '布局样式',
            'class'  => 'horizontal',
		    'options'=> array(
                'news'   => '新闻列表',
				'grid'   => '产品列表',
                // 'project'   => '项目中心',
                // 'solution'   => '解决方案',
		    ),
		    'default'   => 'news',
    	),
		
		
        array(
            'id'          => 'cat_slt',
            'type'        => 'upload',
            'title'       => '分类缩略图',
            'settings'       => array(
                'button_title' => '上传图像',
                'frame_title'  => '选择图像',
                'insert_title' => '插入图像',
            ),
        ),
	
        

        // array(
        //     'id'    => 'seo_custom_title',
        //     'type'  => 'text',
        //     'title' => '自定义标题',
        //     'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
        // array(
        //     'id'    => 'seo_custom_keywords',
        //     'type'  => 'text',
        //     'title' => '自定义关键词',
        //     'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
        // array(
        //     'id'    => 'seo_custom_desc',
        //     'type'  => 'textarea',
        //     'title' => '自定义描述',
		// 	'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),

  ),
);

// $options[]   = array(
//     'id'       => 'tag_options',
//     'taxonomy' => 'post_tag',
//     'fields'   => array(


//         array(
//             'id'    => 'seo_custom_title',
//             'type'  => 'text',
//             'title' => '自定义标题',
//             'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
//         ),
//         array(
//             'id'    => 'seo_custom_keywords',
//             'type'  => 'text',
//             'title' => '自定义关键词',
//             'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
//         ),
//         array(
//             'id'    => 'seo_custom_desc',
//             'type'  => 'textarea',
//             'title' => '自定义描述',
//             'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
//         ),
//     ),
// );

CSFramework_Taxonomy::instance( $options );
