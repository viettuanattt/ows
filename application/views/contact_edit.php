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
            <h1>Cập nhật Danh bạ</h1>
            <div id="body">
                <form method="post" action="<?php echo base_url(); ?>index.php/contact/save/<?= $contact_item->id?>">
                    <div class="input">
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input class="form-control" type="text" name="name" value="<?= $contact_item->name ?>">
                        </div>
                        <div class="form-group">
                            <label for="">SĐT 1</label>
                            <input class="form-control" type="text" name="phone1" value="<?= $contact_item->phone1 ?>">
                        </div>
                        <div class="form-group">
                            <label for="">SĐT 2</label>
                            <input class="form-control" type="text" name="phone2" value="<?= $contact_item->phone2 ?>">
                        </div>                            
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" name="email" value="<?= $contact_item->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="">FB</label>
                            <input class="form-control" type="text" name="fb" value="<?= $contact_item->fb ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Công ty</label>
                            <input class="form-control" type="text" name="company" value="<?= $contact_item->company ?>">
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">Cập nhật</button>
                        <input class="btn btn-danger" type="button" onclick="remove(<?= $contact_item->id?>)" value="Xóa" />
                        <button class="btn btn-default" onclick="javascript: history.back()">Quay lại</button>
                    <div>
                </form>
            </div>
        </div>
        <script
                src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
                crossorigin="anonymous"></script>
        <script>
            function remove(id) {
                var isConfirm = confirm("Bạn có chắc muốn xóa không?");
                if (isConfirm) {
                    $.get('<?php echo base_url(); ?>index.php/contact/del/'+id).then(function(data) {
                        if (data == "success")
                            window.location = "<?php echo base_url(); ?>";
                        else
                            alert('Có lỗi xảy ra.');
                    })
                }
            }
        </script>
    </body>
</html>