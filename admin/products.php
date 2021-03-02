<?php
$title = 'محصولات';
include_once 'page/header.php';

$products = showAllProducts();
?>

<div>
    <div>
        <div class="table">
        <?php
        if (!empty($products)) {
        ?>
            <table>
                <tr>
                    <th>شماره</th>
                    <th>عنوان</th>
                    <th>تصویر</th>
                    <th>تعداد</th>
                    <th>تاریخ</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                <?php
                $i = 0;
                    foreach($products as $product) {
                        $i += 1;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $product['title'] ?></td>
                    <td><?php echo $product['image'] ?></td>
                    <td><?php echo $product['count'] ?></td>
                    <td><?php echo $product['date'] ?></td>
                    <td><a href="#">ویرایش</a></td>
                    <td><a href="#">حذف</a></td>
                </tr>
            </table>
        <?php
                }
        }
        ?>
        </div>
    </div>
</div>

<?php
include_once 'page/footer.php';
?>