<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.2
*/error_reporting(6135);$cc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($cc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$_f=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($_f)$$X=$_f;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hŞÀ'z’VÍ¶• Ü6€Yz:íQc³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ĞYxuÁİé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—Zİ„nAb¨!1‡)ñoİ–9öc\0bÊïo-~2w4X,,…¶8m'™›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁğéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜĞmgòu«2lbš•àZçCĞ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0Nàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CĞ8\rŒ‡°]\\£çLUöŞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íßT†òóCµ‘r?:ÀÜ„üwMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ğ=é[ˆÆ ynÃ'÷½h¾ûÚì@óŞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-Gú");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.¾øA¡I	\r±-%Îém-Ïe©·\0†ÈÓ/DZ !Pöxƒ H´6`X„b*g4E¬Õ§…\"	PhÄÕiPÂàB\0ı‡ÀÈÁ›œeT†r°YJé\\+ˆ­‚¡ààäĞ:>&-Ÿ#¦€dÚy{IotÄ?CO ß›õ&qñ™\0ædùhGº;‡BÙ	B,\r)Ô4ƒÈíq#\rÁM&°VÄX!“éU·àÒáXô«z!å¤Å0æC’Ë.J964±É	#Œ8àÄ¦‰Ù“3jEÊ×ÿa #Àô	agæ 9ƒ¹1&¤à<l¡µÊÊ)H%4¨cÓH™½#:¥p]Ó°Âéàåy(ƒPraÁ˜,ÛşŸs¾rOˆ[¡Û®.NÔ°Ìø5(a#(Ê=˜É\$xy’\$È¡Q¬w¦üuœ4zr‘ùÏ:WT_(…¤ÁX70IÑH*ŒIè«—§I(1Ÿ%O^ˆ\"0{N'ÌŒ›aÒŒÑ²9GC”—K’e‚†¤êá¸¤²R†©NIh\0‚HŒ-†©äò“i¥§êÀˆÃ¥ciÓ&eCÉ™‚© eêjôÆj~1\r@éıÛÃ6\r‡Š€ÚEÅ\n ó6‡6wg=%H\n¥Óñ:¢ÉÇ5á|'›Uê¢Mê—8²ò†“JPÓUÚú¯”ÕIĞIã<É)„“ZœÙ8:í°d”ğéürşŞÕ!Á¦h.‚-\rÃZ¹ä9B¯Ãz´MÅ®W3tîªs«¨Â—²Á°ÇÇb—LcB íòVBtúC›ßvp.¤Ï[R^oŒ	+x>ù*Ããªv¨Ş9ßrN¥H!4vL1ğğÀßÁmÁ˜:áÜThGƒaŞ\"÷5ƒÛaëğ3ĞBÈ¢Ûˆ«5a­-42bšÑZ¨ÃpnO©şA\rŸ†`Ïlfíœ5Çğä>Õ™¡†[«#®ÍêÜp'Ş\rV\0®Ì/b/¾93ÖC‡Ö=•™às4¡˜:°ÊUè(9.Æ†G3›'Û†ˆ“ÏI©nXvpŸàÿ=X[nAÑ¸7QÒUKÚ‰¤ t¾O²Ó^dtzÔqåhbØ‹,š‹Ç÷ÒU8em¤ª“¢ÓÊ‰5¡ì­ ÉØ¼èk`Ks¦[¶7ßLÊ9y%q¶~¶ÿ#@VÌ¥¨Ö.fUš\$ŒD2f~¥:Ô3’PÄÃ^ŸzkA¶fÌÈ¡âzq¼?ªÛbš¡Œ‰Q2'(™]o%wgšB?´*é«2ÃÜ×OX±{\$ØDÈbf‡øH\n4&0Lƒs\0íHbwØ.à3p@{¼èDË ê8Ó…lW,²!Á['[Ú^1BL]„:‡0¦äTV¶|9Û°ûoy¥ÀjopÅå@P	¨fœğæ¼Ø9	À£¢[ MÓCß@¡˜°î‰‚‰céêìú”¾™×j*-E±y¯PÜºfâıq¦GÃ¨ODNÏ£M@ÃyLeç—©ÖKòø	X¿Ü(0›œRØfÑ &u0è\nü@oñQ +©Ğ¼F\$›ûÄø³åC\"šì ×¬Õ,ÑfHáÜÑ‡eÌ·mÉı¼7w'È‰?¦&~ †z«¢hÃ“Qüè¹7\0‚k‚•Ñ€Šo¯™Yqğhğ¦/dó»î¨F8­9¦}2uóñlÍfS{íâß£÷¡Ê,I¾°‹­]ıòÿ,ˆF›ûBn­¡ÿ[=¢ósIy\$æà©@ä©>´ xn\n¦¤íJ\$°§,ç©òµh¸'tà¶ Z@º€¶ŒÀVâ°€L\"Ù	äp&Ò4àğN úÔé*@òİø£M&¨í*’°\0„ZÔ\r\r+Lµ\rU\$a)åBmˆ¿ğ3p:·P@+0FGğz§'.ë¥?\niò,ä`-cxş/4ó¾‘Fi%dÆ\0Pıkìk«¨/ÆÌÀòVeÌ}êÀÅÚƒ€ò‡ãN4@bg2èÀ]ô> z `Æ¢<PÜSn4úàúöMÀnÚH€ÑfäFÀ\$ğªÆ°ÂêÎ¬LXlîlğR?X¡0ÔJ\rÀšˆÄvp´šk\"ğ€Ü³ô¨j‹¢u\0¸ğË=\0k@Mp°|Ô€Uà_@ÚLKXzqhµñb\$‹j4·C`+Ñ¢s\"Ö­İ@Ë`P²ÆF#à¯\n,¨jø(OÀ‰\0[Q(-ƒ2§p¶RXZ\0íĞd¨úÿññ1‚“±ñªP²1ğ0@Ó-VïËå]\nÈ‚±\0.œn°nbu!Ñ>År\"#D²\rŸ-¢fib4RÔIÎ\$²4ÅL`tÒ0:¢d;ò!ò8ú\näıs&lá\"*ÌFB%\r'´»ƒp‰°êø%‡ş]¢8v°àéÌr]¨ˆ ëÌOkÓ(§š6£ö]¬’–c\$†oö’ªL€óäï€XrG Ê!+Ï*ëĞznêÕ’¾1€\\\rNZ\r\0¨?Œ*±.Š.’û/óugº\"ÚïÀ‡(nøéÒIü‘2Ğ÷±W§Ô|ö’&º¬0S¿í,¾ÓFÂD6ˆrcÒà.€İ0²ï'¨Nsf ÉäÈfdÛ.!5©šHIp—L‰8R|‡+zÃí¬·­«,òÓ+‘2k#4nğÑRé2mX¿\"Rˆ]\0S,,ÂÌlÊÌî5¬8®@ó@ïè%.‚°•l95:ÀNâDğ ÖR\n€Ò#ˆ€zq6Èù7\0Úz²î4n‘Ôlî@QrØº0ç<ï2¬ÏcD€a<C3‘`péÒ…;Ó'.t.Î÷/&ìæ\r5CPó2à{CÂÆ:ÇVåâDQcVîTõÑ]GNb`Oê03[¢gIÿF	F–>Í3B¾h< ø3¢\\\r”—Gtš³ŞÑhJlÒÅ\"-üoÎ8®<AîCHíú‘@R…´Â¼ˆ3L‰LÉM4& Óã.ôŞ¾É°0²~~ò¶6Ó™1åÖ]¬ÄASÊÍ\0L3£B ïBì.Ò£ÄIv}åĞ\nbè(2ó9fo9µ6ãrÚÎÜãOº”btn	¨Ø¦ô™¦şº­^&p&(¼à¼ãPŸ¢¹IÇşò.kUT¥)dKƒ\n‰iêmMğ¶õ†]àÏXÉj–SÒMm]X€Î	 ÂÔmRÕÄõ[KJ¼ÕÂj\r¯x']òáu¾œÅ5\nMq=#FÀN8ZUõ›XµÖé}^UóYõÕ•ÿ[ÀÔ`|DÕø15¿[iÏ[­qZÖ	a‰JfeH\r€à!Ål=RÏ\0ëbï¥U®cÅ4Xò\\7Ldg*•ĞrÖhgO>£Jr¯Ïd½eÈ–W]G'pªEmt {@Â\rU²h\"¥èQ ÅV€Ö9c¶c‹\"& â7E&aË V€°àˆ”€à'–¦¦À~:Ã±k ™kvº¶¾µ RE`CÅ€#|A\0°	àÄ\rF»l'wn	nVénÂ(@š¸„šo\$16Èà@¨\n¸S˜­YjV¨k× ¦Æö#çcbÆ\n\0\n`©G ·:*öƒÀPcfÙm#fö½r\$üCb(H~1hµ ZÏinìÀ^\0ZJ î©š¶#ã‚4àÈ-ou(‰V¦×ZNb„\0[y¥€ZòµŞ+qöÏm)vp×”RhjFòÔRcÒa/¼ú«d%_rwÅ|€óSCÓC¤,†V–‡Üu†g|¼l…et¶fK{2Ïhu²ºˆ’‰h›t`ö·¸;Æjú×ò¥7òT#¶å©¨cb\\nB„xX.?îI Ë1oJ@³æZ ÷LûÜñiÇjpğ í¯(§àŒ„O–„@X\\\0æë’Şrsiƒv ¶p«Æ@†œj1ğt“pÛ2QíL`¬D-àÖB8}NZ†,-ôcÕl¬F€^\r1šz“ÒéÑ4t÷N6r¹P¬¼UàCVÄ\"Ê,„^Z\0Ş‰n—.@˜Ğ\$˜Õ‰ÜÀõ÷ã<·94Sw6 öcd—/â¿x Ê\n ¤	(~\r¸FF‡¨‚ @7ˆ‘Y9“Àß”ª1ñKÓJşâ¸t‹«WçÌÃ u21qÍ¯ƒ™,\r@ŞCÂ„ĞJÜX[åsˆeÄ+\0y|3@zX„ë€DÆW™.¸*\0xññšÏëhì<›5h\\­Y.h˜×³‡) Ğ~«íœ&V*€~ÀU	â¸*Æ@V;ø“—“ƒmø\"\"±‚¸`Ühšù§™xBW8F<XMt–¯1,Ä\$²üÌNĞPTÀèç‰tª)ú2×¡Ù°\\G;qrÿÍ)“B¹AÉ“††9,è}:`é\"NŒv“€î/ÀÜQtT“®ïR³<ËDó¾F”©J:w&Œa>m\r4óÀšŸ>FğL\nË¦=¨#k¨˜T\"!‡§¬†ÖÌ’/õ¬CÂ§ìZâ`äâ ˜ 3§ós(Á‰İ­¢@É\\rqÌgdjFâ,¨%0BÆÀSG³ècµª\rĞñWÔ“©40èÀ{¢îPÔeC€z@oŒ<á´†3*lÎ}™E&¾ĞÀ„n`å`Ø-Z’¶k® Üà.àºü!(tdXæ˜:c\$_U\0òc¸F\nºáªQBÇ3ª,v\"1§·D?„Õ¨×tRï,µ°SDóhº¢ÃdhôD h€eâ /SšÖ@\0c¹’1H»¤ÄÔ«¢æ V-» ×î»ï³Ûœ4`¸ `\0‚Dû³ë9¥ïşyg;]ÀĞvò_ F<İCn¾×ÓÄQDk¤”FÑÂ!`¥'ûÄò÷€¨\rî<CÒğ]»Ğ1\0°#ÜtQDh/ë¸ã\\Æ@Éc·r;ƒ½È€Ê\\fAk,¸L‚C/ÉÜ ‰\0ŠV\\o•ÀOË`ÉÊedEœ;Û‰Ë\njux¯\\Z£®ZéAŠÅ«¿†–Å›nrc¼‰:\nsØ‰:<P\nn2éd„56%^ÀCDXæyÚì¥Êí‚*ˆyN4ùS“ùC•ÜÚ/yJ\\x)|.}½Aƒfe{¢.8K¾»^×Õ'ÕgW»©|Î}6‡M€ÕÛ\n½h1=m®,bÕÜH ×åRÈVİ{Å'ùÌ›¼C¤¬Â»2åj<OÚGÚNÏÅƒÓÅöiÆ5QÊ ËÌ…}^qŠ’€Z–P«Í`Væœ›ÆFàÈ‘P{Fà	€ŞCqZ& Pğ%—@XHä7¬DX €è\$cìâ[vâ›{¹‚şí>í vñİ·¤Şå ”mXí\"JñË\\õÒr6v(NÒyší8'}zàs£°cãÛ[¨j;:\"Ø“£áxâİaÕ[¹Å÷¥*<hÜæiPÍæÇê7IèÒÔŸR\"BœÖúä6şLJş:AÍ¦îÛOáÎÓ¿Œu^S²Î Û›;òs#çâŞ\$}qh&¦èÕ4\rõ9C¿Q6\nšçÍSÅï¾şWnÌÈ“€\$Ütğ¢r\r€„—Â§õGîŠy áÏ™	ÏÅM£åëäÌ\$­<XXCİZr`t XnO§Ú¯?Ns‹\"•­LÜ,Ò0i¦\nS\nE\0ÍCÃ’Ï_/Ï ‘Ïú@m)+Îêˆ ÀRÚñ¿òß0—_‹ó}ùn×ì²ù—KşOCËÜbiİZU÷ãe„]”+å¤P•x{P¼[µ•ÉV+_ÜéW¶#h™.İıÓ’MGíœ€ÃËn!ÔÏ‚§èœ€‚K1]\$\0F¼@à†8%C[sèV\rï\0rKÑToü=›ş[d}q»9ö\0b²€(Í€ë\0‡>À,Xğ\rsëÆÂÀ:Ğ:÷Í¾†£|’°€J^2``Ï4m0	¨¹”®Ñˆ!¾µ1È-#ª`œ6—#ôÒb’@I<ƒ×5¤°\$¬BÂ¯ÈKPÑÀ9=Ê%“wÀôŠP<:-+„«8Éìßäşö3Œ7à,XøF\"”„\râÛ;uÅ”q=‹¢É@‚\rCÂÁØ!ƒ5TúoÎÇªĞ\ró˜	Â¸C*°w€á¸Ö#,'ı@ ePòÏ¬cXO™¦‰g?huŞe‚ñ¹3'î\$QVÍ·á@õú`h|ä¾’„PIĞz;½„6I‘”²QŞd=>ÉùUN¶œ\$°Ë‘{N%¸üèj:vRòÂı”+ƒèJ;\$Ô@\$&ÓíªÉ±\0æÖ¦ˆT¾ÇàY(}HJ’ÄPŒlü‡Í¹ÊÔ‚¤À3ÃÔ0CeC']0ÊØ:@êo`g¡ÙğÖ}.:Š8¢…*güáAÈµ¬)O=ò†°ÒP´qšŸ”¥0ôV±‚¡è‰°=Ä±YĞ‡ã¯!è£ó–º ‰xéá€èÅ¢0Ahî”AYTÊÀë2º'¬»{)È@ğDÁ@­p¥1OdT@àêC–Šö&AÈ\rRÍøÄR\"Ä£{s\\Ş)H«3ÉÕ,\$näDÓ8€·}ŒBÒˆêXwx·(æ'i1«\0Â+ÓÄEò,I‰¡Ybapš©\0å±pˆiÙ4évUºdzo]:Ckøˆ¿Ä§A1	hÉVâ{è");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($v){$Xc=substr($v,-1);return
str_replace($Xc.$Xc,$Xc,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($de,$cc=false){if(get_magic_quotes_gpc()){while(list($z,$X)=each($de)){foreach($X
as$Pc=>$W){unset($de[$z][$Pc]);if(is_array($W)){$de[$z][stripslashes($Pc)]=$W;$de[]=&$de[$z][stripslashes($Pc)];}else$de[$z][stripslashes($Pc)]=($cc?$W:stripslashes($W));}}}}function
bracket_escape($v,$Da=false){static$of=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($Da?array_flip($of):$of));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($D,$Y,$Pa,$Vc="",$Cd="",$Sa=""){$K="<input type='checkbox' name='$D' value='".h($Y)."'".($Pa?" checked":"").($Cd?' onclick="'.h($Cd).'"':'').">";return($Vc!=""||$Sa?"<label".($Sa?" class='$Sa'":"").">$K".h($Vc)."</label>":$K);}function
optionlist($Hd,$Ce=null,$Ff=false){$K="";foreach($Hd
as$Pc=>$W){$Id=array($Pc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($Pc).'">';$Id=$W;}foreach($Id
as$z=>$X)$K.='<option'.($Ff||is_string($z)?' value="'.h($z).'"':'').(($Ff||is_string($z)?(string)$z:$X)===$Ce?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($D,$Hd,$Y="",$Bd=true){if($Bd)return"<select name='".h($D)."'".(is_string($Bd)?' onchange="'.h($Bd).'"':"").">".optionlist($Hd,$Y)."</select>";$K="";foreach($Hd
as$z=>$X)$K.="<label><input type='radio' name='".h($D)."' value='".h($z)."'".($z==$Y?" checked":"").">".h($X)."</label>";return$K;}function
select_input($d,$Hd,$Y="",$Ud=""){return($Hd?"<select$d><option value=''>$Ud".optionlist($Hd,$Y,true)."</select>":"<input$d value='".h($Y)."' placeholder='$Ud'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($u,$Zc,$Mf=false,$Cd=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Cd)."return !toggle('fieldset-$u');\">$Zc</a></legend><div id='fieldset-$u'".($Mf?"":" class='hidden'").">\n";}function
bold($La,$Sa=""){return($La?" class='active $Sa'":($Sa?" class='$Sa'":""));}function
odd($K=' class="odd"'){static$t=0;if(!$K)$t=-1;return($t++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($z,$X=null){static$dc=true;if($dc)echo"{";if($z!=""){echo($dc?"":",")."\n\t\"".addcslashes($z,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$dc=false;}else{echo"\n}\n";$dc=true;}}function
ini_bool($Jc){$X=ini_get($Jc);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$h;return$h->quote($Q);}function
get_vals($I,$f=0){global$h;$K=array();$J=$h->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$f];}return$K;}function
get_key_vals($I,$i=null,$gf=0){global$h;if(!is_object($i))$i=$h;$K=array();$i->timeout=$gf;$J=$i->query($I);$i->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$i=null,$n="<p class='error'>"){global$h;$bb=(is_object($i)?$i:$h);$K=array();$J=$bb->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$K;}function
unique_array($L,$x){foreach($x
as$w){if(preg_match("~PRIMARY|UNIQUE~",$w["type"])){$K=array();foreach($w["columns"]as$z){if(!isset($L[$z]))continue
2;$K[$z]=$L[$z];}return$K;}}}function
where($Z,$p=array()){global$y;$K=array();$oc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$z=>$X){$z=bracket_escape($z,1);$f=(preg_match($oc,$z)?$z:idf_escape($z));$K[]=$f.(($y=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$y=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$z],q($X)));if($y=="sql"&&preg_match("~[^ -@]~",$X))$K[]="$f = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$z)$K[]=(preg_match($oc,$z)?$z:idf_escape($z))." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$p=array()){parse_str($X,$Oa);remove_slashes(array(&$Oa));return
where($Oa,$p);}function
where_link($t,$f,$Y,$Ed="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($f)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Ed:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($g,$p,$N=array()){$K="";foreach($g
as$z=>$X){if($N&&!in_array(idf_escape($z),$N))continue;$xa=convert_field($p[$z]);if($xa)$K.=", $xa AS ".idf_escape($z);}return$K;}function
cookie($D,$Y,$cd=2592000){global$aa;$G=array($D,(preg_match("~\n~",$Y)?"":$Y),($cd?time()+$cd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;return
call_user_func_array('setcookie',$G);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($z){return$_SESSION[$z][DRIVER][SERVER][$_GET["username"]];}function
set_session($z,$X){$_SESSION[$z][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($If,$O,$V,$m=null){global$xb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($xb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($If!="server"||$O!=""?urlencode($If)."=".urlencode($O)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($dd,$od=null){if($od!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($dd!==null?$dd:$_SERVER["REQUEST_URI"]))][]=$od;}if($dd!==null){if($dd=="")$dd=".";header("Location: $dd");exit;}}function
query_redirect($I,$dd,$od,$me=true,$Rb=true,$Wb=false){global$h,$n,$b;$ff="";if($Rb){$Ne=microtime(true);$Wb=!$h->query($I);$ff="; -- ".format_time($Ne,microtime(true));}$Le="";if($I)$Le=$b->messageQuery($I.$ff);if($Wb){$n=error().$Le;return
false;}if($me)redirect($dd,$od.$Le);return
true;}function
queries($I=null){global$h;static$ge=array();if($I===null)return
implode("\n",$ge);$Ne=microtime(true);$K=$h->query($I);$ge[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time($Ne,microtime(true));return$K;}function
apply_queries($I,$T,$Nb='table'){foreach($T
as$R){if(!queries("$I ".$Nb($R)))return
false;}return
true;}function
queries_redirect($dd,$od,$me){return
query_redirect(queries(),$dd,$od,$me,false,!$me);}function
format_time($Ne,$Ib){return
sprintf('%.3f s',max(0,$Ib-$Ne));}function
remove_from_uri($Od=""){return
substr(preg_replace("~(?<=[?&])($Od".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$ib){return" ".($F==$ib?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($z,$lb=false){$Zb=$_FILES[$z];if(!$Zb)return
null;foreach($Zb
as$z=>$X)$Zb[$z]=(array)$X;$K='';foreach($Zb["error"]as$z=>$n){if($n)return$n;$D=$Zb["name"][$z];$mf=$Zb["tmp_name"][$z];$db=file_get_contents($lb&&preg_match('~\\.gz$~',$D)?"compress.zlib://$mf":$mf);if($lb){$Ne=substr($db,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Ne,$ne))$db=iconv("utf-16","utf-8",$db);elseif($Ne=="\xEF\xBB\xBF")$db=substr($db,3);$K.=$db."\n\n";}else$K.=$db;}return$K;}function
upload_error($n){$ld=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?'Unable to upload a file.'.($ld?" ".sprintf('Maximum allowed file size is %sB.',$ld):""):'File does not exist.');}function
repeat_pattern($Sd,$ad){return
str_repeat("$Sd{0,65535}",$ad/65535)."$Sd{0,".($ad%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$ad=80,$Te=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$ad).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ad).")($)?)",$Q,$B);return
h($B[1]).$Te.(isset($B[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($de,$Dc=array()){while(list($z,$X)=each($de)){if(is_array($X)){foreach($X
as$Pc=>$W)$de[$z."[$Pc]"]=$W;}elseif(!in_array($z,$Dc))echo'<input type="hidden" name="'.h($z).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Xb=false){$K=table_status($R,$Xb);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$K[$X][]=$q;}return$K;}function
enum_input($U,$d,$o,$Y,$Hb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$id);$K=($Hb!==null?"<label><input type='$U'$d value='$Hb'".((is_array($Y)?in_array($Hb,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($id[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Pa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$K.=" <label><input type='$U'$d value='".($t+1)."'".($Pa?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$K;}function
input($o,$Y,$r){global$h,$vf,$b,$y;$D=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$va=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$va[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$va);$r="json";}$re=($y=="mssql"&&$o["auto_increment"]);if($re&&!$_POST["save"])$r=null;$pc=(isset($_GET["select"])||$re?array("orig"=>'original'):array())+$b->editFunctions($o);$d=" name='fields[$D]'";if($o["type"]=="enum")echo
nbsp($pc[""])."<td>".$b->editInput($_GET["edit"],$o,$d,$Y);else{$dc=0;foreach($pc
as$z=>$X){if($z===""||!$X)break;$dc++;}$Bd=($dc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($dc > f.selectedIndex) f.selectedIndex = $dc;\" onkeyup='keyupChange.call(this);'":"");$d.=$Bd;$uc=(in_array($r,$pc)||isset($pc[$r]));echo(count($pc)>1?"<select name='function[$D]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($pc,$r===null||$uc?$r:"")."</select>":nbsp(reset($pc))).'<td>';$Lc=$b->editInput($_GET["edit"],$o,$d,$Y);if($Lc!="")echo$Lc;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$id);foreach($id[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Pa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$t]' value='".(1<<$t)."'".($Pa?' checked':'')."$Bd>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Bd>";elseif(($cf=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($cf&&$y!="sqlite")$d.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$d.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$d>".h($Y).'</textarea>';}elseif($r=="json")echo"<textarea$d cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$nd=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($vf[$o["type"]]?$vf[$o["type"]]+($o["unsigned"]?0:1):0));if($y=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$o["type"]))$nd+=7;echo"<input".((!$uc||$r==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($nd?" maxlength='$nd'":"").(preg_match('~char|binary~',$o["type"])&&$nd>20?" size='40'":"")."$d>";}}}function
process_input($o){global$b;$v=bracket_escape($o["field"]);$r=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Zb=get_file("fields-$v");if(!is_string($Zb))return
false;return
q($Zb);}return$b->processInput($o,$Y,$r);}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$kc=false;foreach(table_status('',true)as$R=>$S){$D=$b->tableName($S);if(isset($S["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$h->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$kc){echo"<ul>\n";$kc=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($kc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Bc,$td=false){global$b;$K=$b->dumpHeaders($Bc,$td);$Md=$_POST["output"];if($Md!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Bc).".$K".($Md!="file"&&!preg_match('~[^0-9a-z]~',$Md)?".$Md":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$z=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$z]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($r,$f){return($r?($r=="unixepoch"?"DATETIME($f, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$f)"):$f);}function
password_file($gb){$tb=ini_get("upload_tmp_dir");if(!$tb){if(function_exists('sys_get_temp_dir'))$tb=sys_get_temp_dir();else{$ac=@tempnam("","");if(!$ac)return
false;$tb=dirname($ac);unlink($ac);}}$ac="$tb/adminer.key";$K=@file_get_contents($ac);if($K||!$gb)return$K;$mc=@fopen($ac,"w");if($mc){$K=rand_string();fwrite($mc,$K);fclose($mc);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$A,$o,$df){global$b,$aa;if(is_array($X)){$K="";foreach($X
as$Pc=>$W)$K.="<tr>".($X!=array_values($X)?"<th>".h($Pc):"")."<td>".select_value($W,$A,$o,$df);return"<table cellspacing='0'>$K</table>";}if(!$A)$A=$b->selectLink($X,$o);if($A===null){if(is_mail($X))$A="mailto:$X";if($ee=is_url($X))$A=($ee=="http"&&$aa?$X:"$ee://www.adminer.org/redirect/?url=".urlencode($X));}$K=$b->editVal($X,$o);if($K!==null){if($K==="")$K="&nbsp;";elseif($df!=""&&is_shortable($o)&&is_utf8($K))$K=shorten_utf8($K,max(0,+$df));else$K=h($K);}return$b->selectVal($K,$A,$o,$X);}function
is_mail($Eb){$ya='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Sd="$ya+(\\.$ya+)*@($vb?\\.)+$vb";return
is_string($Eb)&&preg_match("(^$Sd(,\\s*$Sd)*\$)i",$Eb);}function
is_url($Q){$vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($vb?\\.)+$vb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($R,$Z,$Nc,$s){global$y;$I=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Nc&&($y=="sql"||count($s)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$s).")$I":"SELECT COUNT(*)".($Nc?" FROM (SELECT 1$I$qc) x":$I));}function
slow_query($I){global$b,$nf;$m=$b->database();$gf=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$Uc=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$nf,'&kill=',$Uc,'\');
}, ',1000*$gf,');
</script>
';}else$i=null;ob_flush();flush();$K=@get_key_vals($I,$i,$gf);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$je=rand(1,1e6);return($je^$_SESSION["token"]).":$je";}function
verify_token(){list($nf,$je)=explode(":",$_POST["token"]);return($je^$_SESSION["token"])==$nf;}function
lzw_decompress($Ia){$sb=256;$Ja=8;$Ua=array();$te=0;$ue=0;for($t=0;$t<strlen($Ia);$t++){$te=($te<<8)+ord($Ia[$t]);$ue+=8;if($ue>=$Ja){$ue-=$Ja;$Ua[]=$te>>$ue;$te&=(1<<$ue)-1;$sb++;if($sb>>$Ja)$Ja++;}}$rb=range("\0","\xFF");$K="";foreach($Ua
as$t=>$Ta){$Db=$rb[$Ta];if(!isset($Db))$Db=$Qf.$Qf[0];$K.=$Db;if($t)$rb[]=$Qf.$Db[0];$Qf=$Db;}return$K;}function
on_help($Ya,$Ie=0){return" onmouseover='helpMouseover(this, event, ".h($Ya).", $Ie);' onmouseout='helpMouseout(this, event);'";}global$b,$h,$xb,$Bb,$Kb,$n,$pc,$rc,$aa,$Kc,$y,$ba,$Wc,$Ad,$Td,$Qe,$vc,$nf,$qf,$vf,$Bf,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$G=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$G[]=true;call_user_func_array('session_set_cookie_params',$G);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$cc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($pf,$yd=null){if(is_array($pf)){$Wd=($yd==1?0:1);$pf=$pf[$Wd];}$pf=str_replace("%d","%s",$pf);$yd=number_format($yd,0,".",',');return
sprintf($pf,$yd);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Wd=array_search("SQL",$b->operators);if($Wd!==false)unset($b->operators[$Wd]);}function
dsn($_b,$V,$H){try{parent::__construct($_b,$V,$H);}catch(Exception$Ob){auth_error($Ob);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$wf=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$xb=array();class
Min_SQL{var$_conn;function
Min_SQL($h){$this->_conn=$h;}function
select($R,$N,$Z,$s,$E,$_,$F,$be=false){global$b,$y;$Nc=(count($s)<count($N));$I=$b->selectQueryBuild($N,$Z,$s,$E,$_,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$_&&$s&&$Nc&&$y=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($s&&$Nc?"\nGROUP BY ".implode(", ",$s):"").($E?"\nORDER BY ".implode(", ",$E):""),($_!=""?+$_:null),($F?$_*$F:0),"\n");if($be)echo$b->selectQuery($I);return$this->_conn->query($I);}function
delete($R,$he,$_=0){$I="FROM ".table($R);return
queries("DELETE".($_?limit1($I,$he):" $I$he"));}function
update($R,$P,$he,$_=0,$Ee="\n"){$Hf=array();foreach($P
as$z=>$X)$Hf[]="$z = $X";$I=table($R)." SET$Ee".implode(",$Ee",$Hf);return
queries("UPDATE".($_?limit1($I,$he):" $I$he"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$Zd){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$xb["sqlite"]="SQLite 3";$xb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Xd=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($ac){$this->_link=new
SQLite3($ac);$Jf=$this->_link->version();$this->server_info=$Jf["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$U=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ac){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ac);}function
query($I,$wf=false){$rd=($wf?"unbufferedQuery":"query");$J=@$this->_link->$rd($I,SQLITE_BOTH,$n);$this->error="";if(!$J){$this->error=$n;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$z=>$X)$K[($z[0]=='"'?idf_unescape($z):$z)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$Sd='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Sd\\.)?$Sd\$~",$D,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$D=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ac){$this->dsn(DRIVER.":$ac","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ac){if(is_readable($ac)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$ac)?$ac:dirname($_SERVER["SCRIPT_FILENAME"])."/$ac")." AS a")){$this->Min_SQLite($ac);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$Zd){$Hf=array();foreach($M
as$P)$Hf[]="(".implode(", ",$P).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($M))).") VALUES\n".implode(",\n",$Hf));}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$_,$zd=0,$Ee=" "){return" $I$Z".($_!==null?$Ee."LIMIT $_".($zd?" OFFSET $zd":""):"");}function
limit1($I,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($m,$Wa){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($D=""){global$h;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){$L["Oid"]=1;$L["Auto_increment"]="";$L["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$h;$K=array();$Zd="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$D=$L["name"];$U=strtolower($L["type"]);$mb=$L["dflt_value"];$K[$D]=array("field"=>$D,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$mb,$B)?str_replace("''","'",$B[1]):($mb=="NULL"?null:$mb)),"null"=>!$L["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);if($L["pk"]){if($Zd!="")$K[$Zd]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$K[$D]["auto_increment"]=true;$Zd=$D;}}$Le=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Le,$id,PREG_SET_ORDER);foreach($id
as$B){$D=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($K[$D])$K[$D]["collation"]=trim($B[3],"'");}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Le=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Le,$B)){$K[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$id,PREG_SET_ORDER);foreach($id
as$B){$K[""]["columns"][]=idf_unescape($B[2]).$B[4];$K[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$K){foreach(fields($R)as$D=>$o){if($o["primary"])$K[""]=array("type"=>"PRIMARY","columns"=>array($D),"lengths"=>array(),"descs"=>array(null));}}$Me=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$i);foreach(get_rows("PRAGMA index_list(".table($R).")",$i)as$L){$D=$L["name"];if(!preg_match("~^sqlite_~",$D)){$K[$D]["type"]=($L["unique"]?"UNIQUE":"INDEX");$K[$D]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($D).")",$i)as$we)$K[$D]["columns"][]=$we["name"];$K[$D]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($D).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Me[$D],$ne)){preg_match_all('/("[^"]*+")+( DESC)?/',$ne[2],$id);foreach($id[2]as$X)$K[$D]["descs"][]=($X?'1':null);}}}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$q=&$K[$L["id"]];if(!$q)$q=$L;$q["source"][]=$L["from"];$q["target"][]=$L["to"];}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($D){global$h;$Vb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Vb)\$~",$D)){$h->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Vb));return
false;}return
true;}function
create_database($m,$e){global$h;if(file_exists($m)){$h->error='File exists.';return
false;}if(!check_sqlite_name($m))return
false;try{$A=new
Min_SQLite($m);}catch(Exception$Ob){$h->error=$Ob->getMessage();return
false;}$A->query('PRAGMA encoding = "UTF-8"');$A->query('CREATE TABLE adminer (i)');$A->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->Min_SQLite(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error='File exists.';return
false;}}return
true;}function
rename_database($D,$e){global$h;if(!check_sqlite_name($D))return
false;$h->Min_SQLite(":memory:");$h->error='File exists.';return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){$Ef=($R==""||$fc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Ef=true;break;}}$c=array();$Ld=array();foreach($p
as$o){if($o[1]){$c[]=($Ef?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$Ld[$o[0]]=$o[1][0];}}if(!$Ef){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$D&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)))return
false;}elseif(!recreate_table($R,$D,$c,$Ld,$fc))return
false;if($Ba)queries("UPDATE sqlite_sequence SET seq = $Ba WHERE name = ".q($D));return
true;}function
recreate_table($R,$D,$p,$Ld,$fc,$x=array()){queries("BEGIN");if($R!=""){if(!$p){foreach(fields($R)as$z=>$o){$p[]=process_field($o,$o);$Ld[$z]=idf_escape($z);}}$ae=false;foreach($p
as$z=>$o){if($o[6])$ae=true;$p[$z]="  ".implode($o);}$zb=array();foreach($x
as$z=>$X){if($X[2]=="DROP"){$zb[$X[1]]=true;unset($x[$z]);}}foreach(indexes($R)as$Sc=>$w){$g=array();foreach($w["columns"]as$z=>$f){if(!$Ld[$f])continue
2;$g[]=$Ld[$f].($w["descs"][$z]?" DESC":"");}$g="(".implode(", ",$g).")";if(!$zb[$Sc]){if($w["type"]!="PRIMARY"||!$ae)$x[]=array($w["type"],$Sc,$g);}}foreach($x
as$z=>$X){if($X[0]=="PRIMARY"){unset($x[$z]);$fc[]="  PRIMARY KEY $X[2]";}}foreach(foreign_keys($R)as$Sc=>$q){foreach($q["source"]as$z=>$f){if(!$Ld[$f])continue
2;$q["source"][$z]=idf_unescape($Ld[$f]);}if(!isset($fc[" $Sc"]))$fc[]=" ".format_foreign_key($q);}}$p=array_merge($p,array_filter($fc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$D":$D)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($Ld&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$Ld).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Ld)))." FROM ".table($R)))return
false;$tf=array();foreach(triggers($R)as$sf=>$hf){$rf=trigger($sf);$tf[]="CREATE TRIGGER ".idf_escape($sf)." ".implode(" ",$hf)." ON ".table($D)."\n$rf[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$x))return
false;foreach($tf
as$rf){if(!queries($rf))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$D,$g){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($R."_"))." ON ".table($R)." $g";}function
alter_indexes($R,$c){foreach($c
as$Zd){if($Zd[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Lf){return
apply_queries("DROP VIEW",$Lf);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Lf,$af){return
false;}function
trigger($D){global$h;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($D)),$B);return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]),"Trigger"=>$D,"Statement"=>$B[3]);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$L["sql"],$B);$K[$L["name"]]=array($B[1],$B[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ze){return
true;}function
create_sql($R,$Ba){global$h;$K=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$D=>$w){if($D=='')continue;$K.=";\n\n".index_sql($R,$w['type'],$D,"(".implode(", ",array_map('idf_escape',$w['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$Re){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$h;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$z)$K[$z]=$h->result("PRAGMA $z");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Gd){list($z,$X)=explode("=",$Gd,2);$K[$z]=$X;}return$K;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Yb){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Yb);}$y="sqlite";$vf=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Qe=array_keys($vf);$Bf=array();$Fd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$pc=array("hex","length","lower","round","unixepoch","upper");$rc=array("avg","count","count distinct","group_concat","max","min","sum");$Bb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$xb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Xd=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Mb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Jf=pg_version($this->_link);$this->server_info=$Jf["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$wf=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$f);$K->name=pg_field_name($this->_result,$f);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$f);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$H){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$H);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$Zd){global$h;foreach($M
as$P){$Cf=array();$Z=array();foreach($P
as$z=>$X){$Cf[]="$z = $X";if(isset($Zd[idf_unescape($z)]))$Z[]="$z = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Cf)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")")))return
false;}return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$_,$zd=0,$Ee=" "){return" $I$Z".($_!==null?$Ee."LIMIT $_".($zd?" OFFSET $zd":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$Wa){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($D!=""?"AND relname = ".q($D):"ORDER BY relname"))as$L)$K[$L["Name"]]=$L;return($D!=""?$K[$D]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();$ua=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$L["full_type"],$B);list(,$U,$ad,$L["length"],$wa)=$B;$L["length"].=$wa;$L["type"]=($ua[$U]?$ua[$U]:$U);$L["full_type"]=$L["type"].$ad.$wa;$L["null"]=!$L["attnotnull"];$L["auto_increment"]=preg_match('~^nextval\\(~i',$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$L["default"],$B))$L["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$K[$L["field"]]=$L;}return$K;}function
indexes($R,$i=null){global$h;if(!is_object($i))$i=$h;$K=array();$Ye=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ye AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ye AND ci.oid = i.indexrelid",$i)as$L){$oe=$L["relname"];$K[$oe]["type"]=($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX"));$K[$oe]["columns"]=array();foreach(explode(" ",$L["indkey"])as$Gc)$K[$oe]["columns"][]=$g[$Gc];$K[$oe]["descs"]=array();foreach(explode(" ",$L["indoption"])as$Hc)$K[$oe]["descs"][]=($Hc&1?'1':null);$K[$oe]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Ad;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$B)){$L['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$hd)){$L['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$hd[2]));$L['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$hd[4]));}$L['target']=array_map('trim',explode(',',$B[3]));$L['on_delete']=(preg_match("~ON DELETE ($Ad)~",$B[4],$hd)?$hd[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Ad)~",$B[4],$hd)?$hd[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($D){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($D).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$K=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$B))$K=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($K);}function
create_database($m,$e){return
queries("CREATE DATABASE ".idf_escape($m).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){$c=array();$ge=array();foreach($p
as$o){$f=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $f";else{$Gf=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($f!=$X[0])$ge[]="ALTER TABLE ".table($R)." RENAME $f TO $X[0]";$c[]="ALTER $f TYPE$X[1]";if(!$X[6]){$c[]="ALTER $f ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $f ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Gf!="")$ge[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Gf!=""?substr($Gf,9):"''");}}$c=array_merge($c,$fc);if($R=="")array_unshift($ge,"CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($ge,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$D)$ge[]="ALTER TABLE ".table($R)." RENAME TO ".table($D);if($R!=""||$Za!="")$ge[]="COMMENT ON TABLE ".table($D)." IS ".q($Za);if($Ba!=""){}foreach($ge
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$c){$gb=array();$yb=array();$ge=array();foreach($c
as$X){if($X[0]!="INDEX")$gb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$yb[]=idf_escape($X[1]);else$ge[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." $X[2]";}if($gb)array_unshift($ge,"ALTER TABLE ".table($R).implode(",",$gb));if($yb)array_unshift($ge,"DROP INDEX ".implode(", ",$yb));foreach($ge
as$I){if(!queries($I))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Lf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Lf)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Lf,$af){foreach($T
as$R){if(!queries("ALTER TABLE ".table($R)." SET SCHEMA ".idf_escape($af)))return
false;}foreach($Lf
as$R){if(!queries("ALTER VIEW ".table($R)." SET SCHEMA ".idf_escape($af)))return
false;}return
true;}function
trigger($D){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($h,$I){return$h->query("EXPLAIN $I");}function
found_rows($S,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ne))return$ne[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($ye){global$h,$vf,$Qe;$K=$h->query("SET search_path TO ".idf_escape($ye));foreach(types()as$U){if(!isset($vf[$U])){$vf[$U]=0;$Qe['User types'][]=$U;}}return$K;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Yb){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Yb);}$y="pgsql";$vf=array();$Qe=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$z=>$X){$vf+=$X;$Qe[$z]=array_keys($X);}$Bf=array();$Fd=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$pc=array("char_length","lower","round","to_hex","to_timestamp","upper");$rc=array("avg","count","count distinct","max","min","sum");$Bb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$xb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Xd=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($Mb,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($O,$V,$H){$this->_link=@oci_new_connect($V,$H,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($I,$wf=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$z=>$X){if(is_a($X,'OCI-Lob'))$L[$z]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$f);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$f);$K->charsetnr=(preg_match("~raw|blob|bfile~",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$H){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$H);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$_,$zd=0,$Ee=" "){return($zd?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($_+$zd).") WHERE rnum > $zd":($_!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($_+$zd):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($m,$Wa){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($D=""){$K=array();$_e=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $_e":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $_e":"")."
ORDER BY 1")as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$ad="$L[DATA_PRECISION],$L[DATA_SCALE]";if($ad==",")$ad=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($ad?"($ad)":""),"type"=>strtolower($U),"length"=>$ad,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$L){$Ec=$L["INDEX_NAME"];$K[$Ec]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$Ec]["columns"][]=$L["COLUMN_NAME"];$K[$Ec]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);$K[$Ec]["descs"][]=($L["DESCEND"]?'1':null);}return$K;}function
view($D){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($M);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$I){$h->query("EXPLAIN PLAN FOR $I");return$h->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){$c=$yb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$yb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$yb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$yb).")"))&&($R==$D||queries("ALTER TABLE ".table($R)." RENAME TO ".table($D)));}function
foreign_keys($R){return
array();}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Lf){return
apply_queries("DROP VIEW",$Lf);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($ze){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($ze));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Yb){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Yb);}$y="oracle";$vf=array();$Qe=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$z=>$X){$vf+=$X;$Qe[$z]=array_keys($X);}$Bf=array();$Fd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$pc=array("length","lower","round","upper");$rc=array("avg","count","count distinct","max","min","sum");$Bb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$xb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Xd=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$H){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$H,"CharacterSet"=>"UTF-8"));if($this->_link){$Ic=sqlsrv_server_info($this->_link);$this->server_info=$Ic['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$wf=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$z=>$X){if(is_a($X,'DateTime'))$L[$z]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$o["Name"];$K->orgname=$o["Name"];$K->type=($o["Type"]==1?254:0);return$K;}function
seek($zd){for($t=0;$t<$zd;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$H){$this->_link=@mssql_connect($O,$V,$H);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($I,$wf=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$o=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($zd){mssql_data_seek($this->_result,$zd);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$M,$Zd){foreach($M
as$P){$Cf=array();$Z=array();foreach($P
as$z=>$X){$Cf[]="$z = $X";if(isset($Zd[idf_unescape($z)]))$Z[]="$z = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Cf)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$_,$zd=0,$Ee=" "){return($_!==null?" TOP (".($_+$zd).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$Wa){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$K=array();foreach($l
as$m){$h->select_db($m);$K[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($D=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($D!=""?"AND name = ".q($D):"ORDER BY name"))as$L){if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$ad=(preg_match("~char|binary~",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($ad?"($ad)":""),"type"=>$U,"length"=>$ad,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$i)as$L){$D=$L["name"];$K[$D]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$D]["lengths"]=array();$K[$D]["columns"][$L["key_ordinal"]]=$L["column_name"];$K[$D]["descs"][$L["key_ordinal"]]=($L["is_descending_key"]?'1':null);}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e)$K[preg_replace('~_.*~','',$e)][]=$e;return$K;}function
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$e){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$e)?" COLLATE $e":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($D,$e){if(preg_match('~^[a-z0-9_]+$~i',$e))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){$c=array();foreach($p
as$o){$f=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $f";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($fc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($f!=$X[0])queries("EXEC sp_rename ".q(table($R).".$f").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$D)queries("EXEC sp_rename ".q(table($R)).", ".q($D));if($fc)$c[""]=$fc;foreach($c
as$z=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $z".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$w=array();$yb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$yb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$yb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$yb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$I){$h->query("SET SHOWPLAN_ALL ON");$K=$h->query($I);$h->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$q=&$K[$L["FK_NAME"]];$q["table"]=$L["PKTABLE_NAME"];$q["source"][]=$L["FKCOLUMN_NAME"];$q["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Lf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Lf)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Lf,$af){return
apply_queries("ALTER SCHEMA ".idf_escape($af)." TRANSFER",array_merge($T,$Lf));}function
trigger($D){if($D=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($ye){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
support($Yb){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Yb);}$y="mssql";$vf=array();$Qe=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$z=>$X){$vf+=$X;$Qe[$z]=array_keys($X);}$Bf=array();$Fd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$pc=array("len","lower","round","upper");$rc=array("avg","count","count distinct","max","min","sum");$Bb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$xb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Xd=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($I,$wf=false){$G=array('SelectExpression'=>$I,'ConsistentRead'=>'true');if($this->next)$G['NextToken']=$this->next;$J=sdb_request_all('Select','Item',$G,$this->timeout);if($J===false)return$J;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$I)){$Ue=0;foreach($J
as$Oc)$Ue+=$Oc->Attribute->Value;$J=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Ue,))));}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($J){foreach($J
as$Oc){$L=array();if($Oc->Name!='')$L['itemName()']=(string)$Oc->Name;foreach($Oc->Attribute
as$_a){$D=$this->_processValue($_a->Name);$Y=$this->_processValue($_a->Value);if(isset($L[$D])){$L[$D]=(array)$L[$D];$L[$D][]=$Y;}else$L[$D]=$Y;}$this->_rows[]=$L;foreach($L
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($Db){return(is_object($Db)&&$Db['encoding']=='base64'?base64_decode($Db):(string)$Db);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$z=>$X)$K[$z]=$L[$z];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Tc=array_keys($this->_rows[0]);return(object)array('name'=>$Tc[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{function
_chunkRequest($Cc,$pa,$G,$Sb=array()){global$h;foreach(array_chunk($Cc,25)as$Qa){$Pd=$G;foreach($Qa
as$t=>$u){$Pd["Item.$t.ItemName"]=$u;foreach($Sb
as$z=>$X)$Pd["Item.$t.$z"]=$X;}if(!sdb_request($pa,$Pd))return
false;}$h->affected_rows=count($Cc);return
true;}function
_extractIds($R,$he,$_){$K=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$he,$id))$K=array_map('idf_unescape',$id[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$he.($_?" LIMIT 1":"")))as$Oc)$K[]=$Oc->Name;}return$K;}function
select($R,$N,$Z,$s,$E,$_,$F,$be=false){global$h;$h->next=$_GET["next"];$K=parent::select($R,$N,$Z,$s,$E,$_,$F,$be);$h->next=0;return$K;}function
delete($R,$he,$_=0){return$this->_chunkRequest($this->_extractIds($R,$he,$_),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$P,$he,$_=0,$Ee="\n"){$nb=array();$Mc=array();$t=0;$Cc=$this->_extractIds($R,$he,$_);$u=idf_unescape($P["`itemName()`"]);unset($P["`itemName()`"]);foreach($P
as$z=>$X){$z=idf_unescape($z);if($X=="NULL"||($u!=""&&array($u)!=$Cc))$nb["Attribute.".count($nb).".Name"]=$z;if($X!="NULL"){foreach((array)$X
as$Pc=>$W){$Mc["Attribute.$t.Name"]=$z;$Mc["Attribute.$t.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Pc)$Mc["Attribute.$t.Replace"]="true";$t++;}}}$G=array('DomainName'=>$R);return(!$Mc||$this->_chunkRequest(($u!=""?array($u):$Cc),'BatchPutAttributes',$G,$Mc))&&(!$nb||$this->_chunkRequest($Cc,'BatchDeleteAttributes',$G,$nb));}function
insert($R,$P){$G=array("DomainName"=>$R);$t=0;foreach($P
as$D=>$Y){if($Y!="NULL"){$D=idf_unescape($D);if($D=="itemName()")$G["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$G["Attribute.$t.Name"]=$D;$G["Attribute.$t.Value"]=(is_array($Y)?$X:idf_unescape($Y));$t++;}}}}return
sdb_request('PutAttributes',$G);}function
insertUpdate($R,$M,$Zd){foreach($M
as$P){if(!$this->update($R,$P,"WHERE `itemName()` = ".q($P["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Yb){return
preg_match('~sql~',$Yb);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$Wa){}function
tables_list(){global$h;$K=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$K[(string)$R]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$K;}function
table_status($D="",$Xb=false){$K=array();foreach(($D!=""?array($D=>true):tables_list())as$R=>$U){$L=array("Name"=>$R,"Auto_increment"=>"");if(!$Xb){$qd=sdb_request('DomainMetadata',array('DomainName'=>$R));if($qd){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$z=>$X)$L[$z]=(string)$qd->$X;}}if($D!="")return$L;$K[$R]=$L;}return$K;}function
explain($h,$I){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){$K=array();foreach((array)$_POST["field_keys"]as$z=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$z];$_POST["fields"][$X]=$_POST["field_vals"][$z];}}foreach((array)$_POST["fields"]as$z=>$X){$D=bracket_escape($z,1);$K[$D]=array("field"=>$D,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1);}return$K;}function
foreign_keys($R){return
array();}function
table($v){return
idf_escape($v);}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
limit($I,$Z,$_,$zd=0,$Ee=" "){return" $I$Z".($_!==null?$Ee."LIMIT $_":"");}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$D)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($ta,$jb,$z,$le=false){$Ka=64;if(strlen($z)>$Ka)$z=pack("H*",$ta($z));$z=str_pad($z,$Ka,"\0");$Qc=$z^str_repeat("\x36",$Ka);$Rc=$z^str_repeat("\x5C",$Ka);$K=$ta($Rc.pack("H*",$ta($Qc.$jb)));if($le)$K=pack("H*",$K);return$K;}function
sdb_request($pa,$G=array()){global$b,$h;list($_c,$G['AWSAccessKeyId'],$Ae)=$b->credentials();$G['Action']=$pa;$G['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$G['Version']='2009-04-15';$G['SignatureVersion']=2;$G['SignatureMethod']='HmacSHA1';ksort($G);$I='';foreach($G
as$z=>$X)$I.='&'.rawurlencode($z).'='.rawurlencode($X);$I=str_replace('%7E','~',substr($I,1));$I.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$_c)."\n/\n$I",$Ae,true)));@ini_set('track_errors',1);$Zb=@file_get_contents((preg_match('~^https?://~',$_c)?$_c:"http://$_c"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$I,'ignore_errors'=>1,))));if(!$Zb){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Rf=simplexml_load_string($Zb);if(!$Rf){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($Rf->Errors){$n=$Rf->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$Ze=$pa."Result";return($Rf->$Ze?$Rf->$Ze:true);}function
sdb_request_all($pa,$Ze,$G=array(),$gf=0){$K=array();$Ne=($gf?microtime(true):0);$_=(preg_match('~LIMIT\s+(\d+)\s*$~i',$G['SelectExpression'],$B)?$B[1]:0);do{$Rf=sdb_request($pa,$G);if(!$Rf)break;foreach($Rf->$Ze
as$Db)$K[]=$Db;if($_&&count($K)>=$_){$_GET["next"]=$Rf->NextToken;break;}if($gf&&microtime(true)-$Ne>$gf)return
false;$G['NextToken']=$Rf->NextToken;if($_)$G['SelectExpression']=preg_replace('~\d+\s*$~',$_-count($K),$G['SelectExpression']);}while($Rf->NextToken);return$K;}$y="simpledb";$Fd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$pc=array();$rc=array("count");$Bb=array(array("json"));}$xb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Xd=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$_link,$_db;function
connect($O,$V,$H){global$b;$m=$b->database();$Hd=array();if($V!=""){$Hd["username"]=$V;$Hd["password"]=$H;}if($m!="")$Hd["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$O",$Hd);return
true;}catch(Exception$Ob){$this->error=$Ob->getMessage();return
false;}}function
query($I){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$Ob){$this->error=$Ob->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($J){foreach($J
as$Oc){$L=array();foreach($Oc
as$z=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$z]=63;$L[$z]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$L;foreach($L
as$z=>$X){if(!isset($this->_rows[0][$z]))$this->_rows[0][$z]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$L=current($this->_rows);if(!$L)return$L;$K=array();foreach($this->_rows[0]as$z=>$X)$K[$z]=$L[$z];next($this->_rows);return$K;}function
fetch_row(){$K=$this->fetch_assoc();if(!$K)return$K;return
array_values($K);}function
fetch_field(){$Tc=array_keys($this->_rows[0]);$D=$Tc[$this->_offset++];return(object)array('name'=>$D,'charsetnr'=>$this->_charset[$D],);}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$s,$E,$_,$F,$be=false){$N=($N==array("*")?array():array_fill_keys($N,true));$Je=array();foreach($E
as$X){$X=preg_replace('~ DESC$~','',$X,1,$fb);$Je[$X]=($fb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($R)->find(array(),$N)->sort($Je)->limit(+$_)->skip($F*$_)));}function
insert($R,$P){try{$K=$this->_conn->_db->selectCollection($R)->insert($P);$this->_conn->errno=$K['code'];$this->_conn->error=$K['err'];return!$K['err'];}catch(Exception$Ob){$this->_conn->error=$Ob->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($ec){global$h;$K=array();$kb=$h->_link->listDBs();foreach($kb['databases']as$m)$K[]=$m['name'];return$K;}function
collations(){return
array();}function
db_collation($m,$Wa){}function
count_tables($l){global$h;$K=array();foreach($l
as$m)$K[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$K;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($D="",$Xb=false){$K=array();foreach(tables_list()as$R=>$U){$K[$R]=array("Name"=>$R);if($D==$R)return$K[$R];}return$K;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$h;foreach($l
as$m){$se=$h->_link->selectDB($m)->drop();if(!$se['ok'])return
false;}return
true;}function
indexes($R,$i=null){global$h;$K=array();foreach($h->_db->selectCollection($R)->getIndexInfo()as$w){$qb=array();foreach($w["key"]as$f=>$U)$qb[]=($U==-1?'1':null);$K[$w["name"]]=array("type"=>($w["name"]=="_id_"?"PRIMARY":($w["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($w["key"]),"descs"=>$qb,);}return$K;}function
fields($R){return
array();}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){global$h;if($R==""){$h->_db->createCollection($D);return
true;}}function
drop_tables($T){global$h;foreach($T
as$R){$se=$h->_db->selectCollection($R)->drop();if(!$se['ok'])return
false;}return
true;}function
truncate_tables($T){global$h;foreach($T
as$R){$se=$h->_db->selectCollection($R)->remove();if(!$se['ok'])return
false;}return
true;}function
table($v){return$v;}function
idf_escape($v){return$v;}function
support($Yb){return
preg_match("~database|indexes~",$Yb);}$y="mongo";$Fd=array("=");$pc=array();$rc=array();$Bb=array(array("json"));}$xb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Xd=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
query($Rd,$db=array(),$rd='GET'){@ini_set('track_errors',1);$Zb=@file_get_contents($this->_url.($this->_db!=""?"$this->_db/":"").$Rd,false,stream_context_create(array('http'=>array('method'=>$rd,'content'=>json_encode($db),'ignore_errors'=>1,))));if(!$Zb){$this->error=$php_errormsg;return$Zb;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Zb;return
false;}$K=json_decode($Zb,true);if(!$K){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$cb=get_defined_constants(true);foreach($cb['json']as$D=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$D)){$this->error=$D;break;}}}}return$K;}function
connect($O,$V,$H){$this->_url="http://$V:$H@$O/";$K=$this->query('');if($K)$this->server_info=$K['version']['number'];return(bool)$K;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($M){$this->num_rows=count($this->_rows);$this->_rows=$M;reset($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);next($this->_rows);return$K;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$N,$Z,$s,$E,$_,$F,$be=false){global$b;$jb=array();$I="$R/_search";if($N!=array("*"))$jb["fields"]=$N;if($E){$Je=array();foreach($E
as$Va){$Va=preg_replace('~ DESC$~','',$Va,1,$fb);$Je[]=($fb?array($Va=>"desc"):$Va);}$jb["sort"]=$Je;}if($_){$jb["size"]=+$_;if($F)$jb["from"]=($F*$_);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$bf=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$jb["query"]["filtered"]["filter"]["and"][]=$bf;else$jb["query"]["filtered"]["query"]["bool"]["must"][]=$bf;}}if($jb["query"]&&!$jb["query"]["filtered"]["query"])$jb["query"]["filtered"]["query"]=array("match_all"=>array());if($be)echo$b->selectQuery("$I: ".print_r($jb,true));$_e=$this->_conn->query($I,$jb);if(!$_e)return
false;$K=array();foreach($_e['hits']['hits']as$zc){$L=array();$p=$zc['_source'];if($N!=array("*")){$p=array();foreach($N
as$z)$p[$z]=$zc['fields'][$z];}foreach($p
as$z=>$X)$L[$z]=(is_array($X)?json_encode($X):$X);$K[]=$L;}return
new
Min_Result($K);}}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2]))return$h;return$h->error;}function
support($Yb){return
preg_match("~database|table|columns~",$Yb);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$h;$K=$h->query('_aliases');if($K)$K=array_keys($K);return$K;}function
collations(){return
array();}function
db_collation($m,$Wa){}function
count_tables($l){global$h;$K=$h->query('_mapping');if($K)$K=array_map('count',$K);return$K;}function
tables_list(){global$h;$K=$h->query('_mapping');if($K)$K=array_fill_keys(array_keys(reset($K)),'table');return$K;}function
table_status($D="",$Xb=false){$K=tables_list();if($K){foreach($K
as$z=>$U)$K[$z]=array("Name"=>$z,"Engine"=>$U);if($D!="")return$K[$D];}return$K;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$h;$gd=$h->query("$R/_mapping");$K=array();if($gd){foreach($gd[$R]['properties']as$D=>$o)$K[$D]=array("field"=>$D,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
foreign_keys($R){return
array();}function
table($v){return$v;}function
idf_escape($v){return$v;}function
convert_field($o){}function
unconvert_field($o,$K){return$K;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$h;return$h->query(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->query(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$h;$K=true;foreach($T
as$R)$K=$K&&$h->query(urlencode($R),array(),'DELETE');return$K;}$y="elastic";$Fd=array("=","query");$pc=array();$rc=array();$Bb=array(array("json"));}$xb=array("server"=>"MySQL")+$xb;if(!defined("DRIVER")){$Xd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$V,$H){mysqli_report(MYSQLI_REPORT_OFF);list($_c,$Vd)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$_c:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$H!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($Vd)?$Vd:ini_get("mysqli.default_port")),(!is_numeric($Vd)?$Vd:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$o=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$H){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($I,$wf=false){$J=@($wf?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$o=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$H);$this->query("SET NAMES utf8");return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($I,$wf=false){$this->setAttribute(1000,!$wf);return
parent::query($I,$wf);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$Zd){$g=array_keys(reset($M));$Yd="INSERT INTO ".table($R)." (".implode(", ",$g).") VALUES\n";$Hf=array();foreach($g
as$z)$Hf[$z]="$z = VALUES($z)";$Te="\nON DUPLICATE KEY UPDATE ".implode(", ",$Hf);$Hf=array();$ad=0;foreach($M
as$P){$Y="(".implode(", ",$P).")";if($Hf&&(strlen($Yd)+$ad+strlen($Y)+strlen($Te)>1e6)){if(!queries($Yd.implode(",\n",$Hf).$Te))return
false;$Hf=array();$ad=0;}$Hf[]=$Y;$ad+=strlen($Y)+2;}return
queries($Yd.implode(",\n",$Hf).$Te);}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$b;$h=new
Min_DB;$j=$b->credentials();if($h->connect($j[0],$j[1],$j[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$K=$h->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($xe=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$xe;return$K;}function
get_databases($ec){global$h;$K=get_session("dbs");if($K===null){$I=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($ec?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$_,$zd=0,$Ee=" "){return" $I$Z".($_!==null?$Ee."LIMIT $_".($zd?" OFFSET $zd":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($m,$Wa){global$h;$K=null;$gb=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$gb,$B))$K=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$gb,$B))$K=$Wa[$B[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$K=array();foreach($l
as$m)$K[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$K;}function
table_status($D="",$Xb=false){global$h;$K=array();foreach(get_rows($Xb&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($D!=""?"AND TABLE_NAME = ".q($D):"ORDER BY Name"):"SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($D!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$B);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$B[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$B)?$B[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$i=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$i)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$h,$Ad;static$Sd='`(?:[^`]|``)+`';$K=array();$hb=$h->result("SHOW CREATE TABLE ".table($R),1);if($hb){preg_match_all("~CONSTRAINT ($Sd) FOREIGN KEY \\(((?:$Sd,? ?)+)\\) REFERENCES ($Sd)(?:\\.($Sd))? \\(((?:$Sd,? ?)+)\\)(?: ON DELETE ($Ad))?(?: ON UPDATE ($Ad))?~",$hb,$id,PREG_SET_ORDER);foreach($id
as$B){preg_match_all("~$Sd~",$B[2],$Ke);preg_match_all("~$Sd~",$B[5],$af);$K[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Ke[0]),"target"=>array_map('idf_unescape',$af[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$K;}function
view($D){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$z=>$X)asort($K[$z]);return$K;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(preg_match('~ at line ([0-9]+)$~',$h->error,$ne))return$ne[1]-1;}function
create_database($m,$e){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($m).($e?" COLLATE ".q($e):""));}function
drop_databases($l){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($D,$e){if(create_database($D,$e)){$pe=array();foreach(tables_list()as$R=>$U)$pe[]=table($R)." TO ".idf_escape($D).".".table($R);if(!$pe||queries("RENAME TABLE ".implode(", ",$pe))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ca=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$Ca="";break;}if($w["type"]=="PRIMARY")$Ca=" UNIQUE";}}return" AUTO_INCREMENT$Ca";}function
alter_table($R,$D,$p,$fc,$Za,$Jb,$e,$Ba,$Qd){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$fc);$Oe="COMMENT=".q($Za).($Jb?" ENGINE=".q($Jb):"").($e?" COLLATE ".q($e):"").($Ba!=""?" AUTO_INCREMENT=$Ba":"").$Qd;if($R=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$c)."\n) $Oe");if($R!=$D)$c[]="RENAME TO ".table($D);$c[]=$Oe;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c));}function
alter_indexes($R,$c){foreach($c
as$z=>$X)$c[$z]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Lf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Lf)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Lf,$af){$pe=array();foreach(array_merge($T,$Lf)as$R)$pe[]=table($R)." TO ".idf_escape($af).".".table($R);return
queries("RENAME TABLE ".implode(", ",$pe));}function
copy_tables($T,$Lf,$af){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$D=($af==DB?table("copy_$R"):idf_escape($af).".".table($R));if(!queries("DROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($R))||!queries("INSERT INTO $D SELECT * FROM ".table($R)))return
false;}foreach($Lf
as$R){$D=($af==DB?table("copy_$R"):idf_escape($af).".".table($R));$Kf=view($R);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $Kf[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$h,$Kb,$Kc,$vf;$ua=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$uf="((".implode("|",array_merge(array_keys($vf),$ua)).")\\b(?:\\s*\\(((?:[^'\")]*|$Kb)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$Sd="\\s*(".($U=="FUNCTION"?"":$Kc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$uf";$gb=$h->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$Sd\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$uf\\s+":"")."(.*)~is",$gb,$B);$p=array();preg_match_all("~$Sd\\s*,?~is",$B[1],$id,PREG_SET_ORDER);foreach($id
as$Od){$D=str_replace("``","`",$Od[2]).$Od[3];$p[]=array("field"=>$D,"type"=>strtolower($Od[5]),"length"=>preg_replace_callback("~$Kb~s",'normalize_enum',$Od[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Od[8] $Od[7]"))),"null"=>1,"full_type"=>$Od[4],"inout"=>strtoupper($Od[1]),"collation"=>strtolower($Od[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$I){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ye){return
true;}function
create_sql($R,$Ba){global$h;$K=$h->result("SHOW CREATE TABLE ".table($R),1);if(!$Ba)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$Re){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Re=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$K){if(preg_match("~binary~",$o["type"]))$K="UNHEX($K)";if($o["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$K="GeomFromText($K)";return$K;}function
support($Yb){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$Yb);}$y="sql";$vf=array();$Qe=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$z=>$X){$vf+=$X;$Qe[$z]=array_keys($X);}$Bf=array("unsigned","zerofill","unsigned zerofill");$Fd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$pc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$rc=array("avg","count","count distinct","group_concat","max","min","sum");$Bb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' target='_blank' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($gb=false){return
password_file($gb);}function
database(){global$h;if($h){$l=$this->databases(false);return(!$l?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$l[(information_schema($l[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($ec=true){return
get_databases($ec);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($ed,$H){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($We){return
h($We["Comment"]!=""?$We["Comment"]:$We["Name"]);}function
fieldName($o,$E=0){return
h($o["comment"]!=""?$o["comment"]:$o["field"]);}function
selectLinks($We,$P=""){$a=$We["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'New item'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Ve){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$z=>$X){$D=$this->tableName(table_status($z,true));if($D!=""){$_e=preg_quote($Ve);$Ee="(:|\\s*-)?\\s+";$K[$z]["name"]=(preg_match("(^$_e$Ee(.+)|^(.+?)$Ee$_e\$)iu",$D,$B)?$B[2].$B[3]:$D);}else
unset($K[$z]);}return$K;}function
backwardKeysPrint($Fa,$L){foreach($Fa
as$R=>$Ea){foreach($Ea["keys"]as$Xa){$A=ME.'select='.urlencode($R);$t=0;foreach($Xa
as$f=>$X)$A.=where_link($t++,$f,$L[$X]);echo"<a href='".h($A)."'>".h($Ea["name"])."</a>";$A=ME.'edit='.urlencode($R);foreach($Xa
as$f=>$X)$A.="&set".urlencode("[".bracket_escape($f)."]")."=".urlencode($L[$X]);echo"<a href='".h($A)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$o){if(preg_match("~varchar|character varying~",$o["type"]))return
idf_escape($o["field"]);}return"";}function
rowDescriptions($M,$hc){$K=$M;foreach($M[0]as$z=>$X){if(list($R,$u,$D)=$this->_foreignColumn($hc,$z)){$Cc=array();foreach($M
as$L)$Cc[$L[$z]]=q($L[$z]);$pb=$this->_values[$R];if(!$pb)$pb=get_key_vals("SELECT $u, $D FROM ".table($R)." WHERE $u IN (".implode(", ",$Cc).")");foreach($M
as$C=>$L){if(isset($L[$z]))$K[$C][$z]=(string)$pb[$L[$z]];}}}return$K;}function
selectLink($X,$o){}function
selectVal($X,$A,$o,$Kd){$K=($X===null?"&nbsp;":$X);$A=h($A);if(preg_match('~blob|bytea~',$o["type"])&&!is_utf8($X)){$K=lang(array('%d byte','%d bytes'),strlen($Kd));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Kd))$K="<img src='$A' alt='$K'>";}if(like_bool($o)&&$K!="&nbsp;")$K=($X?'yes':'no');if($A)$K="<a href='$A'>$K</a>";if(!$A&&!like_bool($o)&&preg_match('~int|float|double|decimal~',$o["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$o["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$o){if(preg_match('~date|timestamp~',$o["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$X);return$X;}function
selectColumnsPrint($N,$g){}function
selectSearchPrint($Z,$g,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$Tc=array();foreach($Z
as$z=>$X)$Tc[$X["col"]]=$z;$t=0;$p=fields($_GET["select"]);foreach($g
as$D=>$ob){$o=$p[$D];if(preg_match("~enum~",$o["type"])||like_bool($o)){$z=$Tc[$D];$t--;echo"<div>".h($ob)."<input type='hidden' name='where[$t][col]' value='".h($D)."'>:",(like_bool($o)?" <select name='where[$t][val]'>".optionlist(array(""=>"",'no','yes'),$Z[$z]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$o,(array)$Z[$z]["val"],($o["null"]?0:null))),"</div>\n";unset($g[$D]);}elseif(is_array($Hd=$this->_foreignKeyOptions($_GET["select"],$D))){if($p[$D]["null"])$Hd[0]='('.'empty'.')';$z=$Tc[$D];$t--;echo"<div>".h($ob)."<input type='hidden' name='where[$t][col]' value='".h($D)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($Hd,$Z[$z]["val"],true)."</select></div>\n";unset($g[$D]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$g[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".'anywhere'.")".optionlist($g,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($g,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$g,$x){$Jd=array();foreach($x
as$z=>$w){$E=array();foreach($w["columns"]as$X)$E[]=$g[$X];if(count(array_filter($E,'strlen'))>1&&$z!="PRIMARY")$Jd[$z]=implode(", ",$E);}if($Jd){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Jd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($df){}function
selectActionPrint($x){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Fb,$g){if($Fb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$g,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Fb)==1?'<input type="hidden" name="email_field" value="'.h(key($Fb)).'">':html_select("email_field",$Fb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($g,$x){return
array(array(),array());}function
selectSearchProcess($p,$x){$K=array();foreach((array)$_GET["where"]as$z=>$Z){$Va=$Z["col"];$Dd=$Z["op"];$X=$Z["val"];if(($z<0?"":$Va).$X!=""){$ab=array();foreach(($Va!=""?array($Va=>$p[$Va]):$p)as$D=>$o){if($Va!=""||is_numeric($X)||!preg_match('~int|float|double|decimal~',$o["type"])){$D=idf_escape($D);if($Va!=""&&$o["type"]=="enum")$ab[]=(in_array(0,$X)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$X)).")";else{$ef=preg_match('~char|text|enum|set~',$o["type"]);$Y=$this->processInput($o,(!$Dd&&$ef&&preg_match('~^[^%]+$~',$X)?"%$X%":$X));$ab[]=$D.($Y=="NULL"?" IS".($Dd==">="?" NOT":"")." $Y":(in_array($Dd,$this->operators)||$Dd=="="?" $Dd $Y":($ef?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($z<0&&$X=="0")$ab[]="$D IS NULL";}}}$K[]=($ab?"(".implode(" OR ",$ab).")":"0");}}return$K;}function
selectOrderProcess($p,$x){$Fc=$_GET["index_order"];if($Fc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Fc!=""?array($x[$Fc]):$x)as$w){if($Fc!=""||$w["type"]=="INDEX"){$tc=array_filter($w["descs"]);$ob=false;foreach($w["columns"]as$X){if(preg_match('~date|timestamp~',$p[$X]["type"])){$ob=true;break;}}$K=array();foreach($w["columns"]as$z=>$X)$K[]=idf_escape($X).(($tc?$w["descs"][$z]:$ob)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$hc){if($_POST["email_append"])return
true;if($_POST["email"]){$De=0;if($_POST["all"]||$_POST["check"]){$o=idf_escape($_POST["email_field"]);$Se=$_POST["email_subject"];$od=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Se.$od",$id);$M=get_rows("SELECT DISTINCT $o".($id[1]?", ".implode(", ",array_map('idf_escape',array_unique($id[1]))):"")." FROM ".table($_GET["select"])." WHERE $o IS NOT NULL AND $o != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$p=fields($_GET["select"]);foreach($this->rowDescriptions($M,$hc)as$L){$qe=array('{\\'=>'{');foreach($id[1]as$X)$qe['{$'."$X}"]=$this->editVal($L[$X],$p[$X]);$Eb=$L[$_POST["email_field"]];if(is_mail($Eb)&&send_mail($Eb,strtr($Se,$qe),strtr($od,$qe),$_POST["email_from"],$_FILES["email_files"]))$De++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$De));}return
false;}function
selectQueryBuild($N,$Z,$s,$E,$_,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($o){$K=array();if($o["null"]&&preg_match('~blob~',$o["type"]))$K["NULL"]='empty';$K[""]=($o["null"]||$o["auto_increment"]||like_bool($o)?"":"*");if(preg_match('~date|time~',$o["type"]))$K["now"]='now';if(preg_match('~_(md5|sha1)$~i',$o["field"],$B))$K[]=strtolower($B[1]);return$K;}function
editInput($R,$o,$d,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$d value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$d,$o,($Y||isset($_GET["select"])?$Y:0),($o["null"]?"":null));$Hd=$this->_foreignKeyOptions($R,$o["field"],$Y);if($Hd!==null)return(is_array($Hd)?"<select$d>".optionlist($Hd,$Y,true)."</select>":"<input value='".h($Y)."'$d class='hidden'><input value='".h($Hd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($o["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($o))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$d>";$yc="";if(preg_match('~time~',$o["type"]))$yc='HH:MM:SS';if(preg_match('~date|timestamp~',$o["type"]))$yc='[yyyy]-mm-dd'.($yc?" [$yc]":"");if($yc)return"<input value='".h($Y)."'$d> ($yc)";if(preg_match('~_(md5|sha1)$~i',$o["field"]))return"<input type='password' value='".h($Y)."'$d>";return'';}function
processInput($o,$Y,$r=""){if($r=="now")return"$r()";$K=$Y;if(preg_match('~date|timestamp~',$o["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$Y,$B))$K=($B["p1"]!=""?$B["p1"]:($B["p2"]!=""?($B["p2"]<70?20:19).$B["p2"]:gmdate("Y")))."-$B[p3]$B[p4]-$B[p5]$B[p6]".end($B);$K=($o["type"]=="bit"&&preg_match('~^[0-9]+$~',$Y)?$K:q($K));if($Y==""&&like_bool($o))$K="0";elseif($Y==""&&($o["null"]||!preg_match('~char|text~',$o["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$r))$K="$r($K)";return
unconvert_field($o,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Re,$I){global$h;$J=$h->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Re=="table"){dump_csv(array_keys($L));$Re="INSERT";}dump_csv($L);}}}function
dumpFilename($Bc){return
friendly_url($Bc);}function
dumpHeaders($Bc,$td=false){$Tb="csv";header("Content-Type: text/csv; charset=utf-8");return$Tb;}function
homepage(){return
true;}function
navigation($sd){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($sd=="auth"){$dc=true;foreach((array)$_SESSION["pwds"]as$If=>$Ge){foreach($Ge[""]as$V=>$H){if($H!==null){if($dc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$dc=false;}echo"<a href='".h(auth_url($If,"",$V))."'>".($V!=""?h($V):"<i>".'empty'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($sd);if($sd!="db"&&$sd!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($sd){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$D=$this->tableName($L);if(isset($L["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"])." title='".'Select data'."'>$D</a><br>\n";}}function
_foreignColumn($hc,$f){foreach((array)$hc[$f]as$gc){if(count($gc["source"])==1){$D=$this->rowDescription($gc["table"]);if($D!=""){$u=idf_escape($gc["target"][0]);return
array($gc["table"],$u,$D);}}}}function
_foreignKeyOptions($R,$f,$Y=null){global$h;if(list($af,$u,$D)=$this->_foreignColumn(column_foreign_keys($R),$f)){$K=&$this->_values[$af];if($K===null){$S=table_status($af);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $D FROM ".table($af)." ORDER BY 2"));}if(!$K&&$Y!==null)return$h->result("SELECT $D FROM ".table($af)." WHERE $u = ".q($Y));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($if,$n="",$Na=array(),$jf=""){global$ba,$ca,$b,$h,$xb,$y;page_headers();$kf=$if.($jf!=""?": $jf":"");$lf=strip_tags($kf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$lf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.2",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ca');"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$y,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Na!==null){$A=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$xb[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($Na===false)echo"$O\n";else{echo"<a href='".($A?h($A):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Na)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Na)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Na
as$z=>$X){$ob=(is_array($X)?$X[1]:h($X));if($ob!="")echo"<a href='".h(ME."$z=").urlencode(is_array($X)?$X[0]:$X)."'>$ob</a> &raquo; ";}}echo"$if\n";}}echo"<h2>$kf</h2>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Df=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$pd=$_SESSION["messages"][$Df];if($pd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$pd)."</div>\n";unset($_SESSION["messages"][$Df]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($sd=""){global$b,$nf;echo'</div>

';if($sd!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$nf,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($sd);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($W,$Nf){$xe='';foreach($W
as$X)$xe.=pack('V',$X);if($Nf)return
substr($xe,0,end($W));return$xe;}function
str2long($xe,$Nf){$W=array_values(unpack('V*',str_pad($xe,4*ceil(strlen($xe)/4),"\0")));if($Nf)$W[]=strlen($xe);return$W;}function
xxtea_mx($Tf,$Sf,$Ue,$Pc){return
int32((($Tf>>5&0x7FFFFFF)^$Sf<<2)+(($Sf>>3&0x1FFFFFFF)^$Tf<<4))^int32(($Ue^$Sf)+($Pc^$Tf));}function
encrypt_string($Pe,$z){if($Pe=="")return"";$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Pe,true);$C=count($W)-1;$Tf=$W[$C];$Sf=$W[0];$fe=floor(6+52/($C+1));$Ue=0;while($fe-->0){$Ue=int32($Ue+0x9E3779B9);$Ab=$Ue>>2&3;for($Nd=0;$Nd<$C;$Nd++){$Sf=$W[$Nd+1];$ud=xxtea_mx($Tf,$Sf,$Ue,$z[$Nd&3^$Ab]);$Tf=int32($W[$Nd]+$ud);$W[$Nd]=$Tf;}$Sf=$W[0];$ud=xxtea_mx($Tf,$Sf,$Ue,$z[$Nd&3^$Ab]);$Tf=int32($W[$C]+$ud);$W[$C]=$Tf;}return
long2str($W,false);}function
decrypt_string($Pe,$z){if($Pe=="")return"";if(!$z)return
false;$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Pe,false);$C=count($W)-1;$Tf=$W[$C];$Sf=$W[0];$fe=floor(6+52/($C+1));$Ue=int32($fe*0x9E3779B9);while($Ue){$Ab=$Ue>>2&3;for($Nd=$C;$Nd>0;$Nd--){$Tf=$W[$Nd-1];$ud=xxtea_mx($Tf,$Sf,$Ue,$z[$Nd&3^$Ab]);$Sf=int32($W[$Nd]-$ud);$W[$Nd]=$Sf;}$Tf=$W[$C];$ud=xxtea_mx($Tf,$Sf,$Ue,$z[$Nd&3^$Ab]);$Sf=int32($W[0]-$ud);$W[0]=$Sf;$Ue=int32($Ue-0x9E3779B9);}return
long2str($W,true);}$h='';$vc=$_SESSION["token"];if(!$vc)$_SESSION["token"]=rand(1,1e6);$nf=get_token();$Td=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($z)=explode(":",$X);$Td[$z]=$X;}}$Aa=$_POST["auth"];if($Aa){session_regenerate_id();$wb=$Aa["driver"];$O=$Aa["server"];$V=$Aa["username"];$H=$Aa["password"];$m=$Aa["db"];set_password($wb,$O,$V,$H);$_SESSION["db"][$wb][$O][$V][$m]=true;if($Aa["permanent"]){$z=base64_encode($wb)."-".base64_encode($O)."-".base64_encode($V)."-".base64_encode($m);$ce=$b->permanentLogin(true);$Td[$z]="$z:".base64_encode($ce?encrypt_string($H,$ce):"");cookie("adminer_permanent",implode(" ",$Td));}if(count($_POST)==1||DRIVER!=$wb||SERVER!=$O||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($wb,$O,$V,$m));}elseif($_POST["logout"]){if($vc&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$z)set_session($z,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Td&&!$_SESSION["pwds"]){session_regenerate_id();$ce=$b->permanentLogin();foreach($Td
as$z=>$X){list(,$Ra)=explode(":",$X);list($If,$O,$V,$m)=array_map('base64_decode',explode("-",$z));set_password($If,$O,$V,decrypt_string(base64_decode($Ra),$ce));$_SESSION["db"][$If][$O][$V][$m]=true;}}function
unset_permanent(){global$Td;foreach($Td
as$z=>$X){list($If,$O,$V,$m)=array_map('base64_decode',explode("-",$z));if($If==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Td[$z]);}cookie("adminer_permanent",implode(" ",$Td));}function
auth_error($Qb=null){global$h,$b,$vc;$He=session_name();$n="";if(!$_COOKIE[$He]&&$_GET[$He]&&ini_bool("session.use_only_cookies"))$n='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$He]||$_GET[$He])&&!$vc)$n='Session expired, please login again.';else{$H=get_password();if($H!==null){$n=h($Qb?$Qb->getMessage():(is_string($h)?$h:'Invalid credentials.'));if($H===false)$n.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$G=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$G["lifetime"]);page_header('Login',$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($If,$O,$V,$H){$_SESSION["pwds"][$If][$O][$V]=($_COOKIE["adminer_key"]?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Xd)),false);page_footer("auth");exit;}$h=connect();}if(!is_object($h)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$wb=new
Min_Driver($h);if($Aa&&$_POST["token"])$_POST["token"]=$nf;$n='';if($_POST){if(!verify_token()){$Jc="max_input_vars";$md=ini_get($Jc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$z){$X=ini_get($z);if($X&&(!$md||$X<$md)){$Jc=$z;$md=$X;}}}$n=(!$_POST["token"]&&$md?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$Jc'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$h->select_db($b->database());function
email_header($wc){return"=?UTF-8?B?".base64_encode($wc)."?=";}function
send_mail($Eb,$Se,$od,$nc="",$bc=array()){$Lb=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$od=str_replace("\n",$Lb,wordwrap(str_replace("\r","","$od\n")));$Ma=uniqid("boundary");$za="";foreach((array)$bc["error"]as$z=>$X){if(!$X)$za.="--$Ma$Lb"."Content-Type: ".str_replace("\n","",$bc["type"][$z]).$Lb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$bc["name"][$z])."\"$Lb"."Content-Transfer-Encoding: base64$Lb$Lb".chunk_split(base64_encode(file_get_contents($bc["tmp_name"][$z])),76,$Lb).$Lb;}$Ha="";$xc="Content-Type: text/plain; charset=utf-8$Lb"."Content-Transfer-Encoding: 8bit";if($za){$za.="--$Ma--$Lb";$Ha="--$Ma$Lb$xc$Lb$Lb";$xc="Content-Type: multipart/mixed; boundary=\"$Ma\"";}$xc.=$Lb."MIME-Version: 1.0$Lb"."X-Mailer: Adminer Editor".($nc?$Lb."From: ".str_replace("\n","",$nc):"");return
mail($Eb,email_header($Se),$Ha.$od.$za,$xc);}function
like_bool($o){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$o["full_type"]);}$Ad="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$xb[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$p),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Cf=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$D=>$o){if(!isset($o["privileges"][$Cf?"update":"insert"])||$b->fieldName($o)=="")unset($p[$D]);}if($_POST&&!$n&&!isset($_GET["select"])){$dd=$_POST["referer"];if($_POST["insert"])$dd=($Cf?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$dd))$dd=ME."select=".urlencode($a);$x=indexes($a);$yf=unique_array($_GET["where"],$x);$ie="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($dd,'Item has been deleted.',$wb->delete($a,$ie,!$yf));else{$P=array();foreach($p
as$D=>$o){$X=process_input($o);if($X!==false&&$X!==null)$P[idf_escape($D)]=$X;}if($Cf){if(!$P)redirect($dd);queries_redirect($dd,'Item has been updated.',$wb->update($a,$P,$ie,!$yf));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$J=$wb->insert($a,$P);$Yc=($J?last_id():0);queries_redirect($dd,sprintf('Item%s has been inserted.',($Yc?" $Yc":"")),$J);}}}$Xe=$b->tableName(table_status1($a,true));page_header(($Cf?'Edit':'Insert'),$n,array("select"=>array($a,$Xe)),$Xe);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($p
as$D=>$o){if(isset($o["privileges"]["select"])){$xa=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$xa="''";if($y=="sql"&&preg_match("~enum|set~",$o["type"]))$xa="1*".idf_escape($D);$N[]=($xa?"$xa AS ":"").idf_escape($D);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$wb->select($a,$N,array($Z),$N,array(),(isset($_GET["select"])?2:1),0);$L=$J->fetch_assoc();if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$p){$u=($y=="mongo"?"_id":"itemName()");if(!$Z){$L=$wb->select($a,array("*"),$Z,array("*"),array(),1,0);$L=($L?$L->fetch_assoc():array($u=>""));}if($L){foreach($L
as$z=>$X){if(!$Z)$L[$z]=null;$p[$z]=array("field"=>$z,"null"=>($z!=$u),"auto_increment"=>($z==$u));}}}if($L===false)echo"<p class='error'>".'No rows.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$D=>$o){echo"<tr><th>".$b->fieldName($o);$mb=$_GET["set"][bracket_escape($D)];if($mb===null){$mb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$mb,$ne))$mb=$ne[1];}$Y=($L!==null?($L[$D]!=""&&$y=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($L[$D])?array_sum($L[$D]):+$L[$D]):$L[$D]):(!$Cf&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$mb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$D]:($Cf&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Cf?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($Cf?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$nf,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$x=indexes($a);$p=fields($a);$ic=column_foreign_keys($a);$_d="";if($S["Oid"]){$_d=($y=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($_d));}parse_str($_COOKIE["adminer_import"],$qa);$ve=array();$g=array();$df=null;foreach($p
as$z=>$o){$D=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$D!=""){$g[$z]=html_entity_decode(strip_tags($D),ENT_QUOTES);if(is_shortable($o))$df=$b->selectLengthProcess();}$ve+=$o["privileges"];}list($N,$s)=$b->selectColumnsProcess($g,$x);$Nc=count($s)<count($N);$Z=$b->selectSearchProcess($p,$x);$E=$b->selectOrderProcess($p,$x);$_=$b->selectLimitProcess();$nc=($N?implode(", ",$N):"*".($_d?", $_d":"")).convert_fields($g,$p,$N)."\nFROM ".table($a);$qc=($s&&$Nc?"\nGROUP BY ".implode(", ",$s):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$zf=>$L){$xa=convert_field($p[key($L)]);$N=array($xa?$xa:idf_escape(key($L)));$Z[]=where_check($zf,$p);$K=$wb->select($a,$N,$Z,$N,array(),1,0);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$n){$Pf=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Pf[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Pf=($Pf?"\nWHERE ".implode(" AND ",$Pf):"");$Zd=$Af=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$Zd=array_flip($w["columns"]);$Af=($N?$Zd:array());break;}}foreach((array)$Af
as$z=>$X){if(in_array(idf_escape($z),$N))unset($Af[$z]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Af===array())$I="SELECT $nc$Pf$qc";else{$xf=array();foreach($_POST["check"]as$X)$xf[]="(SELECT".limit($nc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$qc,1).")";$I=implode(" UNION ALL ",$xf);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($Z,$ic)){if($_POST["save"]||$_POST["delete"]){$J=true;$ra=0;$P=array();if(!$_POST["delete"]){foreach($g
as$D=>$X){$X=process_input($p[$D]);if($X!==null&&($_POST["clone"]||$X!==false))$P[idf_escape($D)]=($X!==false?$X:idf_escape($D));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($Af===array()&&is_array($_POST["check"]))||$Nc){$J=($_POST["delete"]?$wb->delete($a,$Pf):($_POST["clone"]?queries("INSERT $I$Pf"):$wb->update($a,$P,$Pf)));$ra=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Of="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$J=($_POST["delete"]?$wb->delete($a,$Of,1):($_POST["clone"]?queries("INSERT".limit1($I,$Of)):$wb->update($a,$P,$Of)));if(!$J)break;$ra+=$h->affected_rows;}}}$od=lang(array('%d item has been affected.','%d items have been affected.'),$ra);if($_POST["clone"]&&$J&&$ra==1){$Yc=last_id();if($Yc)$od=sprintf('Item%s has been inserted.'," $Yc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$od,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$n='Ctrl+click on a value to modify it.';else{$J=true;$ra=0;foreach($_POST["val"]as$zf=>$L){$P=array();foreach($L
as$z=>$X){$z=bracket_escape($z,1);$P[idf_escape($z)]=(preg_match('~char|text~',$p[$z]["type"])||$X!=""?$b->processInput($p[$z],$X):"NULL");}$J=$wb->update($a,$P," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($zf,$p),!($Nc||$Af===array())," ");if(!$J)break;$ra+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ra),$J);}}elseif(!is_string($Zb=get_file("csv_file",true)))$n=upload_error($Zb);elseif(!preg_match('~~u',$Zb))$n='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($qa["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Xa=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Zb,$id);$ra=count($id[0]);$wb->begin();$Ee=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($id[0]as$z=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Ee]*)$Ee~",$X.$Ee,$jd);if(!$z&&!array_diff($jd[1],$Xa)){$Xa=$jd[1];$ra--;}else{$P=array();foreach($jd[1]as$t=>$Va)$P[idf_escape($Xa[$t])]=($Va==""&&$p[$Xa[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Va))));$M[]=$P;}}$J=(!$M||$wb->insertUpdate($a,$M,$Zd));if($J)$wb->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ra),$J);$wb->rollback();}}}$Xe=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Xe",$n);$P=null;if(isset($ve["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$X){if(count($ic[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$P);if(!$g&&support("table"))echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$g);$b->selectSearchPrint($Z,$g,$x);$b->selectOrderPrint($E,$g,$x);$b->selectLimitPrint($_);$b->selectLengthPrint($df);$b->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$lc=$h->result(count_rows($a,$Z,$Nc,$s));$F=floor(max(0,$lc-1)/$_);}$Be=$N;if(!$Be){$Be[]="*";if($_d)$Be[]=$_d;}$eb=convert_fields($g,$p,$N);if($eb)$Be[]=substr($eb,2);$J=$wb->select($a,$Be,$Z,$s,$E,$_,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($y=="mssql"&&$F)$J->seek($_*$F);$Gb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$y=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$_&&$s&&$Nc&&$y=="sql")$lc=$h->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".'No rows.'."\n";else{$Ga=$b->backwardKeys($a,$Xe);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$s&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$vd=array();$pc=array();reset($N);$ke=1;foreach($M[0]as$z=>$X){if($z!=$_d){$X=$_GET["columns"][key($N)];$o=$p[$N?($X?$X["col"]:current($N)):$z];$D=($o?$b->fieldName($o,$ke):($X["fun"]?"*":$z));if($D!=""){$ke++;$vd[$z]=$D;$f=idf_escape($z);$Ac=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($z);$ob="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Ac.($E[0]==$f||$E[0]==$z||(!$E&&$Nc&&$s[0]==$f)?$ob:'')).'">';echo
apply_sql_function($X["fun"],$D)."</a>";echo"<span class='column hidden'>","<a href='".h($Ac.$ob)."' title='".'descending'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($z)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$pc[$z]=$X["fun"];next($N);}}$bd=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$z=>$X)$bd[$z]=max($bd[$z],min(40,strlen(utf8_decode($X))));}}echo($Ga?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($_%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$ic)as$C=>$L){$yf=unique_array($M[$C],$x);if(!$yf){$yf=array();foreach($M[$C]as$z=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$z))$yf[$z]=$X;}}$zf="";foreach($yf
as$z=>$X){if(($y=="sql"||$y=="pgsql")&&strlen($X)>64){$z="MD5(".(strpos($z,'(')?$z:idf_escape($z)).")";$X=md5($X);}$zf.="&".($X!==null?urlencode("where[".bracket_escape($z)."]")."=".urlencode($X):"null%5B%5D=".urlencode($z));}echo"<tr".odd().">".(!$s&&$N?"":"<td>".checkbox("check[]",substr($zf,1),in_array(substr($zf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Nc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$zf)."'>".'edit'."</a>"));foreach($L
as$z=>$X){if(isset($vd[$z])){$o=$p[$z];if($X!=""&&(!isset($Gb[$z])||$Gb[$z]!=""))$Gb[$z]=(is_mail($X)?$vd[$z]:"");$A="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$A=ME.'download='.urlencode($a).'&field='.urlencode($z).$zf;if(!$A&&$X!==null){foreach((array)$ic[$z]as$q){if(count($ic[$z])==1||end($q["source"])==$z){$A="";foreach($q["source"]as$t=>$Ke)$A.=where_link($t,$q["target"][$t],$M[$C][$Ke]);$A=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$A;if(count($q["source"])==1)break;}}}if($z=="COUNT(*)"){$A=ME."select=".urlencode($a);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$yf))$A.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($yf
as$Pc=>$W)$A.=where_link($t++,$Pc,$W);}$X=select_value($X,$A,$o,$df);$u=h("val[$zf][".bracket_escape($z)."]");$Y=$_POST["val"][$zf][bracket_escape($z)];$Cb=!is_array($L[$z])&&is_utf8($X)&&$M[$C][$z]==$L[$z]&&!$pc[$z];$cf=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$Cb)||$Y!==null){$sc=h($Y!==null?$Y:$L[$z]);echo"<td>".($cf?"<textarea name='$u' cols='30' rows='".(substr_count($L[$z],"\n")+1)."'>$sc</textarea>":"<input name='$u' value='$sc' size='$bd[$z]'>");}else{$fd=strpos($X,"<i>...</i>");echo"<td id='$u' onclick=\"selectClick(this, event, ".($fd?2:($cf?1:0)).($Cb?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Ga)echo"<td>";$b->backwardKeysPrint($Ga,$M[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$Pb=true;if($_GET["page"]!="last"){if(!+$_)$lc=count($M);elseif($y!="sql"||!$Nc){$lc=($Nc?false:found_rows($S,$Z));if($lc<max(1e4,2*($F+1)*$_))$lc=reset(slow_query(count_rows($a,$Z,$Nc,$s)));else$Pb=false;}}if(+$_&&($lc===false||$lc>$_||$F)){echo"<p class='pages'>";$kd=($lc===false?$F+(count($M)>=$_?2:1):floor(($lc-1)/$_));if($y!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($F+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$F).($F>5?" ...":"");for($t=max(1,$F-4);$t<min($kd,$F+5);$t++)echo
pagination($t,$F);if($kd>0){echo($F+5<$kd?" ...":""),($Pb&&$lc!==false?pagination($kd,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$kd'>".'last'."</a>");}echo(($lc===false?count($M)+1:$lc-$F*$_)>$_?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$_).', \''.'Loading'.'...\');">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($kd>$F?pagination($F+1,$F).($kd>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($lc!==false?"(".($Pb?"":"~ ").lang(array('%d row','%d rows'),$lc).") ":"");$ub=($Pb?"":"~ ").$lc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$ub' : checked); selectCount('selected2', this.checked || !checked ? '$ub' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$jc=$b->dumpFormat();foreach((array)$_GET["columns"]as$f){if($f["fun"]){unset($jc['sql']);break;}}if($jc){print_fieldset("export",'Export'." <span id='selected2'></span>");$Md=$b->dumpOutput();echo($Md?html_select("output",$Md,$qa["output"])." ":""),html_select("format",$jc,$qa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$s&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$qa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($Gb,'strlen'),$g);echo"<p><input type='hidden' name='token' value='$nf'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$h->query("KILL ".(+$_POST["kill"]));elseif(list($R,$u,$D)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$_=11;$J=$h->query("SELECT $u, $D FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$u = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $_");for($t=1;($L=$J->fetch_row())&&$t<$_;$t++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$L){$D=$b->tableName($L);if(isset($L["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$D</a>";$X=number_format($L["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();