<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進站總人數管理</p>
    <form method="post" target="back" action="?do=tii">
        <table width="80%" style="margin:auto">
            <tbody>
                <tr class="yel">
                    <td width="50%">進站總人數</td>
                    <td width="50%">
                        <input type="number" name="total" value="">
                        <input type="hidden" name="table" value="<?=$do?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>