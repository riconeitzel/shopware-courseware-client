<?php declare(strict_types=1);

use Shopware\Courseware\Filesystem\Reader;

/** @var Reader $reader */
$id = $_GET['id'];
$type = $_GET['type'];
$entity = $reader->getEntityByIdAndType($type, $id);

$this->layout('layout/minimal', ['title' => $entity->getTitle()]);
?>
<textarea id="source"></textarea>
<script src="https://remarkjs.com/downloads/remark-latest.min.js"></script>
<script>
    var slideshow = remark.create({

        navigation: {
            scroll: false,
            touch: true,
            click: true,
        },
        sourceUrl: '/index.php?page=ajax&type=<?= $type ?>&id=<?= $id ?>'
    });
    window.addEventListener("keyup", function(e){ if(e.code == 'Escape') history.back(); }, false);

</script>
