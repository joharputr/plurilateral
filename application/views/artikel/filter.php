<div class="card">
    <div class="card-body">
        <form>
            <div class="form-row">
                <h4 class="title-head-two mb-3"><i class="fa fa-search"></i>Filter Data</h4>
                <div class="col-md-12 mb-3">
                    <label>Year</label>
                    <select name="sort_year" class="form-control custom-select" onchange="actControl()">
                        <option value="all">All</option>
                        <?php foreach($tahun as $t){?>
                        <option value="<?php echo $t->year;?>"><?php echo $t->year;?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label>Search By Title</label>
                    <input type="text" name="sort_title" class="form-control" onkeyup="actControl()" placeholder="Search . . .">
                </div>
            </div>
        </form>
    </div>
</div>