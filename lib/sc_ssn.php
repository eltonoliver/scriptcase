<?php

class scSSN{

	// Populate this variable with the high group list provided by the Social Security Administration:
	// http://www.ssa.gov/employer/ssnvhighgroup.htm

	// We only want the numbers. Omit the explanatory text at the beginning of the file.
	// This list is from May 2008
	private $highgroup =
'001 08  002 06	003 06	004 11	005 11*	006 08
007 08	008 92	009 92  010 92  011 92  012 92
013 92	014 92	015 92	016 92	017 92	018 92
019 92	020 92*	021 90	022 90	023 90	024 90
025 90	026 90	027 90	028 90 	029 90	030 90
031 90	032 90	033 90	034 90	035 74	036 72
037 72  038 72	039 72	040 13	041 13  042 13
043 13	044 13	045 13	046 13	047 11	048 11
049 11	050 98	051 98	052 98	053 98	054 98
055 98	056 98	057 98	058 98	059 98 	060 98
061 98 	062 98 	063 98 	064 98 	065 98	066 98
067 98	068 98	069 98	070 98	071 98	072 98
073 98	074 98	075 98	076 98	077 98	078 98
079 98	080 98	081 98	082 98	083 98	084 98
085 98	086 98	087 98*	088 98*	089 98*	090 96
091 96	092 96	093 96	094 96	095 96	096 96
097 96	098 96	099 96	100 96	101 96	102 96
103 96	104 96	105 96	106 96	107 96	108 96
109 96	110 96	111 96	112 96	113 96  114 96
115 96  116 96  117 96  118 96  119 96	120 96
121 96	122 96	123 96	124 96	125 96	126 96
127 96  128 96	129 96	130 96	131 96	132 96
133 96	134 96	135 21	136 21	137 21	138 21
139 21	140 21	141 21	142 21  143 21	144 21
145 21	146 21*	147 19	148 19	149 19	150 19
151 19	152 19	153 19	154 19  155 19	156 19
157 19	158 19	159 84	160 84	161 84	162 84
163 84	164 84	165 84	166 84	167 84	168 84
169 84	170 84	171 84	172 84	173 84	174 84
175 84	176 84	177 84	178 84	179 84	180 84
181 84 	182 84	183 84	184 84	185 84	186 84
187 84	188 84	189 84	190 84	191 84	192 84
193 84	194 84	195 84  196 84	197 84	198 84
199 84	200 84	201 84	202 84	203 84	204 84
205 84	206 84	207 84*	208 82	209 82	210 82
211 82	212 83	213 83	214 83	215 83	216 83
217 83	218 83	219 83*	220 81	221 08	222 06
223 99	224 99  225 99  226 99  227 99	228 99
229 99	230 99	231 99	232 55	233 55	234 55
235 53	236 53	237 99	238 99	239 99	240 99
241 99	242 99	243 99  244 99  245 99	246 99
247 99	248 99	249 99	250 99	251 99	252 99
253 99	254 99	255 99	256 99	257 99	258 99
259 99	260 99	261 99	262 99	263 99	264 99
265 99	266 99	267 99	268 15	269 15	270 15
271 15	272 15	273 15	274 15	275 15	276 15*
277 13	278 13	279 13	280 13	281 13	282 13
283 13	284 13	285 13	286 13  287 13	288 13
289 13	290 13	291 13	292 13	293 13	294 13
295 13	296 13	297 13	298 13	299 13	300 13
301 13	302 13	303 35*	304 33	305 33	306 33
307 33	308 33	309 33	310 33	311 33	312 33
313 33	314 33  315 33	316 33	317 33	318 08
319 08	320 08	321 08	322 08	323 08	324 08
325 08	326 08	327 08	328 08	329 08	330 08
331 08	332 08	333 08	334 08 	335 08 	336 08
337 08	338 08*	339 08*	340 06	341 06	342 06
343 06	344 06	345 06	346 06	347 06	348 06
349 06 	350 06 	351 06	352 06	353 06	354 06
355 06	356 06	357 06	358 06	359 06	360 06
361 06	362 37*	363 35	364 35	365 35 	366 35
367 35	368 35	369 35	370 35	371 35	372 35
373 35	374 35	375 35	376 35	377 35	378 35
379 35	380 35	381 35	382 35	383 35	384 35
385 35	386 35  387 31	388 31	389 31	390 31
391 31	392 31*	393 29  394 29	395 29	396 29
397 29	398 29	399 29	400 71	401 69	402 69
403 69	404 69	405 69	406 69	407 69	408 99
409 99	410 99	411 99  412 99	413 99	414 99
415 99	416 65	417 65*	418 63	419 63	420 63
421 63	422 63	423 63	424 63	425 99	426 99
427 99	428 99	429 99	430 99	431 99	432 99
433 99	434 99	435 99	436 99	437 99	438 99
439 99  440 25	441 25	442 25	443 25	444 25
445 25	446 25*	447 23	448 23	449 99	450 99
451 99	452 99	453 99	454 99	455 99	456 99
457 99	458 99	459 99	460 99	461 99	462 99
463 99	464 99	465 99	466 99	467 99	468 53
469 53	470 53	471 53	472 53	473 51	474 51
475 51	476 51	477 51	478 39	479 39	480 39
481 39  482 39	483 39	484 37	485 37	486 27
487 27	488 27	489 27	490 27	491 27	492 27
493 27	494 27*	495 25	496 25 	497 25	498 25
499 25  500 25	501 35	502 33	503 43  504 41
505 55	506 55*	507 53	508 53	509 29	510 29
511 29	512 29	513 29  514 29	515 29	516 47
517 45	518 83*	519 81  520 57 	521 99	522 99
523 99	524 99	525 99	526 99	527 99	528 99
529 99	530 99	531 65	532 65	533 65	534 65
535 65  536 65	537 65	538 65  539 65*	540 77
541 77  542 77	543 77	544 75	545 99	546 99
547 99	548 99	549 99	550 99	551 99	552 99
553 99	554 99	555 99	556 99	557 99	558 99
559 99	560 99	561 99	562 99	563 99	564 99
565 99	566 99	567 99	568 99	569 99	570 99
571 99	572 99	573 99	574 55	575 99	576 99
577 49	578 47 	579 47	580 39	581 99	582 99
583 99	584 99	585 99	586 63	587 99  588 05
589 99  590 99	591 99	592 99	593 99  594 99
595 99  596 88	597 88	598 86	599 86	600 99
601 99  602 75*	603 75*	604 75*	605 75*	606 75*
607 75* 608 73	609 73	610 73	611 73	612 73
613 73	614 73	615 73	616 73	617 73	618 73
619 73  620 73	621 73	622 73	623 73	624 73
625 73  626 73	627 19	628 19	629 19	630 19
631 19  632 19	633 19  634 19*	635 19* 636 19*
637 19* 638 17	639 17	640 17  641 17	642 17
643 17	644 17	645 17	646 08  647 06	648 50
649 48  650 52  651 52	652 52  653 52*	654 32*
655 30 	656 30	657 30	658 30	659 18  660 18
661 18  662 18  663 18  664 18*	665 16	667 40
668 40  669 40  670 40	671 40	672 40	673 40
674 40* 675 38  676 18*	677 16	678 16  679 16
680 08	681 18  682 18  683 18  684 18*	685 16
686 16 	687 16	688 16	689 16  690 16	691 12*
692 10  693 10 	694 10  695 10  696 10  697 10
698 10  699 10  700 18	701 18  702 18  703 18
704 18  705 18  706 18	707 18  708 18  709 18
710 18  711 18	712 18	713 18  714 18  715 18
716 18  717 18	718 18	719 18  720 18  721 18
722 18  723 18	724 28	725 18  726 18  727 10
728 14  729 16	730 16	731 16	732 16	733 14
750 12  751 12	752 05* 753 03  754 03	755 03
756 09  757 09	758 09* 759 07  760 07 	761 07
762 07  763 07	764 02  765 02*	766 80*	767 80*
768 78  769 78	770 78  771 78  772 78*';

	// This information is obtained from:
	// http://www.ssa.gov/employer/stateweb.htm
	var $statePrefixes = array(
	'AK'=>array(574),
	'AL'=>array(416,417,418,419,420,421,422,423,424),
	'AR'=>array(429,430,431,432,676,677,678,679),
	'AZ'=>array(526,527,600,601,764,765),
	'CA'=>array(545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626),
	'CO'=>array(521,522,523,524,650,651,652,653),
	'CT'=>array(40,41,42,43,44,45,46,47,48,49),
	'DC'=>array(577,578,579),
	'DE'=>array(221,222),
	'FL'=>array(261,262,263,264,265,266,267,589,590,591,592,593,594,595,766,767,768,769,770,771,772),
	'GA'=>array(252,253,254,255,256,257,258,259,260,667,668,669,670,671,672,673,674,675),
	'HI'=>array(575,576,750,751),
	'IA'=>array(478,479,480,481,482,483,484,485),
	'ID'=>array(518,519),
	'IL'=>array(318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361),
	'IN'=>array(303,304,305,306,307,308,309,310,311,312,313,314,315,316,317),
	'KS'=>array(509,510,511,512,513,514,515),
	'KY'=>array(400,401,402,403,404,405,406,407),
	'LA'=>array(433,434,435,436,437,438,439,659,660,661,662,663,664,665),
	'MA'=>array(10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34),
	'MD'=>array(212,213,214,215,216,217,218,219,220),
	'ME'=>array(4,5,6,7),
	'MI'=>array(362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386),
	'MN'=>array(468,469,470,471,472,473,474,475,476,477),
	'MO'=>array(486,487,488,489,490,491,492,493,494,495,496,497,498,499,500),
	'MS'=>array(425,426,427,428,587),
	'MT'=>array(516,517),
	'NC'=>array(237,238,239,240,241,242,243,244,245,246,681,682,683,684,685,686,687,688,689,690),
	'ND'=>array(501,502),
	'NE'=>array(505,506,507,508),
	'NH'=>array(1,2,3),
	'NJ'=>array(135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158),
	'NM'=>array(525,585,648,649),
	'NV'=>array(530,680),
	'NY'=>array(50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134),
	'OH'=>array(268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302),
	'OK'=>array(440,441,442,443,444,445,446,447,448),
	'OR'=>array(540,541,542,543,544),
	'PA'=>array(159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211),
	'RI'=>array(35,36,37,38,39),
	'SC'=>array(247,248,249,250,251,654,655,656,657,658),
	'SD'=>array(503,504),
	'TN'=>array(408,409,410,411,412,413,414,415,756,757,758,759,760,761,762,763),
	'TX'=>array(449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645),
	'UT'=>array(528,529,646,647),
	'VA'=>array(223,224,225,226,227,228,229,230,231,691,692,693,694,695,696,697,698,699),
	'VT'=>array(8,9),
	'WA'=>array(531,532,533,534,535,536,537,538,539),
	'WI'=>array(387,388,389,390,391,392,393,394,395,396,397,398,399),
	'WV'=>array(232,233,234,235,236),
	'WY'=>array(520)
	);

	var $states = array('AK','AL','AR','AZ','CA','CO','CT','DC','DE','FL','GA','HI','IA','ID','IL','IN','KS','KY','LA','MA','MD','ME','MI','MN','MO','MS','MT','NC','ND','NE','NH','NJ','NM','NV','NY','OH','OK','OR','PA','RI','SC','SD','TN','TX','UT','VA','VT','WA','WI','WV','WY');

	// The SSA uses a funky method of figuring out what group number to use next. This area has them in the proper order and makes it easier to generate a SSN.
	var $possibleGroups = array(1,3,5,7,9,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68,70,72,74,76,78,80,82,84,86,88,90,92,94,96,98,2,4,6,8,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59,61,63,65,67,69,71,73,75,77,79,81,83,85,87,89,91,93,95,97,99);

	// Cleans the high group number list so it is useful.
	function __CONSTRUCT(){
		$highgroup = $this->highgroup;

		// Trim the high group list and remove asterisks, fix space/tabs, and replace new lines with tabs.
		// The data isn't formatted well so we have to do quite a bit of random replacing.
		$highgroup = trim($highgroup);
		$highgroup = str_replace(array('*'," \t","\n",'  '),array(' ',"\t","\t","\t"),$highgroup);

		// Explode on tab. This should give us an array of prefixes and group numbers, IE '203 82', '204 82', etc
		$highgroup = explode("\t",$highgroup);

		// Make array useful by splitting the prefix and group number
		// We also convert the string to an int for easier handling later down the road
		foreach($highgroup as $value){
			if(trim($value) != ''){
				$temp = explode(' ',$value);
				$cleangroup[(int)trim($temp[0])] = (int)trim($temp[1]);
			}
		}

		$this->highgroup = $cleangroup;
	}

	// Print the cleaned high group array. This is useful when putting in a new high group list.
	function printHighGroup(){
		echo '<pre>';
		print_r($this->highgroup);
		echo '</pre>';
	}

	// Generate an SSN based on state
	// Returns false if bad state
	function generateSSN($state = false, $separator = '-'){
		$states = $this->states;
		$statePrefixes = $this->statePrefixes;
		$highgroup = $this->highgroup;
		$possibleGroups = $this->possibleGroups;

		if($state == false){
			$state = $states[mt_rand(0,count($states)-1)];
		}

		$state = strtoupper($state);

		// Sanity check: is this a valid state?
		if(!isset($statePrefixes[$state])){
			return false;
		}

		// Generate area number
		$area = $statePrefixes[$state][array_rand($statePrefixes[$state])];

		// Generate group number
		$group = $possibleGroups[mt_rand(0,array_search($highgroup[$area], $possibleGroups))]; // Generate valid group number

		// Generate last four
		$lastfour = sprintf("%04s",trim(mt_rand(0,9999)));

		return sprintf("%03s",$area) . $separator . sprintf("%02s",$group) . $separator . $lastfour;
	}

	// See if a SSN is valid
	// Returns false is not, or two letter state abbreviation if it is valid
	function validateSSN($ssn){
		$statePrefixes = $this->statePrefixes;
		if (isset($state)) $state = strtoupper($state);
		$highgroup = $this->highgroup;
		$possibleGroups = $this->possibleGroups;

		// Split up the SSN
		// If not 9 or 11 long, then return false
		$length = strlen($ssn);
		if($length == 9){
			$areaNumber = substr($ssn,0,3);
			$groupNumber = substr($ssn,3,2);
			$lastFour = substr($ssn,5);
		}elseif($length == 11){
			$areaNumber = substr($ssn,0,3);
			$groupNumber = substr($ssn,4,2);
			$lastFour = substr($ssn,7);
		}else{
			return false;
		}

		// Strip leading zeros
		$areaNumber = ltrim($areaNumber, 0);
		$groupNumber = ltrim($groupNumber, 0);

		// Check if parts are numeric
		if(!is_numeric($areaNumber) || !is_numeric($groupNumber) || !is_numeric($lastFour)){
			return false;
		}

		foreach($statePrefixes as $state => $numbers){
			// Search for the area number in the state list
			if(in_array($areaNumber, $numbers)){
				// Make sure the group number is valid
				if(array_search($highgroup[$areaNumber],$possibleGroups) >= array_search($groupNumber,$possibleGroups)){
					return $state;
				}else{
					return false;
				}
				break;
			}
		}
		return false;
	}
	
	function formatSSN($ssn){
        if (!$this->validateSSN($ssn)) {
            return false;
        }
        
		$length = strlen($ssn);
		if($length == 9){
			$areaNumber = substr($ssn,0,3);
			$groupNumber = substr($ssn,3,2);
			$lastFour = substr($ssn,5);
		}elseif($length == 11){
			$areaNumber = substr($ssn,0,3);
			$groupNumber = substr($ssn,4,2);
			$lastFour = substr($ssn,7);
		}
		
		return $areaNumber . '-' . $groupNumber . '-' . $lastFour;
	}
}

?>
