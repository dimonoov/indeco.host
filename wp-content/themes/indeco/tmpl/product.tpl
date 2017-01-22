
<?php $count = 0;  ?>
<?php foreach($json as $term => $j):?>
    <?php foreach($j as $slug =>$term_slug):?>
    <?php   $active=""; if($count==0)  $active="active";?>
        <div class="tab-pane fade <?php echo $active?>" id="<?php echo $slug;?>">
        <div class="col-sm-12">
            <div class="head"><h2 class="h2"><?php echo $term;?></h2> <a href="#" class="show-all button">Посмотреть все</a> </div>
        </div>
        <div class="col-sm-12">
            <div class="responsive">
                <?php foreach ($term_slug as $key => $mas_posts):?>
                <div class="slide">
                    <div class="product-block">
                        <div class="pb-thumb">
                            <a href = "#"><?php echo $mas_posts['img']?></a>
                        </div>
                        <div class="pb-description">
                            <div class="pb-name"><span><?php echo $term;?> <span>M</span></span><?php echo $mas_posts['title']?></div>
                            <div class="pb-specs">
                                <span class="pb-row">
                                    <span>Excavator weight (possible)</span>
                                    <span>6,5 ÷ 16 ton</span>
                                </span>
                                <span class="pb-row">
                                    <span>Weight of hammer when operated</span>
                                    <span>650 kg</span>
                                </span>
                                <span class="pb-row">
                                    <span>Steel diameter</span>
                                    <span>90 mm</span>
                                </span>
                                <span class="pb-row">
                                    <span>Pressure adjusted to the excavator</span>
                                    <span>170 bar</span>
                                </span>
                                <span class="pb-row">
                                    <span>Back pressure max</span>
                                    <span>8,5 bar</span>
                                </span>
                                <span class="pb-row">
                                    <span>Energy class per blow</span>
                                    <span>1490 joule</span>
                                </span>
                                <span class="pb-row">
                                        <span>Number of blows per minute</span>
                                <span>450 ÷ 980 n/min</span>
                                </span>
                            </div>
                            <div class="pb-machines variant">Вид использования<br>
                                <?php
                                    $assign_cat = get_the_terms($mas_posts['id_post'], 'assign_cat');

                                    foreach($assign_cat as $assign){
                                       	$assign_image = get_field('image', 'assign_cat' . '_' .$assign->term_id);
                                        echo $assign_image;
                                        echo$assign->name;
                                    }
                                ?>
                            </div>
                       </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <?php  endforeach;?>
<?php $count++; endforeach;?>