<?php
?>
<div id="freelancer-list-section" class="row">
    <div class="small-12 text-center large-12 large-offset-0 columns">
        <h2 class="text-center"><?php echo get_option('cc_freelance_list_title'); ?></h2>
    </div>
    <div class="small-12 medium-4 medium-offset-0 columns">
        <div class="medium-offset-1 medium-10 columns">
            <?php echo htmlspecialchars_decode(get_option('cc_freelance_column_1')); ?>
        </div>
    </div>
    <div class="small-12 medium-4 medium-offset-0 columns">
        <div class="medium-offset-1 medium-10 columns">
            <?php echo htmlspecialchars_decode( get_option('cc_freelance_column_2')); ?>
        </div>
    </div>
    <div class="small-12 medium-4 medium-offset-0 columns end">
        <div class="medium-offset-1 medium-10 columns">
            <?php echo htmlspecialchars_decode(get_option('cc_freelance_column_3')); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="small-10 small-offset-1 columns text-center">
        <a href="<?php echo get_option('cc_view_opportunities_link'); ?>" title="View Opportunities Button" alt="Current Freelance Design Jobs"><button id="more_posts" class="blue-btn drop-shadow">View Current Openings</button></a>
    </div>
</div>