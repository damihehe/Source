<?php
require_once(__DIR__ . "/../inc/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=<?=__LOCALE__CODE__?>" />
	<title>订单分账查询接口</title>
</head>
	<body>
		<br /> <br />
		<table width="80%" border="0" align="center" cellpadding="9" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					请输入分账查询参数	
				</th>
		  	</tr> 

			<form method="post" action="../php/sendDivideQuery.php" target="_blank" accept-charset="<?=__LOCALE__CODE__?>">

				<tr >
					<td width="20%" align="left">&nbsp;已被分账的订单号</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="orderrequestid" value="" />
						<span style="color:#FF0000;font-weight:100;">*</span>
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">orderrequestid</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;分账请求号</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="dividerequestid" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">dividerequestid</td> 
				</tr> 

				<tr >
					<td width="20%" align="left">&nbsp;子账户商户编号</td>
					<td width="5%"  align="center"> : &nbsp;</td> 
					<td width="55%" align="left"> 
						<input size="70" type="text" name="ledgerno" value="" />
					</td>
					<td width="5%"  align="center"> - </td> 
					<td width="15%" align="left">ledgerno</td> 
				</tr>

				<tr >
					<td width="20%" align="left">&nbsp;</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="55%" align="left"> 
						<input type="submit" value="单击查询" />
					</td>
					<td width="5%"  align="center">&nbsp;</td> 
					<td width="15%" align="left">&nbsp;</td> 
				</tr>

			</form>
		</table>
</body>
</html>
