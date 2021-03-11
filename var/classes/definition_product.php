<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- colour [input]
- size [numeric]
- status [select]
- description [textarea]
- category [manyToManyObjectRelation]
- mainimage [image]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'product',
   'name' => 'product',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1615399551,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
         'name' => 'basic data',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'basic data',
             'type' => NULL,
             'region' => NULL,
             'title' => 'basic data',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'colour',
                 'title' => 'colour',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'double',
                 'columnType' => 'double',
                 'phpdocType' => 'float',
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'name' => 'size',
                 'title' => 'size',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'fieldtype' => 'select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'inactive',
                    'value' => 'inactive',
                  ),
                  1 => 
                  array (
                    'key' => 'active',
                    'value' => 'active',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'status',
                 'title' => 'status',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'fieldtype' => 'textarea',
                 'width' => '',
                 'height' => '',
                 'maxLength' => NULL,
                 'showCharCount' => false,
                 'excludeFromSearchIndex' => false,
                 'queryColumnType' => 'longtext',
                 'columnType' => 'longtext',
                 'phpdocType' => 'string',
                 'name' => 'description',
                 'title' => 'description',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'visibleFields' => 
                array (
                ),
                 'allowToCreateNewObject' => false,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => '',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'category',
                 'title' => 'category',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
             'icon' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'digital assets',
             'type' => NULL,
             'region' => NULL,
             'title' => 'digital assets',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                 'fieldtype' => 'image',
                 'width' => '',
                 'height' => '',
                 'uploadPath' => '',
                 'queryColumnType' => 'int(11)',
                 'columnType' => 'int(11)',
                 'phpdocType' => '\\Pimcore\\Model\\Asset\\Image',
                 'name' => 'mainimage',
                 'title' => 'main image',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => NULL,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
             'icon' => '',
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
     'icon' => NULL,
  )),
   'icon' => '',
   'previewUrl' => '',
   'group' => '',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => false,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
));
