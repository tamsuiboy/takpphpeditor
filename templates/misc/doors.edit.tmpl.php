<div class="edit_form" style="width: 750px">
      <div class="edit_form_header">
        Door: <?=$id?>
      </div>

      <div class="edit_form_content">
        <form name="door" method="post" action=index.php?editor=misc&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&action=37">
        <table width="100%">
          <tr>
            <th>doorid</th>
            <th>name</th>
            <th>x</th>
            <th>y</th>
            <th>z</th>
            <th>heading</th>
            <th>opentype</th>
            <th>client</th>
          </tr>
          <tr>
            <td><input type="text" size="7" name="doorid" value="<?=$doorid?>"></td>
            <td><input type="text" size="15" name="name" value="<?=$name?>"></td>
            <td><input type="text" size="7" name="pos_x" value="<?=$pos_x?>"></td>
            <td><input type="text" size="7" name="pos_y" value="<?=$pos_y?>"></td>
            <td><input type="text" size="7" name="pos_z" value="<?=$pos_z?>"></td>
            <td><input type="text" size="7" name="heading" value="<?=$heading?>"></td>
            <td><input type="text" size="7" name="opentype" value="<?=$opentype?>"></td>
            <td><input type="text" size="10" name="client_version_mask" value="<?=$client_version_mask?>"></td>
           </tr>
          <tr>
          	<th>lockpick</th>
            <th>dest zone</th>
            <th>dest x</th>
            <th>dest y</th>
            <th>dest z</th>
            <th>dest heading</th>
            <th>keyitem</th>
            <th>altkeyitem</th>
          </tr>
          <tr>
			<td><input type="text" size="7" name="lockpick" value="<?=$lockpick?>"></td>
            <td><input type="text" size="15" name="dest_zone" value="<?=$dest_zone?>"></td>
            <td><input type="text" size="7" name="dest_x" value="<?=$dest_x?>"></td>
            <td><input type="text" size="7" name="dest_y" value="<?=$dest_y?>"></td>
            <td><input type="text" size="7" name="dest_z" value="<?=$dest_z?>"></td>
            <td><input type="text" size="7" name="dest_heading" value="<?=$dest_heading?>"></td>
            <td><input type="text" size="7" name="keyitem" value="<?=$keyitem?>"></td>
            <td><input type="text" size="7" name="altkeyitem" value="<?=$altkeyitem?>"></td>
          </tr>
          <tr>
            <th>size</th>
            <th>triggerdoor</th>
            <th>triggertype</th>
            <th>param</th>
            <th>doorisopen</th>
            <th>invert</th>
            <th>incline</th>
            <th>close_time</th>
         </tr>
          <tr>
            <td><input type="text" size="7" name="size" value="<?=$size?>"></td>
            <td><input type="text" size="7" name="triggerdoor" value="<?=$triggerdoor?>"></td>
            <td><input type="text" size="7" name="triggertype" value="<?=$triggertype?>"></td>
            <td><input type="text" size="7" name="door_param" value="<?=$door_param?>"></td>
            <td><input type="text" size="7" name="doorisopen" value="<?=$doorisopen?>"></td>
            <td><input type="text" size="7" name="invert_state" value="<?=$invert_state?>"></td>
            <td><input type="text" size="7" name="incline" value="<?=$incline?>"></td>
            <td><input type="text" size="7" name="close_time" value="<?=$close_time?>"></td>
         </tr>
          <tr>
            <th>nokeyring</th>
            <th>islift</th>
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
          <td><select class="left" name="can_open">
<?foreach($yesno as $k => $v):?>
              <option value="<?=$k?>"<? echo ($k == $can_open) ? " selected" : ""?>><?=$v?></option>
<?$x++; endforeach;?>
           </td> 
         </tr>
              </table><br><br>
        <center>
          <input type="hidden" name="drid" value="<?=$id?>">
          <input type="submit" value="Submit Changes">
        </center>
      </form>
      </div>
      </div>