<?PHP
//---------------------------
//県名
//---------------------------
$array_pref = array(
		'1'=>'北海道',
		'2'=>'青森県',
		'3'=>'岩手県',
		'4'=>'宮城県',
		'5'=>'秋田県',
		'6'=>'山形県',
		'7'=>'福島県',
		'8'=>'茨城県',
		'9'=>'栃木県',
		'10'=>'群馬県',
		'11'=>'埼玉県',
		'12'=>'千葉県',
		'13'=>'東京都',
		'14'=>'神奈川県',
		'15'=>'新潟県',
		'16'=>'富山県',
		'17'=>'石川県',
		'18'=>'福井県',
		'19'=>'山梨県',
		'20'=>'長野県',
		'21'=>'岐阜県',
		'22'=>'静岡県',
		'23'=>'愛知県',
		'24'=>'三重県',
		'25'=>'滋賀県',
		'26'=>'京都府',
		'27'=>'大阪府',
		'28'=>'兵庫県',
		'29'=>'奈良県',
		'30'=>'和歌山県',
		'31'=>'鳥取県',
		'32'=>'島根県',
		'33'=>'岡山県',
		'34'=>'広島県',
		'35'=>'山口県',
		'36'=>'徳島県',
		'37'=>'香川県',
		'38'=>'愛媛県',
		'39'=>'高知県',
		'40'=>'福岡県',
		'41'=>'佐賀県',
		'42'=>'長崎県',
		'43'=>'熊本県',
		'44'=>'大分県',
		'45'=>'宮崎県',
		'46'=>'鹿児島県',
		'47'=>'沖縄県'
		); 
//---------------------------
//懇親会
//---------------------------
$array_join_type = array(
				1=>"一般"
				,2=>"教育(日化教育会員及び小・中・高校教員)"
				,3=>"大学院生"
				,4=>"高校生、高専生、学部生"
				,5=>"招待0円"
				);
$array_join_type_money = array(
				1=>"4000"
				,2=>"2000"
				,3=>"2000"
				,4=>"0"
				,5=>"0"
				);
$array_konshinkai_sts = array(
					0=>"参加しない"
					,1=>"参加する"
				);
$array_konshinkai = array(
				1=>"一般・教育"
				,2=>"学生"
				);
$array_konshinkai_money = array(
				1=>"6000"
				,2=>"4000"
				);

//---------------------------
//支払
//---------------------------
$array_pay_sts = array(
					0=>"未支払"
					,1=>"支払済"
				);

//---------------------------
//メール
//---------------------------
$array_mail = array(
					1=>"講演申込み"
					,2=>"参加申込み"
					,3=>"予稿原稿登録"
				);

//---------------------------
//住所先
//---------------------------
$array_address = array(
					1=>"所属機関 (大学 / 勤務先)"
					,2=>"自宅"
				);

//---------------------------
//講演者の所属学協会
//---------------------------
$array_syozoku = array(
					1=>"日本化学会"
					,2=>"高分子学会"
					,3=>"日本分析化学会"
					,4=>"化学工学会"
					,5=>"有機合成化学協会"
					,6=>"電気化学会 "
					,7=>"日本材料学会"
					,8=>"繊維学会"
					,9=>"無機マテリアル学会"
					,10=>"化学教育協議会"
					,11=>"その他"
					,12=>"入会申請中"
				);
//---------------------------
//発表形式
//---------------------------
$array_happyo = array(
					1=>"招待講演"
					,2=>"依頼講演"
					,3=>"コロキウム"
///*
					,4=>"一般講演口頭"
//*/
					,5=>"一般講演ポスター（化学教育を含む全分類）"
					,6=>"化学教育口頭"
				);
//---------------------------
//一般講演口頭
//---------------------------
$array_ippanKouenkouto = array(
					1=>"環境化学"
				);
//---------------------------
//一般講演ポスターの分類
//---------------------------
$array_ippanKouenposter = array(
					1=>"A. 無機/分析/環境化学"
					,2=>"B. 物理化学"
					,3=>"C. 有機化学"
					,4=>"D. 工業化学/化学工学"
					,5=>"E. 高分子化学/繊維化学"
					,6=>"F. 材料化学"
					,7=>"G. 電気化学"
					,8=>"H. 化学教育"
				);
//---------------------------
//PC情報
//---------------------------
$array_pc = array(
					 1=>"Windows ME 以前"
					,2=>"Windows 2000"
					,3=>"Windows XP"
					,4=>"Windows Vista"
					,5=>"Windows 7"
					,6=>"Windows 8"
					,7=>"Mac OS 9.x 以前"
					,8=>"Mac OSX 10.x"
					,9=>"その他"
				);
//---------------------------
//採択
//---------------------------
$array_saitaku = array(
					 1=>"採択(A)"
					,2=>"採択(B)"
					,3=>"不採択"
					,4=>"取下げ"
				);

//---------------------------
//一般講演口頭
//---------------------------
$array_studentPoster = array(
					1=>"学生ポスター賞審査希望"
				);
//---------------------------
//メール
//---------------------------
$array_mailEdit = array(
					 0=>array(
						0=>"##SCODE##"
						,1=>"参加登録IDが反映されます。"
						),
					 1=>array(
						0=>"##DAIGAKU##"
						,1=>"所属機関 (大学 / 勤務先)が反映されます。"
						),
					 2=>array(
						0=>"##GAKUBU##"
						,1=>"所属機関 (学部 / 部署)が反映されます。"
						),
					 3=>array(
						0=>"##KENKYU##"
						,1=>"所属機関 (研究室)が反映されます。"
						),
					 4=>array(
						0=>"##ADDRESS_TYPE##"
						,1=>"連絡先が反映されます。"
						),
					 5=>array(
						0=>"##ADDRESS##"
						,1=>"住所が反映されます。"
						),
					 6=>array(
						0=>"##POST##"
						,1=>"郵便番号が反映されます。"
						),
					 7=>array(
						0=>"##TEL##"
						,1=>"電話番号が反映されます。"
						),
					 8=>array(
						0=>"##NAISEN##"
						,1=>"内線番号が反映されます。"
						),
					 9=>array(
						0=>"##FAX##"
						,1=>"FAX番号が反映されます。"
						),
					 10=>array(
						0=>"##MAIL##"
						,1=>"E-mailが反映されます。"
						),
					 11=>array(
						0=>"##JOIN_TYPE##"
						,1=>"参加種別が反映されます。"
						),
					 12=>array(
						0=>"##KOUSHINKAI##"
						,1=>"懇親会参加(参加する / 参加しない)が反映されます。"
						),
					 13=>array(
						0=>"##TOTAL##"
						,1=>"参加合計金額が反映されます。"
						),
					 14=>array(
						0=>"##SANKA_MONEY##"
						,1=>"参加種別金額が反映されます。"
						),
					 15=>array(
						0=>"##KONSHINKAIMONEY##"
						,1=>"懇親会額が反映されます。"
						),
					16=>array(
						0=>"##SENMON##"
						,1=>"専門分野が反映されます。"
						),
					17=>array(
						0=>"##SENMON_SONOTA##"
						,1=>"専門分野（その他）が反映されます。"
						),
					18=>array(
						0=>"##SYOZOKU_SANKA##"
						,1=>"参加者の所属学協会が反映されます。"
						),
					19=>array(
						0=>"##SYOZOKU_OTHER##"
						,1=>"参加者の所属学協会(その他内容)が反映されます。"
						),

				);

$array_mailEdit2 = array(
					 0=>array(
						0=>"##PASSWORD##"
						,1=>"登録パスワードが反映されます。"
						),
					 1=>array(
						0=>"##ECODE##"
						,1=>"講演登録IDが反映されます。"
						),
					 2=>array(
						0=>"##NAME##"
						,1=>"登録者名が反映されます。"
						),
					 3=>array(
						0=>"##KANA##"
						,1=>"登録者名（カナ）が反映されます。"
						),
					 4=>array(
						0=>"##SYOZOKU##"
						,1=>"講演者の所属学協会が反映されます。"
						),
					 5=>array(
						0=>"##SYOZOKU_OTHER##"
						,1=>"講演者の所属学協会(その他内容)が反映されます。"
						),
					 6=>array(
						0=>"##SYOZOKU_NYUKAI##"
						,1=>"講演者の所属学協会(入会申請中内容)が反映されます。"
						),
					 7=>array(
						0=>"##HAPPYO##"
						,1=>"発表形式が反映されます。"
						),
					 8=>array(
						0=>"##IPPAN##"
						,1=>"一般講演ポスターの分類が反映されます。"
						),
					 9=>array(
						0=>"##IPPAN_SNT##"
						,1=>"学生ポスター賞審査希望の分類が反映されます。"
						),
					 10=>array(
						0=>"##ENDAI##"
						,1=>"演題名が反映されます。"
						),
					 11=>array(
						0=>"##TYOSYA_S_CNT##"
						,1=>"著者の所属機関の総数が反映されます。"
						),
					 12=>array(
						0=>"##TYOSYA_S##"
						,1=>"著者の所属機関が反映されます。"
						),
					 13=>array(
						0=>"##TYOSYA##"
						,1=>"著者名が反映されます。"
						),
					 14=>array(
						0=>"##TYOSYA_CEN##"
						,1=>"講演者チェックが反映されます。"
						),
					 15=>array(
						0=>"##PC##"
						,1=>"PC情報が反映されます。"
						),
					 16=>array(
						0=>"##OTHEROS##"
						,1=>"その他OSが反映されます。"
						),
					 17=>array(
						0=>"##EBIKOU##"
						,1=>"備考が反映されます。"
						),
					 18=>array(
						0=>"##TYOSYA_CNT##"
						,1=>"著者の総数が反映されます。"
						),
					 19=>array(
						0=>"##PUBLICATION##"
						,1=>"講演番号が反映されます。"
						),
					20=>array(
						0=>"##IPPAN_KOTO##"
						,1=>"一般講演口頭の分類が反映されます。"
						),
					21=>array(
						0=>"##SYOUTAI##"
						,1=>"招待の分類が反映されます。"
						),
					22=>array(
						0=>"##KOROKIUMU##"
						,1=>"コロキウム分類が反映されます。"
						),
					23=>array(
						0=>"##TEACHER##"
						,1=>"受賞連絡先（指導教員）が反映されます。"
						),
					
				);

/*******************
 * 動画会場
 */
$array_movie = array(
		1=>"A会場",
		2=>"B会場",
		3=>"C会場",
		4=>"D会場",
		5=>"E会場",
		6=>"F会場",
		7=>"G会場",
		8=>"H会場",
		99=>"P会場"

);
/*******************
 * 動画設定日付
 */
$array_movie_date['2020-09-26'] = "9月26日"; 
$array_movie_date['2020-09-27'] = "9月27日"; 

/*******************
 * 審査
 */
$array_judge[1] = "A";
$array_judge[2] = "B";
$array_judge[3] = "C";
$array_judge[4] = "D";
$array_judge[5] = "E";


?>