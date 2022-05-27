<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Home</li>
    <li class="TabbedPanelsTab" tabindex="0">About Us</li>
    <li class="TabbedPanelsTab" tabindex="0">Contact Us</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <table border="10" bordercolor="#FF9933" bgcolor="#FFFFFF">
      <tr>
      <td>
	  <?php require 'signIn_Form.php';?>
     </td>
     </tr>
     </table>
    </div>
    <div class="TabbedPanelsContent">
     <table border="10" bordercolor="#FF9933" bgcolor="#FFFFFF">
     <tr><td><?php require 'about_us.php';?></td></tr>
     </table>
    </div>
    <div class="TabbedPanelsContent">
      <table border="10" bordercolor="#FF9933" bgcolor="#FFFFFF">
     <tr><td><?php require 'contact_us_horizontal.php';?></td></tr>
     </table>
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
