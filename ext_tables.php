<?php

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Styleguide\Controller\StyleguideController;

defined('TYPO3') or die();

// Register "Styleguide" backend module
ExtensionUtility::registerModule(
    'styleguide',
    'help',
    'styleguide',
    '',
    [
        StyleguideController::class => 'index, typography, trees, tables, buttons, infobox, avatar, flashMessages, tca, tcaCreate, tcaDelete, debug, icons, tab, modal, accordion'
    ],
    [
        'access' => 'user,group',
        'icon'   => 'EXT:styleguide/Resources/Public/Icons/module.svg',
        'labels' => 'LLL:EXT:styleguide/Resources/Private/Language/locallang_styleguide.xlf',
    ]
);

$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
// Register styleguide svg for use within backend module
$iconRegistry->registerIcon(
    'tcarecords-tx_styleguide_forms-default',
    TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [ 'source' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg' ]
);
// Register example SVG for icon submodule
$iconRegistry->registerIcon(
    'provider-svg',
    SvgIconProvider::class,
    [ 'source' => 'EXT:styleguide/Resources/Public/Icons/provider_svg_icon.svg']
);
// Register example Bitmap for icon submodule
$iconRegistry->registerIcon(
    'provider-bitmap',
    BitmapIconProvider::class,
    [ 'source' => 'EXT:styleguide/Resources/Public/Icons/provider_bitmap_icon.png' ]
);
// Register example FontAwesome for icon submodule
$iconRegistry->registerIcon(
    'provider-fontawesome',
    FontawesomeIconProvider::class,
    [ 'name' => 'desktop' ]
);
// Register example FontAwesome for icon submodule
$iconRegistry->registerIcon(
    'provider-fontawesome-spinner',
    FontawesomeIconProvider::class,
    [
        'name' => 'spinner',
        'spinning' => true
    ]
);

// Register some custom permission options shown in BE group access lists
$GLOBALS['TYPO3_CONF_VARS']['BE']['customPermOptions']['tx_styleguide_custom'] = [
    'header' => 'Custom styleguide permissions',
        'items' => [
            'key1' => [
                'Option 1',
                // Icon has been registered above
                'tcarecords-tx_styleguide_forms-default',
                'Description 1',
            ],
        'key2' => [
            'Option 2'
        ],
    ]
];

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_ctrl_common');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_ctrl_minimal');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_displaycond');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_basic');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_group');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_imagemanipulation');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_rte');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_rte_inline_1_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_rte_flex_1_inline_1_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_select');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_select_single_12_foreign');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_slugs');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_special');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_t3editor');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_t3editor_inline_1_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_elements_t3editor_flex_1_inline_1_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_flex');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_flex_flex_3_inline_1_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1n');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1n_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_11');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_11_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1nnol10n');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1nnol10n_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1n1n');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1n1n_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_1n1n_childchild');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_expand');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_expand_inline_1_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_expandsingle');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_expandsingle_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_foreignrecorddefaults');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_foreignrecorddefaults_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_fal');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_parentnosoftdelete');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mm');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mm_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mm_childchild');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mn');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mn_mm');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mn_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mngroup');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mngroup_mm');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mngroup_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mnsymmetric');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_mnsymmetric_mm');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_usecombination');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_usecombination_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_usecombination_mm');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_usecombinationbox');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_usecombinationbox_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_inline_usecombinationbox_mm');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_palette');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_required');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_required_flex_2_inline_1_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_required_inline_1_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_required_inline_2_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_required_inline_3_child');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_required_rte_2_child');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_staticdata');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_type');
ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_typeforeign');

ExtensionManagementUtility::allowTableOnStandardPages('tx_styleguide_valuesdefault');
