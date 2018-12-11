<li
    <?php if (isset($category['childs'])){
        echo 'class="nav-dropdown"';
    }?>
>

    <a href="<?=$category['address'];?>">
        <i class="fa fa-lg fa-fw <?=$category['icon']?>"></i> <?= $category['name']?>
        <?php if( isset($category['childs']) ): ?>

        <?php endif;?>
    </a>
    <?php if( isset($category['childs']) ): ?>
        <ul class="nav-sub">
            <?= $this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>
