<?php if (!empty($show)) {
    foreach ($show as $s) { ?>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="title-head-one"><?php echo $s->judul; ?></h3>
                <h5 class="title-head-one text-success"><?php echo $s->tempat . ', ' . date_indo($s->tanggal); ?></h5>
                <hr>
                <p class="text-justify"><?php echo $s->deskripsi; ?></p>
                <br>
                <a class="btn btn-light text-primary" href="<?php echo base_url($s->dokumen) ?>"><i class="fa fa-file" style="font-size: 15px"></i> <?php echo $s->judul ?></a>
            </div>
        </div>
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
<nav class="listing__pagination">
    <?php echo $halaman ?>
</nav>