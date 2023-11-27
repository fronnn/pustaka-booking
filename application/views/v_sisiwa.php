<html>
    <head><title>Form Input Siswa</title></head>
    <body>
        <center>
            <form action="<?= base_url('sisiwa/cetak');?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('nm_swa') ?>" name="nm_swa" id="nm_swa">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('NIS') ?>" name="NIS" id="NIS">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" value="<?= set_value('kls') ?>" name="kls" id="kls">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" value="<?= set_value('tgl') ?>" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        
                    </td>
                </tr>
            </table>
        </form>
        </center>
    </body>
</html>