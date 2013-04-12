$(document).ready(function() {
    /** table list样式 */
    $("div.contentTableList ul.table_list").each(function (){
        if (!($(this).index()%2 == 1)) $(this).addClass("bgfff");
    });
    /** table list样式 */

    /** input样式定义 为Hover兼容IE样式 */
    $("input:[type='text'],textarea").hover(function() {
        $(this).addClass("input_textarea_hover");
    },function() {
        $(this).removeClass("input_textarea_hover");
    });
    $("input:[type='text'],textarea").focus(function(){
        $(this).addClass("input_textarea_hover");
    });
    $("input:[type='text'],textarea").blur(function(){
        $(this).removeClass("input_textarea_hover");
    });
    /** end */

    //圆角
    $(".modify_div").corner("7px");

    //对只有节点浏览权限的用户隐藏掉所有增删改查操作功能链接
    $("*[accessStatus=0]").remove();

    //角色配置页面 是否配置角色的功能节点
    $("input[isSetNode=1]").click(function (){
        $("#nodeTree").slideDown(300);
    });

    //选项卡切换
    $(".shtabtitlec .shtabtitle").click(function (){
        var index = $(this).index();
        $(".shtabtitlec .shtabtitle").removeClass("shtabcurrent");
        $(this).addClass("shtabcurrent");
        $(".shtabcontentc .shtabcontent").removeClass("shtabcontentcurrent");
        $(".shtabcontentc .shtabcontent:eq("+index+")").addClass("shtabcontentcurrent");
    });

    //返回上一页
    $("#goback").click(function (){
        window.history.go(-1);
    });
});