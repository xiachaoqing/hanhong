<?php defined('IN_MET') or exit('No permission'); ?>
<include file="head.php" />
<section class="met-download animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-12 met-download-body">
                <div class="row">
                    <div class="met-download-list">
                        <tag action='download.list' num="$c['met_download_list']"></tag>
                        <if value="$sub">
                        <ul class="ulstyle met-pager-ajax imagesize" data-scale='1' m-id='met_download'>
                            <include file='ajax/download'/>
                        </ul>
                        <else/>
                        <div class='h-100 text-xs-center font-size-20 vertical-align' m-id='met_download'>{$c.met_data_null}</div>
                        </if>
                        <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                            <pager/>
                        </div>
                        <div class="met-pager-ajax-link hidden-md-up" data-plugin="appear" m-type="nosysdata" data-animate="slide-bottom" data-repeat="false">
                            <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                                <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                                {$lang.page_ajax_next}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<include file="foot.php" />