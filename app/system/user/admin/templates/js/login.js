
;(function() {
    var that = $.extend(true, {}, admin_module)
    fetch(that)
    TEMPLOADFUNS[that.hash] = function() {
        fetch(that)
    }
})()
function fetch(that) {
    M.ajax(
        {
            url: that.own_name + '&c=admin_set&a=doGetThirdParty'
        },
        function(result) {
            let data = result.data
            Object.keys(data).map(item => {
                if (item === 'met_auto_register') {
                if (data[item] > 0 && $(`[name="${item}"]`).val() === '0') $(`[name="${item}"]`).click()
                return
            }
            if (item === 'met_weibo_open') {
                if (data[item] > 0 && $(`[name="${item}"]`).val() === '0') $(`[name="${item}"]`).click()
                return
            }
            if (item === 'met_qq_open') {
                if (data[item] > 0 && $(`[name="${item}"]`).val() === '0') $(`[name="${item}"]`).click()
                return
            }
            if (item === 'met_weixin_open') {
                if (data[item] > 0 && $(`[name="${item}"]`).val() === '0') $(`[name="${item}"]`).click()
                return
            }
            if (item === 'met_google_open') {
                if (data[item] > 0 && $(`[name="${item}"]`).val() === '0') $(`[name="${item}"]`).click()
                return
            }
            if (item === 'met_facebook_open') {
                if (data[item] > 0 && $(`[name="${item}"]`).val() === '0') $(`[name="${item}"]`).click()
                return
            }
            if (item === 'met_member_vecan') {
                $(`#met_member_vecan-${data[item]}`).attr('checked', 'checked')
                return
            }
            $(`[name=${item}]`).val(data[item])
        })
        }
    )
}
