<?php // no direct access
defined('_JEXEC') or die('Restricted access');
?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
<?php if ($analyticsGatFix == 'on') { ?>
var hndl = window.setTimeout("StartTracking()", 100);
function StartTracking(){
if (typeof(_gat) == 'object')
{
window.clearTimeout(hndl);
<?php } ?>
var pageTracker = _gat._getTracker("<?php echo $analyticsId; ?>");
<?php if ($analyticsSubdomainTracking != "example.com" && !empty($analyticsSubdomainTracking)) { ?>
pageTracker._setDomainName("<?php echo $analyticsSubdomainTracking; ?>");
<?php } ?>
pageTracker._initData();
pageTracker._trackPageview();
<?php if ($analyticsGatFix == 'on') { ?>
} else {
hndl = window.setTimeout("StartTracking()", 1000);
}
}
<?php } ?>
</script>
