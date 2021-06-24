<?php
/*
 *	Guusnara Customs Decrypt v3.1 Developer Version (32chr)
 *	http://guusnara.com/
 *	By. Ida Bagus Putu Eka Narayana
 *
 *	Copyright 2013 Guusnara
 *
 *	Date: 2013-09-25T22:56Z
 *
 *	DON'T EDIT THIS SCRIPT!
*/
function decrypt32($password)	{
	$guus_input=@$password;
	$guus_totals=strlen($guus_input);
	$guus_ceiling=ceil($guus_totals/2);
	$guus_setting_part1=substr($guus_input,0,$guus_ceiling);
	$guus_setting_part2=substr($guus_input,$guus_ceiling,$guus_totals-$guus_ceiling);
	$guus_setting_part1_lenght=strlen($guus_setting_part1);
	for($i=1;$i<=$guus_setting_part1_lenght;$i++)	{
		if($i==$guus_setting_part1_lenght)	{
			$guus_setting_part1_finalsort=casepass(substr($guus_setting_part1,$guus_setting_part1_lenght-1,1));
		} else	{
			$guus_setting_part1_sort=substr($guus_setting_part1,0,$i-$guus_setting_part1_lenght);
			$guus_setting_part1_min=$guus_setting_part1_lenght-strlen($guus_setting_part1_sort);
			$guus_setting_part1_finalsort=casepass(substr($guus_setting_part1,$i-1,-$guus_setting_part1_min));
		}
		@$guus_setting_part1_output.=$guus_setting_part1_finalsort;
	}
	$guus_setting_part2_lenght=strlen($guus_setting_part2);
	for($j=1;$j<=$guus_setting_part2_lenght;$j++)	{
		if($j==$guus_setting_part2_lenght)	{
			$guus_setting_part2_finalsort=casepass(substr($guus_setting_part2,$guus_setting_part2_lenght-1,1));
		} else	{
			$guus_setting_part2_sort=substr($guus_setting_part2,0,$j-$guus_setting_part2_lenght);
			$guus_setting_part2_min=$guus_setting_part2_lenght-strlen($guus_setting_part2_sort);
			$guus_setting_part2_finalsort=casepass(substr($guus_setting_part2,$j-1,-$guus_setting_part2_min));
		}
		@$guus_setting_part2_output.=$guus_setting_part2_finalsort;
	}
	if ($guus_totals==1)	{
		$set=ord($guus_setting_part1_output);
		$hashpass=md5($guus_setting_part1_output.$set.'*');
		$casepass=md5(substr($hashpass,5,12));
		$finalset=substr($hashpass,-16,16).substr($casepass,0,16);
	} elseif ($guus_totals==2)	{
		$set=ord($guus_setting_part1_output);
		$finalset=md5($guus_setting_part1_output.$guus_setting_part2_output.$set.'*');
	} else	{
		$set=ord(@$guus_setting_part1_output);
		$set1=substr(md5(@$guus_setting_part1_output),-16,16);
		$set2=substr(md5(@$guus_setting_part2_output),0,16);
		$finalset=md5($set1.$set2.$set.'*');
	}
	return @$finalset;
}
function casepass($guus_netral_finalsort)	{
	switch($guus_netral_finalsort){
		case'0':$guus_netral_output=str_replace($guus_netral_finalsort,chr(122),$guus_netral_finalsort);break;
		case'1':$guus_netral_output=str_replace($guus_netral_finalsort,chr(112),$guus_netral_finalsort);break;
		case'2':$guus_netral_output=str_replace($guus_netral_finalsort,chr(121),$guus_netral_finalsort);break;
		case'3':$guus_netral_output=str_replace($guus_netral_finalsort,chr(100),$guus_netral_finalsort);break;
		case'4':$guus_netral_output=str_replace($guus_netral_finalsort,chr(101),$guus_netral_finalsort);break;
		case'5':$guus_netral_output=str_replace($guus_netral_finalsort,chr(100),$guus_netral_finalsort);break;
		case'6':$guus_netral_output=str_replace($guus_netral_finalsort,chr(101),$guus_netral_finalsort);break;
		case'7':$guus_netral_output=str_replace($guus_netral_finalsort,chr(121),$guus_netral_finalsort);break;
		case'8':$guus_netral_output=str_replace($guus_netral_finalsort,chr(122),$guus_netral_finalsort);break;
		case'9':$guus_netral_output=str_replace($guus_netral_finalsort,chr(112),$guus_netral_finalsort);break;
		case'a':$guus_netral_output=str_replace($guus_netral_finalsort,chr(52),$guus_netral_finalsort);break;
		case'b':$guus_netral_output=str_replace($guus_netral_finalsort,chr(56),$guus_netral_finalsort);break;
		case'c':$guus_netral_output=str_replace($guus_netral_finalsort,chr(49),$guus_netral_finalsort);break;
		case'd':$guus_netral_output=str_replace($guus_netral_finalsort,chr(53),$guus_netral_finalsort);break;
		case'e':$guus_netral_output=str_replace($guus_netral_finalsort,chr(50),$guus_netral_finalsort);break;
		case'f':$guus_netral_output=str_replace($guus_netral_finalsort,chr(54),$guus_netral_finalsort);break;
		case'g':$guus_netral_output=str_replace($guus_netral_finalsort,chr(51),$guus_netral_finalsort);break;
		case'h':$guus_netral_output=str_replace($guus_netral_finalsort,chr(55),$guus_netral_finalsort);break;
		case'i':$guus_netral_output=str_replace($guus_netral_finalsort,chr(48),$guus_netral_finalsort);break;
		case'j':$guus_netral_output=str_replace($guus_netral_finalsort,chr(57),$guus_netral_finalsort);break;
		case'k':$guus_netral_output=str_replace($guus_netral_finalsort,chr(113),$guus_netral_finalsort);break;
		case'l':$guus_netral_output=str_replace($guus_netral_finalsort,chr(119),$guus_netral_finalsort);break;
		case'm':$guus_netral_output=str_replace($guus_netral_finalsort,chr(101),$guus_netral_finalsort);break;
		case'n':$guus_netral_output=str_replace($guus_netral_finalsort,chr(102),$guus_netral_finalsort);break;
		case'o':$guus_netral_output=str_replace($guus_netral_finalsort,chr(117),$guus_netral_finalsort);break;
		case'p':$guus_netral_output=str_replace($guus_netral_finalsort,chr(108),$guus_netral_finalsort);break;
		case'q':$guus_netral_output=str_replace($guus_netral_finalsort,chr(97),$guus_netral_finalsort);break;
		case'r':$guus_netral_output=str_replace($guus_netral_finalsort,chr(99),$guus_netral_finalsort);break;
		case's':$guus_netral_output=str_replace($guus_netral_finalsort,chr(106),$guus_netral_finalsort);break;
		case't':$guus_netral_output=str_replace($guus_netral_finalsort,chr(57),$guus_netral_finalsort);break;
		case'u':$guus_netral_output=str_replace($guus_netral_finalsort,chr(49),$guus_netral_finalsort);break;
		case'v':$guus_netral_output=str_replace($guus_netral_finalsort,chr(51),$guus_netral_finalsort);break;
		case'w':$guus_netral_output=str_replace($guus_netral_finalsort,chr(55),$guus_netral_finalsort);break;
		case'x':$guus_netral_output=str_replace($guus_netral_finalsort,chr(50),$guus_netral_finalsort);break;
		case'y':$guus_netral_output=str_replace($guus_netral_finalsort,chr(48),$guus_netral_finalsort);break;
		case'z':$guus_netral_output=str_replace($guus_netral_finalsort,chr(53),$guus_netral_finalsort);break;
		case'A':$guus_netral_output=str_replace($guus_netral_finalsort,chr(49),$guus_netral_finalsort);break;
		case'B':$guus_netral_output=str_replace($guus_netral_finalsort,chr(52),$guus_netral_finalsort);break;
		case'B':$guus_netral_output=str_replace($guus_netral_finalsort,chr(55),$guus_netral_finalsort);break;
		case'D':$guus_netral_output=str_replace($guus_netral_finalsort,chr(103),$guus_netral_finalsort);break;
		case'E':$guus_netral_output=str_replace($guus_netral_finalsort,chr(97),$guus_netral_finalsort);break;
		case'F':$guus_netral_output=str_replace($guus_netral_finalsort,chr(108),$guus_netral_finalsort);break;
		case'G':$guus_netral_output=str_replace($guus_netral_finalsort,chr(113),$guus_netral_finalsort);break;
		case'H':$guus_netral_output=str_replace($guus_netral_finalsort,chr(48),$guus_netral_finalsort);break;
		case'I':$guus_netral_output=str_replace($guus_netral_finalsort,chr(118),$guus_netral_finalsort);break;
		case'J':$guus_netral_output=str_replace($guus_netral_finalsort,chr(109),$guus_netral_finalsort);break;
		case'K':$guus_netral_output=str_replace($guus_netral_finalsort,chr(112),$guus_netral_finalsort);break;
		case'L':$guus_netral_output=str_replace($guus_netral_finalsort,chr(99),$guus_netral_finalsort);break;
		case'M':$guus_netral_output=str_replace($guus_netral_finalsort,chr(53),$guus_netral_finalsort);break;
		case'N':$guus_netral_output=str_replace($guus_netral_finalsort,chr(52),$guus_netral_finalsort);break;
		case'O':$guus_netral_output=str_replace($guus_netral_finalsort,chr(57),$guus_netral_finalsort);break;
		case'P':$guus_netral_output=str_replace($guus_netral_finalsort,chr(120),$guus_netral_finalsort);break;
		case'Q':$guus_netral_output=str_replace($guus_netral_finalsort,chr(102),$guus_netral_finalsort);break;
		case'R':$guus_netral_output=str_replace($guus_netral_finalsort,chr(56),$guus_netral_finalsort);break;
		case'S':$guus_netral_output=str_replace($guus_netral_finalsort,chr(117),$guus_netral_finalsort);break;
		case'T':$guus_netral_output=str_replace($guus_netral_finalsort,chr(105),$guus_netral_finalsort);break;
		case'U':$guus_netral_output=str_replace($guus_netral_finalsort,chr(111),$guus_netral_finalsort);break;
		case'V':$guus_netral_output=str_replace($guus_netral_finalsort,chr(98),$guus_netral_finalsort);break;
		case'W':$guus_netral_output=str_replace($guus_netral_finalsort,chr(115),$guus_netral_finalsort);break;
		case'X':$guus_netral_output=str_replace($guus_netral_finalsort,chr(100),$guus_netral_finalsort);break;
		case'Y':$guus_netral_output=str_replace($guus_netral_finalsort,chr(106),$guus_netral_finalsort);break;
		case'Z':$guus_netral_output=str_replace($guus_netral_finalsort,chr(107),$guus_netral_finalsort);break;
		case'!':$guus_netral_output=str_replace($guus_netral_finalsort,chr(48),$guus_netral_finalsort);break;
		case'@':$guus_netral_output=str_replace($guus_netral_finalsort,chr(112),$guus_netral_finalsort);break;
		case'#':$guus_netral_output=str_replace($guus_netral_finalsort,chr(109),$guus_netral_finalsort);break;
		case'$':$guus_netral_output=str_replace($guus_netral_finalsort,chr(57),$guus_netral_finalsort);break;
		case'%':$guus_netral_output=str_replace($guus_netral_finalsort,chr(51),$guus_netral_finalsort);break;
		case'^':$guus_netral_output=str_replace($guus_netral_finalsort,chr(107),$guus_netral_finalsort);break;
		case'&':$guus_netral_output=str_replace($guus_netral_finalsort,chr(113),$guus_netral_finalsort);break;
		case'*':$guus_netral_output=str_replace($guus_netral_finalsort,chr(56),$guus_netral_finalsort);break;
		case'(':$guus_netral_output=str_replace($guus_netral_finalsort,chr(120),$guus_netral_finalsort);break;
		case')':$guus_netral_output=str_replace($guus_netral_finalsort,chr(53),$guus_netral_finalsort);break;
		case'-':$guus_netral_output=str_replace($guus_netral_finalsort,chr(49),$guus_netral_finalsort);break;
		case'_':$guus_netral_output=str_replace($guus_netral_finalsort,chr(97),$guus_netral_finalsort);break;
		case'=':$guus_netral_output=str_replace($guus_netral_finalsort,chr(50),$guus_netral_finalsort);break;
		case'+':$guus_netral_output=str_replace($guus_netral_finalsort,chr(118),$guus_netral_finalsort);break;
		case'`':$guus_netral_output=str_replace($guus_netral_finalsort,chr(105),$guus_netral_finalsort);break;
		case'~':$guus_netral_output=str_replace($guus_netral_finalsort,chr(104),$guus_netral_finalsort);break;
		case'[':$guus_netral_output=str_replace($guus_netral_finalsort,chr(110),$guus_netral_finalsort);break;
		case']':$guus_netral_output=str_replace($guus_netral_finalsort,chr(55),$guus_netral_finalsort);break;
		case'{':$guus_netral_output=str_replace($guus_netral_finalsort,chr(50),$guus_netral_finalsort);break;
		case'}':$guus_netral_output=str_replace($guus_netral_finalsort,chr(48),$guus_netral_finalsort);break;
		case'|':$guus_netral_output=str_replace($guus_netral_finalsort,chr(119),$guus_netral_finalsort);break;
		case':':$guus_netral_output=str_replace($guus_netral_finalsort,chr(114),$guus_netral_finalsort);break;
		case';':$guus_netral_output=str_replace($guus_netral_finalsort,chr(104),$guus_netral_finalsort);break;
		case'"':$guus_netral_output=str_replace($guus_netral_finalsort,chr(114),$guus_netral_finalsort);break;
		case',':$guus_netral_output=str_replace($guus_netral_finalsort,chr(120),$guus_netral_finalsort);break;
		case'.':$guus_netral_output=str_replace($guus_netral_finalsort,chr(112),$guus_netral_finalsort);break;
		case'<':$guus_netral_output=str_replace($guus_netral_finalsort,chr(57),$guus_netral_finalsort);break;
		case'>':$guus_netral_output=str_replace($guus_netral_finalsort,chr(50),$guus_netral_finalsort);break;
		case'/':$guus_netral_output=str_replace($guus_netral_finalsort,chr(122),$guus_netral_finalsort);break;
		case'?':$guus_netral_output=str_replace($guus_netral_finalsort,chr(55),$guus_netral_finalsort);break;
		case chr(92):$guus_netral_output=str_replace($guus_netral_finalsort,chr(100),$guus_netral_finalsort);break;
		case chr(39):$guus_netral_output=str_replace($guus_netral_finalsort,chr(120),$guus_netral_finalsort);break;
	}
	return @$guus_netral_output;
}
?>