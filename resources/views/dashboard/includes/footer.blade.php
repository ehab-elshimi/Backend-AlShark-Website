<?php
$style="";
if(request()->routeIs('categories.*')){
    $style="position:relative;top:35px;";
}
?>
<footer class="row bg-body-dark" style="{{ $style }}">
<!-- Footer -->
    <div class="content py-3">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right" style="position:relative;left:800px;">
                Created<span class="px-1"></span><i class="fa fa-heart text-danger"></i><span class="px-2">by</span><a class="font-w600" href="https://1.envato.market/ydb" target="_blank">AhmedOmar Company</a>
            </div>
            {{-- <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                <a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">OneUI 4.8</a> &copy; <span data-toggle="year-copy"></span>
            </div> --}}
        </div>
    </div>

</footer>
</div>
<!-- END Footer -->
