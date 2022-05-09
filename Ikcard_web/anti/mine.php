<?php
function out($buffer)
		{
			$entry   = '';
			$header  = 'BEGIN:VCARD' . "\r\n";
			$header .= 'VERSION:2.1' . "\r\n";
			//$header .= 'X-PHPGROUPWARE-FILE-AS:phpGroupWare.org' . "\r\n";

			$workaddr = $hoeaddr = $this->address;
			reset($this->export);
			while ( list($name,$value) = each($this->export) )
			{
				if (!empty($buffer[$name]))
				{
					$buffer[$name] = utf8_decode($buffer[$name]);
					$mult = explode(';',$value);
					if (!$mult[1])
					{ // Normal
						if (strstr($buffer[$name],"\r\n") || strstr($buffer[$name],"\n") || (strtoupper($mult[0])=='FN'))
						{
							$buffer[$name] = $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
							$entry .= $value . ';ENCODING=QUOTED-PRINTABLE:' . $buffer[$name]."\r\n";
						}
						else
						{
							$entry .= $value . ':' . $buffer[$name] . "\r\n";
						}
					}
					else
					{
						switch ($mult[0])
						{
							case 'N':
								switch ($mult[1])
								{
									case 'PREFIX':
										$prefix    = ';' . $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
									case 'GIVEN':
										$firstname = ';' . $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
									case 'MIDDLE':
										$middle    = ';' . $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
									case 'FAMILY':
										$lastname  =       $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
									case 'SUFFIX':
										$suffix    = ';' . $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
								}
								break;
							case 'ORG':
								switch ($mult[1])
								{
									case 'NAME':
										$org_name = $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
									case 'UNIT':
										$org_unit = ';' . $this->vCard_encode($buffer[$name], 'QUOTED-PRINTABLE', false);
										break;
								}
								break;
							case 'ADR':
								switch ($mult[1])
								{
									case 'TYPE':
										if(isset($typei[$mult[2]]))
										{
											$typei[$mult[2]] .= ';';
										}

										$types = explode(';',$buffer[$name]);
										if ($types[1])
										{
											$typei[$mult[2]] .= strtoupper($types[0][1]);
											for ($i=1; $i<count($types); $i++)
											{
													$typei[$mult[2]] .= ',' . strtoupper($types[$i][1]);
											}
										}
										elseif ($types[0])
										{
											$typei[$mult[2]] .= strtoupper($types[0]);
										}
										else
										{
											$typei[$mult[2]] .= strtoupper($buffer[$name]);
										}
										//echo "TYPE=".$typei[$mult[2]];
										break;
									case 'WORK':
										$workaddr[$mult[2]] = $buffer[$name];
										$workattr = $mult[0] . ';TYPE=' . $typei[$mult[1]];
										break;
									case 'HOME':
										$homeaddr[$mult[2]] = $buffer[$name];
										$homeattr = $mult[0] . ';TYPE=' . $typei[$mult[1]];
										break;
									default:
										break;
								}
								break;
							case 'TEL':
								switch($mult[1])
								{
									case 'PREFER':
										$prefer = explode(';',$buffer[$name]);
										if ($prefer[1])
										{
											while ($pref = strtoupper(each($prefer)))
											{
												$prefi[$pref] = ';PREF';
											}
											//echo 'PREF1';
										}
										elseif ($prefer[0])
										{
											$prefi[strtoupper($prefer[0])] = ';PREF';
											//echo 'PREF='.strtoupper($prefer[0]);
										}
										elseif ($buffer[$name])
										{
											$prefi[$buffer[$name]] = ';PREF';
											//echo 'PREF3';
										}
										break;
									case 'WORK':
										// Wow, this is fun!
										$entry .= 'A.' . $mult[0] . ';' . $mult[1] . $prefi[$mult[1]] . ';' . $mult[2] . ':' . $buffer[$name] . "\r\n";
										break;
									case 'HOME':
										$entry .= 'B.' . $mult[0] . ';' . $mult[1] . $prefi[$mult[1]] . ';' . $mult[2] . ':' . $buffer[$name] . "\r\n";
										break;
									default:
//										echo $mult[0] . ';' . $mult[1] . $prefi[$mult[1]] . ':' . $buffer[$name] . "\r\n";
//										echo '<br />';
										$entry .= $mult[0] . ';' . $mult[1] . $prefi[$mult[1]] . ':' . $buffer[$name] . "\r\n";
										break;
								}
								break;
							case 'EMAIL':
								switch($mult[1])
								{
									case 'TYPE':
										if ($mult[2] == 'WORK') { $emailtype  = ';' . $buffer[$name]; }
										if ($mult[2] == 'HOME') { $hemailtype = ';' . $buffer[$name]; }
										break;
									case 'WORK':
										$newval = 'A.'.$value;
										$entry .= $newval . $emailtype . ':' . $buffer[$name] . "\r\n";
										break;
									case 'HOME':
										$newval = 'B.' . $value;
										$entry .= $newval . $hemailtype . ':' . $buffer[$name] . "\r\n";
										break;
									default:
										break;
								}
								break;
							case 'URL':
								$entry .= $value . ":" . $buffer[$name] . "\r\n";
								break;
							default:
								break;
						} //end switch ($mult[0])
					} //end else
				} //end if (!empty)
			} //end while
			$entries .= $header;

			if(!$middle)
			{
				$middle = ';';
			}

			if(!$prefix)
			{
				$prefix = ';';
			}

			$n = $lastname . $firstname . $middle . $prefix . $suffix;
			$entries .= 'N;ENCODING=QUOTED-PRINTABLE:' . $n . "\r\n";
			$entries .= $entry;

			if (!$buffer['full_name'])
			{
				if ($lastname || $firstname)
				{
					$fn = substr($firstname,1) . ' ' . $lastname;
					$entries .= 'FN;ENCODING=QUOTED-PRINTABLE:' . $fn . "\r\n";
				}
			}
			if ($org_name || $org_unit)
			{
				$entries .= 'ORG;ENCODING=QUOTED-PRINTABLE:' . $org . "\r\n";
			}

			$workattr = ereg_replace('ADR;','',$workattr);
			// remember the correct order of address fields!
			$workaddr['POSTOFFICEBOX'] = $this->vCard_encode($workaddr['POSTOFFICEBOX'], 'QUOTED-PRINTABLE', false);
			$workaddr['EXT']           = $this->vCard_encode($workaddr['EXT'], 'QUOTED-PRINTABLE', false);
			$workaddr['STREET']        = $this->vCard_encode($workaddr['STREET'], 'QUOTED-PRINTABLE', false);
			$workaddr['LOCALITY']      = $this->vCard_encode($workaddr['LOCALITY'], 'QUOTED-PRINTABLE', false);
			$workaddr['REGION']        = $this->vCard_encode($workaddr['REGION'], 'QUOTED-PRINTABLE', false);
			$workaddr['POSTALCODE']    = $this->vCard_encode($workaddr['POSTALCODE'], 'QUOTED-PRINTABLE', false);
			$workaddr['COUNTRYNAME']   = $this->vCard_encode($workaddr['COUNTRYNAME'], 'QUOTED-PRINTABLE', false);
			$workaddr = $workaddr['POSTOFFICEBOX'].';'.$workaddr['EXT'].';'.$workaddr['STREET'].';'.$workaddr['LOCALITY'].';'.$workaddr['REGION'].';'.$workaddr['POSTALCODE'].';'.$workaddr['COUNTRYNAME'];
			$work = 'A.ADR;' . $workattr . ';ENCODING=QUOTED-PRINTABLE:' . $workaddr . "\r\n";
			$wlabel = 'LABEL;TYPE=WORK;;ENCODING=QUOTED-PRINTABLE:' . $wlabel . "\r\n";

			$homeattr = ereg_replace('ADR;','',$homeattr);
			// remember the correct order of address fields!
			$homeaddr['POSTOFFICEBOX'] = $this->vCard_encode($homeaddr['POSTOFFICEBOX'], 'QUOTED-PRINTABLE', false);
			$homeaddr['EXT']           = $this->vCard_encode($homeaddr['EXT'], 'QUOTED-PRINTABLE', false);
			$homeaddr['STREET']        = $this->vCard_encode($homeaddr['STREET'], 'QUOTED-PRINTABLE', false);
			$homeaddr['LOCALITY']      = $this->vCard_encode($homeaddr['LOCALITY'], 'QUOTED-PRINTABLE', false);
			$homeaddr['REGION']        = $this->vCard_encode($homeaddr['REGION'], 'QUOTED-PRINTABLE', false);
			$homeaddr['POSTALCODE']    = $this->vCard_encode($homeaddr['POSTALCODE'], 'QUOTED-PRINTABLE', false);
			$homeaddr['COUNTRYNAME']   = $this->vCard_encode($homeaddr['COUNTRYNAME'], 'QUOTED-PRINTABLE', false);
			$homeaddr = $homeaddr['POSTOFFICEBOX'].';'.$homeaddr['EXT'].';'.$homeaddr['STREET'].';'.$homeaddr['LOCALITY'].';'.$homeaddr['REGION'].';'.$homeaddr['POSTALCODE'].';'.$homeaddr['COUNTRYNAME'];
			$home = 'B.ADR;' . $homeattr . ';ENCODING=QUOTED-PRINTABLE:' . $homeaddr . "\r\n";
			$hlabel = 'LABEL;TYPE=HOME;;ENCODING=QUOTED-PRINTABLE:' . $hlabel . "\r\n";

			$entries = ereg_replace('PUBKEY','KEY',$entries);
			$entries .= $work . $home . $wlabel . $hlabel . 'END:VCARD' . "\r\n";
			$entries .= "\r\n";

			$buffer = $entries;
			return $buffer;
		} //end function
    header("Content-disposition: attachment; filename=" . $nom . ".vcf");
		header("Content-Type: text/x-vcard; charset=iso-8859-1");
		header("Pragma: no-cache");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
		header("Expires: 0");
		echo $resultat;
 ?>
