<h3>新增標題區圖片</h3>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" ></td>
        </tr>
        <tr>
            <td>標題區替代文字</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?=$_GET['table']?>">
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>