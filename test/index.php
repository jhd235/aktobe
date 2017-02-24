<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>

<script type="text/javascript">
  VK.init({apiId:5890690});
</script>

<!-- Put this div tag to the place, where Auth block will be -->
<div id="vk_auth"></div>
<script type="text/javascript">
VK.Widgets.Auth("vk_auth", {width: "200px", authUrl: '/dev/Login'});
</script>
dsrferf
<div id="vk_auth"></div>
<script type="text/javascript">
window.onload = function () {
 VK.init({apiId: 111});
 VK.Widgets.Auth('vk_auth', {});
}
</script>
