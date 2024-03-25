<?php
session_start();
require_once("../config.php");
require_once("m_sale.php");

$date = date('d-m-Y');
$output_filename = "ລາຍງານການຂາຍ" . $date . ".xls";
// Redirect the output to the stream
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$output_filename}");



echo "<h4>ລາຍງານການຂາຍ ລະຫວ່າງວັນທີ " . $_GET['strDate'] . " ຫາ " . $_GET['endDate'] . "</h4> ";
echo "<table border='1'> \n";
?>
<tr>
    <th>ບິນເລກທີ</th>
    <th>ເລກບາໂຄດ</th>
    <th>ຊື່ສິນຄ້າ</th>
    <th>ລາຄາສີນຄ້າ</th>
    <th>ຈຳນວນ</th>
    <th>ລາຄາລວມ</th>
    <th>ວັນທີ</th>
    
</tr>
<?php
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_row()) {

?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td><?= $row[3] ?></td>
            <td><?= $row[4] ?></td>
            <td><?= $row[5] ?></td>
            <td><?= $row[6] ?></td>
        </tr>
<?php
    }
}
?>

</table>