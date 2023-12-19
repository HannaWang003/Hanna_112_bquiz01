<?php
$DB = ${ucfirst($do)};
$rows = $DB->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody class="cent">
                <tr class="yel">
                    <td width="80%">動態文字廣告</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
foreach($rows as $row){
                ?>
                <tr>
                    <td>
                        <input type="text" name="text[]" value="<?=$row['text']?>" style="width:90%">
                    </td>
                    <td><input type="radio" name="sh[]" value="<?=$row['id']?>" <?=($row['sh']==1)?"checked":""?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id']?>">刪除</td>
                </tr>
                <!-- 要放在foreach裡 -->
                <input type="hidden" name="id[]" value="<?=$row['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do?>.php?table=<?=$do?>')" value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>
        <!-- 只要出現一次的可以放在foreach外 -->
<input type="hidden" name="table" value="<?=$do?>">
    </form>
</div>