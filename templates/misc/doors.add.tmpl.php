<div class="edit_form" style="width: 750px">
      <div class="edit_form_header">
        Add Door
      </div>
      <div class="edit_form_content">
        <form name="door" method="post" action=index.php?editor=misc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&action=40">
        <table width="100%">
          <tr>
            <th>id</th>
            <th>doorid</th>
            <th>name</th>
            <th>x</th>
            <th>y</th>
            <th>z</th>
            <th>heading</th>
            <th>opentype</th>
          </tr>
          <tr>
            <td><input type="text" size="7" name="drid" value="<?=$suggestdrid?>"></td>
            <td><input type="text" size="7" name="doorid" value="<?=$suggestdoorid?>"></td>
            <td><input type="text" size="15" name="name" value=""></td>
            <td><input type="text" size="7" name="pos_x" value="0"></td>
            <td><input type="text" size="7" name="pos_y" value="0"></td>
            <td><input type="text" size="7" name="pos_z" value="0"></td>
            <td><input type="text" size="7" name="heading" value="0"></td>
            <td><input type="text" size="7" name="opentype" value="0"></td>
           </tr>
          <tr>
            <th>size</th>
            <th>dest zone</th>
            <th>dest x</th>
            <th>dest y</th>
            <th>dest z</th>
            <th>dest heading</th>
            <th>lockpick</th>
            <th>client</th>
          </tr>
          <tr>
            <td><input type="text" size="7" name="size" value="100"></td>
            <td><input type="text" size="15" name="dest_zone" value="NONE"></td>
            <td><input type="text" size="7" name="dest_x" value="0"></td>
            <td><input type="text" size="7" name="dest_y" value="0"></td>
            <td><input type="text" size="7" name="dest_z" value="0"></td>
            <td><input type="text" size="7" name="dest_heading" value="0"></td>
            <td><input type="text" size="7" name="lockpick" value="0"></td>
            <td><input type="text" size="10" name="client_version_mask" value="4294967295"></td>
          </tr>
          <tr>
            <th>triggerdoor</th>
            <th>triggertype</th>
            <th>param</th>
            <th>doorisopen</th>
            <th>invert</th>
            <th>incline</th>
            <th>keyitem</th>
            <th>altkeyitem</th>
         </tr>
          <tr>
            <td><input type="text" size="7" name="triggerdoor" value="0"></td>
            <td><input type="text" size="7" name="triggertype" value="0"></td>
            <td><input type="text" size="7" name="door_param" value="0"></td>
            <td><input type="text" size="7" name="doorisopen" value="0"></td>
            <td><input type="text" size="7" name="invert_state" value="0"></td>
            <td><input type="text" size="7" name="incline" value="0"></td>
            <td><input type="text" size="7" name="keyitem" value="0"></td>
            <td><input type="text" size="7" name="altkeyitem" value="0"></td>

         </tr>
         <tr>
            <th>nokeyring</th>
            <th>islift</th>
            <th>close_time</th>
            <th>can_open</th>
         </tr>
          <tr>
            <td><select class="left" name="nokeyring">
<?foreach($yesno as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $nokeyring) ? " selected" : ""?>><?=$v?></option>
<?$x++; endforeach;?>
           </td>
          <td><select class="left" name="islift">
<?foreach($yesno as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $islift) ? " selected" : ""?>><?=$v?></option>
<?$x++; endforeach;?>
           </td>
          <td><input type="text" size="7" name="close_time" value="5"></td>
          <td><select class="left" name="can_open">
<?foreach($yesno as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $can_open) ? " selected" : ""?>><?=$v?></option>
<?$x++; endforeach;?>
           </td>
         </tr>
              </table><br><br>
        <center>
          <input type="submit" value="Submit Changes">
        </center>
      </form>
      </div>
      </div>