<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Edit <?= $title ?></h1>

    <div class="row">
        <div class="col-sm-8 offset-2">
            <form method="POST" action="<?= base_url('menu/editmenu?id=' . $id); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="menu">Name menu</label>
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                    <div class="form-group">
                        <label for="for">Location menu</label>
                        <select name="for" id="for" class="form-control">
                            <option value="">Select Menu</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                            <option value="0">Admin & User</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->