<?php helper('html');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <?=link_tag('css/bootstrap.min.css')?>
</head>
<body>
    <div class="container">
        <h2>Data Seluruh Pegawai</h2>

        <form action="<?= base_url() ?>/add_employee" method="post">
                <table class="table" style="width: 700px;">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" class="form-control" name="name"></td>
                    </tr>
                    <tr>
                        <td>Nama Unit</td>
                        <td>
                            <select name="department" id="" class="form-select">
                                <option value="Public Relation">Public Relation</option>
                                <option value="Finance">Finance</option>
                                <option value="Payroll">Payroll</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Gaji</td>
                        <td><input type="text" name="salary" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Tambah Data"></td>
                    </tr>
                </table>
            </form>
            
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Nama Unit</th>
                <th>Gaji</th>
            </tr>
            <?php
            foreach($data as $employee){
            ?>
            <tr>
                <td><?= $employee['name'] ?></td>
                <td><?= $employee['department'] ?></td>
                <td><?= $employee['salary'] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>