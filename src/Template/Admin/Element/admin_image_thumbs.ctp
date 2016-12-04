<div class="image__thumbs">
    <?php foreach ($data['images'] as $image) : ?>
        <?php 
            if (!empty($image['filepath']) && !empty($image['filename'])) {
                $imagePath = '/files/Images/' . $image['filename'];
            } else {
                $imagePath = '/img/upload-empty.png';
            }
        ?>

        <div class="image__thumb">
            <?php echo $this->Image->resize($imagePath, array(
                'width' => 210,
                'height' => 180,
                'autocrop' => true,
                'crop' => true
            )); ?>
        </div>
        <div class="image__delete">
            <?php echo $this->Html->link('Delete', array(
                'controller' => 'Images',
                'action' => 'delete',
                $image['id']
            )); ?>
        </div>
    <?php endforeach; ?>
</div>