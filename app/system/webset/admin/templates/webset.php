<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$readonly='';
$time = time();
$weburltext = $word['upfiletips10'].$url['web_site'];
if($_M['langlist']['web'][$_M['lang']]['link']){
    $readonly = 'readonly';
    $weburltext = $word['unitytxt_8'];
}
?>
<div class="met-web-set">
    <form method="POST" action="{$url.own_name}c=info&a=doSaveInfo" data-submit-ajax="1" class='info-form'
          id="info-form" data-validate_order="#info-form">
        <div class="metadmin-fmbx">
            <h3 class='example-title'>{$word.setbasicWebInfoSet}</h3>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.setbasicWebName}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_webname" class="form-control"></div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.linkLOGO}</label>
                </dt>
                <dd>
                    <div class='form-group'>
                        <div class="d-inline-block">
                            <input type="file" name="met_logo" value="" data-plugin='fileinput' accept="image/*">
                        </div>
                        <span class="text-help ml-2">{$word.suggested_size} 180 * 60 ({$word.setimgPixel})</span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.mobile_logo}</label>
                </dt>
                <dd>
                    <div class='form-group'>
                        <div class="d-inline-block">
                            <input type="file" name="met_mobile_logo" value="" data-plugin='fileinput' accept="image/*">
                        </div>
                        <span class="text-help ml-2">{$word.suggested_size} 180 * 50
              ({$word.setimgPixel})<br>{$word.indexmobilelogoinfo}</span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.addbaricon}</label>
                </dt>
                <dd>
                    <div class='form-group'>
                        <div class="d-inline-block">
                            <input type="file" name="met_ico" value="../favicon.ico?{$time}"
                                   data-url="{$url.adminurl}c=uploadify&m=include&a=doupico&data_key=" data-plugin='fileinput'
                                   accept="image/x-icon">
                        </div>
                        <span class="text-help ml-2">
              {$word.suggested_size} 32 * 32 ({$word.setimgPixel}){$word.icontips}
              <a href="https://www.baidu.com/s?wd=ico%E5%9B%BE%E6%A0%87%E5%88%B6%E4%BD%9C"
                 target="_blank">{$word.webset_tips2_v6}</a>
              <br />
              {$word.webset_tips1_v6}
            </span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.linkKeys}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_keywords" class="form-control">
                        <span class="text-help ml-2">{$word.upfiletips13}</span>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.upfiletips14}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <textarea name="met_description" rows="5" class='form-control'></textarea>
                        <span class="text-help ml-2">{$word.upfiletips15}</span>
                    </div>
                </dd>
            </dl>
            <h3 class='example-title'>{$word.unitytxt_13}</h3>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.seticpinfo}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_icp_info" class="form-control">
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.setfootVersion}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_footright" class="form-control">
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.setfootAddressCode}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_footaddress" class="form-control">
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <label class='form-control-label'>{$word.linkcontact}</label>
                </dt>
                <dd>
                    <div class='form-group clearfix'>
                        <input type="text" name="met_foottel" class="form-control">
                    </div>
                </dd>
            </dl>
            <?php
            $editor=array(
                'dt'=>$word['setfootOther'],
                'no_title'=>1,
                'name'=>'met_footother',
                'height'=>100
            );
            ?>
            <include file="pub/content_details/editor"/>
            <dl>
                <dt></dt>
                <dd>
                    <button type="submit" class='btn btn-primary'>{$word.save}</button>
                </dd>
            </dl>
        </div>
    </form>
</div>