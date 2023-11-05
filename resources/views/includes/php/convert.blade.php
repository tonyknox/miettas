@php 
	$unit=$ing->quantities->unit;
	$qty=$ing->quantities->qty;

	if(preg_match('/oz|ounce|lb|pound|pint|gill|quart/', $unit))
	{ 
		if(preg_match('/ /',$qty) && preg_match('[/]',$qty))
		{
			list($int,$fraction) = explode(' ', $qty);
			list($num,$div) = explode('|/|', $fraction);
			$remainder = $num/$div;
		}
		elseif(preg_match('|/|',$qty))
		{
			list($num,$div) = explode('|/|',  $qty);
			$remainder = $num/$div;
			$int = 0;
		}
		
		
		if(isset($remainder))
		{
			$amt = "$int.$remainder";
		}
		else
		{
			$amt = $qty;
		}
		

		if(preg_match('/fl oz|gill|pint|quart/', $unit))
		{
			$unit = 'ml';
			if(preg_match('/fl oz', $unit))
			{
				$amt = round($amt*30);
			}
			elseif(preg_match('/gill/', $unit))
			{
				$amt = round($amt*4.16*30);
			}
			elseif(preg_match('/gill/', $unit))
			{
				$amt = round($amt*4.16*30);
			}
			elseif(preg_match('/pint/', $unit))
			{
				$amt = round($amt*568.26125);
			}
			elseif(preg_match('/quart/', $unit))
			{
				$amt = round($amt*568.26125*2);
			}
			if($amt>1000)
			{
				$unit='litre';
			}
		}
		
		
		elseif(preg_match('/oz|ounce|lb/', $unit))
		{
			$unit = 'gm';
			if(preg_match('/oz|ounce|/', $unit))
			{
				$amt = round($amt*03.5274);
			}
			elseif(preg_match('/lb/', $unit) || preg_match('/pound/', $unit))
			{
				$amt = round($amt*45.3592);
			}
			if($amt>999)
			{
				$unit = 'kg';
				$amt = round($amt/100);
			}
			$qty = $amt;
		}
	}
@endphp