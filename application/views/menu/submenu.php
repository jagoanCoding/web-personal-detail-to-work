<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('pesan'); ?>

            <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addsubmenu">Add new submenu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-list-ol"></i> No</th>
                        <th scope="col"><i class="fas fa-tenge"></i> Title</th>
                        <th scope="col"><i class="fas fa-ellipsis-v"></i> Menu</th>
                        <th scope="col"><i class="fas fa-link"></i> Url</th>
                        <th scope="col"><i class="fab fa-linux"></i> Icon</th>
                        <th scope="col"><i class="fas fa-check-circle"></i> Active ?</th>
                        <th scope="col"><i class="fas fa-edit"></i> Action ?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td>
                                <?= $sm['icon']; ?> | <li class="<?= $sm['icon']; ?>"></li>
                            </td>
                            <td>
                                <?php if ($sm['is_active'] == 1) : ?>
                                    <?= 'Aktive <i class="fas fa-check-circle"></i>' ?>
                                <?php else : ?>
                                    <?= 'Non Active <i class="fas fa-times-circle"></i>' ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('menu/edit?id=' . $sm['id']); ?>" class="badge badge-info">Edit</a>
                                <a href="<?= base_url('menu/deleteSubMenu?id=' . $sm['id']) . '?file='; ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal add menu-->
<div class="modal fade" id="addsubmenu" tabindex="-1" role="dialog" aria-labelledby="addsubmenuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addsubmenuLabel">Add new submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= base_url('menu/submenu'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Name">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input" name="is_active" id="is_active" value="1" checked>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Active ?" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--  -->