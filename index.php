<?php include("db.php")?>

<?php include("includes/header.php")?>

<div class="container p-2">
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-body">
                <div class="form-group mx-auto">
                    <h5 class="card-title">Admin User</h5>
                </div>
                <div class="form-group mx-auto">
                    <img src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" class="w-20" alt="">
                </div>
                <div class="form-group mx-auto">
                    <p class="card-title">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <a href="pruebas.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://storage.googleapis.com/nilh-pasionmovil.appspot.com/1/2015/11/Surface-Phone-concept.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/514YMVAc6NL._SL1024_.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://media.wired.com/photos/5bd236f96d53d208ff9b4d4b/master/pass/surfacepro6_top.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container p-4">

    <div class="row">
        <div class="col-md-4">

        <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control"
                        placeholder="Ticket Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" row="2" class="form-control"
                        placeholder="Ticket Descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="priority" class="form-control"
                        placeholder="Priority Ticket" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"
                    name="save" value="Save Ticket">
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <th>Title</th>
                    <th>Descripcion</th>
                    <th>Priority</th>
                    <th>Create At</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM ticket";
                    $result_task = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_task)){ ?>
                        <tr>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['priority'] ?></td>
                            <td><?php echo $row['create_at'] ?></td>
                            <td>
                                <a href="edit_task.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php include("includes/footer.php")?>