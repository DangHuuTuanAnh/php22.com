<?php
session_start();
if (isset($_GET['key'])) {
    $key= $_GET['key'];
    unset($_SESSION['documents'][$key]);
    echo "Xóa thành công";
    // header('Location: list_documents.php');
}else{
	echo "Thất bại";
}
echo "<pre>";
print_r($_SESSION['documents']);
echo "</pre>";

// if (unlink("uploads/Screenshot (1).png")) {
// 	echo "Xoa thanh cong";
// }else{
// 	echo "Xoa  that bai!";
// }

?>