<?php /* Template Name: Hướng dẫn */?>

<?php get_header(); 
// for($i=0;$i<=9999;$i++) {
// $delete = $wpdb->get_results("DELETE FROM wp_hoithao2311 WHERE id = $i");
	
// }


?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<section class="container" id="mycontent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>STT</th>              
<!--                         <th>ID</th>                        		 -->
						
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        
                        <th>Mã số thuế</th>
                      
                        <th>Câu hỏi cho diễn giả</th>
                    </tr>

                    <?php
                    $query = $wpdb->get_results("SELECT * FROM wp_hoithao2311");
					$dem=0;
                    foreach ($query as $item) {
						$dem++;
                        ?>
                        <tr>
                            <td>
                                <?php echo $dem; ?>
                            </td>
<!-- 							<td>
								<?php echo $item->id; ?>
							</td>
							 -->
                            <td>
                                <?php echo $item->name; ?>
                            </td>
                            <td>
                                <?php echo $item->phoneNumber; ?>
                            </td>
                            <td>
                                <?php echo $item->email; ?>
                            </td>
                        
                            <td>
                                <?php echo $item->taxNumber; ?>
                            </td>
                           
                            <td>
                                <?php echo $item->question; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>


            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>