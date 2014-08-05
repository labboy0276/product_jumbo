<?php
/**
 * @file
 * Template for Panopoly product-jumbo.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display products product-jumbo clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <section class="section" id="product-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-<?php print kalatheme_grid_size(KALATHEME_GRID_FULL); ?> product-jumbo-navbar">
      		<?php print $content['navbar']; ?>
  		</div>
  	  </div>
    </div>
</section>

  <section class="section" id="product-jumbo">
    <div class="container">
      <div class="row">
        <div class="col-md-<?php print kalatheme_grid_size(KALATHEME_GRID_FULL); ?> product-jumbo-strech">
          <?php print $content['pjumbo']; ?>
      </div>
      </div>
    </div>
</section>

 <section class="section" id="product-content">
    <div class="container">
      <div class="row">
        <div class="col-md-<?php print kalatheme_grid_size(KALATHEME_GRID_FULL); ?> product-jumbo-content">
      		<?php print $content['contentmain']; ?>
  		</div>
  	  </div>
    </div>
  </section>
</div><!-- /.product-jumbo -->
