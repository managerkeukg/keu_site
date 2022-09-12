﻿<script>
var current_page_cal=1;
  $(document).ready(function () {
    $('#pagination-calendar').twbsPagination({
        totalPages: tot_pages_cal, 
        visiblePages: show_by_cal,
        onPageClick: function (event, page_cal) {
            $('#page_cal_'+current_page_cal).css({"color": "red", "font-size": "100%", "display": "none"});
            $('#page_cal_'+page_cal).css({"color": "yellow", "font-size": "200%", "display": "block"});
			current_page_cal=page_cal; 
        }
    });
});
</script>
<STYLE>
.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}
.pagination>li{display:inline}
.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px; line-height:1.428571429; text-decoration:none; background-color:#fff; border:1px solid #ddd}
.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}
.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}
.pagination>li>a:hover,.pagination>li>span:hover,.pagination>li>a:focus,.pagination>li>span:focus{background-color:#eee}
.pagination>.active>a,.pagination>.active>span,.pagination>.active>a:hover,.pagination>.active>span:hover,.pagination>.active>a:focus,.pagination>.active>span:focus{z-index:2;color:#fff;cursor:default;background-color:#428bca;border-color:#428bca}
.pagination>.disabled>span,.pagination>.disabled>span:hover,.pagination>.disabled>span:focus,.pagination>.disabled>a,.pagination>.disabled>a:hover,.pagination>.disabled>a:focus{color:#999;cursor:not-allowed;background-color:#fff;border-color:#ddd}
.pagination-lg>li>a, .pagination-lg>li>span{padding:10px 16px;font-size:18px}
.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}
.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}
.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}
.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}

</STYLE>
<div>
    <ul id="pagination-calendar" class="pagination-sm pagination">
				    </ul>
</div>