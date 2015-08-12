<h3>Profil</h3>[<?php echo anchor('c_institution/edit_profile/', 'Edit Profil');?>]
<table width="250px">
<?php foreach($list_data->result()as $row){ ?>
    <tr>
        <td><strong>Username</strong></td>
        <td><?php echo $row->INS_USERNAME; ?></td>
    </tr>
    <tr>
        <td><strong>Nama Institusi</strong></td>
        <td><?php echo $row->INS_NAME; ?></td>
    </tr>
    <tr>
        <td><strong>Alamat</strong></td>
        <td><?php echo $row->INS_ADDR; ?></td>
    </tr>
    <tr>
        <td><strong>Alamat Email</strong></td>
        <td><?php echo $row->INS_EMAIL; ?></td>
    </tr>
    <tr>
        <td><strong>Nomor Telepon</strong></td>
        <td><?php echo $row->INS_PHONE; ?></td>
    </tr>
    <tr>
        <td><strong>Nama Ambassador</strong></td>
        <td><?php echo $row->INS_AMMB; ?></td>
    </tr>
<?php } ?>
</table>