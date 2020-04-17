<?php
$codex = array(
    "A" => "A",
    "B" => "Z",
    "C" => "E",
    "D" => "R",
    "E" => "T",
    "F" => "Y",
    "G" => "U",
    "H" => "I",
    "I" => "O",
    "J" => "P",
    "K" => "Q",
    "L" => "S",
    "M" => "D",
    "N" => "F",
    "O" => "G",
    "P" => "H",
    "Q" => "J",
    "R" => "K",
    "S" => "L",
    "T" => "M",
    "U" => "W",
    "V" => "X",
    "W" => "C",
    "X" => "V",
    "Y" => "B",
    "Z" => "N",
    " " => " "
);
$codex2 = array_flip(array(
    "A" => "A",
    "B" => "Z",
    "C" => "E",
    "D" => "R",
    "E" => "T",
    "F" => "Y",
    "G" => "U",
    "H" => "I",
    "I" => "O",
    "J" => "P",
    "K" => "Q",
    "L" => "S",
    "M" => "D",
    "N" => "F",
    "O" => "G",
    "P" => "H",
    "Q" => "J",
    "R" => "K",
    "S" => "L",
    "T" => "M",
    "U" => "W",
    "V" => "X",
    "W" => "C",
    "X" => "V",
    "Y" => "B",
    "Z" => "N",
    " " => " "
));

$messageCrypt = "DAOMKT EGKZTAW LWK WF AKZKT HTKEIT MTFAOM TF LGF ZTE WF YKGDAUT DAOMKT KTFAKR HAK S GRTWK ASSTEIT SWO MOFM A HTW HKTL ET SAFUAUT TI ZGFPGWK DGFLOTWK RW EGKZTAW JWT XGWL TMTL PGSO JWT XGWL DT LTDZSTN ZTAW LAFL DTFMOK LO XGMKT KADAUT LT KAHHGKMT A XGMKT TDHSWDAUT XGWL TMTL ST HITFOV RTL IGMTL RT ETL ZGOL A ETL DGML ST EGKZTAW FT LT LTFM HAL RT PGOT TM HGWK DGFMKTK LA ZTSST XGOV OS GWXKT WF SAKUT ZTE SAOLLT MGDZTK LA HKGOT ST KTFAKR L TF LAOLOM TM ROM DGF ZGF DGFLOTWK AHHKTFTN JWT MGWM YSAMMTWK XOM AWV RTHTFL RT ETSWO JWO S TEGWMT ETMMT STEGF XAWM ZOTF WF YKGDAUT LAFL RGWMT ST EGKZTAW IGFMTWV TM EGFYWL PWKA DAOL WF HTW MAKR JW GF FT S B HKTFRKAOM HSWL";
$message2 = "bonjour";

function decrypt($codex, $messageADecryp)
{
    $messageUpper = strtoupper($messageADecryp);
    for ($i = 0; $i < strlen($messageUpper); $i++) {
        $current = $messageUpper[$i];
        echo $codex[$current];
    }
    echo "\n";
}

decrypt($codex, $message2);
decrypt($codex2, $messageCrypt);
