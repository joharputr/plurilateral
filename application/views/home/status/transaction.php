<ul class="timeline timeline-left">
    <?php foreach ($record as $nom => $row) { ?>
        <li class="timeline-inverted timeline-item">
            <div class="timeline-badge success"><img src="<?php echo base_url() ?>assets/nonuser.png" alt="img" class="img-fluid"> </div>
            <div class="timeline-panel bg-white" style="padding: 10px 10px 10px 20px;">
                <div class="timeline-heading">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="timeline-title"><?php echo ucwords($row->author) ?></h5>
                            <hr style="margin:0px 0px 5px 0px; padding: 0px"/>
                            <p><i class="fa fa-calendar m-r-10"></i> <?php echo indo_date($row->sts_date, true, true) ?></p>
                        </div>
                        <div class="col-lg-5 text-right"style="padding-top: 18px">
                            <label class="label bg-success text-center btn-block" style="font-size: 100%; padding: 7px 10px;"><?php echo stsMain($row->sts_action, $row->sts_type) ?></label>
                        </div>
                    </div>
                </div>
                <?php if (!empty($row->sts_note)) { ?>
                    <div class="timeline-body">
                        <?php echo ucwords($row->sts_note) ?>
                    </div>
                <?php } ?>
            </div>
        </li>
    <?php } ?>
</ul>