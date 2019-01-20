<div class="wrap">
    <div id="icon-options-general" class="icon32"><br /></div>
    <h2>7 Type Of  Animated Flying Twitter Bird Widget For Wordpress</h2>
    <form method="post" action="<?php echo admin_url('admin.php?page=flying-twitter');?>" name="frmtweet" id="frmtweet" >
        <table class="form-table">
        <tr valign="top">
        <th scope="row">Twitter User Name</th> 
        <td><input class="text-input" size="25" name="twt_user" value="<?php echo get_option("twt_user");?>" type="text" style="height:30px"></td>
        </tr>
        <tr valign="top">
        <th scope="row">Tweet This Text</th>
        <td><input class="text-input" maxlength="140" size="55" name="twt_text" value="<?php echo get_option("twt_text");?>" type="text" style="height:30px"></td>
        </tr>
        <tr valign="top">
        <th scope="row">Select a type of bird</th>
        <td>
            <table><tbody><tr>
            <td>
            <input <?php echo (get_option("twt_js")=='js/twitterbird.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/twitterbird.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/twitterbird-thumb.png' , __FILE__ );?>"/></td>
            <td>
            <input <?php echo (get_option("twt_js")=='js/arrowplain.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/arrowplain.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/arrowplain-thumb.png' , __FILE__ );?>"/></td>
            <td>
            <input <?php echo (get_option("twt_js")=='js/black-hwak.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/black-hwak.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/black-hwak-thumb.png' , __FILE__ );?>"/></td>
            <td>
            <input <?php echo (get_option("twt_js")=='js/christmas.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/christmas.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/christmas-thumb.png' , __FILE__ );?>"/></td>
            <td>
            <input <?php echo (get_option("twt_js")=='js/orange-man.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/orange-man.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/orange-man-thumb.png' , __FILE__ );?>"/></td>
            <td>
            <input <?php echo (get_option("twt_js")=='js/kame-hame-ha.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/kame-hame-ha.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/kame-hame-ha-thumb.png' , __FILE__ );?>"/></td>
            <td>
            <input <?php echo (get_option("twt_js")=='js/red-hawk.js')?'checked="checked"':'';?> name="twt_js" type="radio" value="js/red-hawk.js"/></td>
            <td><img class="middle" src="<?php echo plugins_url( 'images/red-hawk-thumb.png' , __FILE__ );?>"/></td>
            </tr>
            </tbody>
            </table>
        </td>
        </table>
        <p class="submit">
        <input class="button button-primary" value="Save Changes" type="submit" id="flytwitter" name="flytwitter" />
        </p>
        <legend style="margin-left:183px;"><h3></h3></legend>
        <p class="submit">
            <a class="button button-primary" href="http://www.theandroid-mania.com/contact/" target="_blank">Contact for Custom Birds</a>
        </p>
    </form>
</div>