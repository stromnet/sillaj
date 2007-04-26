{* called by getProject_xmlhttp.php *}
var arrXmlhttp = new Array(
{foreach key=intProjectId item=strProject name=i from=$arrProject}
  Array({$intProjectId}, '{$strProject|addslashes}'){if ! $smarty.foreach.i.last},{/if}
{/foreach}
);
