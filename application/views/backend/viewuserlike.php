<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="<?php echo site_url("site/createuserlike?id=").$this->input->get('id'); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                userlike Details
            </header>
            <div class="drawchintantable">
                <?php $this->chintantable->createsearch("userlike List");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
<!--                            <th data-field="user">User</th>-->
                            <th data-field="moviename">Movie</th>
                            <th data-field="status">Status</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <?php $this->chintantable->createpagination();?>
            </div>
        </section>
        <script>
            function drawtable(resultrow) {
                if(resultrow.status==1)
                {
                    resultrow.status="Enabled";
                }
                else
                {
                    resultrow.status="Disabled";
                }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.moviename + "</td><td>" + resultrow.status + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/edituserlike?id=');?>" + resultrow.user + "&userlikeid="+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' onclick=\"return confirm('Are you sure you want to delete?');\" href='<?php echo site_url('site/deleteuserlike?id='); ?>" + resultrow.user + "&userlikeid="+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
