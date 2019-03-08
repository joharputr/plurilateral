<div class="row">
    <?php foreach ($mod as $x => $mod_cvt) { ?>
        <div class="col-lg-4 col-md-6 <?php echo url_title($mod_cvt->modul_name, "-", true) ?>" id="sort-forbiz-<?php echo $x + 1 ?>">
            <div class="forbiz-available" id ="ada-<?php echo $x + 1 ?>">
                <a href="<?php echo base_url($mod_cvt->modul_url); ?>" class="text-white">
                    <div class="card bg-info" style="height: 200px; border-radius:5px">
                        <div class="card-body text-center text-white" style="height: 206px; padding-top: 60px">
                            <i class="<?php echo ($mod_cvt->icon_name) ?>" style="font-size: 60px"></i>
                            <h4 class="m-t-15"><?php echo ucwords($mod_cvt->modul_name) ?></h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>
</div>
<script>
    $("#loader-data").html("");
</script>