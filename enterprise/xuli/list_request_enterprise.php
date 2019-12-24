<style>
    .scaled:hover {
        transform: scale(1.2);
        color: red;
    }
</style>
<?php
// hien thi cac phieu yeu cau ----- TA MINH Thao  
include("../login/config.php");

// phan trang
if (isset($_GET['trang'])) {
    $get_trang = $_GET['trang'];
} else $get_trang = 1;

$trang1 = ($get_trang - 1) * 6;
// Vitrichay=(tranghientai-1)*sobanghitrenmoitrang
// limit(vtrichay,soluonghangcanlay)

$organization_id = $_SESSION["organization_id"];
$sql = mysqli_query($connect, "SELECT * from enterprise_recruitment_request_form where organization_id= $organization_id limit $trang1,6");
?>
<?php while ($row = mysqli_fetch_assoc($sql)) {  ?>
    <div class="enterprise w3-lime" style="box-shadow: 5px 5px 5px gray; border-radius: 20px; padding: 10px 10px;">


        <p><?php echo  $row['request_name'] ?></p>
        <p>Cần tuyển: <?php echo $row["amount"]; ?></p>
        <p>Đăng kí :<?php number_of_registrations($row["id"]); ?> </p>
        <p>Đã phân công :<?php number_of_assigned($row["id"]); ?> </p>
        <p>Trạng thái : <?php check_status($row["statuss"]); ?></p>
        <br>
        <br>

        <a href="layout_enterprise.php?xem=chitiet&id=<?php echo $row["id"]; ?>" class="scaled">XEM CHI TIẾT</a>
    </div>

<?php
                                                    }
?>
<div class=" w3-row">
    <?php
                                                    // phan trang
                                                    $sql_trang = mysqli_query($connect, "SELECT * from enterprise_recruitment_request_form where organization_id= $organization_id ");

                                                    $count = mysqli_num_rows($sql_trang);
                                                    $trang = ceil($count / 6);
                                                    echo "Trang:";
                                                    for ($b = 1; $b <= $trang; $b++) {
                                                        echo '<a href="?xem=list_request_enterprise&trang=' . $b . '" > ' . $b . '</a>';
                                                    }
    ?>
</div>
<?php
                                                    // LAY TEN DOANH NGHIEP
                                                    function name_enterprise($organization_id)
                                                    {
                                                        global $connect;
                                                        $sql_name = mysqli_query($connect, "SELECT * from enterprise_profile  where id=$organization_id ");
                                                        $dong = mysqli_fetch_assoc($sql_name);
                                                        echo $dong["organization_name"];
                                                    }

                                                    // LAY SO LUONG NGUOI DANG KI
                                                    function number_of_registrations($organization_id)
                                                    {
                                                        global $connect;
                                                        $dem = 0;
                                                        $sql_number = mysqli_query($connect, "SELECT * from student_registration  where request_id=$organization_id ");

                                                        while ($sl = mysqli_fetch_assoc($sql_number)) {

                                                            $dem++;
                                                        }
                                                        echo $dem;
                                                    }

                                                    // LAY SO LUONG NGUOI Phan cong
                                                    function number_of_assigned($organization_id)
                                                    {
                                                        global $connect;
                                                        $dem = 0;
                                                        $sql_number = mysqli_query($connect, "SELECT * from assigned_table  where organization_request_id=$organization_id ");

                                                        while ($sl = mysqli_fetch_assoc($sql_number)) {

                                                            $dem++;
                                                        }
                                                        echo $dem;
                                                    }

                                                    // kiem tra trang thai
                                                    function check_status($status)
                                                    {
                                                        if ($status == 4000)
                                                            echo " ngừng nhận đăng kí       ";
                                                        elseif ($status == 3000)
                                                            echo " chờ sinh viên đăng kí
    ";
                                                        elseif ($status == 1000)
                                                            echo " bị hủy
    ";
                                                        elseif ($status == 2000)
                                                            echo " chờ duyệt
    ";
                                                    }



?>