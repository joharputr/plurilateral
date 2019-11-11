<?php if (!empty($show)) {
    foreach ($show as $s) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="title-head-one"><?php echo $s->judul; ?></h3>
                <h5 class="title-head-one text-success"><?php echo $s->tempat . ', ' . date_indo($s->tanggal); ?></h5>
                <hr>
                <p class="text-justify"><?php echo substr($s->deskripsi, 0, 200) . " . . . "; ?><a href="<?php echo base_url($private_url) ?>/preview/<?php echo $s->artikel_id; ?>" class="text-primary stretched-link" onclick="actControl('preview', <?php echo $s->artikel_id; ?>);">Baca Selengkapnya</a></p>
            </div>
        </div>
    <?php }
    } else { ?>
    <div class="card mb-3">
        <div class="card-body text-center bg-light text-primary">
            <span>Oppss Data Not Found <i class="fa fa-exclamation-circle"></i></span>
        </div>
    </div>
<?php } ?>

<script type="text/javascript">
    $(".load-data").hide();
</script>