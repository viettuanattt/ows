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
            <h1>Danh bạ</h1>

            <div id="body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th></th>
                            <th>Email</th>
                            <th>FB</th>
                            <th>Company</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $idx => $item): ?>
                            <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
                                <td class="center"><?= $idx+1 ?></td>
                                <td><?= $item->name ?></td>
                                <td><?= $item->phone1 ?></td>
                                <td><?= $item->phone2 ?></td>
                                <td><?= $item->email ?></td>
                                <td><?= $item->fb ?></td>
                                <td><?= $item->company ?></td>
                                <td class="center"><a href="<?php echo base_url(); ?>index.php/contact/edit/<?= $item->id ?>">Chi tiết</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <a href="<?php echo base_url(); ?>index.php/contact/add" class="btn">Thêm mới</a>
            </div>

            <p class="footer">Website được thiết kế bởi Trần Viết Tuấn</p>
        </div>
    </body>
</html>

