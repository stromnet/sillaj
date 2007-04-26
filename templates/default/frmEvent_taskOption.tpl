{* called by getTask_xmlhttp.php *}
var arrXmlhttp = new Array(
{foreach key=intTaskId item=strTask name=i from=$arrTask}
  Array({$intTaskId}, '{$strTask|addslashes}'){if ! $smarty.foreach.i.last},{/if}
{/foreach}
);