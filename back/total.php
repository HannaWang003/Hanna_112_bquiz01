<!-- 從網站標題修改而來 -->
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" action="./api/edit_info.php">
        <!-- 刪除target="back" -->
        <table style="width:50%;margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="50%">進站總人數</td>
                    <td width="50%">
                        <input type="number" name="total" value="<?= $Total->find(1)['total'] ?>">
                        <input type="hidden" name="table" value="<?= $do ?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <!-- 為了不要讓版跑掉，所以這個td不要刪除 -->
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>