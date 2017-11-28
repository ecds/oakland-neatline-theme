<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<!-- Texts. -->
<div class="content">
  <div class="text biography">
    <strong>Name:  </strong><?php echo metadata('item', array(
        'Dublin Core', 'Title'
    )); ?>
  </div>
  <div class="text summary">
    <strong>GPS Location:  </strong><?php echo metadata('item', array(
        'Item Type Metadata', 'GPS'
    )); ?><a href="https://www.google.com/maps/@<?php echo metadata('item', array(
        'Item Type Metadata', 'GPS'
    )); ?>,20z">Go to Google Maps.</a>
  </div>

  <div class="text summary">
    <strong>Birth Date:  </strong><?php echo metadata('item', array(
        'Item Type Metadata', 'Birth Date'
    )); ?>
  </div>
  <div class="text summary">
    <strong>Death Date:  </strong><?php echo metadata('item', array(
        'Item Type Metadata', 'Death Date'
    )); ?>
  </div>

  <div class="text summary">
    <strong>Military Service Details:  </strong><?php echo metadata('item', array(
        'Item Type Metadata', 'Military Service Details'
    )); ?>
  </div>

<?php if ($text = metadata('item', array('Item Type Metadata', 'Birthplace'))): ?>
            <div class="item-description">
                <p><?php echo ('<strong>Birthplace: </strong>')?><?php echo $text; ?></p>
                            </div>
            <?php endif; ?>

<?php if ($text = metadata('item', array('Item Type Metadata', 'Occupation'))): ?>
            <div class="item-description">
                <p><?php echo ('<strong>Occupation: </strong>')?><?php echo $text; ?></p>
                            </div>
            <?php endif; ?>

<?php if ($text = metadata('item', array('Item Type Metadata', 'Education'))): ?>
            <div class="item-description">
                <p><?php echo ('<strong>Education: </strong>')?><?php echo $text; ?></p>
                            </div>
            <?php endif; ?>
<?php if ($text = metadata('item', array('Item Type Metadata', 'Spouse'))): ?>
            <div class="item-description">
                <p><?php echo ('<strong>Spouse: </strong>')?><?php echo $text; ?></p>
                            </div>
            <?php endif; ?>
<?php if ($text = metadata('item', array('Item Type Metadata', 'Biographical Text'))): ?>
            <div class="item-description">
                <p><?php echo ('<strong>Biographical Text: </strong>')?><?php echo $text; ?></p>
                            </div>
            <?php endif; ?>
<?php if ($text = metadata('item', array('Item Type Metadata', 'Bibliography'))): ?>
            <div class="item-description">
                <p><?php echo ('<strong>Bibliography: </strong>')?><?php echo $text; ?></p>
                            </div>
            <?php endif; ?>

  <hr />

</div>

<!-- Files. -->
<?php if (metadata('item', 'has files')): ?>
  <h3><?php echo __('Files'); ?></h3>
  <?php echo files_for_item(); ?>
<?php endif; ?>

<hr />

<!-- Link. -->
<?php echo link_to(
  get_current_record('item'), 'show', 'View the item in Omeka'
); ?>
