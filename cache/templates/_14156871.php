<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$data['mod_num']=array(1,2,3,4,5,6,7,8,10,11,12);
if(!$data['handle']) die;
?>
<div class="function-ency-list text-center">
    <p class="text-danger text-left"><?php echo $word['function_ency1'];?></p>
    <div class="row mx-0 mb-3">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['websiteSet'];?></div>
            <?php if($data['handle']['content']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/manage" target="_blank" class="d-block"><?php echo $word['indexcontent'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['column']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="d-block"><?php echo $word['columumanage'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['basic_info']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/webset" target="_blank" class="d-block"><?php echo $word['basicInfoSet'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['language']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/language" target="_blank" class="d-block"><?php echo $word['multilingual'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['basic_info']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/webset/?head_tab_active=1" target="_blank" class="d-block"><?php echo $word['mailSetting'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/webset/?head_tab_active=2" target="_blank" class="d-block"><?php echo $word['thirdCode'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['watermark_thumbnail']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/imgmanage" target="_blank" class="d-block"><?php echo $word['watermarkThumbnail'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['online']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/online" target="_blank" class="d-block"><?php echo $word['customers'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['banner']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/banner" target="_blank" class="d-block"><?php echo $word['indexflash'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['content']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/recycle" target="_blank" class="d-block"><?php echo $word['recycleBin'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['mobile_menu']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/menu" target="_blank" class="d-block"><?php echo $word['the_menu'];?></a>
        </div>
        <?php } ?>
    </div>
    <div class="row mx-0 mb-3">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['securityTools'];?></div>
            <?php if($data['handle']['checkupdate']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/update" target="_blank" class="d-block"><?php echo $word['checkupdate'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['safe']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/safe" target="_blank" class="d-block"><?php echo $word['safety_efficiency'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['databack']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/databack/?head_tab_active=0" target="_blank" class="d-block"><?php echo $word['data_processing'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['clear_cache']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['own_form'];?>n=ui_set&c=index&a=doclear_cache" title="<?php echo $word['clearCache'];?>" class="d-block clear-cache"><?php echo $word['clearCache'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['own_form'];?>n=ui_set&c=index&a=doClearThumb" title="<?php echo $word['clearThumb'];?>" class="d-block clear-cache"><?php echo $word['clearThumb'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['environmental_test']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="javascript:;" class="d-block" data-toggle="modal" data-target=".system-check-env-modal" data-modal-size="lg" data-modal-url="system/envmt_check/?c=patch&a=docheckEnv" data-modal-fullheight="1" data-modal-title="<?php echo $word['environmental_test'];?>" data-modal-oktext="" data-modal-notext="<?php echo $word['close'];?>"><?php echo $word['environmental_test'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['safe']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/safe/?head_tab_active=1" target="_blank" class="d-block"><?php echo $word['database_switch'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['safe']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/safe/?head_tab_active=2" target="_blank" class="d-block"><?php echo $word['operation_log'];?></a>
        </div>
        <?php } ?>
    </div>
        <?php if($data['handle']['seo']){ ?>
    <div class="row mx-0 mb-3">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['searchEngineOptimization'];?></div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo" target="_blank" class="d-block"><?php echo $word['seoSetting'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo/?head_tab_active=1" target="_blank" class="d-block"><?php echo $word['pseudostatic'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo/?head_tab_active=2" target="_blank" class="d-block"><?php echo $word['indexhtmset'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo/?head_tab_active=3" target="_blank" class="d-block"><?php echo $word['anchor_text'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo/?head_tab_active=4" target="_blank" class="d-block"><?php echo $word['htmsitemap'];?></a>
        </div>
            <?php if($data['handle']['link']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo/?head_tab_active=5" target="_blank" class="d-block"><?php echo $word['indexlink'];?></a>
        </div>
        <?php } ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/seo/?head_tab_active=6" target="_blank" class="d-block"><?php echo $word['tag'];?></a>
        </div>
    </div>
    <?php } ?>
        <?php if($data['handle']['user']){ ?>
    <div class="row mx-0 mb-3">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['indexuser'];?></div>
            <?php if($data['handle']['web_user']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/user" target="_blank" class="d-block"><?php echo $word['memberist'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/user/?head_tab_active=1" target="_blank" class="d-block"><?php echo $word['membergroup'];?></a>
        </div>
         <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/user/?head_tab_active=2" target="_blank" class="d-block"><?php echo $word['memberattribute'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/user/?head_tab_active=3" target="_blank" class="d-block"><?php echo $word['memberfunc'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/user/?head_tab_active=4" target="_blank" class="d-block"><?php echo $word['thirdPartyLogin'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/user/?head_tab_active=5" target="_blank" class="d-block"><?php echo $word['mailcontentsetting'];?></a>
        </div>
        <?php } ?>
            <?php if($data['handle']['admin_user']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/admin/user" target="_blank" class="d-block"><?php echo $word['metadmin'];?></a>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
        <?php if($data['handle']['column']){ ?>
    <div class="row mx-0 mb-3">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['systemModule'];?><span class="text-danger ml-2"><?php echo $word['function_ency2'];?></span></div>
                <?php
            $sub = is_array($data['mod_num']) ? count($data['mod_num']) : 0;
            $cycleindex = 50;
            
            if(!is_array($data['mod_num']) && $data['mod_num']){
                $data['mod_num'] = explode('|',$data['mod_num']);
            }

            foreach ($data['mod_num'] as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
        <?php $mod_name=$word['mod'.$v]; ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="d-block"><?php echo $mod_name;?></a>
        </div>
        <?php }?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="d-block"><?php echo $word['modout'];?></a>
        </div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/column" target="_blank" class="d-block"><?php echo $word['tag'];?></a>
        </div>
    </div>
    <?php } ?>
    <div class="row mx-0 mb-3">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['appAndPlugin'];?></div>
        <!--     <?php if($data['handle']['myapp']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/myapp" target="_blank" class="d-block"><?php echo $word['myapp'];?></a>
        </div>
        <?php } ?> -->
            <?php if($data['handle']['site_template']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/app/met_template" target="_blank" class="d-block"><?php echo $word['appearance'];?></a>
        </div>
        <?php } ?>
        <!--     <?php if($data['handle']['met_agents_sms']){ ?>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/app/met_sms" target="_blank" class="d-block"><?php echo $word['sms_function'];?></a>
        </div>
        <?php } ?> -->
    </div>
    <!--     <?php if($data['handle']['partner']){ ?>
    <div class="row mx-0">
        <div class="list-group-item px-2 col-12 text-left bg-light"><?php echo $word['cooperation_platform'];?></div>
        <div class="list-group-item px-2 col-6 col-sm-4 col-md-3 col-lg-2">
            <a href="<?php echo $url['site_admin'];?>#/partner" target="_blank" class="d-block"><?php echo $word['cooperation_platform'];?></a>
        </div>
    </div>
    <?php } ?> -->
</div>