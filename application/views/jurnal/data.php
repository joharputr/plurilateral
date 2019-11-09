<?php if (!empty($kegiatan)) { ?>
    <div class="row">
        <?php foreach ($kegiatan as $e) { ?>
            <div class="col-md-4 p-2">
                <div class="card">
                    <div class="card-body">
                        <h3 style=" text-align: center; margin-bottom: -10px; font-family: 'Raleway', sans-serif; margin-bottom: 10px; color:#996633">
                            <?php echo $e->judul ?></h3>
                        <h4 class="text-success text-center"><?php echo date_indo($e->tanggal_mulai) . " - " . date_indo($e->tanggal_selesai) ?></h4>
                        <?php if (!empty($dokumen)) { ?>
                            <ul class="list-group">
                                <?php foreach ($dokumen as $d) { ?>
                                    <?php if ($d->event == $e->id) { ?>
                                        <li class="list-group-item"><a href="<?php echo base_url($d->dokumen) ?>"><?php echo $d->judul ?></a></li>
                                <?php }
                                            } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
<?php } else { ?>
    <div class="card mb-3">
        <div class="card-body text-center bg-danger text-white">
            <span>Oppss Data Not Found <i class="fa fa-exclamation-circle"></i></span>
        </div>
    </div>
<?php } ?>