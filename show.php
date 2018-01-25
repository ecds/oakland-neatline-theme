<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline gemini'
)); ?>

<!-- Narrative. -->
<div id="neatline-narrative" class="narrative">

  <header  style="background-color:transparent;">

    <!-- Credits. -->
<?php /**    <span><a href="<?php echo WEB_ROOT; ?>">&larr; Oakland Home</a></span> &bull;
**/ ?>
  </header>

  <!-- Content. -->
  <h1>WWI and African American history at Atlanta's Oakland Cemetery</h1>
  <?php echo nl_getExhibitField('narrative'); ?>

</div>

<!-- Exhibit. -->
<div class="exhibit">
  <?php echo nl_getExhibitMarkup(); ?>
</div>




<?php echo foot(); ?>
