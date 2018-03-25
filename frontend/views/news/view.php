
<section class=" max_w padding_none">
		<section class="content  mt_15 col-md-9 col-ms-9 col-xs-9">
            <div class="items">
                <div class="row">
                	<?php if(!empty($singleNews)): ?>
                        <h2><?=$singleNews->title?></h2>
                        <div><?=$singleNews->text?></div>
                    <?php endif?>
                </div>
            </div>
        </section>
</section>