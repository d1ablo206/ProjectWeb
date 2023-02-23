<?php
include("../../functions/functions.php");
?>

<html>

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- the header.php file -->
    <?php
    include "header.php"
    ?>

    <!-- the nav.php file -->
    <?php
    include "nav.php"
    ?>

    <div class="page-wrapper">
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="row">

                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="mb-0">Brands</h4>
                                </div>
                                <hr>
                                <ul class="list-group">
                                    <?php
                                    getbrands();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row justify-content-center" id="product_list">
                            <?php
                             getpro();
                            ?>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card radius-15">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4 class="mb-0">Categories</h4>
                                </div>
                                <hr>
                                <ul class="list-group">
                                    <?php
                                    getcats();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script src="../js/jquery.min.js"></script>
</html>