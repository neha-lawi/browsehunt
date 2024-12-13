<div class="content-wrapper-main">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <!-- DataTables -->
                <div class="card shadow mb-4">
                    <div class="card-header pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Articles</h6>
                        <a class="m-0 btn btn-common text-decoration-none bg-black2"
                            href="<?php echo URL;?>/articles/add">
                            Add Data
                        </a>
                    </div>
                    <div class="card-body">
                        <?php if($this->session->flashdata('dbUpdate')){?>
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            <strong><?php echo $this->session->flashdata('dbUpdate');?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php } ?>

                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            class="table table-striped dataTable table-responsive table-width table-ellipses"
                                            id="dataTable" width="100%" cellspacing="0" role="grid"
                                            aria-describedby="dataTable_info">
                                            <thead>


                                                <tr role="row">
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        ID
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Category ID
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Title
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        URL
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Description 1
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Description 2
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Image
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Read Time
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Meta Title
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Meta Description
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Meta Keywords
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Author ID
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Article Date
                                                    </th>
                                                    <th id="clientProfile" class="sorting sorting_asc" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Category: activate to sort column descending">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($articles as $data){?>
                                                <tr>
                                                    <td><?php echo $data['id'];?></td>
                                                    <td><?php echo $data['category_id'];?></td>
                                                    <td><?php echo $data['title'];?></td>
                                                    <td><?php echo $data['url'];?></td>
                                                    <td><?php echo $data['description1'];?></td>
                                                    <td><?php echo $data['description2'];?></td>
                                                    <td><?php echo $data['image'];?></td>
                                                    <td><?php echo $data['read_time'];?></td>
                                                    <td><?php echo $data['meta_title'];?></td>
                                                    <td><?php echo $data['meta_description'];?></td>
                                                    <td><?php echo $data['meta_keywords'];?></td>
                                                    <td><?php echo $data['author_id'];?></td>
                                                    <td><?php echo $data['article_date'];?></td>
                                                    <td><a class="dropdown-item"
                                                            href="<?php echo URL;?>/articles/edit/<?php echo $data['id'];?>">
                                                            <i class="fa-solid fa-pencil me-2"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#"
                                                            onclick="deleteRow(<?php echo $data['id'];?>)">
                                                            <i class="fa-solid fa-trash me-2"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
</div>
</div>
</div>
<!-- End of Main Content -->