<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact list</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form method="post" action="<?php echo base_url(); ?>index.php/contact/save">
                <div class="form-group">
                    <label for="">Tên</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại 1</label>
                    <input class="form-control" type="text" name="phone1">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại 2</label>
                    <input class="form-control" type="text" name="phone2">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input class="form-control" type="text" name="fb">
                </div>
                <div class="form-group">
                    <label for="">Company</label>
                    <input class="form-control" type="text" name="company">
                </div>
                <button class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </body>
</html>