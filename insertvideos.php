<?php
	include("db_config.php");

	$array = [
		4 => "qy8JyQShZRA",
		5 => "JzqdHkpXuy4",
		6 => "QuW4_bRHbUk",
		7 => "zmvJ54kRpjg",
		8 => "WuG5WTId-IY",
		9 => "vtWp45Eewtw",
		10 => "wzv0pb7mzaw",
		11 => "7IT2I3LtlNE",
		12 => "FKkWdizutxI",
		13 => "4AhZ8503WPs",
		14 => "a2aWO5cL410",
		15 => "LSYLUat03A4",
		16 => "mGMR72X8V-U",
		17 => "BXCfBl4rmh0",
		18 => "nrHVOFG2V-c",
		19 => "pPdevJTGAYY",
		20 => "V9fuY8_ffFg",
		21 => "KkKv5ilmRjY",
		22 => "MpFTQYynrc4",
		23 => "XRjb_IKDiz8",
		24 => "lzRb4zmGvNU",
		25 => "5xqsPZ7WsHw",
		26 => "euQUgp5AY-Y",
		27 => "V6ljxByu9ng",
		28 => "t4kRHoj0W1Y",
		29 => "kop1sWzTK-I",
		30 => "99wPiMb-k0o",
		31 => "N6ccRvKKwZQ",
		32 => "osrKWVknkgs",
		33 => "a2AbKwAvyos",
		34 => "IHrUtKjcAFE",
		35 => "Slt3_5upuSs",
		36 => "il4OOY7Zseg",
		37 => "0XLGopBovoI",
		38 => "d5ztPGrsgNQ",
		39 => "tTXjnQlAHAQ",
		40 => "gNJE2MPktvg",
		41 => "2ciPAsVTq6c",
		42 => "ZRQ3vBGskds",
		43 => "0QBlrGva5YQ",
		44 => "wl5ZYb0hDTc",
		45 => "PPSO5798k2I",
		46 => "4ALTGeqmNFM",
		47 => "pPd5qAb4J50",
		48 => "boRius1DYdQ",
		49 => "4opHafNmgCw",
		50 => "qEwCPJOP0Mg",
		51 => "kcc6qNT3BoU",
		52 => "5ChFbVu4Mpk",
		53 => "JUBsJLRSM64",
		54 => "Ejoct_6pQ74",
		55 => "5aD6HwUE2c0",
		56 => "9srJdQU3NOo",
		57 => "Q21clW0s0B8",
		58 => "frD3126ry8o",
		59 => "IL06CzXF3ns",
		60 => "PBbl-3_R3mk",
		61 => "px52fxITTrw",
		62 => "LpTkBg8HpvY",
		63 => "88YOmg_FUVo",
		64 => "uUo7pY38fGY",
		65 => "On5LjH9TQxY",
		66 => "hFfR_qOSa-8",
		67 => "3ERc-vPLMUs",
		68 => "E-DY_RT4fJ4",
		69 => "CQFDIZfMPVQ",
		70 => "Rp7-yNvOV4I",
		71 => "a5T1xXoR8XI",
		72 => "egw79BA_0PA",
		73 => "51xFP1Yn3g0",
		74 => "_PccntqMOoI",
		75 => "VRccwkEmOYg",
		76 => "AdX-T2Vv68Y",
		77 => "cuovE4OQi2g",
		78 => "byzaoji_9kk",
		79 => "7dF0QTzcuac",
		80 => "oL0M_6bfzkU",
		81 => "bK6nnyibhdk",
		82 => "2ERfPN5JLX8",
		83 => "vyIo-c7VmIM",
		84 => "bbr5yWwsI1o",
		85 => "sSL7EwdlLlE",
		86 => "mTuC_LrEfbU",
		87 => "PyFLvSg6ZDw",
		88 => "5_I6vj-lXNM",
		89 => "0BlpjWBYW0k",
		90 => "KQ64Jm3dmSs",
		91 => "bsIMMa7iEKU",
		92 => "B8vVZTvJNGk",
		93 => "1D75B0_URbE",
		94 => "89UNPdNtOoE",
		95 => "CC-L-CITg3k",
		96 => "sZobqPFNcwg",
		97 => "imXT9QwRzks",
		98 => "eG6HyPrTccI",
		99 => "-G_4nJLNXA0",
		100 => "SQhI52sqanA",
		101 => "0JlshAo8DuE",
		102 => "t_ZpauMxapY",
		103 => "_zBsnnJOkyA",
		104 => "dOj9ZjKnJcY",
		105 => "eeczRrDoL_M",
		106 => "UWq0djr790E",
		107 => "okJnQIjELY4",
		108 => "u4GEVxbLego",
		109 => "N8VR7Qscq4k",
		110 => "lhvMqva3-7M",
		111 => "MTq1hzhCF0g",
		112 => "QHcbQfcwegY",
		113 => "Ac7iFepG2CY",
		114 => "5L-NNFPiRog",
		115 => "gCt5WK2OVp0",
		116 => "WdbF4L_ruyM",
		117 => "BKEEi8JThps",
		118 => "Stxor9L00BU",
	];


	$statement = $db->prepare("INSERT INTO element_factsheet(id, atomic_num, video, year_discovered, discovered_by, name_origin, quick_facts, uses) VALUES (NULL, :atomic_num, :video, NULL, NULL, NULL, NULL, NULL)");


	foreach ($array as $atom => $vid){	
		$statement->execute(array(
			"atomic_num" => $atom,
			"video" => $vid
		));
	}
?>
