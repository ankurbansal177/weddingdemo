<div id="slide">
    <?php echo $this->Form->create(false,array('type' => 'file')); ?>
    <fieldset>
        <?php

        echo $this->Form->input('image', array('type' => 'file'));

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    <?php echo $imageName;?>
    <div class="slider">
        <ul class="items">
            <li><img src="/images/slide-1.jpg" alt=""></li>
            <li><img src="/images/slide-2.jpg" alt=""></li>
            <li><img src="/images/slide-3.jpg" alt=""></li>
            <li><img src="/images/slide-4.jpg" alt=""></li>
        </ul>
    </div>
    <ul class="pags">
        <li><a href="#"><img src="/images/slide-1-small.jpg" alt=""><span></span></a></li>
        <li><a href="#"><img src="/images/slide-2-small.jpg" alt=""><span></span></a></li>
        <li><a href="#"><img src="/images/slide-3-small.jpg" alt=""><span></span></a></li>
        <li><a href="#"><img src="/images/slide-4-small.jpg" alt=""><span></span></a></li>
    </ul>
    <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
</div>